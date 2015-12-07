<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Modification des informations du Formateur</title>
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
	
		<h1><a>Modification des informations du Formateur</a></h1>
		<form id="form_1078337" class="appnitro"  method="post" action="modif_formateur.php">
					<div class="form_description">
			<h2>Modification des informations du Formateur</h2>
			<p>Veuillez modifier les informations ci-dessous.</p>
		</div>						
			<ul >
			<div class="right">
			<li id="li_4" >
		<label class="description" for="element_6">ID Formateur </label>
			<select class="element select medium" id="id_formateur" name="id_formateur"> 
			<option selected>Choisissez un ID Formateur </option>
			<?php
mysql_connect("127.0.0.1", "root", "");
mysql_select_db("succursale");
 
$reponse = mysql_query("SELECT id_personne FROM formateur");
while ($donnees =  mysql_fetch_array($reponse))
{
?>
<option value="<?php echo $donnees['id_personne'] ?>"><?php echo $donnees['id_personne'] ?></option>
   <?php
   }
   ?>
			</select>
			</div>
			</li>
			
			<li id="li_3" >
		<label class="description" >Nom et Prénom </label>
		<span>
			<input id="nom" name= "nom" class="element text" maxlength="255" size="8" value=""/>
			<label>Nom</label>
		</span>
		<span>
			<input id="prenom" name= "prenom" class="element text" maxlength="255" size="14" value=""/>
			<label>Prénom</label>
		</span> 
		</li>		<li id="li_4" >
		<label class="description" for="mail">Email </label>
		<div>
			<input id="mail" name="mail" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Identifiants d'accès</h3>
			<p></p>
		</li>		<li id="li_1" >
		<label class="description" for="login">Login </label>
		<div>
			<input id="login" name="login" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="mdp">Mot de passe </label>
		<div>
			<input id="mdp" name="mdp" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">

				<input id="saveForm" class="button_text" type="submit" name="submit" value="Modifier" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>