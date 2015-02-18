<?php
	$json = file_get_contents(dirname(__FILE__) . '/../json/joueur.json');
	$input_arrays = json_decode($json, true);

	$joueur = array();
	foreach ($input_arrays as $key => $value) {
		if($value["pseudo"] == $_GET["pseudo"]){
			$joueur = $value;
		}
	}

	if(!empty($joueur)){
		$json = file_get_contents(dirname(__FILE__) . '/../json/compte.json');
		$input_arrays = json_decode($json, true);

		$compte = [];
		foreach ($input_arrays as $key => $value) {
			if($value["idCompte"] == $joueur["idCompte"]){
				$compte = $value;
			}
		}
		if(!empty($compte)){
			echo $compte["nbCredit"];
		}else{
			echo -1;
		}
	}else{
		echo -1;
	}
?>