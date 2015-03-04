<?php

	$machine = file_get_contents("php://input");
	var_dump($machine);
	$machine = json_decode($machine, true);
	var_dump($machine);

	$jsonString = file_get_contents(dirname(__FILE__).'/../json/machine.json');
	$data = json_decode($jsonString);

	foreach ($data as $key => $objet) {
		if ($objet -> idMachine == $machine["idMachine"]) {
			$data[$key] -> idEtat = $machine["idEtat"];
			break;
		}
	}

	$new = json_encode($data);
	file_put_contents(dirname(__FILE__).'/../json/machine.json', $new);
?>