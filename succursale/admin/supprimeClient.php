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

		if (isset($_POST['id_client']))
		{

		$id_client = $_POST["id_client"];
	
				echo ($id_client);

$co->exec("DELETE FROM succursale.client WHERE id_client = " . $id_client . " ") ;
		echo ("Modification valid�e");
		}
	}
	catch (PDOException $e)
	{
		echo 'Echec de la connexion : ' . $e->getMessage();
	}
	$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
	
