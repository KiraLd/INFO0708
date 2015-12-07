<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Nouveau Formateur</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Ajout d'un nouveau formateur</a></h1>
		<form id="form_1078337" class="appnitro"  method="post" action="NewFormateur.php">
					<div class="form_description">
			<h2>Ajout d'un nouveau formateur</h2>
			<p>Veuillez remplir le formulaire d'ajout ci-dessous.</p>
		</div>						
			<ul >
			
					<li id="li_6" >
		<label class="description" for="ID_PERSONNE">Identifiant Personne </label>
		<div>
			<input id="ID_PERSONNE" name="ID_PERSONNE" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="NOM">Nom et Prénom </label>
		<span>
			<input id="NOM" name= "NOM" class="element text" maxlength="255" size="8" value=""/>
			<label>Nom</label>
		</span>
		<span>
			<input id="PRENOM" name= "PRENOM" class="element text" maxlength="255" size="14" value=""/>
			<label>Prénom</label>
		</span> 
		</li>		<li id="li_4" >
		<label class="description" for="MAIL">Email </label>
		<div>
			<input id="MAIL" name="MAIL" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Identifiants d'accès</h3>
			<p></p>
		</li>		<li id="li_1" >
		<label class="description" for="LOGIN">Login </label>
		<div>
			<input id="LOGIN" name="LOGIN" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="MDP" >Mot de passe </label>
		<div>
			<input id="MDP" name="MDP" class="element text medium" type="text" maxlength="255" value=""/> 
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
		
		if (isset($_POST['ID_PERSONNE']) AND isset($_POST['LOGIN'])AND isset($_POST['MDP'])AND isset($_POST['NOM'])AND isset($_POST['PRENOM'])AND isset($_POST['MAIL']))
		{
		//$ID_SALLE = $_POST["ID_SALLE"];
		$ID_PERSONNE = $_POST["ID_PERSONNE"];
		$LOGIN = $_POST["LOGIN"];
		$MDP = $_POST["MDP"];
		$NOM = $_POST["NOM"];
		$PRENOM = $_POST["PRENOM"];
		$MAIL = $_POST["MAIL"];
		
		/*if (empty($ID_SALLE))
		{
		  echo ("Saisissez l'id de la salle");
		  exit();
		 }*/
		if (empty($ID_PERSONNE))
		 {
		  echo ("Saisissez l'id de la personne");
		  exit();
		 }
		 if (empty($LOGIN))
		 {
		  echo ("Saisissez le login");
		  exit();
		 }
		 if (empty($MDP))
		 {
		  echo ("Saisissez le mot de passe");
		  exit();
		 }
		 if (empty($NOM))
		 {
		  echo ("Saisissez le nom du formateur");
		  exit();
		 }
		if (empty($PRENOM))
		 {
		  echo ("Saisissez le prénom du formateur");
		  exit();
		 }
		 if (empty($MAIL))
		 {
		  echo ("Saisissez l'email  du formateur");
		  exit();
		 }
		 
		mysql_query ("Insert INTO succursale.formateur VALUES (NULL,' ".$ID_PERSONNE." ',' ".$LOGIN." ', ' ".$MDP." ',' " .$NOM. " ', ' " .$PRENOM. "',' " .$MAIL. " ')");
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