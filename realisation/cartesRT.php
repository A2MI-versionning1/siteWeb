<!DOCTYPE HTML>
<html>

	<!--En-tête de la page-->

	<head>
		<meta charset= 'utf-8' />
		<link rel='stylesheet'  media='screen'  type='text/css'  href='testcss.css' />
	</head>
	
	<!--Corps de la page-->
	
	<body>
	
		<!--fais appel à la page haut2.php grâce à la méthode 'include'-->
	
		<?php 
			include ('../include/hautP.php');
		?>
		
		<!--Affiche le titre de la page-->
		
		<div id='ecritureHaut'>
			<div id='centerb1'>
				<font color='white' size='7'>Cartes de visites</font></br>
			</div>
		</div>
		
		<!--fais appel à la page menu2.php grâce à la méthode 'include'-->
		
		<?php 
			include ('../include/menuP.php');
		?>
		
		<!--Affiche le texte dans la bande blanche-->
		
		<div id='bande4'></br></br>
			<center><font size='2'><h1>Ici il y aura des exemples de cartes de visites</h1></font>
			
		</div>
		
		<!--fais appel à la page bas2.php grâce à la méthode 'include'-->
		
		<?php
			include ('../include/bas2.php');
		?>
	</body>
</html>