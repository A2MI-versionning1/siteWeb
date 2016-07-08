<!DOCTYPE HTML>
<html>
		<!--En tête de la page -->
		<head> 
			<meta charset='utf-8' />
			<link rel='stylesheet'  media='screen'  type='text/css'  href='../testcss.css' />
			<title>Formulaire Inscription Client</title>
		</head>
		<!--Corps de la page -->
		<body>
				
		<!--fais appel à la page hautP.php grâce à la méthode 'include'-->
			<?php 	
				include ('../include/hautP.php');
			?>
			
			<!--Permet d'afficher le nom de la page en haut-->
				
			<div id='ecritureHaut'>
				<div id='centerb1'>
					<font color='white' size='7'>Connexion</font>
				</div>
			</div>
			
			<!--fais appel à la page menuP.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/menuP.php');
			?>
			
			<!-- formulaire de connexion -->
			
			<center>
				<h2>Formulaire de connexion</h2>
				<form  method="post" action="traitement.php">
					<fieldset>
						<legend>Connexion</legend>
						<label for="mail">E-MAIL </label><br>
						<input id="nom" type="email" placeholder="ex: blabla@gmail.com" required=""><br><br>
						<label for="password">Mot de passe </label><br>
						<input id="password" type="password" placeholder="******" required=""><br><br>
					</fieldset>
					<p><input type="submit" value="Se connecter"></p>
				</form>
			</center>
			
			<!-- connexion de l'utilisateur -->

			<!--fais appel à la page bas2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/bas2.php');
			?>
	
		</body>
</html>

