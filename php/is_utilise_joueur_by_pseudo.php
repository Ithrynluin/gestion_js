<?php
	// Permet de savoir si un joueur utilise une machine
	// Paramètres (GET) :
	// 		- pseudo : pseudo du joueur
	// Type de données attendu : JSON
	// Type de données retourné : JSON (objet joueur) si
	//		il utilise une machine, 0 sinon
	require dirname(__FILE__).'/util.php';

	$joueur = get_id_joueur_by_pseudo($_GET['pseudo']);
	

	if($joueur != 0){
		$json = file_get_contents(dirname(__FILE__) . '/../json/utilise.json');
		$input_arrays = json_decode($json, true);

		$joueurUse = 0;
		foreach ($input_arrays as $key => $value) {
			if($value["idJoueur"] == $joueur['idJoueur']){
				$joueurUse = $value;
			}
		}

		echo json_encode($joueurUse);
	}else{
		echo 0;
	}

?>