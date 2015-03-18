<script src='js/modifierCredits.js'></script>
<h1>Débiter un compte</h1>
<div id='credit'>
	<form id="formDebit" action="#" method="POST">
		<label>Login du compte</label>
		<input id ="login" name="login" type="text">
		<br>
		<p id="credits"> Crédits : <span></span></p>
		<br>
		<label>Montant</label>
		<input id="montant" name="montant" type="text">
		<br>
		<input type="submit" value="Créditer">
		<p class="text-danger" id="erreur"></p>
	</form>
</div>
