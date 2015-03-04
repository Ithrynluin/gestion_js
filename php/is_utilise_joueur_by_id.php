<?php
	$json = file_get_contents(dirname(__FILE__) . '/../json/utilise.json');
	$input_arrays = json_decode($json, true);

	$joueur = 0;
	foreach ($input_arrays as $key => $value) {
		if($value["idJoueur"] == $_GET["idJoueur"]){
			$joueur = $value;
		}
	}

	echo json_encode($joueur);
?>
