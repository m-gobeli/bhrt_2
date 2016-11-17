<?php
session_start();
if(!isset($_SESSION['id'])){
  header("Location:index.php");
}else{
  $user_id = $_SESSION['id'];
}

  require_once('system/data.php');
  require_once('system/security.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BHRT Laufbahnberatung</title>

    <!-- Bootstrap CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">BHRT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<!-- Registrierung -->
	<section class="bg-primary" id="registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Dein Profil <br> *Name User*</h2>
                    <hr class="light">
                    <form class="form-horizontal">
          				  <div>
                      <p>Vorname:<?php echo $user['firstname'] . " " . $user['lastname']; ?></p>
                      <p>Nachname: *PHP* </p>
                      <p>Email: PHP </p>
                      <p>Tätigkeit: </p>
                      </div>



          	<!--					<div class="form-group">
          						  <label class="control-label col-sm-2" for="pwd">Passwort:</label>
          						  <div class="col-sm-10">
          							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Passwort eingeben">
          						  </div>
          						</div>
          						<div class="form-group"> -->
          						  <div>
          							<button type="submit" class="btn btn-default btn-xl sr-button">bearbeiten</button>
          						  </div>
          						</div>
					  </form>
					</div>
			</div>
		</div>
	</section>


    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Dein Typ</h2>
                    <hr class="light">
                    <p>Lorem Impsum Datenbank-Abfrage lalala. </p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Jetzt loslegen!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="kontakt">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-6 col-sm-6">
                    <a href="img/portfolio/fullsize/typologien.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/typologien.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Test für...
                                </div>
                                <div class="project-name">
                                    Schüler<br>Studenten<br>Berufstätige
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <a href="img/portfolio/fullsize/personalberater.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/personalberater.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Weiterführende Infos für...
                                </div>
                                <div class="project-name">
                                    Personalberater
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Empfehle den Test Deinen Freunden weiter!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Jetzt teilen</a>
            </div>
        </div>
    </aside>

    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Du hast eine Frage?</h2>
                    <hr class="primary">
                    <p>Wir stehen Dir gerne Rede und Antwort. Ruf uns an oder schicke uns eine E-Mail und wir werden uns schnellstmöglich bei Dir zurückmelden.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>081-286-24-24</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:hochschule@htwchur.ch">info@bhrt.ch</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
