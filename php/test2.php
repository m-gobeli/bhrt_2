<?php
session_start();
if(!isset($_SESSION['id'])){
  header("Location:../index.php");
}else{
  $user_id = $_SESSION['id'];
}

  require_once('../system/data.php');
  require_once('../system/security.php');
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
                <a class="navbar-brand" href="#page-top">BHRT</a>
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
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">11</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">12</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">13</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">14</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">15</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">16</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">17</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">18</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">19</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading">20</h3>
                  <div class="boxed">
                    <p> Fragentext</p>
                      <div class"col-lg-8 col-lg-offset-2">
                        <form>
                          <input type="range" name="points" min="0.1" max="0.9" step="0.1">
                            <div class="col-lg-4 left">
                              <p>geringes Interesse</p>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 right">
                              <p>grosses Interesse</p>
                            </div>
                        </form>
                      </div>
                  </div>
                  <a href="../php/test3.php" class="btn btn-default btn-xl sr-button">weiter</a>
              </div>
          </div>
        </div>

    </section>
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
