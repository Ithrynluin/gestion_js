$(document).ready(function() {

	$("#valider").attr({"disabled":"disabled"});
	$("#login").on("change", function(){
		var login = this.value;
		$.ajax({
			url: 'php/get_compte_by_login.php',
			type: 'GET',
			dataType: 'json',
			data: "login="+login,
			success:function(data) {
				if(data.length != 0){
				$("#logPris").text("Le login est déjà pris.");
				}
				else{
					$("#valider").removeAttr("disabled");
				}
			}
		});	
	});
});