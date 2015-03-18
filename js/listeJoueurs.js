$(function(){
	$.ajax({
		url:"php/getAllJoueurs.php",
		type:"GET",
		success:function(data){
			data = JSON.parse(data);
			for (var i = 0; i < data.length; i++) {
				$("#tableJoueurs").append(
					$("<tr>").append("<td>"+data[i].idJoueur+"</td>")
							.append("<td>"+data[i].idCompte+"</td>")
							.append("<td>"+data[i].pseudo+"</td>")
				);
			};
		},
		error:function(data){
			$("#erreur").text("Erreur de requête Ajax");
		}
	});
});