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

		if (isset($_POST['id_client']) AND isset($_POST['numero'])AND isset($_POST['nom'])AND isset($_POST['mail'])AND isset($_POST['adress']))
		{

		$id_client = $_POST["id_client"];
		$nom = $_POST["nom"];
		$numero = $_POST["numero"];
		$mail = $_POST["mail"];
		$adress = $_POST["adress"];
		
		
		if (empty($nom))
		 {
		  echo ("Saisissez le nom du client");
		  exit();
		 }
		if (empty($numero))
		 {
		  echo ("Saisissez le numero du client");
		  exit();
		 }
		 if (empty($mail))
		 {
		  echo ("Saisissez le mail du client");
		  exit();
		 }
		 if (empty($adress))
		 {
		  echo ("Saisissez l'asresse du client");
		  exit();
		 }
		 
		 $co->exec("UPDATE succursale.client SET nom='" . $nom ."', telephone = '" . $numero . "', mail= '" . $mail . "' ,adresse = '" . $adress . "'WHERE id_client = '" . $id_client . "' ") ;
		echo ("Modification valid�e");
		}
	}
	catch (PDOException $e)
	{
		echo 'Echec de la connexion : ' . $e->getMessage();
	}
	$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
	
