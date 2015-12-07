<?php
		session_start();
		if(isset($_SESSION['connect'])==false)
		{
			echo 'Cette page nécessite une Identification.<br><br><a href="index.php">Retour a la page d\'identification.</a>';
			exit();
		}
		else if($_SESSION['grade']!='gestionnaire')
		{
			echo 'Vous ne possédez pas le grade nécessaire à l\'accès à cette page.<br><br><a href="index.php">Retour a la page d\'identification.</a>';
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

		if (isset($_POST['id_salle']) AND isset($_POST['numero'])AND isset($_POST['capacite']))
		{

		$id_salle = $_POST["id_salle"];
		$numero = $_POST["numero"];
		$capacite = $_POST["capacite"];
		
		
		
		if (empty($numero))
		 {
		  echo ("Saisissez le numero de la salle");
		  exit();
		 }
		 if (empty($capacite))
		 {
		  echo ("Saisissez la capacité de la salle");
		  exit();
		 }
		 
		 $co->exec("UPDATE succursale.salle SET  numero = '" . $numero . "', capacite = '" . $capacite . "'WHERE id_salle = '" . $id_salle . "' ") ;
		echo ("Modification validée");
		}
	}
	catch (PDOException $e)
	{
		echo 'Echec de la connexion : ' . $e->getMessage();
	}
	$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
	
