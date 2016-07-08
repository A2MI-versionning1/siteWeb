<!--Fais appel au css via cette ligne de commande-->
		
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="../test.css" />
		
		<!--Fais appel à la méthode css bande5 via le div-->
		
		<div id="bande5">
		
			<!--logo avec les liens des pages-->
			
			<br/>
			<a href='http://www.google.com/' onclick='window.open(this.href); return false;' title='logo fb'><img src='../images/logoF.png' width='30' height='30' border='0' alt='logo fb'></a>
			<a href='http://www.google.com/' onclick='window.open(this.href); return false;' title='logo twitter'><img src='../images/logoT.png' width='30' height='30' border='0' alt='logo twitter'></a>
			<a href='http://www.google.com/' onclick='window.open(this.href); return false;' title='logo linkedin'><img src='../images/linkedin.png' width='30' height='30' border='0' alt='logo linkedin'></a><br/>
			<font color='#ffffff' size='2'>Rejoignez-nous sur les réseaux sociaux</font>
					
					
			<!--logo entreprise-->
			
			<div id='photobasC'>
				<center><img src='../images/logoBas.png' height='80px' width='200px'/></center>
			</div>	
			
			<!--localisation de l'entreprise-->
			
			<div id='droitb5'>
				<div align='right'>
					<font color='ffffff' size='2'>10-14 Rue Jean Perrin<br/>
						17000 LA ROCHELLE<br/>
						Tel:<br/>
						Adresse mail:<br/>
						Siret:
					</font>
				</div>
			</div>
		</div>
		
		<!--Bande coloré grisée de tout en bas-->

		<div id="bande6">
			
			<!--Affiche les boutons du bas de page grâce à la classe myButton dans le css-->
			
			<a href="../presentation/presentation.php" class="myButton">A propos</a>
			<a href="../contacter/formulaireContact.php" class="myButton">Contact</a>
			<a href="#" class="myButton">Mentions légales</a>
			<a href="#" class="myButton">Charte RSE</a>
			<a href="#" class="myButton">CGV</a>
			
			<!--Fais appel à la méthode css Fleche2 via le div, et affiche la flèche-->
			
			<div id="Fleche2">
				<a href=''>
					<div align='right'><img class="zoomEffect" src="../images/fleche.png" width='40' height='40' border='0'></div>
				</a>
			</div>
		</div>
	</body>
</html>