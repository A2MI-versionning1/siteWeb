<!DOCTYPE HTML>
<html>
	<!-- en-t�te de la page-->
	<head>
		<meta charset= 'utf-8' />
		<link rel="stylesheet" href="static/css/css.css">
	</head>	
	<!--Corps de la page-->
	<body>
		<?php
			require 'model/model.php';
			$titre = getTitre2(27);
			$logo = getImage(1);
			$logoeffet = getImage(3);
			$bandeeffet = getImage(2);
			$actualite = getActu();
			$logomenu1 = getImage(4);
			$logomenu2 = getImage(5);
			$logomenu3 = getImage(6);
			$logomenu4 = getImage(7);
			$logomenu5 = getImage(8);
			$getTitre1 = getTitre2(25);
			$getTitre2 = getTitre2(9);
			$getTitre3 = getTitre2(7);
			$getTitre4 = getTitre2(26);
			$getTitre5 = getTitre2(8);
			$logoFacebook = getImage(9);
			$logoTweeter = getImage(10);
			$logoLinkedin = getImage(11);
			$textMenu = getTexte2(12);
			$textreseausocio = getTexte(2);
			$imgfooter = getImage(12);
			$adresse = getTexte2(3);
			$cpville = getTexte2(4);
			$tel = getTexte2(5);
			$mail = getTexte2(6);
			$sousmenu1 = getTitreSousMenu(7);
			$sousmenu2 = getTitreSousMenu(8);
			$sousmenu3 = getTitreSousMenu(9);
			$sousmenu4 = getTitreSousMenu(10);
			$sousmenu5 = getTitreSousMenu(11);
			$sousmenu6 = getTitreSousMenu(12);
			$sousmenu7 = getTitreSousMenu(13);
			$imgretourhaut = getImage(13);
			$soussousmenu1 = getTitreSousSousMenu(14);
			$soussousmenu2 = getTitreSousSousMenu(15);
			$soussousmenu3 = getTitreSousSousMenu(16);
			require 'view/viewTitre2.php';
			require 'view/viewMenu2.php';
			require 'view/viewFormulaireConnexion.php';
			require 'view/viewFooter.php';
		?>		
	</body>
</html>