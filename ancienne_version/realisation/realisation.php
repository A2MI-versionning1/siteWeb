﻿<!DOCTYPE HTML>
<html>

	<!-- en-tête de la page-->
	
	<head>
		<meta charset= 'utf-8' />
		<meta name="viewport" content="width=device-width" />
		<link rel='stylesheet'  media='screen'  type='text/css'  href='../testcss.css' />
	</head>
	
	<!--Corps de la page-->
	
	<body>
		
		<!--fais appel à la page hautP.php grâce à la méthode 'include'-->
		
		<?php 
			include ('../include/hautP.php');
		?>
		
		<!--Permet d'afficher le nom de la page en haut-->
			
		<div id='ecritureHaut'>
			<div id='centerb1'>
				<font color='white' size='7'>Vos réalisations</font>
			</div>
		</div>
		
		<!--fais appel à la page menuP.php grâce à la méthode 'include'-->
		<?php
			include ('../include/menuP.php');
		?>
		
		<!--Permet d'afficher le texte dans la bande 4 qui est définit dans le CSS et appeller par la fonction 'div'-->
		
		<div id='bande4'><br/><br/><br/>
			<center><font size='2'><h1>...</h1></font>
			<center><font size='2'><h1>...</h1</font></center>
		</div>
		
		<!--fais appel à la page bas2.php grâce à la méthode 'include'-->
		
		<?php
			include ('../include/bas2.php');
		?>
	</body>
</html>