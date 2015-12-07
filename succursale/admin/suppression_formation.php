<?php
	$cc = 'localhost';
	$user ='root';
	$password = '';
	$connect = mysql_connect($cc,$user,$password) or die("Erreur connexion");
	$link = mysql_select_db('succursale',$connect);
	if(!isset($_POST['submit']))
	{
		$sql = "SELECT * FROM `formation`;";
		$req = mysql_query($sql) or die("Erreur lors de la selection des formations".mysql_error());
		echo "<h1>Suppression d'une formation</h1>";
		echo "<form action=\"suppression_formation.php\" method=\"post\">";
		echo "<br>Selection de la formation à supprimer<br>";
		echo "<select name=\"formation\">";
		while($rep = mysql_fetch_array($req,MYSQL_ASSOC))
		{
			echo "<option value=\"".$rep['id_formation']."\">Formation: ".$rep['id_formation']."</option>";
		}
		echo "</select>";
		echo "<br>";
		echo "<button type=\"submit\" name=\"submit\" value=\"true\">Valider</button>";
		echo "</form>";
	}
	else
	{
		$sql = "DELETE FROM `formation` WHERE `id_formation` = ".$_POST['formation'].";";
		$sql1 = "DELETE FROM `formation_salle` WHERE `id_formation` = ".$_POST['formation'].";";
		$sql2 = "DELETE FROM `formation_theme` WHERE `id_formation` = ".$_POST['formation'].";";
		mysql_query($sql2) or die("Erreur lors de la suppression de la formation".mysql_error());
		mysql_query($sql1) or die("Erreur lors de la suppression de la formation".mysql_error());
		mysql_query($sql) or die("Erreur lors de la suppression de la formation".mysql_error());
		echo "Suppression realisee avec succes";
	}
 
?>