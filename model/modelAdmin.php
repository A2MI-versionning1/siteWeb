<?php

require_once('model/connexion.php');

// retoune le titre de la page accueil
function getTitre($idmenu){
	$cpt = 0;
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT texttitre from TITRE natural join MENU where idmenu = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $idmenu);
	$stmt->execute();
	foreach ($stmt as $row){
		if ($cpt==$idmenu-1){
			return $row['texttitre'];
		}
		else{
			$cpt = $cpt + 1;
		}
	}	
}

?>