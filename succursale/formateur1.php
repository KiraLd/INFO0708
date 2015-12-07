<html lang="en">

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
		else if($_SESSION['grade']!='formateur')
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
										  <a class="page-scroll" href="#contact">Contact</a>
										</li>
											<li>
		                                  <a href="config/deconnexion.php">déconnexion </a>
										</li> 
										<li>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</li>               
							</ul>
		<ul id="menu">
    <li>
	<a href="agenda/agendaApprenant.php">Consulter le planning</a>
	
		</li>
    <li>
        <a href="#">Formations en cours</a>
        
    </li>
		
	
	</ul>
			</div>
        <!-- /.container-fluid -->
		</div>
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
              hjgj
				
            </div>
        </div>
    </header>

	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contactez nous !</h2>
                    <hr class="primary">
                    <p>Vous avez besoin de plus d'informations, appelez nous ou envoyez nous un mail !</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>33 123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:agenda@succursalereims.com">agenda@succursalereims.com</a></p>
                </div>
            </div>
        </div>
    </section>
    
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
