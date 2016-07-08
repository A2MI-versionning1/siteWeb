<?php

echo"
<html>
	<form method='post'>
		<!--En tête de la page -->
		<head>
			<meta charset='utf-8' />
			<title>pageDAccueilTest</title>
		</head>
		<body>
			<div id='bande_horizontale'>
				<div id='hautDroite'>
					<font color='#ffffff'size='7'><h7>Créons à votre image</h7></font>
				</div>
			</div>
				<div id='hautGauche'>
					<img src='images/lol.jpg' width='200' height='100' border='0' alt='logo'>
				</div>
			<div id='body'>
			<link rel='stylesheet'  media='screen'  type='text/css'  href='style2.css' />
			<div id='bandeDessous'>
				<p align='right'><img src='images/logob1.png'width='200' height='100' border='0' alt='logob1'></p>
			</div>
			<div id='bandeDessous2'>
				<div id='menu'>
				<!--<img id='arriere' alt='' src='images/essai.jpg'/>-->
				<ul>
					<li><a>Présentation</a>
						<ul>
							<li><a href='presentation/agence.php'>Agence</a></li>
							<li><a href='presentation/conseillers.php'>Vos conseillés</a></li>
						</ul>
					</li>
					<li><a>Savoir faire</a>
						<ul>
							<li><a href='savoirFaire/flyersSF.php'>Flyers</a></li>
							<li><a href='savoirFaire/cartesSF.php'>Cartes de visites</a></li>
							<li><a href='savoirFaire/chartesSF.php'>Charte graphique</a></li>
							<li><a href='savoirFaire/logoSF.php'>Logo</a></li>
							<li><a href='savoirFaire/afficheSF.php'>Affiches</a></li>
						</ul>
					</li>
					<li><a>Vos réalisations types</a>
						<ul>
							<li><a href='realisation/cartesRT.php'>Cartes de visites</a></li>
							<li><a href='realisation/flyersRT.php'>Flyers</a></li>
							<li><a href='realisation/chartesRT.php'>Charte graphique</a></li>
							<li><a href='realisation/affichesRT.php'>Affiches</a></li>
							<li><a href='realisation/logoCharteRT.php'>Logos et chartes graphiques</a></li>
						</ul>
					</li>
					<li><a href='contacter/formulaireContact.html'>Nous contacter</a></li>
					<li><a href='references/referencesR.php'>Nos références et réalisations</a></li>
				</ul>
				</div>
			</div>
			</div>
			<div id='accroche'>
				<center>
						<h1><!--<font color='ffffff'>-->
						Ensemble créons à votre image<br/>
						Nous vous accompagnons sur votre création visuel personnelle
						<!--</font>--></h1>
				</center>
			</div>
			<div id='barre'>
				<div id='basGauche'>
					<!--logo avec les liens des pages-->
					<a href='http://www.google.com/' onclick='window.open(this.href); return false;' title='logo fb'><img src='images/logofb.png' width='30' height='30' border='0' alt='logo fb'></a>
					<a href='http://www.google.com/' onclick='window.open(this.href); return false;' title='logo twitter'><img src='images/twitter.png' width='30' height='30' border='0' alt='logo twitter'></a>
					<a href='http://www.google.com/' onclick='window.open(this.href); return false;' title='logo linkedin'><img src='images/linkedin.png' width='30' height='30' border='0' alt='logo linkedin'></a><br/>
					<font color='#ffffff' size='2'>Rejoignez-nous sur les réseaux sociaux</font>
				</div>
				<div id='basHaut'>
					<img src='images/capture.png' border='0' alt='basHaut'>
				</div>
				<div id='basBas'>
					<font color='#ffffff' size='3'><center>A propos - <a href='contacter/formulaireContact.html' style='text-decoration:none'>Contact</a> - mentions légales - charte RSE - CGV</center>
				</div>
				<div id='basDroite'>
					<!--localisation de l'entreprise-->
					<font color='ffffff' size='2'>10-14 Rue Jean Perrin<br/>
						17000 LA ROCHELLE<br/>
						Tel:<br/>
						Adresse mail:<br/>
						Siret:
					</font>
				</div>
		</body>
	</form>
</html>"
?>