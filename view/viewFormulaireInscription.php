<div classe='formulaireInscription'>
	<div id='formulaireInscription'>
		<center>
			<h2>Formulaire d'inscription</h2>			
			<form  method="POST" action="">				
				<p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
				<fieldset>
					<legend>Informations personnelles</legend>
					<label for="nom">Votre Nom <em>*</em></label><br>
					<input name="nom" placeholder="ex: Fouillen" required=""><br><br>
					<label for="prenom">Votre Prénom <em>*</em></label><br>
					<input name="prenom" placeholder="ex: Michel" required=""><br><br>
					<label for="societe">Votre société</label><br>
					<input name="societe" placeholder="ex: A2MI" ><br><br>
					<label for="adresse">Votre adresse <em>*</em></label><br>
					<input name="adresse" placeholder="ex: rue de Suède" required=""><br><br>
					<label for="codePostal">Votre code postal <em>*</em></label><br>
					<input name="codePostal" placeholder="ex: 17000" required=""><br><br>
					<label for="ville">Votre ville <em>*</em></label><br>
					<input name="ville" placeholder="ex: La Rochelle" required=""><br><br>
					<label for="password">Votre mot de passe <em>*</em></label><br>
					<input name="password" type="password" placeholder="ex: *********"><br><br>
					<label for="password2">Confirmation du mot de passe <em>*</em></label><br>
					<input name="password2" type="password" placeholder="ex: *********"><br><br>
				</fieldset>
				<fieldset>
					<legend>Contact</legend>
					<label for="telephone">Votre numéro de téléphone</label><br>
					<input name="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br><br>
					<label for="email">Votre adresse Email<em>*</em></label><br>
					<input name="email" type="email" placeholder="****@A&M.com" required=""><br><br>
				</fieldset>
				<p><input type="submit" value="S'inscrire" name="valider"></p>
			</form>
		</center>
		
		<?php		
		if(isset($_POST['valider'])){
			/* $passe = mysql_real_escape_string(htmlspecialchars($_POST['passe']));
			$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passe2'])); */
			if($_POST['password'] == $_POST['password2']){
				insertInscription('', $_POST['nom'], $_POST['prenom'], $_POST['societe'], $_POST['adresse'], $_POST['codePostal'], $_POST['ville'], $_POST['telephone'], $_POST['email'], $_POST['password']);
			}
		}
		?>
		
	</div>
</div>