$(document).ready(function() {

	$("#valider").attr({"disabled":"disabled"});
	$("#login").on("change", function(){
		var login = $("#login").val().trim();
		$.ajax({
			url: 'php/get_compte_by_login.php',
			type: 'GET',
			data: {login:login},
			success:function(data) {
				if(data.trim)
					data = data.trim()

				if(data){
					$("#logPris").html("Le login est déjà pris.");
					$("#valider").attr("disabled", "disabled");
				}
				else{
					$("#valider").removeAttr("disabled");
					$("#logPris").html("");
				}
			},
			error:function(a, b, c){
				console.log("Erreur "+a+" "+b+" "+c);
				console.log(a);
			}
		});	
	});
});