$(document).ready(function() {
	$("#pseudo").on("change",function(){
		pseudo = this.value;
		$.ajax({
			url: 'php/get_joueur_by_pseudo.php',
			type: 'GET',
			dataType: 'json',
			cache: false,
			async: true,
			data: "pseudo="+pseudo
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

function lire_pseudo(text){
	alert("ok");
}