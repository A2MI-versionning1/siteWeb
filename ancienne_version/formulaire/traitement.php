<!DOCTYPE HTML>
<html>
		<!--En tête de la page -->
		<head> 
			<meta charset='utf-8' />
			<link rel='stylesheet'  media='screen'  type='text/css'  href='../testcss.css' />
			<title>Information sur votre compte</title>
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
					<font color='white' size='7'>Information</font>
				</div>
			</div>
			
			<!--fais appel à la page menuP.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/menuP.php');
			?>
			
			<center>
			
			<?php
			function connectMaBase(){
			$base = mysql_connect ('localhost', 'root', '');  
			mysql_select_db ('MaBase', $test) ;
			}
			//Connexion à la base de donnée

			/*$bdd = 'test';

			$host = "localhost" ;

			$user = "root" ;

			$mdp = "" ;

			$connect = mysqli_connect($host, $user, $mdp) ;

			if ($connect > 0 )

			echo " connexion réussie" ;

			else

			echo "Echec de connexion – Veuillez contacter l’adminstrateur" ;*/
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$societe = $_POST["societe"];
			$adresse = $_POST["adresse"];
			$postal = $_POST["codePostal"];
			$ville = $_POST["ville"];
			$tel = $_POST["telephone"];
			$mail = $_POST["email"];
			$password = $_POST["passe"];

			echo "<p><i>Voici les informations sur votre compte :</i></p><br/>
			<fieldset> 	<legend>Votre compte</legend>";
			echo "<p>Votre nom est: " .$nom."</p>";
			echo "<br/>";
			echo "<p>Votre prenom est: " .$prenom."</p>";
			echo "<br/>";
			echo "<p>Votre nom de societe est: " .$societe."</p>";
			echo "<br/>";
			echo "<p>Votre adresse est: " .$adresse."</p>";
			echo "<br/>";
			echo "<p>Votre code postal est: " .$postal."</p>";
			echo "<br/>";
			echo "<p>Votre ville est: " .$ville."</p>";
			echo "<br/>";
			echo "<p>Votre numero de telephone est: " .$tel."</p>";
			echo "<br/>";
			echo "<p>Votre adresse email est: " .$mail."</p>";
			echo "<br/>";
				
			echo "</fieldset>";
			
			try
			{
				// On se connecte à MySQL
				$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
			}
			catch(Exception $e)
			{
				// En cas d'erreur, on affiche un message et on arrête tout
					die('Erreur : '.$e->getMessage());
			}

			//On insère les informations du formulaire dans la table
			$sql="insert into validation ( '',nom, prenom, societe, adresse, codePostal, ville, tel, mail, passe) values ('$nom','$prenom','$societe','$adresse','$postal','$ville','$tel','$mail', '$password')" ;
			?>
			</center>
			
			<?php
				include ('../include/bas2.php');
			?>
		</body>
</html>