<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Supprimer salle</title>
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
	
		<h1><a>Supprimer salle</a></h1>
		<form id="form_1078337" class="appnitro"  method="post" action="supprimeSalle.php">
					<div class="form_description">
			<h2>Supprimer salle</h2>
			<p>Veuillez identifierla salle a supprimer ci-dessous.</p>
		</div>						
			<ul >
			<div class="right">
			<li id="li_4" >
		<label class="description" for="element_6">ID salle </label>
			<select class="element select medium" id="id_salle" name="id_salle"> 
			<option selected>Choisissez un ID </option>
			<?php
mysql_connect("127.0.0.1", "root", "");
mysql_select_db("succursale");
 
$reponse = mysql_query("SELECT id_salle FROM salle");
while ($donnees =  mysql_fetch_array($reponse))
{
?>
<option value="<?php echo $donnees['id_salle'] ?>"><?php echo $donnees['id_salle'] ?></option>
   <?php
   }
   ?>
			
			</select>
			</div>
			</li>
			<li class="buttons">
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Supprimer" />
		</li>

			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>