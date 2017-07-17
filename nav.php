<nav color="LightGreen a:action:White a:txt:White a:action:txt:LightGreen" flex="wrap justify:center" font="Questrial">
	<?php foreach (['palete','typography','grid','component'] as $url): ?>
		<!--a href="<?=$url?>.php"><?=ucfirst($url)?></a-->
	<?php endforeach ?>
	<a href="palette.php" icon-top="palette">Palette</a>
	<a href="tipography.php" icon-top="font_download">Typography</a>
	<a href="grid.php" icon-top="grid_on">Grid</a>
	<a href="component.php" icon-top="web">Component</a>
</nav>