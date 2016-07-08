<?php


if(isset($_POST) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['societe']) and !empty($_POST['adresse'])
and !empty($_POST['codeP']) and !empty($_POST['ville']) and !empty($_POST['tel']) and !empty($_POST['email'])){
$bdd = mysql_connect('localhost',"root","");
$bdd = mysql_select_db("siteweb");

$sql = "INSERT INTO client ('','nom','prenom','societe','adresse','codeP','ville','tel','email') VALUES '.$_POST['nom'].''.$_POST['prenom'].''.$_POST['societe'].''.$_POST['adresse'].''.$_POST['codeP'].''.$_POST['ville'].''.$_POST['email'].";
mysql_query($sql);	
}



/*$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$societe = $_POST["societe"];
$adresse = $_POST["adresse"];
$postal = $_POST["codeP"];
$ville = $_POST["ville"];
$tel = $_POST["tel"];
$mail = $_POST["email"];


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
echo "votre adresse e-mail est :" .$mail;*/
?>