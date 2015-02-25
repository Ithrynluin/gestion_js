$(document).ready(function() {

	var eventsArray;
	var eventModifie;

	function updateData(){
		eventsArray = $('#calendar').fullCalendar( 'clientEvents');

		for (var i = 0; i < eventsArray.length; i++) {
			delete eventsArray[i].source;
			//delete eventsArray[i]._id;
		};

		seen = []
		var dataToBeSent = JSON.stringify(eventsArray, function(key, val) {
		   if (val != null && typeof val == "object") {
				if (seen.indexOf(val) >= 0)
					return
				seen.push(val)
			}
			return val
		})


		$.ajax({
			data:dataToBeSent,
			type:'POST',
			url:'php/updateEvents.php',
			success:function(data){
				// Affichage si tout se passe bien
				console.log("Update ok");
			},
			error:function(data){
				console.log("Erreur update");
			}
		});
	}

	// Calendar
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		defaultDate: '2015-02-12',
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		events: {
			url:"json/events.json"
		},
		eventClick: function(calEvent, jsEvent, view) {
			if(!eventModifie){
				eventModifie = calEvent;
				$(this).replaceWith($('#modif'));
				$("#modif").css("display", "block");
				$("#modif").parent().parent().parent().parent().parent().parent().css("overflow", "visible");

				$("#titre").val(calEvent.title);

			}
				
			return false;
		},
		eventDrop: function(event, delta, revertFunc) {
			updateData();
		},
		eventResize: function(event, delta, revertFunc) {
			updateData();
		},
		selectable: true,
		selectHelper: true,
		select: function(start, end) {
			var title = prompt('Titre de l\'événement:');

			eventData = {
				title: title,
				start: start,
				end: end
			};

			if (title) {
				$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				//$('#calendar').fullCalendar('unselect');
				updateData();
			}
		}
	});
	// Fin calendar

	$("#modif").css("display", "none");

	$("#titre").on("focusout", function(){
		eventModifie.title = $("#titre").val();
		$("body").append($('#modif'));
		$("#modif").css("display", "none");
		$('#calendar').fullCalendar('updateEvent', eventModifie);
		updateData();
		eventModifie = null;
	});

	$("#supprimer").on("click", function(){
		if(eventModifie){
			$("body").append($('#modif'));
			$("#modif").css("display", "none");
			$('#calendar').fullCalendar('removeEvents', eventModifie._id);
			updateData();
			eventModifie = null;	
		}
	});

});