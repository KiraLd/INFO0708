<?php
		session_start();
		if(isset($_SESSION['connect'])==false)
		{
			echo 'Cette page n�cessite une Identification.<br><br><a href="index.php">Retour a la page d\'identification.</a>';
			exit();
		}
		else if($_SESSION['grade']!='gestionnaire')
		{
			echo 'Vous ne poss�dez pas le grade n�cessaire � l\'acc�s � cette page.<br><br><a href="index.php">Retour a la page d\'identification.</a>';
			exit();
		}
	?>
	
<?php
	$host = 'mysql:dbname=succursale;host=127.0.0.1';
	$user = 'root';
	$password = '';
	try
	{
		$co = new PDO($host, $user, $password);

		if (isset($_POST['id_salle']))
		{

		$id_salle = $_POST["id_salle"];
	
				echo ($id_salle);
		$co->exec("DELETE FROM succursale.formation_salle WHERE id_salle = " . $id_salle . " ") ;
		$co->exec("DELETE FROM succursale.salle_theme WHERE id_salle = " . $id_salle . " ") ;
		$co->exec("DELETE FROM succursale.salle WHERE id_salle = " . $id_salle . " ") ;
		echo ("Modification valid�e");
		}
	}
	catch (PDOException $e)
	{
		echo 'Echec de la connexion : ' . $e->getMessage();
	}
	$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
	
