<?php
	function __autoload($nomClasse){
		$repClasses = 'classes/';
		require $repClasses.$nomClasse.'.class.php';
	}
?>