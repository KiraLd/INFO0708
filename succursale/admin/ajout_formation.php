<?php
	session_start();
	$cc = 'localhost';
	$user ='root';
	$password = '';
	$connect = mysql_connect($cc,$user,$password) or die("Erreur connexion");
	$link = mysql_select_db('succursale',$connect);
	if(!isset($_SESSION['sousTheme']))
	{
		$_SESSION['sousTheme'] = -1;
	}
	if(isset($_POST['submit'])==false AND $_SESSION['sousTheme'] == -1)
	{
		$sql = "SELECT * FROM `succursale`.`sous_theme`;";
		$req = mysql_query($sql) or die("Erreur selection des sous themes: ".mysql_error());
		if(mysql_num_rows($req) >0)
		{
			echo "<h1>Ajout d'une formation</h1>";
			echo "<form action=\"ajout_formation.php\" method=\"post\">";
			echo "Themes: <br>";
			while($rep = mysql_fetch_array($req,MYSQL_ASSOC))
			{
				echo "<input type=\"checkbox\" name=\"sousTheme[]\" value=\"".$rep['id_sous_theme']."\">".$rep['libelle']."</input>";
				echo "<br>";
			}
			echo "<button type=\"submit\" name=\"submit\" value=\"true\">Valider</button>";
			echo "</form>";
		}
	}
	else
	{
		if(!empty($_POST['sousTheme']))
		{
			$sql = "SELECT `succursale`.`salle`.* FROM `salle`, `salle_theme` WHERE ";
			$sql = $sql."`succursale`.`salle_theme`.`id_sous_theme` = ".$_POST['sousTheme'][0]." AND `succursale`.`salle`.`id_salle` = `succursale`.`salle_theme`.`id_salle`;";
			$req = mysql_query($sql) or die("Erreur lors de la selection des salles".mysql_error().$sql);
			echo "<form action = \"ajout_formation.php\" method = \"post\">";
			echo "Choix de la salle: <br>";
			echo "<select name =\"salle\">";
			while($rep = mysql_fetch_array($req,MYSQL_ASSOC))
			{
				echo "<option value=\"".$rep['id_salle']."\">Capacité: ".$rep['capacite']."</option>";
			}
			echo "</select>";
			echo "<br>";
			$sql = "SELECT `succursale`.`formateur`.* FROM `formateur`, `formateur_theme` WHERE ";
			$sql = $sql."`succursale`.`formateur_theme`.`id_sous_theme` = ".$_POST['sousTheme'][0]." AND `succursale`.`formateur`.`id_personne` = `succursale`.`formateur_theme`.`id_personne`;";
			$req = mysql_query($sql) or die("Erreur lors de la selection des formateurs".mysql_error().$sql);
			echo "Choix du formateur: <br>";
			echo "<select name =\"formateur\">";
			while($rep = mysql_fetch_array($req,MYSQL_ASSOC))
			{
				echo "<option value=\"".$rep['id_personne']."\">".$rep['nom']." ".$rep['prenom']."</option>";
			}
			echo "</select>";
			echo "<br>";
			echo "<button type=\"submit\" name=\"submit2\" value=\"".$_POST['sousTheme'][0]."\">Valider</button>";
			echo "</form>";
			$_SESSION['sousTheme'] = $_POST['sousTheme'][0];
		}
		else if(!isset($_POST['submit2']))
		{
		    $_SESSION['sousTheme'] = -1;
			die("Erreur lors de la sélection des sous-thème");
		}
		else
		{
			$sql = "SELECT MAX(`id_formation`) AS `ID` FROM `formation`;";
			$req = mysql_query($sql) or die("Erreur lors de la sélection de l'id");
			$rep = mysql_fetch_array($req,MYSQL_ASSOC);
			$sql = "INSERT INTO `formation` (`id_formation`,`id_personne`,`annulation`) VALUES "; 
			$sql = $sql."(\" ".($rep['ID']+1)."\", \"".$_POST['formateur']."\",NULL);";
			mysql_query($sql) or die("Erreur lors de l'ajout de la formation".$sql.mysql_error());
			
			$id =$rep['ID']+1;
			$sql = "INSERT INTO `formation_salle`(`id_salle`,`id_formation`) VALUES (\"".$_POST['salle']."\",\"".$id."\");";
			mysql_query($sql) or die("Erreur lors de l'ajout de la formation_salle".$sql.mysql_error());
			
			$sql = "INSERT INTO `formation_theme`(`id_sous_theme`,`id_formation`) VALUES (\"".$_SESSION['sousTheme']."\",\"".$id."\");";
			mysql_query($sql) or die("Erreur lors de l'ajout de la formation_theme".$sql.mysql_error());
			echo "Formation ajoutée avec succès!";
			$_SESSION['sousTheme'] = -1;
		}
		
	}
?>