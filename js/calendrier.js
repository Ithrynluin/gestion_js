$(document).ready(function() {
	function sendData(title, start, end, render){
		var eventData;
		eventData = {
			title: title,
			start: start,
			end: end
		};
		// Ajout de l'événement dans le fichier du serveur
		var str_data = JSON.stringify(eventData);
		$.ajax({
			data:str_data,
			//dataType:'json',
			type:'POST',
			url:'php/addEvent.php',
			success:function(data){
				// Affichage si tout se passe bien
				if(render)
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
			},
			error:function(data){
				console.log("Erreur");
			}
		});
		console.log("Fin ajax");
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
		events: {url:"json/patate.json"},
		eventDrop: function(event, delta, revertFunc) {
			sendData(event.title, event.start, event.end, false);
		},
		eventResize: function(event, delta, revertFunc) {
			sendData(event.title, event.start, event.end, false);
		},
		selectable: true,
		selectHelper: true,
		select: function(start, end) {
			var title = prompt('Titre de l\'événement:');
			
			if (title) {
				sendData(title, start, end, true);
			}
			$('#calendar').fullCalendar('unselect');
		}
	});
	// Fin calendar

});