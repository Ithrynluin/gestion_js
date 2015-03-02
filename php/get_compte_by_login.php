<?php
	$json = file_get_contents(dirname(__FILE__) . '/../json/compte.json');
	$input_arrays = json_decode($json, true);

	$compte = [];
	foreach ($input_arrays as $key => $value) {
		if($value["login"] == $_GET["login"]){
			$compte = $value;
		}
	}
	echo json_encode($compte);
?>