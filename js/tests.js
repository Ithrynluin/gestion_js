$(function(){
	// Action des boutons
	$("#bouton1").on("click", function(){
		var objet = {
			idZone:$("#div1 .idZone").val(),
			montant:$("#div1 .montant").val()
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/ajouterChiffreAffaires.php',
			success:function(data){
				$("#div1 .res").removeClass("label-danger");
				$("#div1 .res").addClass("label-success");
				$("#div1 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div1 .res").removeClass("label-success");
				$("#div1 .res").addClass("label-danger");
				$("#div1 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton2").on("click", function(){
		var objet = {
			id:$("#div2 .id").val(),
			montant:$("#div2 .montant").val()
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/crediter.php',
			success:function(data){
				$("#div2 .res").removeClass("label-danger");
				$("#div2 .res").addClass("label-success");
				$("#div2 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div2 .res").removeClass("label-success");
				$("#div2 .res").addClass("label-danger");
				$("#div2 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton3").on("click", function(){
		var objet = {
			id:$("#div3 .id").val(),
			montant:$("#div3 .montant").val()
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/debiter.php',
			success:function(data){
				$("#div3 .res").removeClass("label-danger");
				$("#div3 .res").addClass("label-success");
				$("#div3 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div3 .res").removeClass("label-success");
				$("#div3 .res").addClass("label-danger");
				$("#div3 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton4").on("click", function(){
		var objet = {
			idCompte:$("#div4 .idCompte").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/get_compte_by_id.php',
			success:function(data){
				$("#div4 .res").removeClass("label-danger");
				$("#div4 .res").addClass("label-success");
				$("#div4 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div4 .res").removeClass("label-success");
				$("#div4 .res").addClass("label-danger");
				$("#div4 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton5").on("click", function(){
		var objet = {
			login:$("#div5 .login").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/get_compte_by_login.php',
			success:function(data){
				$("#div5 .res").removeClass("label-danger");
				$("#div5 .res").addClass("label-success");
				$("#div5 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div5 .res").removeClass("label-success");
				$("#div5 .res").addClass("label-danger");
				$("#div5 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton6").on("click", function(){
		var objet = {
			pseudo:$("#div6 .pseudo").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/get_credit_by_pseudo.php',
			success:function(data){
				$("#div6 .res").removeClass("label-danger");
				$("#div6 .res").addClass("label-success");
				$("#div6 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div6 .res").removeClass("label-success");
				$("#div6 .res").addClass("label-danger");
				$("#div6 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton7").on("click", function(){
		var objet = {
			pseudo:$("#div7 .pseudo").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/get_joueur_by_pseudo.php',
			success:function(data){
				$("#div7 .res").removeClass("label-danger");
				$("#div7 .res").addClass("label-success");
				$("#div7 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div7 .res").removeClass("label-success");
				$("#div7 .res").addClass("label-danger");
				$("#div7 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton8").on("click", function(){
		var objet = {
			idZone:$("#div8 .idZone").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/get_machines_libres_by_zone.php',
			success:function(data){
				$("#div8 .res").removeClass("label-danger");
				$("#div8 .res").addClass("label-success");
				$("#div8 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div8 .res").removeClass("label-success");
				$("#div8 .res").addClass("label-danger");
				$("#div8 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton9").on("click", function(){
		var objet = {
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/get_zone_libre.php',
			success:function(data){
				$("#div9 .res").removeClass("label-danger");
				$("#div9 .res").addClass("label-success");
				$("#div9 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div9 .res").removeClass("label-success");
				$("#div9 .res").addClass("label-danger");
				$("#div9 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton10").on("click", function(){
		var objet = {
			idZone:$("#div10 .idZone").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/getChiffreAffaires.php',
			success:function(data){
				$("#div10 .res").removeClass("label-danger");
				$("#div10 .res").addClass("label-success");
				$("#div10 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div10 .res").removeClass("label-success");
				$("#div10 .res").addClass("label-danger");
				$("#div10 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton11").on("click", function(){
		var objet = {
			idJoueur:$("#div11 .idJoueur").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/is_utilise_joueur_by_id.php',
			success:function(data){
				$("#div11 .res").removeClass("label-danger");
				$("#div11 .res").addClass("label-success");
				$("#div11 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div11 .res").removeClass("label-success");
				$("#div11 .res").addClass("label-danger");
				$("#div11 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton12").on("click", function(){
		var objet = {
			pseudo:$("#div12 .pseudo").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/is_utilise_joueur_by_pseudo.php',
			success:function(data){
				$("#div12 .res").removeClass("label-danger");
				$("#div12 .res").addClass("label-success");
				$("#div12 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div12 .res").removeClass("label-success");
				$("#div12 .res").addClass("label-danger");
				$("#div12 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton13").on("click", function(){
		var objet = {
			idMachine:$("#div13 .idMachine").val(),
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/liberer_machine_by_id.php',
			success:function(data){
				$("#div13 .res").removeClass("label-danger");
				$("#div13 .res").addClass("label-success");
				$("#div13 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div13 .res").removeClass("label-success");
				$("#div13 .res").addClass("label-danger");
				$("#div13 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton14").on("click", function(){
		var objet = {
			login:$("#div14 .login").val(),
			password:$("#div14 .password").val()
		}

		$.ajax({
			data:objet,
			type:'GET',
			url:'php/checkPassword.php',
			success:function(data){
				$("#div14 .res").removeClass("label-danger");
				$("#div14 .res").addClass("label-success");
				$("#div14 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div14 .res").removeClass("label-success");
				$("#div14 .res").addClass("label-danger");
				$("#div14 .res").html("Problème de requête ajax");
			}
		});
	});
	$("#bouton15").on("click", function(){
		var objet = {
			idMachine:$("#div15 .idMachine").val(),
			idEtat:$("#div15 .idEtat").val()
		}

		$.ajax({
			data:JSON.stringify(objet),
			type:'POST',
			url:'php/updateMachine.php',
			success:function(data){
				$("#div15 .res").removeClass("label-danger");
				$("#div15 .res").addClass("label-success");
				$("#div15 .res").html("Réponse : "+data);
			},
			error:function(data){
				$("#div15 .res").removeClass("label-success");
				$("#div15 .res").addClass("label-danger");
				$("#div15 .res").html("Problème de requête ajax");
			}
		});
	});





	// Masquage des parties au clic
	$("h3").on("click", function(){
		$(this).next().slideToggle();
	});

	// Masquage des tests au départ
	$("h3").next().hide();
})