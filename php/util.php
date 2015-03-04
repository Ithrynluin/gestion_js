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
?>