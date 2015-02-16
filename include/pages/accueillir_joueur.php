<h1>Accueillir Joueur</h1>
<?php
if(empty($_POST["pseudo"]) || empty($_POST["zone"])){  ?>
	<script src='js/accueillir_joueur_1.js'></script>
	<form method="post" action="index.php?page=3">
		<p>
			<label for="pseudo">Pseudo : </label>
			<input type="text" id="pseudo" name="pseudo"/>
		</p>
		<p id="credits"> Credits : <span></span></p>
		<p>
			<label for="zone">Zone : </label>
			<select id="zone" name="zone">
				<option value="1">Gamers</option>
				<option value="2">Mélomanes</option>
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
			<a href="index.php?page=3">Accueillir un nouveau joueur</a>
		</p>
	</div>
<?php
}
?>