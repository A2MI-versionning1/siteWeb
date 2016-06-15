<!DOCTYPE HTML>
<html>

	<!-- en-tête de la page-->
	
	<head>
		<meta charset= 'utf-8' />
		<link rel='stylesheet'  media='screen'  type='text/css'  href='../testcss.css' />
	</head>
	
	<!--Corps de la page-->
	
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
			
			<!--Permet d'afficher le texte dans la bande 4 qui est définit dans le CSS et appeller par la fonction 'div'-->
			
			<div id='bande4'><br/><br/><br/>
				<center><font size='2'><h1>Ensemble créons à votre image</h1></font>
				<center><font size='2'><h1>Nous vous accompagnons sur votre création visuelle personnelle</h1</font></center>
			</div>
			
			<!--fais appel à la page haut2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/bas2.php');
			?>
	</body>
</html>