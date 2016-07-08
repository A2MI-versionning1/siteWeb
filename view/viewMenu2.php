<div classe='menu'>
	<div id='MenuBande'>
		<div id='MenuBande1'>
			<div id="bande">
				<img src='static/images/<?php echo $bandeeffet ?>'>
			</div>
			<div id="logoeffet">
				<img src='static/images/<?php echo $logoeffet ?>'>
			</div>
		</div>
		<p><?php echo $actualite ?></p>
	</div>
	<div id='Menu'>
		<a href="index.php"><img src='static/images/gif/<?php echo $logomenu1 ?>'><font><?php echo $getTitre1 ?></font></a>
		<a href="cartedevisite.php"><img src='static/images/gif/<?php echo $logomenu2 ?>'><font><?php echo $getTitre2 ?></font></a>
		<a href="flyers.php"><img src='static/images/gif/<?php echo $logomenu3 ?>'><font><?php echo $getTitre3 ?></font></a>
		<a href=""><img src='static/images/gif/<?php echo $logomenu4 ?>'><font><?php echo $getTitre4 ?></font></a>
			<ul>	
				<!-- Sous-menu de nos references -->
				<li><a href=""><?php echo $sousmenu1 ?></a></li>
					<ul>
						<li><a href="flyersA4.php"><?php echo $soussousmenu1 ?></a></li>
						<li><a href="flyersA5.php"><?php echo $soussousmenu2 ?></a></li>
						<li><a href="flyersA6.php"><?php echo $soussousmenu3 ?></a></li>
					</ul>
				<li><a href="logos.php"><?php echo $sousmenu2 ?></a></li>
				<li><a href="cartedevisite.php"><?php echo $sousmenu3 ?></a></li>
				<li><a href="etiquettes.php"><?php echo $sousmenu4 ?></a></li>
				<li><a href="chartegraphique.php"><?php echo $sousmenu5 ?></a></li>
			</ul>
		<a href="logos.php"><img src='static/images/gif/<?php echo $logomenu5 ?>'><font><?php echo $getTitre5 ?></font></a>
	</div>	
</div>