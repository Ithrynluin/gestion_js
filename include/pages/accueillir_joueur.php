<h1>Accueillir Joueur</h1>
<?php
if(empty($_POST["pseudo"]) || empty($_POST["zone"])){  ?>
	<form method="post" action="accueillir_joueur.php">
		<p>
			<label for="pseudo">Pseudo : </label>
			<input type="text" id="pseudo" name="pseudo"/>
		</p>
		<p>
			<label for="zone">Zone : </label>
			<select id="zone" name="zone">
				<option value="1">Gamers</option>
				<option value="2">Mélomane</option>
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
			Zone : <?php echo $_POST["zone"];?>
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