<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Succursale</title>
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
	<link rel="stylesheet" href="bootstrap/styles.css">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="bootstrap/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="bootstrap/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="bootstrap/css/creative.css" type="text/css">

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
		                                  <a href='config/deconnexion.php'>déconnexion <?php echo $_SESSION['login'] ;?></a>
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
            <li><a href="admin/ajout_salle.php">Ajouter</a></li>
            <li><a href="admin/suppression_salle.php">Supprimer</a></li>
            <li><a href="admin/modification_salle.php">Modifier</a></li>
        </ul>
		</li>
    <li>
        <a href="#">Gestion des formations</a>
        <ul>
            <li><a href="admin/ajout_formation.php">Ajouter</a></li>
            <li><a href="admin/suppression_formation.php">Supprimer</a></li>
            <li><a href="admin/modification_formation.php">Modifier</a></li>
        </ul>
    </li>
    <li><a href="#">Gestion des clients</a>
		<ul>
            <li><a href="admin/ajout_client.php">Ajouter</a></li>
            <li><a href="admin/suppression_client.php">Supprimer</a></li>
            <li><a href="admin/modification_client.php">Modifier</a></li>
        </ul>
		</li>
    <li><a href="#">Gestions des formateurs</a>
		<ul>
            <li><a href="admin/ajout_formateur.php">Ajouter</a></li>
            <li><a href="admin/suppression_formateur.php">Supprimer</a></li>
            <li><a href="admin/modification_formateur.php">Modifier</a></li>
		</ul>
	</li> 
	<li><a href="http://localhost/agenda/agenda/agenda.php?admin">Gestions du planning</a>
		
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
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="bootstrap/js/jquery.easing.min.js"></script>
    <script src="bootstrap/js/jquery.fittext.js"></script>
    <script src="bootstrap/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="bootstrap/js/creative.js"></script>

</body>

</html>