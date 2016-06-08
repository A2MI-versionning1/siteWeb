<!DOCTYPE html>
<html>
	<form action="mailto:votrenom@provider.com" method="post" name="contact">
	
		<!--En tête de la page -->
		
		<head> 
			<meta charset="utf-8" />
		</head>
		
		<!--Corps de la page -->
		
		<body>
		
			<!--fais appel à la page haut2.php grâce à la méthode 'include'-->
		
			<?php
				include ('../include/haut2.php');
			?>
			
			<!--Affiche le titre de la page-->
			
			<div id='ecritureHaut'>
				<div id='centerb1'>
					<font color='white' size='7'>Contact</font></br>
				</div>
			</div>
			
			<!--fais appel à la page menu2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/menu2.php');
			?>
			
			<!--Le code du formulaire-->
			
			<center>
				<h2>Formulaire de contact</h2>
				<form action="#">
					<p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
					<fieldset>
						<legend>Informations personnelles</legend>
						<label for="nom">Votre Nom <em>*</em></label><br>
						<input id="nom" placeholder="ex: Fouillen" autofocus="" required=""><br><br>
						<label for="prenom">Votre Prénom <em>*</em></label><br>
						<input id="prenom" placeholder="ex: Michel" autofocus="" required=""><br><br>
						<label for="societe">Votre société</label><br>
						<input id="societe" placeholder="ex: A2MI" autofocus=""><br><br>
						<label for="adresse">Votre adresse <em>*</em></label><br>
						<input id="adresse" placeholder="ex: rue de Suède" autofocus="" required=""><br><br>
						<label for="codePostal">Votre code postal <em>*</em></label><br>
						<input id="codePostal" placeholder="ex: 17000" autofocus="" required=""><br><br>
						<label for="ville">Votre ville <em>*</em></label><br>
						<input id="ville" placeholder="ex: La Rochelle" autofocus="" required=""><br><br>
					
					</fieldset>
					<fieldset>
						<legend>Contact</legend>
						<label for="telephone">Votre numéro de téléphone</label><br>
						<input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br><br>
						<label for="email">Votre adresse Email<em>*</em></label><br>
						<input id="email" type="email" placeholder="****@A&M.com" required="" pattern="[a-zA-Z]*.[a-zA-Z]*"><br>
						<label for="demande"><h4>Objet de votre demande</h4></label><br>
						<input type="radio" id="demande" value="Demande de devis" required="">Demande de devis<br>
						<input type="radio" id="demande" value="Demande d'informations" required="">Demande d'informations<br>
						<input type="radio" id="demande" value="Autres" required="">Autres<br><br>
						<label> Votre message</label><br>
						<textarea id="comments"></textarea>
					</fieldset>
					<p><input type="submit" value="Envoyer"></p>
				</form>
		</center>
				  
				 
				<!--Informations de la société-->
				<br/>
				<center>
					Société A&M <br/>
					10-14 Rue Jean Perrin<br/>
					17000 La Rochelle<br/>
					tel:<br/>
					mail:<br/>
					<br/>
				
					<!--Affiche la google maps mais le 'div' ici permet grâce à un bouton plus haut de se venir directement sur la carte-->
					
				<div id='situer'>
					<iframe class='image' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.510500826513!2d-1.1606506842403663!3d46.14057969607641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480153c3ce366eb1%3A0xa8d4c57b22fe53c7!2sRue+Jean+Perrin%2C+17000+La+Rochelle!5e0!3m2!1sfr!2sfr!4v1464162679866" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</center>
					<br/>
				</div>
			
			<!--fais appel à la page bas2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/bas2.php');
			?>
		</body>
	</form>
</html>