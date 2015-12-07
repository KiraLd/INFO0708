<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Nouveau Client</title>
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
	
		<h1><a>Modification d'un  client</a></h1>
		<form id="form_1078337" class="appnitro"  method="post" action="modif_client.php">
					<div class="form_description">
			<h2>Modification d'un client</h2>
			<p>Veuillez choisir l'identifiant du client à modifier.</p>
		</div>						
			<ul >
			
					<li id="li_6" >
		<label class="description" for="id_client">Identifiant Client </label>
		<div>
			<select id="id_client" name="id_client" class="element text medium" >
				<option selected>Choisissez un id</option> 
				<?php
mysql_connect("127.0.0.1", "root", "");
mysql_select_db("succursale");
 
$reponse = mysql_query("SELECT id_client FROM client");
while ($donnees =  mysql_fetch_array($reponse))
{
?>
<option value="<?php echo $donnees['id_client'] ?>"><?php echo $donnees['id_client'] ?></option>
   <?php
   }
   ?>
				</select>
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="nom">Nom du Client </label>
		<div>
			<input id="nom" name="nom" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="numero">Numero de téléphone </label>
		<div>
			<input id="numero" name="numero" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="mail">Email </label>
		<div>
			<input id="mail" name="mail" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="adress">Adresse </label>
		
		<div>
			<input id="adress" name="adress" class="element text large" value="" type="text">
		</div>	
			
					<li class="buttons">
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Modifier" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>