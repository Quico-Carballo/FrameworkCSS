<!DOCTYPE html>
<html lang="es-ES">
<head>
	<?php require("header.php") ?>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/color-full.css">
	<link rel="stylesheet" href="css/font.css">
	<title>Grid - Solo mira atrás</title>
</head>
<body flex="column" font="Raleway">
	
	<header color="LightGreen:600 txt:White" font="Chicle" style="text-align: center;">
		<h1>SOLO MIRA ATRÁS</h1>
		<h2>Grid</h2>
	</header>
	<?php require("nav.php") ?>
	<div item="1" flex="justify:around">
		<aside item="1:5">Aside Left</aside>
		<main item="1" flex="wrap justify:center">



		</main>
		<aside item="1:5">Aside Right</aside>
	</div>

	<footer color="LightGreen:600 txt:LightGreen:50" font="" style="text-align: center; line-height: 3em;">JUSTLOOKBACK.com - SOLOMIRAATRAS.es 2017</footer>

</body>
</html>