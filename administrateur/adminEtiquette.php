<!DOCTYPE HTML>
<html>
	<!-- en-tête de la page-->
	<head>
		<meta charset= 'utf-8' />
		<link rel="stylesheet" href="../static/css/cssAdmin.css">
		<script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
	</head>	
	<!--Corps de la page-->
	<body>
		<?php
			require '../model/modelAdmin.php';
			$titre = getTitre(37);
			$logo = getImage(1);
			$logoeffet = getImage(3);
			$bandeeffet = getImage(2);
			$actualite = getActu();
			$logomenu1 = getImage(4);
			$logomenu2 = getImage(5);
			$logomenu3 = getImage(6);
			$logomenu4 = getImage(7);
			$logomenu5 = getImage(8);
			$getTitre1 = getTitreMenu(2);
			$getTitre2 = getTitreMenu(3);
			$getTitre3 = getTitreMenu(4);
			$getTitre4 = getTitreMenu(5);
			$getTitre5 = getTitreMenu(6);
			$sousmenu1 = getTitreSousMenu(7);
			$sousmenu2 = getTitreSousMenu(8);
			$sousmenu3 = getTitreSousMenu(9);
			$sousmenu4 = getTitreSousMenu(10);
			$sousmenu5 = getTitreSousMenu(11);
			$sousmenu6 = getTitreSousMenu(12);
			$sousmenu7 = getTitreSousMenu(13);
			$soussousmenu1 = getTitreSousSousMenu(14);
			$soussousmenu2 = getTitreSousSousMenu(15);
			$soussousmenu3 = getTitreSousSousMenu(16);
			$textreseausocio = getTexte(2);
			$imgfooter = getImage(12);
			$adresse = getTexte2(3);
			$cpville = getTexte2(4);
			$tel = getTexte2(5);
			$mail = getTexte2(6);
			$imgretourhaut = getImage(13);
			$logoFacebook = getImage(9);
			$logoTweeter = getImage(10);
			$logoLinkedin = getImage(11);
			require '../view/admin/viewTitre.php';
			require '../view/admin/viewMenu.php';
			require '../view/admin/viewCentral.php';
			updateText(11, $_POST['editor2']);
			require '../view/admin/viewFooter.php';
		?>		
	</body>
</html>