<?php
	$json = file_get_contents(dirname(__FILE__) . '/../json/machine.json');
	$input_arrays = json_decode($json, true);

	$machines = array();
	foreach ($input_arrays as $key => $value) {
		if($value["idZone"] == $_GET["idZone"]){
			if($value["idEtat"] == 1){
				$machines[] = $value;
			}
		}
	}

	echo json_encode($machines);
?>