<!DOCTYPE HTML>
<html>

	<!--En-tête de la page-->
	
	<head>
		<meta charset= 'utf-8' />
	</head>
	
	<!--Corps de la page-->
	
	<body>
	
		<!--fais appel à la page haut.php grâce à la méthode 'include'-->	
	
		<?php
			include ('../include/haut.php');
		?>
		
		<div id='ecritureHaut'>
				<div id='centerb1'>
					<font color='white' size='7'>Présentation</font></br>
				</div>
		</div>
		
		<!--fais appel à la page menu.php grâce à la méthode 'include'-->
		
		<?php 
			include ('../include/menu.php');
		?>
		
		<!--Permet d'afficher le texte dans la bande blanche-->
		
		<div id="bande4">
			<br/>
			<center><font>La société A&M est une......</font></center>
			<br/><br/><br/><br/><br/><br/><br/><br/>
		</div>
		
		<!--fais appel à la page bas.php grâce à la méthode 'include'-->
		
		<?php 
			include ('../include/bas.php');
		?>
	</body>
</html>