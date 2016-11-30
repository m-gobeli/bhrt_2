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

  <!--Load the AJAX API-->
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
  <script type="text/javascript">

  // Load the Visualization API and the piechart,table package.
  google.load('visualization', '1', {'packages':['corechart','table']});

  function drawItems(num) {
    var jsonPieChartData = $.ajax({
      url: "getpiechartdata.php",
      data: "q="+num,
      dataType:"json",
      async: false
    }).responseText;

    var jsonTableData = $.ajax({
      url: "gettabledata.php",
      data: "q="+num,
      dataType:"json",
      async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var piechartdata = new google.visualization.DataTable(jsonPieChartData);
    var tabledata = new google.visualization.DataTable(jsonTableData);

    // Instantiate and draw our pie chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(piechartdata, {
      width: 700,
      height: 500,
      chartArea: { left:"5%",top:"5%",width:"90%",height:"90%" }
    });

    // Instantiate and draw our table, passing in some options.
    var table = new google.visualization.Table(document.getElementById('table_div'));
    table.draw(tabledata, {showRowNumber: true, alternatingRowStyle: true});
  }

  </script>
</head>
<body>
  <form>
  <select name="users" onchange="drawItems(this.value)">
  <option value="">Select a dogg:</option>
  <?php
    $dbuser="database_username";
    $dbname="database_name";
    $dbpass="database_password";
    $dbserver="database_server";
    // Make a MySQL Connection
    $con = mysql_connect($dbserver, $dbuser, $dbpass) or die(mysql_error());
    mysql_select_db($dbname) or die(mysql_error());
    // Create a Query
    $sql_query = "SELECT id, nickname FROM user ORDER BY nickname ASC";
    // Execute query
    $result = mysql_query($sql_query) or die(mysql_error());
    while ($row = mysql_fetch_array($result)){
    echo '<option value='. $row['id'] . '>'. $row['nickname'] . '</option>';
    }
    mysql_close($con);
  ?>
  </select>
  </form>
  <div id="chart_div"></div>
  <div id="table_div"></div>


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

<!-- Confirm-Box zu "Profil löschen"-Button. Nils-Code-->
<!-- wenn true (also auf ok geklickt wird), dann wir ausgeführt, andernfalls wird die Ausführung verhindert -->
  <script>
    $('.delete_profile').click(confirmDelete);
    function confirmDelete(event){
    var conf = confirm("Wollen Sie Ihr Profil wirklich löschen? Ihre Testresultate sind danach nicht mehr abrufbar.");
      if (!conf){
        event.preventDefault();
      }
    }
  </script>

</body>
</html>
