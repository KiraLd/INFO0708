<?php

	try{
		
		$cc = 'localhost';
		$user = 'root';
		$password = '';
		$connect = mysql_connect($cc,$user,$password,'succursale');
		
		if (isset($_POST['ID_SUCCURSALE']) AND isset($_POST['NUMERO'])AND isset($_POST['CAPACITE']))
		{
		//$ID_SALLE = $_POST["ID_SALLE"];
		$ID_SUCCURSALE = $_POST["ID_SUCCURSALE"];
		$NUMERO = $_POST["NUMERO"];
		$CAPACITE = $_POST["CAPACITE"];
		
		/*if (empty($ID_SALLE))
		{
		  echo ("Saisissez l'id de la salle");
		  exit();
		 }*/
		if (empty($ID_SUCCURSALE))
		 {
		  echo ("Saisissez l'id de la succursale");
		  exit();
		 }
		if (empty($NUMERO))
		 {
		  echo ("Saisissez le numero de la salle");
		  exit();
		 }
		 if (empty($CAPACITE))
		 {
		  echo ("Saisissez la capacité de la salle");
		  exit();
		 }
		 
		mysql_query ("Insert INTO succursale.salle VALUES (NULL, ' ".$ID_SUCCURSALE." ',' " .$NUMERO. " ', ' " .$CAPACITE. " ')");
		echo mysql_error();
		mysql_close();
		echo ("ajout avec succes");
		
		}		
		}catch ( PDOException $e) {

				echo "connexion impossible : ".$e->getMessage();
			}
?>