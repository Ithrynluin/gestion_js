$(document).ready(function() {
	$("#liste").on("change",function(){
		var zone = $("select#liste").val();
		$( "span" ).remove();
		$(".table").remove();
		$.ajax({
			url: 'json/machine.json',
			type: 'GET',
			dataType: 'json',
			cache: false,
			async: true
		})
		.done(function(data) {
			var machines=[];
			var cmpt = 0;
			for (j in data){
				if(data[j]["idZone"] == zone){
					machines[cmpt] = data[j];
					cmpt ++;
				}
			}
			var node;
			var numtable = 0;
			cmpt=5;
			for (machine in machines){
				if (cmpt % 5 == 0) {
					node = document.createElement("div"); 
					node.className = 'table';             
					node.innerHTML = 'table';
					$("#salle").append(node);
					numtable ++;
				};
				if(machines[machine]["idEtat"] == 3)
					$(".table:last-child").append("<span id='machine' class='machineHs'>"+machines[machine]["idMachine"]+"</span>");
				else
					if (machines[machine]["idEtat"] == 2)
						$(".table:last-child").append("<span id='machine' class='machineOccupee'>"+machines[machine]["idMachine"]+"</span>");
					else
						$(".table:last-child").append("<span id='machine' class='machineLibre'>"+machines[machine]["idMachine"]+"</span>");
				cmpt++;
			}
		});
	});
});
$("#machine").click(function(){
		console.log(this);
	});