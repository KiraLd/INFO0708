<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Nouveau Client</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Ajout d'un nouveau client</a></h1>
		<form id="form_1078337" class="appnitro"  method="post" action="ajout_client.php">
					<div class="form_description">
			<h2>Ajout d'un nouveau client</h2>
			<p>Veuillez remplir le formulaire d'ajout ci-dessous.</p>
		</div>						
			<ul >
			
		<li id="li_8" >
		<label class="description" for="NOM">Nom du Client </label>
		<div>
			<input id="NOM" name="NOM" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="TELEPHONE">Numero de téléphone </label>
		<div>
			<input id="TELEPHONE" name="TELEPHONE" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="MAIL">Email </label>
		<div>
			<input id="MAIL" name="MAIL" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="ADRESSE">Adresse </label>
		<div>
			<input id="ADRESSE" name="ADRESSE" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
		
			
		<li class="buttons">
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Ajouter" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
<?php

	try{
		
		$cc = 'localhost';
		$user = 'root';
		$password = '';
		$connect = mysql_connect($cc,$user,$password,'succursale');
		
		if (isset($_POST['NOM']) AND isset($_POST['ADRESSE'])AND isset($_POST['TELEPHONE'])AND isset($_POST['MAIL']))
		{
		//$ID_SALLE = $_POST["ID_SALLE"];
		
		
		$NOM = $_POST["NOM"];
		$ADRESSE = $_POST["ADRESSE"];
		$TELEPHONE = $_POST["TELEPHONE"];
		$MAIL = $_POST["MAIL"];
		
		/*if (empty($ID_SALLE))
		{
		  echo ("Saisissez l'id de la salle");
		  exit();
		 }*/
		if (empty($NOM))
		 {
		  echo ("Saisissez le nom du client");
		  exit();
		 }
		 if (empty($ADRESSE))
		 {
		  echo ("Saisissez l'adresse du client");
		  exit();
		 }
		 if (empty($TELEPHONE))
		 {
		  echo ("Saisissez le numéro de tel du client");
		  exit();
		 }
		 if (empty($MAIL))
		 {
		  echo ("Saisissez le Mail du client");
		  exit();
		 }
		
		 
		mysql_query ("Insert INTO succursale.client VALUES (NULL,' ".$NOM." ',' ".$ADRESSE." ', ' ".$TELEPHONE." ',' " .$MAIL. " ')");
		echo mysql_error();
		mysql_close();
		?>
		<script language="javascript">
		alert("ajout avec succee");
		</script>
		<?php
		}		
		}catch ( PDOException $e) {

				echo "connexion impossible : ".$e->getMessage();
			}
?>