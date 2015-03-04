<?php
require_once(dirname(__FILE__).'/util.php');

function set_joueur_by_pseudo_utilise_machine($pseudo, $idMachine){
	$joueur = get_id_joueur_by_pseudo($pseudo);

	if($joueur == 0){
		return 0;
	}

	$json = file_get_contents(dirname(__FILE__) . '/../json/utilise.json');
	$utilise = json_decode($json, true);
	$size = count($utilise);

	$utilise[$size] -> idJoueur=$joueur['idJoueur'];
	$utilise[$size] -> idMachine=$idMachine;

	$jsonArray = json_encode($utilise);

	// Stockage des données dans un fichier
	file_put_contents(dirname(__FILE__) . '/../json/utilise.json', $jsonArray);
	return 1;
}
?>
