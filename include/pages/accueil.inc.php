<h1>Accueil</h1>

<script type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript">
	$(function(){
		obj = {login:"testt", password:md5("lapin")};
		$.ajax({
			data:obj,
			type:'GET',
			url:'php/checkPassword.php',
			success:function(data){
				// Affichage si tout se passe bien
				console.log(data);
			},
			error:function(data){
				console.log("Erreur update");
			}
		});
		//console.log(md5("lapin"));
	});


</script>