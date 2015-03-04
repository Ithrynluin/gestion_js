$(document).ready(function() {

	$("#credits").css("display", "none");
	$("#valider").attr({"disabled":"disabled"});

	$("#zone").on("change", function(){
		var idZone = this.value;
		console.log(idZone);
		$.ajax({
			url: 'php/get_machines_libres_by_zone.php',
			type: 'GET',
			dataType: 'json',
			data: "idZone="+idZone
		})
		.done(function(data) {
			console.log(data);
			if(data.length != 0){
				$("#machine").text(data[0]["idMachine"]);
				$("#machine").val(data[0]["idMachine"]);
			}else{
				$("#machine").text("Aucune machine disponible");
				$("#machine").val("-1");
			}
		});
	});

	$.ajax({
		url: 'php/get_zone_libre.php',
		type: 'GET',
		dataType: 'json'
	})
	.done(function(data) {
		var ok = false;
		for (zone in data){
			if(data[zone]["nomZone"] != "Barrés"){
				$("#zone").append('<option value='+data[zone]["idZone"]+">"+data[zone]["nomZone"]+"</option>");
				
				//On ceherche les machines libres de la 1 zone.
				if(!ok){
					var idZone = data[zone]["idZone"];
					$.ajax({
						url: 'php/get_machines_libres_by_zone.php',
						type: 'GET',
						dataType: 'json',
						data: "idZone="+idZone
					})
					.done(function(data) {
						if(data.length != 0){
							$("#machine").text(data[0]["idMachine"]);
							$("#machine").val(data[0]["idMachine"])
						}else{
							$("#machine").text("Aucune machine disponible");
							$("#machine").val("-1");
						}
					});			
					ok = true;
				}
			}
		}
		//Si aucune zone libre.
		if(!ok){
			$("#machine span").text("Aucune machine disponible");
		}
	});


	

	$("#pseudo").on("change",function(){
		var pseudo = this.value;
		$.ajax({
			url: 'php/get_credit_by_pseudo.php',
			type: 'GET',
			dataType: 'json',
			cache: false,
			async: true,
			data: "pseudo="+pseudo
		})
		.done(function(data) {
			var credit = -1
			if(data != []){
				credit = data;
			}
			if(credit != -1){
				$("#credits").css("display", "block");
				$("#valider").removeAttr("disabled");
				$("#credits span").text(credit);
			}else{
				$("#credits").css("display", "none");
				$("#valider").attr({"disabled":"disabled"});
			}
		});
	});
});