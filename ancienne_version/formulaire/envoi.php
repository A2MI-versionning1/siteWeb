<?php
try
{

	//on se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=siteWeb; charset=utf8','root', '');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$societe = $_POST["societe"];
$adresse = $_POST["adresse"];
$postal = $_POST["codeP"];
$ville = $_POST["ville"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];


echo "votre nom est:" .$nom;
echo "<br/>";
echo "votre prenom est:" .$prenom;
echo "<br/>";
echo "votre nom de societe est:" .$societe;
echo "<br/>";
echo "votre adresse est:" .$adresse;
echo "<br/>";
echo "votre code postal est:" .$postal;
echo "<br/>";
echo "votre ville est:" .$ville;
echo "<br/>";
echo "votre numero de telephone est:" .$tel;
echo "<br/>";
echo "votre adresse e-mail est :" .$mail;
?>
