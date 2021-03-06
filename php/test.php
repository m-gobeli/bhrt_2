<?php
session_start();
if(!isset($_SESSION['id'])){
  header("Location:../index.php");
}else{
  $user_id = $_SESSION['id'];
}

  require_once('../system/data.php');
  require_once('../system/security.php');

$frageliste = get_fragen();
// Antworten in DB abspeichern
if(isset($_POST['test_submit'])){
  foreach ($_POST as $key => $value) {
    $frageid = substr($key , 5);
    //echo "Die Frage $frageid hat den Wert $value. <br>";
    $result = insert_antworten($user_id, $frageid, $value);
  header("Location:profil.php");
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
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

    <!-- eigenes CSS-->
    <link href="../css/design.css" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

<!-- Navbar -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top nav-black">
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
    <aside class="bg-dark">
      <br>
      <br>
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Starte jetzt deinen Laufbahntest</h2>
                  <p>Finde heraus was für ein Typ du bist und welche Berufsfelder am besten für dich geeignet sind</p>
            </div>
        </div>
    </aside>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Wie stark interessierst du dich für folgende Tätigkeiten?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>

        <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
        <?php while($frage = mysqli_fetch_assoc($frageliste)){  ?>
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading"><?php echo $frage['sortierungs_schluessel'] ?></h3>
                  <div class="boxed">
                    <p>
                      <?php
                        echo $frage['inhalt'];
                        $frage_id = $frage['frage_id'];
                        ?>
                    </p>
                      <div class"col-lg-8 col-lg-offset-2">
                          <input type="range" class="input[type=range]" name="frage<?php echo $frage_id; ?>" id="frage<?php echo $frage_id; ?>" min="1" max="9" step="1">
                            <div class="col-xs-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-xs-4 col-xs-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>
        <div style="text-align:center">
          <input type="submit" name="test_submit" class="btn btn-default btn-xl sr-button" value="Jetzt auswerten!">
        </div>
        </form>
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
