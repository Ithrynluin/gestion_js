<?php
if(isset($_POST['login']) && isset($_POST['montant'])){
	$jsonString = file_get_contents(dirname(__FILE__).'/../../json/compte.json');
	$data = json_decode($jsonString);

	foreach ($data as $key => $value) {
		if($value->login == $_POST['login']){
			$id = $key;
		}
	}
	if($pseudo == null){
		echo 'Ce pseudo n\'existe pas';
	}
	else{
		$credits = $data[$id]->nbCredit;
		$sup = intval($_POST['montant']);
		
		if($credits > $sup){
			$data[$id]->nbCredit = $credits - $sup;
			$newJsonString = json_encode($data);
			file_put_contents(dirname(__FILE__) . '/../../json/compte.json', $newJsonString);
		}
		else{
			echo 'Vous n\'avez pas assez de crédits.';
		}
	}
	
	
}
else{
?>
<script src='js/modifierCredits.js'></script>
<title>Crédits</title>
<div id='credit'>
	<form action="#" method="POST">
		<label>Login du compte</label>
		<input id ="login" name="login" type="text">
		<br>
		<p id="credits"> Crédits : <span></span></p>
		<br>
		<label>Montant</label>
		<input name="montant" type="text">
		<br>
		<input type="submit" value="Débiter">
	</form>
</div>
<?php
}
?>