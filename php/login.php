<?php
session_start();
if(isset($_SESSION['id'])) unset($_SESSION['id']);
session_destroy();

require_once('../system/data.php');
require_once('../system/security.php');

$error = false;
$error_msg = "";
$success = false;
$success_msg = "";

// Wäre toll, wenn wir das noch hinkriegen: Success-msg nach Registration
//$success=true;
// $success_msg.="Glückwunsch! Sie haben sich erfolgreich registiert.</br> Bitte loggen Sie sich jetzt ein.";

if(isset($_POST['login_submit'])){
  if(!empty($_POST['email']) && !empty($_POST['password'])){
    $email = filter_data($_POST['email']);
    $password = filter_data($_POST['password']);

    $db = get_db_connection();
    $result = login($email,$password); //die Werte werden der login-function in data.php übergeben
//Validierung, ob der User gültig (einmalig) ist u. user_id wird an Session übergeben
    $row_count = mysqli_num_rows($result);
    if($row_count == 1){
      $user = mysqli_fetch_assoc($result);
      session_start();
      $_SESSION['id'] = $user['user_id'];
      header("Location:profil.php");
    }else{
      $error = true;
      $error_msg .= "Leider konnten wir Ihre Email oder Passwort nicht eindeutig identifizieren.</br>";
    }
  }else{
    $error = true;
    $error_msg .="Eingabe fehlt. Bitte füllen Sie beide Felder aus.<br/>";
  }
}

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
                <a class="navbar-brand page-scroll" href="../index.php">BHRT</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section class="bg-primary" id="test">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Login</h2>
                    <hr class="light">
                    <form class="form-horizontal" method="post">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">E-Mail:</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="max@muster.ch" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="password">Passwort:</label>
						  <div class="col-sm-10">
							<input type="password" class="form-control" id="password" name="password" placeholder="Passwort eingeben">
						  </div>
						</div>
            <div class="form-group">
              <div>
              <button type="submit" class="btn btn-default btn-xl sr-button" id="login_submit" name="login_submit">einloggen</button>
              </div>
            </div>
					  </form>
            <?php if($error) { ?>
              <div class="alert alert-danger">
              <?php echo $error_msg ; ?>
            </div>
            <?php } ?>
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
    <script src="../js/creative.min.js"></script>

</body>

</html>
