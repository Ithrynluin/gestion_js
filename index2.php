<?php

require_once("include/autoload.inc.php");
require_once("include/header.inc.php"); 
 
?>
<body class="well">
        <link rel="import" href="editable.html">
        <script src="js/edit.js" type="text/javascript" charset="utf-8"></script>
	<!--<body spellcheck="false" contenteditable="true">-->
<?php
    require_once("include/menu.inc.php"); 
?>
		<button onclick="sendPageName();">Modifier</button>
		<button onclick="document.location='creation.php';">Créer</button>
</body>
</html>