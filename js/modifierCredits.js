$(document).ready(function() {
	var compteAmodifier;

	$("#formCredit").on("submit", function(){
		var montant = $("#montant").val().trim();
		
		if(compteAmodifier && montant){	
			var objet = {
				id: compteAmodifier.idCompte,
				montant: montant
			};

			$.ajax({
				url: 'php/crediter.php',
				type: 'GET',
				data: objet,
				success:function(data){
					data = data.trim();
					if(!data){
						$("#credits span").text( ""+ (parseInt($("#credits span").text())+parseInt(montant) ) );
						$("#erreur").html("");
					} else {
						$("#erreur").html(data);
					}
				},
				error:function(data){
					$("#erreur").html("Erreur avec la requête Ajax vers php/crediter.php");
				}
			})
		} else if(!compteAmodifier){
			$("#erreur").html("Veuillez saisir un login valide.");
		} else {
			$("#erreur").html("Veuillez saisir un montant à créditer.");
		}
		return false;
	});

	$("#formDebit").on("submit", function(){
		var montant = $("#montant").val().trim();
		
		if(compteAmodifier && montant){	
			var objet = {
				id: compteAmodifier.idCompte,
				montant: montant
			};

			$.ajax({
				url: 'php/debiter.php',
				type: 'GET',
				data: objet,
				success:function(data){
					data = data.trim();
					if(!data){
						$("#credits span").text( ""+ (parseInt($("#credits span").text())-parseInt(montant) ) );
						$("#erreur").html("");
					} else {
						$("#erreur").html(data);
					}
				},
				error:function(data){
					$("#erreur").html("Erreur avec la requête Ajax vers php/crediter.php");
				}
			})
		} else if(!compteAmodifier){
			$("#erreur").html("Veuillez saisir un login valide.");
		} else {
			$("#erreur").html("Veuillez saisir un montant à créditer.");
		}
		return false;
	});
	
	$("#login").on("change",function(){
		login = this.value.trim();
		$.ajax({
			url: 'php/get_compte_by_login.php',
			type: 'GET',
			dataType: 'json',
			cache: false,
			async: true,
			data: "login="+login,
			success:function(data){
				idCompte = -1;
				if(data){
					idCompte = data["idCompte"]
				}
				if(idCompte != -1){
					compteAmodifier = data;
					$.ajax({
						url: 'json/compte.json',
						type: 'GET',
						dataType: 'json',
						cache: false,
						async: true
					})
					.done(function(data) {
						var credit = -1
						for(c in data){
							if(data[c]["idCompte"] == idCompte){
								credit = data[c]["nbCredit"]
							}
						}
						if(credit != -1){
							//console.log(credit)
							$("#credits span").text(credit);
						}
					});
				}
				
			},
			error:function(data){
				compteAmodifier = "";
				$("#credits span").text("");
			}
		})
	});
});

