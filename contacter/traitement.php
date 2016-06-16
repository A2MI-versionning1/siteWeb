<?php
//Connexion à la base de donnée

$bdd = 'a&mbdd';

$host = "localhost" ;

$user = "root" ;

$mdp = "root" ;

$connect = mysql_connect($host, $user, $mdp) ;

if ($connect > 0 )

echo " connexion réussie" ;

else

echo "Echec de connexion – Veuillez contacter l’adminstrateur" ;

mysql_select_db($bdd) or die("Erreur de connexion à la base de donnée" );

 
//On insère les informations du formulaire dans la table

$sql="insert into contact (nom, prenom, societe, adresse, codePostal, ville, telephone, email, field4, comments) values ('$nom','$prenom','$societe','$adresse','$codePostal','$ville','$telephone','$email','$field4','$comments')" ;

$result = mysql_query('$sql');

 
//On ferme la connexion

mysql_close();

 
?>