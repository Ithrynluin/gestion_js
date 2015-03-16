$(document).ready(function() {
	$("form").on("submit", function(){
		var login = $("#login").val();
		var montant = $("#montant").val();
		console.log(login);
		console.log(montant);
	
		$.ajax({
				url: 'php/crediter.php',
				type: 'GET',
				/*dataType: 'json',*/
				data: {login: login, montant: montant},
				success:function(data){
					console.log("Compte crédité")
				},
				error:function(data){
					console.log("Erreur")
				}
			})
		return false;
	});
	
	$("#login").on("change",function(){
		login = this.value;
		$.ajax({
			url: 'php/get_compte_by_login.php',
			type: 'GET',
			dataType: 'json',
			cache: false,
			async: true,
			data: "login="+login
		})
		.done(function(data) {
			idCompte = -1
			if(data != {}){
				idCompte = data["idCompte"]
			}
			if(idCompte != -1){
				$.ajax({
					url: 'json/compte.json',
					type: 'GET',
					dataType: 'json',
					cache: false,
					async: true
				})
				.done(function(data) {
					console.log("done credit");
					var credit = -1
					for(c in data){
						if(data[c]["idCompte"] == idCompte){
							credit = data[c]["nbCredit"]
						}
					}
					if(credit != -1){
						console.log(credit)
						$("#credits span").text(credit);
					}
				});
			}
		});
	});
});

