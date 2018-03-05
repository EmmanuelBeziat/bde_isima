<?php
	ini_set("display_errors", 1);
	require "./api/api.php";

	$is_december = '12' === date('m') ? true : false;
?>
<!DOCTYPE html>
<!--
	SITE DU BDE DE L'ISIMA
	- Crée par Louis MARTIN - BDE BliZZard
	Admissible ? Tu veut intégrer notre école ? Contacte nous ! bde.isima(a)gmail.com
	D'ailleurs que fait tu ici ? Visite le site plutôt que de regarder son code source !
--><!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Site du BDE de l'ISIMA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="msapplication-TileColor" content="#fee">
		<meta name="theme-color" content="#fee">
		<meta name="Description" content="Site du BDE de l'ISIMA, découvre la vie étudiante d'un ZZ (étudiant de l'ISIMA) sur notre site !">

		<link rel="stylesheet" href="assets/css/main.css">
		<?php if ($is_december) : ?>
		<link rel="stylesheet" href="noel/neige.css">
		<?php endif ?>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css"><![endif]-->

		<noscript><link rel="stylesheet" href="assets/css/noscript.css"></noscript>
		<link rel="apple-touch-icon" sizes="57x57" href="/ico/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/ico/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/ico/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/ico/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/ico/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/ico/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/ico/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/ico/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/ico/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/ico/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/ico/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/ico/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/ico/favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ico/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>
		<!-- Wrapper -->
		<div class="wrapper">

			<?php if ($is_december) : ?>
			<div class="snow" style="position:fixed!important">
				<div class="snow__layer"><div class="snow__fall"></div></div>
				<div class="snow__layer"><div class="snow__fall"></div></div>
				<div class="snow__layer">
					<div class="snow__fall"></div>
					<div class="snow__fall"></div>
					<div class="snow__fall"></div>
				</div>
				<div class="snow__layer"><div class="snow__fall"></div></div>
			</div>
			<?php endif; ?>

			<!-- Header -->
			<header class="header">
				<div class="logo">
					<img src="./images/logo.png" style="width:100%">
				</div>

				<div class="content">
					<div class="inner">
						<h1>BDE ISIMA</h1>
						<p>Découvre la vie étudiante d’un ZZ (étudiant de l’ISIMA) dès maintenant !</p>
					</div>
				</div>

				<nav class="menu">
					<a href="#actus">News</a>
					<!-- <a href="#bde">Le BDE</a> -->
					<a class="menu__item" href="#clubs">Clubs</a>
					<a class="menu__item" href="./espace_ZZ">Compte</a>
					<a class="menu__item" href="https://drive.google.com/drive/folders/0B8UQ_-N6TCbvRDZEcUtTS1hWc2M?usp=sharing">Annales</a>
					<a class="menu__item" href="#contact">Contact</a>
					</ul>
				</nav>
				<a class="last-news" href="#actus"><span class="text-uppercase">Dernière news :</span> <?php echo api('get_news', array('nombre' => 1))['liste'][0]['titre']; ?></a>
			</header>

			<!-- Main -->
			<main class="main">

				<section class="section" id="actus">
					<?php include "pages/actus.php"; ?>
				</section>

				<section class="section" id="bde">
					<?php include "pages/bde.php"; ?>
				</section>

				<section class="section" id="clubs">
					<?php include "pages/clubs.php"; ?>
				</section>

				<section class="section" id="contact">
					<?php include "pages/contact.php"; ?>
				</section>

				<section class="section" id="zz">
					<?php include "pages/zz.php"; ?>
				</section>

				<section class="section" id="partenaires">
					<?php include "pages/partenaires.php"; ?>
				</section>

				<section class="section" id="details_club">
					<?php include "pages/details_club.php"; ?>
				</section>

				<section class="section" id="oubli">
					<?php include "pages/oubli.php"; ?>
				</section>

				<section class="section" id="create_account">
					<?php include "pages/create_account.php"; ?>
				</section>

			</main>

			<!-- Footer -->
			<footer class="footer">
				<p class="copyright">&copy; BDE ISIMA. Design: <a href="https://html5up.net">HTML5 UP</a>.
				<br>Créé par BDE BliZZard. <a href="#partenaires">Nos partenaires</a></p>
			</footer>

		</div>

		<!-- BG -->
		<div class="bg"></div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/scripts.js"></script>
		<?php include ('./script_indispensable.php'); ?>
	</body>
</html>
