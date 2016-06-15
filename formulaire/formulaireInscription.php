<html>
		<!--En tête de la page -->
		<head> 
			<meta charset='utf-8' />
			<link rel='stylesheet'  media='screen'  type='text/css'  href='../testcss.css' />
			<title>Formulaire Inscription Client</title>
		</head>
		<!--Corps de la page -->
		<body>
				
		<!--fais appel à la page haut2.php grâce à la méthode 'include'-->
			<?php 	
				include ('../include/haut2.php');
			?>
			
			<!--Permet d'afficher le nom de la page en haut-->
				
			<div id='ecritureHaut'>
				<div id='centerb1'>
					<font color='white' size='7'>Créons à votre image</font>
				</div>
			</div>
			
			<!--fais appel à la page haut2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/menu2.php');
			?>
			
			<center>
				<h2>Formulaire d'inscription client</h2>
				<form  method="post" action="traitement.php">
					<p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
					<fieldset>
						<legend>Informations personnelles</legend>
						<label for="nom">Votre Nom <em>*</em></label><br>
						<input id="nom" placeholder="ex: Fouillen" required=""><br><br>
						<label for="prenom">Votre Prénom <em>*</em></label><br>
						<input id="prenom" placeholder="ex: Michel" required=""><br><br>
						<label for="societe">Votre société</label><br>
						<input id="societe" placeholder="ex: A2MI" ><br><br>
						<label for="adresse">Votre adresse <em>*</em></label><br>
						<input id="adresse" placeholder="ex: rue de Suède" required=""><br><br>
						<label for="codePostal">Votre code postal <em>*</em></label><br>
						<input id="codePostal" placeholder="ex: 17000" required=""><br><br>
						<label for="ville">Votre ville <em>*</em></label><br>
						<input id="ville" placeholder="ex: La Rochelle" required=""><br><br>
					</fieldset>
					<fieldset>
						<legend>Contact</legend>
						<label for="telephone">Votre numéro de téléphone</label><br>
						<input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br><br>
						<label for="email">Votre adresse Email<em>*</em></label><br>
						<input id="email" type="email" placeholder="****@A&M.com" required=""><br><br>
					</fieldset>
					<p><input type="submit" value="S'inscrire"></p>
				</form>
			</center>

			<!--fais appel à la page bas2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/bas2.php');
			?>
	
		</body>
</html>

