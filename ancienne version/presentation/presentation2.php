<!DOCTYPE HTML>
<html>

	<!--En-tête de la page-->
	
	<head>
		<meta charset= 'utf-8' />
	</head>
	
	<!--Corps de la page-->
	
	<body>
	
		<!--fais appel à la page haut2.php grâce à la méthode 'include'-->	
	
		<?php
			include ('../include/haut2.php');
		?>
		
		<div id='ecritureHaut'>
				<div id='centerb1'>
					<font color='white' size='7'>Présentation</font></br>
				</div>
		</div>
		
		<!--fais appel à la page menu2.php grâce à la méthode 'include'-->
		
		<?php 
			include ('../include/menu2.php');
		?>
		
		<!--Permet d'afficher le texte dans la bande blanche-->
		
		<div id="bande4">
			<br/>
			<center><font>La société A&M est une......</font></center>
			<br/><br/><br/><br/><br/><br/><br/><br/>
		</div>
		
		<!--fais appel à la page bas2.php grâce à la méthode 'include'-->
		
		<?php 
			include ('../include/bas2.php');
		?>
	</body>
</html>