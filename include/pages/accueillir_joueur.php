<?php
	require_once(dirname(__FILE__) ."/../../php/set_machine_occupe.php");
	require_once(dirname(__FILE__) ."/../../php/set_joueur_by_pseudo_utilise_machine.php");
?>
<h1>Accueillir Joueur</h1>
<?php
if(empty($_POST["pseudo"]) || empty($_POST["zone"]) || empty($_POST['machine'])){  ?>
	<script src='js/accueillir_joueur_1.js'></script>
	<form method="post" action="index.php?page=3">
		<p>
			<label for="pseudo">Pseudo : </label>
			<div class="input-group"> 
				<input type="text" id="pseudo" name="pseudo"/>
				<span class="input-group-btn">
					<a href="index.php?page=9">
						<button class="btn" type="button">
							Nouveau
						</button>
					</a>
				</span>
			</div>
		</p>
		<p id="credits" class="text-info"> Crédits : <span></span></p>
		<p>
			<label for="zone">Zone : </label>
			<select id="zone" name="zone">
			</select>
		</p>

		<p>
			<label for="machine">Machine : </label>
			<input type="text" id="machine" name="machine" readonly="readonly"/>
		<p>
			<input type="submit" id="valider" value="Valider">
		</p>
	</div>
<?php
}else{ ?>
<?php
	if($_POST['machine'] != "-1"){ 
		$rt = set_joueur_by_pseudo_utilise_machine($_POST['pseudo'], $_POST['machine']);
		if($rt == 1){
			set_machine_occupe($_POST['machine']); ?>
			<p class="text-success">
				Opération réussie : La machine <?php echo $_POST['machine']?> est attribuée au joueur <?php echo $_POST['pseudo']?>
			</p>
<?php
		}else{ ?>
			<p class="text-danger">Erreur une machine n'a pas pu etre attribuée.</p>
<?php   }
	}else{ ?>
		<p class="text-danger">Erreur une machine n'a pas pu etre attribuée.</p>
<?php
	}?>
	<p>
		<a href="index.php?page=3">Accueillir un nouveau joueur</a>
	</p>
<?php
}
?>