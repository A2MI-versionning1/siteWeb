<?php

echo"
<html>
	<form method='post'>
	
		<!--En tête de la page -->	
		
		<head> 
			<meta charset='utf-8' />
			<title>pageDAccueil</title>	
		</head>
		
		<!--Le corps de la page-->
		
		<body>
			<!--<div id='hautGauche'> 
				<img src='images/logo2.png' border='0' alt='logo'>
			</div>-->
			<div id='body'>
			<link rel='stylesheet'  media='screen'  type='text/css'  href='style.css' />
			<div id='menu'>
			<img id='arriere' alt='' src='images/essai.jpg'/>
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
			<div id='accroche'>
				<center>
						<h1><!--<font color='ffffff'>-->Ensemble créons à votre image<br/>
											Nous vous accompagnons sur votre création visuelle personnelle
						<!--</font>--></h1>
				</center>
			</div>
			<div id='bas'>
				<!--logo avec les liens des pages-->
				<a href='http://www.google.com/' title='logo fb'><img src='images/logofb.png' border='0' alt='logo fb'></a>
				<a href='http://www.google.com/' title='logo twitter'><img src='images/twitter.png' border='0' alt='logo twitter'></a>
				<a href='http://www.google.com/' title='logo linkedin'><img src='images/linkedin.png' border='0' alt='logo linkedin'></a>
			</div>
		</body>
	</form>
</html>"
?>