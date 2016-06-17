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
					<font color='white' size='7'>Formulaire d'inscription</font>
				</div>
			</div>
			
			<!--fais appel à la page menuP.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/menuP.php');
			?>
			
			<center>
				<h2>Formulaire d'inscription client</h2>
				<form  method="post" action="traitement.php">
					<p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
					<fieldset>
						<legend>Informations personnelles</legend>
						<label for="nom">Votre Nom <em>*</em></label><br>
						<input id="nom" name="nom" placeholder="ex: Fouillen" required=""><br><br>
						<label for="prenom">Votre Prénom <em>*</em></label><br>
						<input id="prenom" name="prenom" placeholder="ex: Michel" required=""><br><br>
						<label for="societe">Votre société</label><br>
						<input id="societe" name="societe" placeholder="ex: A2MI" ><br><br>
						<label for="adresse">Votre adresse <em>*</em></label><br>
						<input id="adresse" name="adresse" placeholder="ex: rue de Suède" required=""><br><br>
						<label for="codePostal">Votre code postal <em>*</em></label><br>
						<input id="codePostal" name="codePostal" placeholder="ex: 17000" required=""><br><br>
						<label for="ville">Votre ville <em>*</em></label><br>
						<input id="ville" name="ville" placeholder="ex: La Rochelle" required=""><br><br>
						<label for="password">Votre mot de passe <em>*</em></label><br>
						<input type="password" name="passe" minlength="8" placeholder="******" required=""/><br><br>
						<label>Confirmation du mot de passe: <em>*</em></label><br>
						<input type="password" name="passe2" minlength="8" placeholder="******" required=""/></br></br>
					</fieldset>
					<fieldset>
						<legend>Contact</legend>
						<label for="tel">Votre numéro de téléphone</label><br>
						<input id="tel" name="tel" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br><br>
						<label for="mail">Votre adresse Email<em>*</em></label><br>
						<input id="mail" name="mail" type="email" placeholder="****@A&M.com" required=""><br><br>
					</fieldset>
					<p><input type="submit" value="S'inscrire"></p>
				</form>
			</center>
			
		
			<?php
				if(!empty($_POST['pseudo']))
				{
					// D'abord, je me connecte à la base de données.
					mysql_connect("localhost", "root", "");
					mysql_select_db("test");

					
					
					// Je mets aussi certaines sécurités ici…
					$passe = mysql_real_escape_string(htmlspecialchars($_POST['passe']));
					$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passe2']));
					if($passe == $passe2)
					{
						$nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
						$prenom = mysql_real_escape_string(htmlspecialchars($_POST['prenom']));
						$societe = mysql_real_escape_string(htmlspecialchars($_POST['societe']));
						$adresse = mysql_real_escape_string(htmlspecialchars($_POST['adresse']));
						$codePostal = mysql_real_escape_string(htmlspecialchars($_POST['codePostal']));
						$ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
						$telephone = mysql_real_escape_string(htmlspecialchars($_POST['telephone']));
						$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
						// Je vais crypter le mot de passe.
						$passe = sha1($passe);

						mysql_query("INSERT INTO validation VALUES('', '$nom', '$prenom', '$societe', '$adresse', '$codePostal', '$ville', '$telephone', '$passe', '$email')");
					}
					 
					else
					{
						echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
					}
				}
			?>

			<!--fais appel à la page bas2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/bas2.php');
			?>
	
		</body>
</html>

