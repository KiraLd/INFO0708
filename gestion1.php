<?php
include('config/verif.php');
if($_SESSION['connect'] == false) {
?>
	


		

		Acces denied
			 <font color="red"></font></h2> 
			
		

<?php
}

elseif($_SESSION['connect'] == true) 
{
?>



<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Succursale</title>
	<link rel="stylesheet" href="styles.css">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
		<div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">										
											<li>
		                                  <a href='index.php?deco=1'>déconnexion <?php echo " $login " ;?></a>
										</li> 
										<li>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</li>               
							</ul>
		
	<form action="form.php" method="post" id="form1">
	</form>
	<ul id="menu">
    <li>
	<a href="">Gestion des salles</a>
	<ul>
			<li><button name="choix" type ="submit" form="form1" value="AjoutSalle">Ajouter</button></li>
			<li><button name="choix" type ="submit" form="form1" value="SuppressionSalle">Supprimer</button></li>
			<li><button name="choix" type ="submit" form="form1" value="ModificationSalle">Modifier</button></li>
        </ul>
		</li>
    <li>
        <a href="#">Gestion des formations</a>
        <ul>
            <li><button name="choix" type ="submit" form="form1" value="AjoutFormation">Ajouter</button></li>
			<li><button name="choix" type ="submit" form="form1" value="SuppressionFormation">Supprimer</button></li>
			<li><button name="choix" type ="submit" form="form1" value="ModificationFormation">Modifier</button></li>
        </ul>
    </li>
	<li>
        <a href="#">Gestion des thèmes</a>
        <ul>
            <li><button name="choix" type ="submit" form="form1" value="AjoutTheme">Ajouter un thème</button></li>
			<li><button name="choix" type ="submit" form="form1" value="AjoutSousTheme">Ajouter un sous-thème</button></li>
        </ul>
    </li>
    <li><a href="#">Gestion des clients</a>
		<ul>
            <li><button name="choix" type ="submit" form="form1" value="AjoutClient">Ajouter un client</button></li>
			<li><button name="choix" type ="submit" form="form1" value="SuppressionClient">Retirer un client</button></li>
        </ul>
		</li>
    <li><a href="#">Gestions des formateurs</a>
		<ul>
		<li><button name="choix" type ="submit" form="form1" value="AjoutFormateur">Ajouter un formateur</button></li>
			<li><button name="choix" type ="submit" form="form1" value="SuppressionFormateur">Retirer un formateur</button></li>
		</li> 
		</ul>
	<li><a href="/agenda/agenda.php?admin">Gestions du planning</a>
		
		</li>		
	
	</ul>
        </div>
		</div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
            
				
            </div>
        </div>
    </header>

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
<?php } ?>