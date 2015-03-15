<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
	case 1:
		include_once("pages/gererMachines.inc.php");
	    break;
	case 2:
		include_once('pages/calendrier.inc.php');
	    break;    
	case 3:
		include_once('pages/accueillir_joueur.php');
		break;
	case 4:
		include_once('pages/ajouterCompte.php');
		break;
	case 5:
		include_once('pages/crediter.php');
		break;
	case 6:
		include_once('pages/debiter.php');
		break;
	case 7:
		include_once('pages/liberer_machine.php');
		break;
	case 8:
		include_once('pages/tests.php');
		break;
	default : 	include_once('pages/accueil.inc.php');
}
	
?>
</div>
