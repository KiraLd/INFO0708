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

		if (isset($_POST['id_formateur']) AND isset($_POST['nom'])AND isset($_POST['prenom'])AND isset($_POST['mail'])AND isset($_POST['login'])AND isset($_POST['mdp']))
		{

		$id_formateur = $_POST["id_formateur"];
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$mail = $_POST["mail"];
		$login = $_POST["login"];
		$mdp = $_POST["mdp"];

		
		
		if (empty($nom))
		 {
		  echo ("Saisissez le nom du formateur");
		  exit();
		 }
		if (empty($prenom))
		 {
		  echo ("Saisissez le prènom du formateur");
		  exit();
		 }
		 if (empty($mail))
		 {
		  echo ("Saisissez le mail du formateur");
		  exit();
		 }
		 if (empty($login))
		 {
		  echo ("Saisissez le login");
		  exit();
		 }
		 if (empty($mdp))
		 {
		  echo ("Saisissez le mot de passe");
		  exit();
		 }
		 
		 $co->exec("UPDATE succursale.formateur SET nom='" . $nom ."', prenom = '" . $prenom . "', mail= '" . $mail . "' ,login = '" . $login . "' ,mdp= '" . $mdp . "' WHERE id_personne = '" . $id_formateur . "' ") ;
		echo ("Modification validée");
		}
	}
	catch (PDOException $e)
	{
		echo 'Echec de la connexion : ' . $e->getMessage();
	}
	$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
	
