<?php
	$json = file_get_contents(dirname(__FILE__) . '/../json/joueur.json');
	$input_arrays = json_decode($json, true);

	$joueur = array();
	foreach ($input_arrays as $key => $value) {
		if($value["pseudo"] == $_GET["pseudo"]){
			$joueur = $value;
		}
	}
	if(empty($joueur)){
		
	}
	echo json_encode($joueur);
?>