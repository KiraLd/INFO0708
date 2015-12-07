<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Modifier salle</title>
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
	
		<h1><a>Modifier salle</a></h1>
		
		<form id="form_1078337" class="appnitro"  method="post" action="modif_salle.php">
					<div class="form_description">
					
			<h2>Modifier salle</h2>
			<p>Veuillez remplir le formulaire de modification ci-dessous.</p>
		</div>						
			<ul >
			<div class="right">
			<li id="li_4" >
		<label class="description" for="id_salle">ID salle </label>
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

					
			<li id="li_8" >
		<label class="description" for="numero">Numéro salle</label>
		<div>
			<input id="numero" name="numero" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="capacite">Capacité salle </label>
		<div>
			<input id="capacite" name="capacite" class="element text medium" type="text" maxlength="255" value=""/> 
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