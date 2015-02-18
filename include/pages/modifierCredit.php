<html>
<head>
	<meta charset="utf-8">
	<title>Crédits</title>
	<script type="text/javascript">
		function crediter(){
			alert('crediter');
		};
		function debiter(){
			alert('debiter')
		};
	</script>
</head>
<body>
	<div id='credit'>
		<form>
			<label>Login du compte</label>
			<input id="login" type="text">
			<br>
			<label>Montant</label>
			<input id="montant" type="text">
			<br>
			<input type="button" onclick="crediter()" value="Créditer">
			<input type="button" onclick="debiter()" value="Débiter">
		</form>
	</div>
</body>
</html>