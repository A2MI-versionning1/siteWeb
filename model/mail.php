<?php
	$to = 'kev.bouton@orange.fr';
	$subject = $_POST['field4'];
	$message = $_POST['comments'];
	$headers = 'From:' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $to . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);
?>