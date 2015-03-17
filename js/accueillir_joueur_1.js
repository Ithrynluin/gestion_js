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
				var utilmachine = data[0]["nbUtilisation"];
				var idMachine = data[0]["idMachine"];
				for (j in data){
					if (utilmachine > data[j]["nbUtilisation"]) {
						idMachine = data[j]["idMachine"];
						utilmachine = data[j]["nbUtilisation"];					
					}
				}
				$("#machine").text(idMachine);
				$("#machine").val(idMachine);
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
							var utilmachine = data[0]["nbUtilisation"];
							var idMachine = data[0]["idMachine"];
							for (j in data){
								if (utilmachine > data[j]["nbUtilisation"]) {
									idMachine = data[j]["idMachine"];
									utilmachine = data[j]["nbUtilisation"];					
								}
							}
							$("#machine").text(idMachine);
							$("#machine").val(idMachine);
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
			$("#machine").after("<span class='text-danger'>Aucune machine disponible</span>");
			$("#machine").remove();
			$("#zone").after("<span class='text-danger'>Aucune zone disponible</span>");
			$("#zone").remove();
		}
	});


	

	$("#pseudo").on("change",function(){
		var pseudo = this.value;

		$.ajax({
			url: 'php/is_utilise_joueur_by_pseudo.php',
			type: 'GET',
			dataType: 'json',
			data: "pseudo="+pseudo
		})
		.done(function(data) {
			if(data != 0){
				utilise = 1;
				$("input#pseudo").after("<span class='text-danger' id='erreur_utilise'>Erreur le joueur utilise déjà une machine</span>");

				$("#credits").css("display", "none");
				$("#valider").attr({"disabled":"disabled"});

			}else{
				$('#erreur_utilise').remove();

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
			}
		})
		.fail(function(err){
			console.log(err);
		});
		
	});
});