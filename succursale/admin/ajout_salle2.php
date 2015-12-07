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
	else
	{
		require("../config/connexion.php");
		if($co)
		{
			$req_id="select max(id_salle+1) from salle";
			$res_id=$co->query($req_id);
			$tab_id=$res_id->fetch();
			$id=$tab_id[0];

			$numero=$_POST["numero"];
			$capacite=$_POST["capacite"];
			$nb_sous_theme=$_POST["nb_sous_theme"];
			
			if($numero=='' || $capacite=='')
			{
				echo '<div>Vous devez renseignez le numéro et la capacite de la salle.<br><a href="ajout_salle.php">Retour a la page d\'ajout</a></div><br><br>';
				exit();
			}
			
			$req="Insert into salle values ('".$id."', '".$_SESSION['suc']."', ".$co->quote($numero).", ".$co->quote($capacite).")";
			
			if($co->query($req))
			{
				for($i=0; $i<$nb_sous_theme; $i++)
				{
					if(isset($_POST["theme_".$i]))
					{
						$req="Insert into salle_theme values ('".$id."', '".$i."')";
						if(!$co->query($req))
						{
							echo '<div> Echec de l\'ajout du sous thème.<br><a href="ajout_salle.php">Retour a la page d\'ajout</a></div><br><br>';
							exit();
						}
					}
				}
				header("Location: ajout_salle.php");
			}
			else
			{
				echo '<div>Echec de la requete.<br><a href="ajout_salle.php">Retour a la page d\'ajout</a></div><br><br>';
			}
		}
		else
		{
			echo '<div class="echo">Connexion à la base impossible.</div><br><br>';
		}
	unset($co);
}
?>