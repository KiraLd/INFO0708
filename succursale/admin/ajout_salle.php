<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ajout salle</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
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
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Ajouter salle</a></h1>
		<form id="form_1078337" class="appnitro"  method="post" action="ajout_salle2.php">
					<div class="form_description">
			<h2>Ajouter salle</h2>
		</div>
			
			<label for="numero">Numero de la salle :</label><br />
			<input type="number" min='0' name="numero"/><br />
			<br>
			<label for="capacite">Capacite de la salle :</label><br />
			<input type="number" min='0' name="capacite"/><br >
			<br>
			<label for="capacite">Choix des themes de la salle :</label><br />
			<?php
				require("../config/connexion.php");
				$req="select * from sous_theme";
				$res=$co->query($req);
				$tab=$res->fetchAll();
				$i=0;
				foreach($tab as $ligne)
				{
					echo '<input type="checkbox" name="theme_'.$ligne["id_sous_theme"].'" value="'.$ligne["id_sous_theme"].'">'.$ligne['code'].' : '.$ligne['libelle'].'</input><br>';
					$i++;
				}
				echo '<input type="hidden" name="nb_sous_theme" value="'.$i.'">';
				unset($co);
			?>
			
			<input type="submit" class="button_text" name="submit" value="Envoyer" />
		</form>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>