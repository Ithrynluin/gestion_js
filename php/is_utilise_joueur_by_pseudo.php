<?php
	$json = file_get_contents(dirname(__FILE__) . '/../json/joueur.json');
	$input_arrays = json_decode($json, true);
	$joueur = 0;
	foreach ($input_arrays as $key => $value) {
		if($value["pseudo"] == $_GET["pseudo"]){
			$joueur = $value;
		}
	}
	

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