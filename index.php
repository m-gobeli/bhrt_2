<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BHRT Laufbahnberatung</title>

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">BHRT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="php/login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<!-- /. Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Was für ein Typ bist du?<br>Finde es heraus!</h1>
                <hr>
                <p>Hier kannst Du einen Test machen, der Dir als Hilfestellung zur Laufbahngestaltung dient. Nachdem Du alle Fragen des Tests beantwortet hast, kriegst Du eine Einschätzung in bestimmte berufsrelevante Typologien. Worauf wartest du noch?</p>
				<div class="col-lg-4 col-lg-offset-2 text-center">
                <a href="#registration" class="btn btn-primary btn-xl page-scroll">Jetzt registrieren!</a>
				</div>
				<div class="col-lg-4 text-center">
				<a href="#personalberater" class="btn btn-primary btn-xl page-scroll">Infos für Personalberater</a>
				</div>
            </div>
        </div>
    </header>
	<!-- Header Ende -->


	<!-- Registrierung -->
	<section class="bg-primary" id="registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Registrieren</h2>
                    <hr class="light">
                    <p>Gleich gehts los... Bevor der Test beginnt, musst Du Dich noch kurz registrieren.<br>Du hast schon ein Profil? Ja dann los, logge Dich <a href="html/login.php">hier</a> ein.</p>
                    <form class="form-horizontal" id="registration_form" action="index.php" method="post">
                      <!--stimmt diese "Action"? weiss nicht wohin schicken :)-->
          						<div class="form-group">
          						  <label class="control-label col-sm-2 field required" for="firstname">Vorname*:</label>
          						  <div class="col-sm-10">
          							<input type="text" class="form-control" id="firstname" tabindex="1" name="firstname" placeholder="Max" value="">
          						  </div>
          						</div>
          						<div class="form-group">
          						  <label class="control-label col-sm-2 field required" for="lastname">Nachname*:</label>
          						  <div class="col-sm-10">
          							<input type="text" class="form-control" id="lastname" tabindex="2" name="lastname" placeholder="Muster" value="">
          						  </div>
          						</div>
                      <div class="form-group">
                        <label class="control-label col-sm-2 field required" for="taetigkeit">Tätigkeit*:</label>
                        <div class="col-sm-10">
                        <select name="taetigkeit" class="form-control" id="taetigkeit" tabindex="3">
                          <option value="schueler" selected>SchülerIn</option>
                          <option value="student">StudentIn</option>
                          <option value="berufstaetig">Berufstätig</option>
                        </select>
                        </div>
                      </div>
          						<div class="form-group">
          						  <label class="control-label col-sm-2 field required" for="email">E-Mail*:</label>
          						  <div class="col-sm-10">
          							<input type="email" class="form-control" id="email" tabindex="4" name="email" placeholder="max@muster.ch" value="">
          						  </div>
          						</div>
          						<div class="form-group">
          						  <label class="control-label col-sm-2 field required" for="pwd">Passwort*:</label>
          						  <div class="col-sm-10">
          							<input type="password" class="form-control" id="pwd" tabindex="5" name="pwd" placeholder="Passwort eingeben">
          						  </div>
          						</div>
                      <div class="form-group">
          						  <label class="control-label col-sm-2 field required" for="confirm_pwd">Passwort bestätigen*:</label>
          						  <div class="col-sm-10">
          							<input type="password" class="form-control" id="confirm_pwd" tabindex="6" name="confirm_pwd" placeholder="Passwort wiederholen">
          						  </div>
          						</div>
          						<div class="form-group">
          						  <div>
          							<button type="submit" class="btn btn-default btn-xl sr-button" id="registration_submit" tabindex="7" name="registration_submit">Test starten!</button>
          						  </div>
          						</div>
					  </form>
					</div>
			</div>
		</div>
	</section>
<!--Ende Registrierung -->

<!-- Über BHRT -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Wofür steht BHRT?</h2>
                    <hr class="primary">
                    <p>Das ist kurz für Business Human Resources Typologies. Klingt wichtig. Ist es auch.<br>Für Dich persönlich. Es zeigt Dir auf, welche berufsrelevanten Rollen Dir liegen. Ob nun zur Selbsteinschätzung oder ob Du wissen möchtest, in welche Richtung deine Aus-/Weiterbildung gehen könnte, dieser Test hilft Dir in jeder Lebenslage weiter.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Ende Über BHRT -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
