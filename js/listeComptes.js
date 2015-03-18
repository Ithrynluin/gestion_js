$(function(){
	$.ajax({
		url:"php/getAllComptes.php",
		type:"GET",
		success:function(data){
			data = JSON.parse(data);

			for (var i = 0; i < data.length; i++) {
				$("#tableComptes").append(
					$("<tr>").append("<td>"+data[i].idCompte+"</td>")
							.append("<td>"+data[i].nom+"</td>")
							.append("<td>"+data[i].prenom+"</td>")
							.append("<td>"+data[i].mail+"</td>")
							.append("<td>"+data[i].login+"</td>")
							.append("<td>"+data[i].nbCredit+"</td>")
				);
			};
		},
		error:function(data){
			$("#erreur").text("Erreur de requête Ajax");
		}
	});
});