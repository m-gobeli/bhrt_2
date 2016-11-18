<?php
//DB-Verbindung aufbauen
function get_db_connection(){
  $db = mysqli_connect('localhost','392356_4_1','RSNKf=MOVweQ','392356_4_1')
    or die("Fehler beim Verbindungsaufbau mit dem Datenbank-Server.");
  mysqli_set_charset($db,"utf-8");
  return $db;
}

function get_result($sql){
  echo $sql;
  $db = get_db_connection();
  $result = mysqli_query($db,$sql);
  mysqli_close($db);
  return $result;
}

/* *************************************************************************
/* index.php
/* ************************************************************************* */

//Neuen User registrieren
function register($firstname,$lastname,$taetigkeit,$email, $password){
  $sql = "INSERT INTO user_tabelle (vorname,name,taetigkeit,email,passwort) VALUES ('$firstname','$lastname','$taetigkeit','$email','$password');";
  return get_result($sql);
}

/* *************************************************************************
/* login.php
/* ************************************************************************* */
//Login-Abgleich mit DB-Eintrag
function login($email,$password){
  $sql = "SELECT * FROM user_tabelle WHERE email = '$email' AND passwort = '$password';";
  return get_result($sql);
}









?>
