	<h1>Créer un pseudo</h1>
<?php
	if(empty($_POST["login"])){
?>

	<div id="pseudo">
		<form action="#" method="POST">
			<label for="login">Login du compte</label>
			<input id="login" name="login" type="text" required/>
			<br/>
			<label for="password">Mot de passe</label>
			<input id="password" name="password" type="password" required/>
			<br/>
			<label for="pseudo">Pseudo à ajouter</label>
			<input id="pseudo" name="pseudo" type="text" required/>
			<br/>
			<input type="submit" value="Ajouter"/>
		</form>
	</div>
<?php
	} else {
		require("./php/util.php");

		// Vérifier que le pseudo n'existe pas encore
		$joueur = get_id_joueur_by_pseudo($_POST["pseudo"]);

		if($joueur != 0){
?>
	<p class="text-danger">Ce pseudo existe déjà.</p>
<?php
		} else {
			// Vérifier que la combinaison login/mdp est ok
			$compte = get_compte_by_login($_POST["login"]);

			if($compte == 0){
?>
	<p class="text-danger">Ce login n'existe pas.</p>
<?php			
			} else if($compte["password"] != md5($_POST["password"])){
?>
	<p class="text-danger">Le mot de passe est incorrect.</p>
<?php		
			} else {
				// Ajouter le joueur dans joueur.php
				addJoueur($_POST["pseudo"], $compte["idCompte"]);
?>
	<p class="text-success">Le joueur a bien été créé.</p>
<?php	
			}
			
		}
	
?>
	<a href="index.php?page=9">Retour</a>
<?php
	}
?>