<?php
	// Vérification de la combinaison login/mot de passe
	// Paramètres (GET) :
	// 		- login : le pseudo du joueur
	//		- password : son mot de passe
	// Type de données attendu : JSON
	// Type de données retourné : 
	//		- un objet joueur si le mot de passe est bon
	//		- Rien si un problème est rencontré


	$json = file_get_contents(dirname(__FILE__) . '/../json/compte.json');
	$comptes = json_decode($json, true);

	$json = file_get_contents(dirname(__FILE__) . '/../json/joueur.json');
	$joueurs = json_decode($json, true);

	// Récupération de l'identifiant du compte
	foreach ($joueurs as $key => $value) {
		if($value["pseudo"] == $_GET["login"]){
			$idCompte = $value["idCompte"];
			$idJoueur = $value["idJoueur"];
			$joueur = $value;
		}
	}

	// Récupération du mot de passe
	if( !empty($idCompte) ){
		foreach ($comptes as $key => $value) {
			if($value["idCompte"] == $idCompte && $value["password"]==md5($_GET["password"])){
				echo $joueur;
			}
		}
	}

?>