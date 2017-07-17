<!DOCTYPE html>
<html lang="es-ES">
<head>
	<?php require("header.php") ?>
	<title>Palette - Solo mira atrás</title>
</head>
<body flex="column" font="Raleway">
	
	<header color="LightGreen:600 txt:White" font="Nosifer" style="text-align: center;">
		<h1>SOLO MIRA ATRÁS</h1>
		<h2>Palette</h2>
	</header>
	<?php require("nav.php") ?>

	<div item="1" flex="justify:between" style="padding: .5em 0;">
		<aside item="1:5"></aside>
		<main item="1" flex="wrap justify:center" columns="3">

			<?php foreach (['Red','Pink','Purple','DeepPurple','Indigo','Blue','LightBLue','Cyan','Teal','Green','LightGreen','Lime','Yellow','Amber','Orange','DeepOrange','Brown','Grey','BlueGrey','White','Black'] as $color): ?>
				<div flex="wrap justify:between" colors>
					<?php if (!in_array($color,['White','Black'])): ?>
						<?php foreach (['50','100','200','300','400','600','700','800','900'] as $accent): ?>
							<div item="1" color="<?=$color?>:<?=$accent?>"><?=$accent?></div>
						<?php endforeach ?>
					<?php endif ?>
					<div item="1:1" color="<?=$color?>"><?=$color?></div>
					<?php if (!in_array($color,['Brown','Grey','BlueGrey','White','Black'])): ?>
						<?php foreach (['A100','A200','A400','A700'] as $accent): ?>
							<div item="1" color="<?=$color?>:<?=$accent?>"><?=$accent?></div>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			<?php endforeach ?>

		</main>
		<aside item="1:5"></aside>
	</div>

	<footer color="LightGreen:600 txt:LightGreen:50" style="text-align: center; line-height: 3em;">JUSTLOOKBACK.com - SOLOMIRAATRAS.es 2017</footer>

</body>
</html>