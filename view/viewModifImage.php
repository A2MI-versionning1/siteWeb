<div class="modifimg">
	<div id="modifimg">
		<?php
			/* header("Content-type: image/png"); */
			$image = imagecreate(400,150);
			
			$bleu = imagecolorallocate($image, 0, 0, 255);
			$gris = imagecolorallocate($image, 192, 192, 192);
			$orange = imagecolorallocate($image, 255, 128, 0);			
			$bleuclair = imagecolorallocate($image, 156, 227, 254);
			$noir = imagecolorallocate($image, 0, 0, 0);
			$blanc = imagecolorallocate($image, 255, 255, 255);
			
			imagestring($image, 4, 35, 15, "Salut les Zéros !", $blanc);
			
			/* imagepng($image, "static/images/imgClient/" . $nom . ".png"); */
			imagepng($image, "static/images/imgClient/test.png");
		?>
		<img src="static/images/imgClient/test.png"/>
		<br>
		<br>
		<form  method="POST" action="">
			<p><i>Complétez le formulaire pour modifier l'image ci-dessus</p>
			<fieldset>
				<legend>TEXTE</legend>
				<label for="nom">Prenom + Nom</label><br>
				<input name="nom" placeholder="ex: jean Fouillen" required=""><br><br>
				<label for="tel">Numero de téléphone</label><br>
				<input name="tel" placeholder="ex: 06 12 34 56 78" required=""><br><br>
				<label for="mail">adresse mail</label><br>
				<input name="mail" placeholder="ex: exemple@exemple.fr" required=""><br><br>		
			</fieldset>
			<fieldset>
				<legend>IMAGE</legend>
				<label for="img">Logo</label><br>
				<input name="img" type="file"><br><br>
				<label for="nomF">Nom de la carte de visite</label><br>
				<input name="nomF" placeholder="ex: FouillenCV1" required=""><br><br>
			</fieldset>
			<p><input type="submit" value="Envoyer"></p>
		</form>
	</div>
</div>