$(document).ready(function() {
	$("#liste").on("change",function(){
		machines=[];
		var zone = $("select#liste").val();
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
					machines[cmpt] = data[j]["idMachine"];
					cmpt ++;
				}
			} 
			//console.log(machines);
			var node;
			cmpt=1;
			for (machine in machines){
				if (cmpt % 5 == 0) {
					node = document.createElement("div"); 
					node.className = 'table';             
					node.innerHTML = 'table 1';   
					$("select#liste").parent().append(node);
				};
				node = document.createElement("span"); 
				node.className = 'machine';             
				node.innerHTML = machine;   
				$(".table").parent().append(node);
				cmpt++;
				console.log(machine);
			}
		});
	});
});