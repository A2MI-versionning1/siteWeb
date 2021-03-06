<?php

require_once('../model/connexionAdmin.php');

// retourne l'image
function getImage($idimage){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT nomimage from IMAGE where idimage = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $idimage);
	$stmt->execute();
	foreach ($stmt as $row)
	return $row['nomimage'];
}

function getActu(){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT textactu from ACTU";
	$stmt=$connexion->prepare($sql);
	$stmt->execute();
	foreach ($stmt as $row)
	return $row['textactu'];
}

function getTitreMenu($id){
	$cpt = 0;
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT texttitre from TITRE natural join MENU where idmenu = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	foreach ($stmt as $row){
		if ($cpt==$id-1){
			return $row['texttitre'];
		}
		else{
			$cpt = $cpt + 1;
		}
	}	
}

function getTitreSousMenu($idtitre){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT texttitre FROM TITRE where idtitre = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $idtitre);
	$stmt->execute();
	foreach ($stmt as $row)
	return $row['texttitre'];
}

function getTitreSousSousMenu($idtitre){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT texttitre FROM TITRE where idtitre = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $idtitre);
	$stmt->execute();
	foreach ($stmt as $row)
	return $row['texttitre'];
}

function getTitre($idtitre){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT texttitre FROM TITRE where idtitre = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $idtitre);
	$stmt->execute();
	foreach ($stmt as $row)
	return $row['texttitre'];
}

// retourne le text
function getTexte($idmenu){
	$cpt = 0;
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT text from TEXT nartural join MENU where idmenu = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $idmenu);
	$stmt->execute();
	foreach ($stmt as $row){
		if ($cpt==$idmenu-1){
			return $row['text'];
		}
		else{
			$cpt = $cpt + 1;
		}
	}	
}

function getTexte2($idtext){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT text FROM text WHERE idtext = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $idtext);
	$stmt->execute();
	foreach ($stmt as $row)
	return $row['text'];
}

function updateTitre($id, $text){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="UPDATE TITRE SET texttitre = :text where idtitre = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':text', $text);
	$stmt->bindParam(':id', $id);
	$stmt->execute();
}

function updateText($id, $text){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="UPDATE TEXT SET text = :text where idtext = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':text', $text);
	$stmt->bindParam(':id', $id);
	$stmt->execute();
}

function getTitre2($idtitre){
	$connexion = connect_bd();
	$connexion->query("SET NAMES UTF8");
	$sql="SELECT texttitre FROM TITRE where idtitre = :id";
	$stmt=$connexion->prepare($sql);
	$stmt->bindParam(':id', $idtitre);
	$stmt->execute();
	foreach ($stmt as $row)
	return $row['texttitre'];
}

?>