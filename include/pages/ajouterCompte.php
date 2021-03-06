<h1>Ajouter un compte</h1>
	<?php
	if(empty($_POST['login']) || empty($_POST['mail']) || empty($_POST['credit']) || empty($_POST['mdp'])){
	?>
		<script src='js/ajout_compte.js'></script>
		<div id="compte">
			<form action="#" method="POST">	
				<label>Nom</label>
				<input id="nom" name="nom" type="text">
				<br>
				<label>Prénom</label>
				<input id="prenom" name="prenom" type="text">
				<br>
				<label>Login</label>
				<input id="login" name="login" type="text">
				<br>
				<p id="logPris" class="text-danger"></p>
				<br>
				<label>E-Mail</label>
				<input id="mail" name="mail" type="email">
				<br>
				<label>Nombre de crédits</label>
				<input name="credit" type="text">
				<br>
				<label>Mot de Passe</label>
				<input id="mdp" name="mdp" type="password">
				<br>
				<input type="submit" id="valider" value="Ajouter">
			</form>	
		</div>
	<?php
		
	}
	else{
		$jsonString = file_get_contents('./json/compte.json');
		$data = json_decode($jsonString);


		foreach ($data as $key => $value) {
			if($value->login==$_POST['login']){
				$echec = True;
			}
		}

		if(isset($echec)){
?>
		<p class="text-danger">Echec de la création, le login est déjà utilisé.</p>
<?php
		} else{
			$rang = sizeof($data);
			$data[$rang] = [];
			$data[$rang]['idCompte'] = $rang+1;
			$data[$rang]['nbCredit'] = intval($_POST['credit']);
			$data[$rang]['mail'] = $_POST['mail'];
			$data[$rang]['login'] = $_POST['login'];
			$data[$rang]['password'] = md5($_POST['mdp']);
			$data[$rang]['nom'] = $_POST['nom'];
			$data[$rang]['prenom'] = $_POST['prenom'];

			$newJsonString = json_encode($data);
			file_put_contents('./json/compte.json', $newJsonString);

			echo '<p class="text-success">Le compte de ';
			echo $_POST['prenom'];
			echo ' ';
			echo $_POST['nom'];
			echo ' a bien été ajouté.</p>';
			
		}
?>
		<a href="index.php?page=4">Retour</a>
<?php
	}
	?>