<div classe='menu'>
	<div id='MenuBande'>
		<div id='MenuBande1'>
			<div id="bande">
				<img src='../static/images/<?php echo $bandeeffet ?>'>
			</div>
			<div id="logoeffet">
				<img src='../static/images/<?php echo $logoeffet ?>'>
			</div>
		</div>
		<p><?php echo $actualite ?></p>
	</div>
	<div id='Menu'>
		<a href="admin.php"><img src='../static/images/gif/<?php echo $logomenu1 ?>'><font><?php echo $getTitre1 ?></font></a>
		<a href="adminCarteVisite.php"><img src='../static/images/gif/<?php echo $logomenu2 ?>'><font><?php echo $getTitre2 ?></font></a>
		<a href="flyers.php"><img src='../static/images/gif/<?php echo $logomenu3 ?>'><font><?php echo $getTitre3 ?></font></a>
		<a href=""><img src='../static/images/gif/<?php echo $logomenu4 ?>'><font><?php echo $getTitre4 ?></font></a>
			<ul>	
				<!-- Sous-menu de nos references -->
				<li><a href=""><?php echo $sousmenu1 ?></a></li>
					<ul>
						<li><a href="adminFlyersA4.php"><?php echo $soussousmenu1 ?></a></li>
						<li><a href="adminFlyersA5.php"><?php echo $soussousmenu2 ?></a></li>
						<li><a href="adminFlyersA6.php"><?php echo $soussousmenu3 ?></a></li>
					</ul>
				<li><a href="adminLogos.php"><?php echo $sousmenu2 ?></a></li>
				<li><a href="adminCarteVisite.php"><?php echo $sousmenu3 ?></a></li>
				<li><a href="adminEtiquette.php"><?php echo $sousmenu4 ?></a></li>
				<li><a href="adminCharteGraphique.php"><?php echo $sousmenu5 ?></a></li>
			</ul>
		<a href="logos2.php"><img src='../static/images/gif/<?php echo $logomenu5 ?>'><font><?php echo $getTitre5 ?></font></a>
	</div>	
</div>