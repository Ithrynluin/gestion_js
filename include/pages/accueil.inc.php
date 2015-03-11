<h1>Accueil</h1>

<script type="text/javascript">
	$(function(){
		obj = {idZone:2};
		$.ajax({
			data:obj,
			type:'GET',
			url:'php/getChiffreAffaires.php',
			success:function(data){
				// Affichage si tout se passe bien
				console.log(data);
			},
			error:function(data){
				console.log("Erreur update");
			}
		});
	});
</script>