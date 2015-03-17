<h1>Libérer une machine</h1>
<link href='css/machine.css' rel='stylesheet' />
<script type="text/javascript" src='js/liberer_machine.js'></script>
<select id='liste'>
	<option id='optionInutile' value='0'>Zone</option>
	<option value='1'>Gamers</option>
	<option value='2'>Mélomanes</option>
</select>
<br>
<ul>
	<li id='legendeMachineHs'> </li> Machines HS
	<li id='legendeMachineLibre'> </li> Machines Libres
	<li id='legendeMachineOccupee'> </li> Machines Occupées
</ul>
<div id='salle'>

</div>
<div id="byPseudo">
	<label for="pseudo">Pseudo : </label>
	<div class="input-group"> 
	<input type="text" id="pseudo" name="pseudo" class="form-control"/>
	<div class="input-group-btn">
		<button class="btn" type="button" id="valider"/>Valider</button>
	</div>
</div>
	<p id="result"></p>
</div>