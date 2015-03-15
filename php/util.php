<?php
function get_id_joueur_by_pseudo($pseudo){
	$json = file_get_contents(dirname(__FILE__) . '/../json/joueur.json');
	$input_arrays = json_decode($json, true);
	$joueur = 0;
	foreach ($input_arrays as $key => $value) {
		if($value["pseudo"] == $pseudo){
			$joueur = $value;
		}
	}
	return $joueur;
}

function get_id_joueur_by_id_machine($idMachine){
	$json = file_get_contents(dirname(__FILE__) . '/../json/utilise.json');
	$input_arrays = json_decode($json, true);
	$joueur = 0;
	foreach ($input_arrays as $key => $value) {
		if($value["idMachine"] == $idMachine){
			$joueur = $value['idJoueur'];
		}
	}
	return $joueur;
}

function get_id_compte_by_pseudo_joueur($pseudo){
	$json = file_get_contents(dirname(__FILE__) . '/../json/joueur.json');
	$input_arrays = json_decode($json, true);
	$compte = 0;
	foreach ($input_arrays as $key => $value) {
		if($value["pseudo"] == $pseudo){
			$compte = $value["idCompte"];
		}
	}
	return $compte;
}
?>