<div classe='formulaireContact'>
	<div id='formulaireContact'>
		<center>
			<h2>Formulaire de contact</h2>
			<form  method="post" action="traitement.php">
				<p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
				<fieldset>
					<legend>Informations personnelles</legend>
					<label for="nom">Votre Nom <em>*</em></label><br>
					<input id="nom" placeholder="ex: Fouillen" required=""><br><br>
					<label for="prenom">Votre Prénom <em>*</em></label><br>
					<input id="prenom" placeholder="ex: Michel" required=""><br><br>
					<label for="societe">Votre société</label><br>
					<input id="societe" placeholder="ex: A2MI" ><br><br>
					<label for="adresse">Votre adresse <em>*</em></label><br>
					<input id="adresse" placeholder="ex: rue de Suède" required=""><br><br>
					<label for="codePostal">Votre code postal <em>*</em></label><br>
					<input id="codePostal" placeholder="ex: 17000" required=""><br><br>
					<label for="ville">Votre ville <em>*</em></label><br>
					<input id="ville" placeholder="ex: La Rochelle" required=""><br><br>
				</fieldset>
				<fieldset>
					<legend>Contact</legend>
					<label for="telephone">Votre numéro de téléphone</label><br>
					<input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br><br>
					<label for="email">Votre adresse Email<em>*</em></label><br>
					<input id="email" type="email" placeholder="****@A&M.com" required=""><br><br>
					<label>Objet de votre demande</label><br>
					<select name="field4" class="field-select">
					<option value="demande">Demande de devis</option>
					<option value="infos">Demandes d'informations</option>
					<option value="autres">Autres</option>
					</select><br><br>
					<label> Votre message</label><br>
					<textarea id="comments"></textarea>
				</fieldset>
				<p><input type="submit" value="Envoyer"></p>
			</form>
		</center>
	</div>
</div>