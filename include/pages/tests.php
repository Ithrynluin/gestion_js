<h2>Test des scripts PHP</h2>
<hr/>

<h3>Test modification du chiffre d'affaires</h3>
<div id="div1">

	<p>
		<label>Identifiant de la zone</label>
		<input class="idZone" type="text"/>
	</p>

	<p>
		<label>Montant à ajouter</label>
		<input class="montant" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton1" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test créditer</h3>
<div id="div2">

	<p>
		<label>Identifiant du compte</label>
		<input class="id" type="text"/>
	</p>

	<p>
		<label>Montant à ajouter</label>
		<input class="montant" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton2" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test débiter</h3>
<div id="div3">

	<p>
		<label>Identifiant du compte</label>
		<input class="id" type="text"/>
	</p>

	<p>
		<label>Montant à ajouter</label>
		<input class="montant" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton3" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test récupération compte par identifiant</h3>
<div id="div4">

	<p>
		<label>Identifiant du compte</label>
		<input class="idCompte" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton4" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test récupération compte par login</h3>
<div id="div5">

	<p>
		<label>Login du compte</label>
		<input class="login" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton5" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test récupération crédits par pseudo</h3>
<div id="div6">

	<p>
		<label>Pseudo du joueur</label>
		<input class="pseudo" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton6" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test récupération joueur par pseudo</h3>
<div id="div7">

	<p>
		<label>Pseudo du joueur</label>
		<input class="pseudo" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton7" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test récupération machines libres par zone</h3>
<div id="div8">
	<p>
		<label>Identifiant de la zone</label>
		<input class="idZone" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton8" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test récupération zones libres</h3>
<div id="div9">
	<p>
		<input type="button" value="Envoyer" id="bouton9" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test récupération chiffre affaires</h3>
<div id="div10">
	<p>
		<label>Identifiant de la zone</label>
		<input class="idZone" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton10" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test si un joueur utilise une machine (avec son id)</h3>
<div id="div11">
	<p>
		<label>Identifiant du joueur</label>
		<input class="idJoueur" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton11" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test si un joueur utilise une machine (avec son pseudo)</h3>
<div id="div12">
	<p>
		<label>Pseudo du joueur</label>
		<input class="pseudo" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton12" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test libération machine</h3>
<div id="div13">
	<p>
		<label>Identifiant de la machine</label>
		<input class="idMachine" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton13" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test mot de passe</h3>
<div id="div14">
	<p>
		<label>Pseudo du joueur</label>
		<input class="login" type="text"/>
	</p>

	<p>
		<label>Mot de passse</label>
		<input class="password" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton14" />
	</p>

	<p class="res"></p>
</div>

<hr/>

<h3>Test mise à jour machine</h3>
<div id="div15">
	<p>
		<label>Identifiant de la machine</label>
		<input class="idMachine" type="text"/>
	</p>

	<p>
		<label>Identifiant de l'état</label>
		<input class="idEtat" type="text"/>
	</p>

	<p>
		<input type="button" value="Envoyer" id="bouton15" />
	</p>

	<p class="res"></p>
</div>













<script type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript" src="js/tests.js"></script>
<style type="text/css">
h3{cursor:pointer;}
</style>