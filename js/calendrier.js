$(document).ready(function() {
	// Calendar
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		defaultDate: '2015-02-12',
		selectable: true,
		selectHelper: true,
		select: function(start, end) {
			var title = prompt('Titre de l\'événement:');
			var eventData;
			if (title) {
				eventData = {
					title: title,
					start: start,
					end: end
				};
				// Ajout de l'événement dans le fichier du serveur
				eventData.start.format("YYYY-MM-DD");
				eventData.end.format("YYYY-MM-DD");
				console.log(eventData);
				$.ajax({
					data:eventData,
					dataType:'json',
					type:'POST',
					url:'php/addEvent.php',
					success:function(data){
						// Affichage si tout se passe bien
						$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
					},
					error:function(data){
						alert("error");
					}
				});
				console.log("Fin ajax");
				
			}
			$('#calendar').fullCalendar('unselect');
		},
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		events: {url:"json/events.json"}
	});
	// Fin calendar

});