<div classe='centre'>
	<div id='centr'>
		<fieldset>
			<legend>Numero et Adresse</legend>
			<form method="POST" action="">
				<textarea name="editor1"></textarea>
				<script>
					CKEDITOR.replace('editor1');
				</script>
				<p><input for="editor1" type="submit" value="valider"></p>
			</form>
		</fieldset>
		<?php
		if($_POST['editor1'] != null){
			updateText(3, $_POST['editor1']);
		}
		?>
		<fieldset>
			<legend>Code Postal et Nom de la Ville</legend>
			<form method="POST" action="">
				<textarea name="editor2"></textarea>
				<script>
					CKEDITOR.replace('editor2');
				</script>
				<p><input for="editor2" type="submit" value="valider"></p>
			</form>
		</fieldset>
		<?php
		if($_POST['editor2'] != null){
			updateText(4, $_POST['editor2']);
		}
		?>
		<fieldset>
			<legend>Numéro de Téléphone</legend>
			<form method="POST" action="">
				<textarea name="editor3"></textarea>
				<script>
					CKEDITOR.replace('editor3');
				</script>
				<p><input for="editor3" type="submit" value="valider"></p>
			</form>
		</fieldset>
		<?php
		if($_POST['editor3'] != null){
			updateText(5, $_POST['editor3']);
		}
		?>
		<fieldset>
			<legend>Adresse E-mail</legend>
			<form method="POST" action="">
				<textarea name="editor4"></textarea>
				<script>
					CKEDITOR.replace('editor4');
				</script>
				<p><input for="editor4" type="submit" value="valider"></p>
			</form>
		</fieldset>
		<?php
		if($_POST['editor4'] != null){
			updateText(6, $_POST['editor4']);
		}
		?>
	</div>
</div>