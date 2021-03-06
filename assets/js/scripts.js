function load_club (id) {
	document.getElementById('club_nom').innerHTML = 'Chargement…';
	document.getElementById('club_img').innerHTML = '';
	document.getElementById('club_presentation').innerHTML = '';

	$.getJSON('./api/ajax/get_club?id=' + id).done(function (data) {
		document.getElementById('club_nom').innerHTML = data.liste[0].nom;
		document.getElementById('club_img').innerHTML = '<img src="' + data.liste[0].img + '">';
		document.getElementById('club_presentation').innerHTML = data.liste[0].presentation;
	});
}

function identification (from) {
	var date = new Date();

	$('#error').hide();
	$('#load').show();

	if ($('#stay').is(':checked')) {
		// Connecté pour 100 jours
		var n = Math.trunc((date.getTime() + 100 * 24 * 3600 * 1000) / 1000);
	}
	else {
		var n = Math.trunc((date.getTime() + 4 * 3600 * 1000) / 1000);
	}

	$.getJSON('./api/ajax/genere_token', {
		login: $('#mail').val(),
		pass: $('#passwd').val(),
		expiration: n
	}).done(function (data) {
		$('#load').hide();

		if (data.error === 1) {
			$('#error_msg').html(data.msg);
			$('#error').show();
		}
		else {
			$('#ok').show();
			$('#form').hide();
			window.location='./espace_ZZ?token=' + data.token + '&from=' + from + '&expiration=' + n;
		}
	});
}

function reset_pass () {
	var $mail = $('#mail_pass_oublie').val();
	var $html = $('#form_pass').html();

	$('#form_pass').html('Envoi du mail en cours…');

	$.getJSON("./api/ajax/change_passwd?mode=genere-token&mail=" + $mail).done(function(data){
		if (data.error === 0)$('#form_pass').html("Mail de récupération envoyé ! Pense a  vérifier les spams");
		else
		{
			alert('Impossible de trouver un compte !');
			$('#form_pass').html($html);
		}
	});
}

function contact () {
	var $nom = $('#name').val();
	var $mail = $('#email').val();
	var $provenance = $('#provenance').val();
	var $msg = $('#message').val();

	if ($nom === '' || $mail === '' || $msg === '') return alert('Formulaire incomplet !');

	$('#form_contact').html('Envoi du mail…');

	$.post('./assets/php/contact.php', {
		nom: $nom,
		mail: $mail,
		provenance: $provenance,
		msg: $msg
	}, function (data) {
		$('#form_contact').html('Mail envoyé ! Vous allez recevoir une copie par email et une réponse au plus vite.');
	});
}

function getRandomInt (min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min)) + min;
}

var k = new Konami(function () {
	var nb = getRandomInt(0, 9); // Borne sup NON incluse
	if (nb === 0) alert('You’re a wizzard Harry');
	else if (nb === 1) alert('Luke, je suis ton père');
	else if (nb === 2) alert('La vie c’est comme une boîte de chocolats, on ne sait jamais sur quoi on va tomber');
	else if (nb === 3) alert('All your base are belong to us');
	else if (nb === 4) alert('The answer to life the universe and everything is 42');
	else if (nb === 5) alert('Pokeball GO');
	else if (nb === 6) { alert('Whololo'); $('*').css({ 'background': 'blue' }); }
	else if (nb === 7) alert('I am the batman');
	else alert('LA QUOI ? LA PIERRE PHILOSOPHALE !');
});
