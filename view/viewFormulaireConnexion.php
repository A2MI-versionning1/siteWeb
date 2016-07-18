<div classe='formulaireConnexion'>
	<div id='formulaireConnexion'>
		<center>
			<h2>Formulaire de connexion</h2>
			<form  method="post" action="">
				<fieldset>
					<legend>Connexion</legend>
					<label for="email">Votre email</label><br>
					<input name="email" placeholder="exemple@exemple.fr"><br><br>
					<label for="password">Votre adresse Email<em>*</em></label><br>
					<input name="password" type="password" placeholder="******"><br><br>
				</fieldset>
				<p><input type="submit" value="Se connecter" name="connect"></p>
			</form>
		</center>
		
		<?php		
		if(isset($_POST['connect'])){
			
			$ok = recuperePassword($_POST['email']);
			
			if($ok == $_POST['password']){
				echo('yes');
			}
			else{
				echo('erreur');
			}
		}
		?>
		
	</div>
</div>