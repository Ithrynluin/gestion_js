<h1>Accueillir Joueur</h1>
<?php
if(empty($POST["pseudo"]) || empty($POST["zone"])){  ?>
	<form method="post" action="accueillir_joueur.php">
		<p>
			<label for="pseudo">Pseudo : </label>
			<input type="text" id="pseudo" name="pseudo"/>
		</p>
		<p>
			<label for="zone">Zone : </label>
			<select id="zone" name="zone">
			</select>
		</p>
		<p>
			<input type="submit" valeu="Valider">
		</p>
	</form>	
<?php
}else{ ?>
	<div id="confirmation">
		<p>
			Zone : 
		</p>
		<p>
			Machine :
		</p>
		<p>
			<a href="accueillir_joueur.php">Accueillir un nouveau joueur</a>
		</p>
	</div>
<?php
}
?>