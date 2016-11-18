<?php
session_start();
if(!isset($_SESSION['id'])){
  header("Location:../index.php");
}else{
  $user_id = $_SESSION['id'];
}

  require_once('../system/data.php');
  require_once('../system/security.php');

//Profildaten abrufen
  $result = get_username($user_id);
  $user = mysqli_fetch_assoc($result);

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
                <a class="navbar-brand" href="../index.php">BHRT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="profil.php">Profil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="test.php">Test</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php">abmelden</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<!-- Userprofil -->
	<section class="bg-primary" id="userprofil">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <!-- Profildaten über Funktion get_username abrufen -->
                    <h2 class="section-heading">Dein Profil:<br><?php echo $user['vorname'] . " " . $user['name'];?></h2>
                    <hr class="light">
                    <form class="form-horizontal">
                      <p>Vorname:<?php echo " " .$user['vorname'];?></p>
                      <p>Nachname:<?php echo " " .$user['name'];?></p>
                      <p>Email:<?php echo " " .$user['email'];?></p>
                      <p>Tätigkeit:<?php echo " " .$user['taetigkeit'];?> </p>
                      </div>
          	<!--					<div class="form-group">
          						  <label class="control-label col-sm-2" for="pwd">Passwort:</label>
          						  <div class="col-sm-10">
          							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Passwort eingeben">
          						  </div>
          						</div>
          						<div class="form-group"> -->
<!-- Button, der das Modale Fenster zur Datenbearbeitung aufruft -->
                      <div>
                        <button type="button" class="btn btn-default btn-xl sr-button" data-toggle="modal" data-target="#myModal">bearbeiten</button>
                      </div>
                  </div>
					  </form>
					</div>
			</div>
		</div>
	</section>
<!-- Modales Fenster zur Userdatenaktualisierung aus w3schools -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Profildaten bearbeiten</h4>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label for="Vorname" class="col-sm-2 col-xs-12 form-control-label">Vorname</label>
            <div class="col-sm-5 col-xs-6">
              <input  type="text" class="form-control form-control-sm"
                      id="Vorname" placeholder="Max"
                      name="firstname" value="<?php echo $user['vorname'];?>">
            </div>
        </div>
        <div class="form-group row">
          <label for="Nachname" class="col-sm-2 col-xs-12 form-control-label">Nachname</label>
            <div class="col-sm-5 col-xs-6">
              <input  type="text" class="form-control form-control-sm"
                      id="Nachname" placeholder="Muster"
                      name="lastname" value="<?php echo $user['name']; ?>">
            </div>
        </div>
        <div class="form-group row">
          <label for="Email" class="col-sm-2 col-xs-12 form-control-label">Email</label>
            <div class="col-sm-5 col-xs-6">
              <input  type="email" class="form-control form-control-sm"
                      id="Email" placeholder="max.muster@gmx.ch"
                      name="lastname" value="<?php echo $user['email']; ?>">
            </div>
        </div>
<!-- Inhalt von Passwort sollte nicht angezeigt werden -->
        <div class="form-group row">
          <label for="Passwort" class="col-sm-2 col-xs-12 form-control-label">Passwort</label>
            <div class="col-sm-5 col-xs-6">
              <input  type="text" class="form-control form-control-sm"
                      id="Passwort" placeholder="Passwort"
                      name="passwort" value="<?php echo $user['name']; ?>">
            </div>
        </div>
        <div class="form-group">
          <label for="Taetigkeit" class="col-sm-2 col-xs-12 form-control-label">Tätigkeit</label>
            <div class="col-sm-5 col-xs-6">
              <select   name="taetigkeit" class="form-control form-control-sm" id="taetigkeit">
                <option selected="<?php echo $user['taetigkeit'];?>"></option>
                <option value="schueler" selected>SchülerIn</option>
                <option value="student">StudentIn</option>
                <option value="berufstaetig">Berufstätig</option>
              </select>
            </div>
        </div>

      </div>

<!-- Speichern-Button -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-xl sr-button" data-dismiss="modal">Speichern</button>
      </div>
    </div>

  </div>
</div>
<!-- Testergebnisse User -->
    <section id="testergebnisse">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Dein Typ</h2>
                    <hr class="light">
                    <p>Hier wird die Auswertung des Users dargestellt. Dazu braucht es eine neue Funktion in data.php </p>
                    <a href="test.php" class="page-scroll btn btn-default btn-xl sr-button">Test wiederholen</a>
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
