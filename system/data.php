<?php
//DB-Verbindung aufbauen
function get_db_connection(){
  $db = mysqli_connect('localhost','392356_4_1','RSNKf=MOVweQ','392356_4_1')
    or die("Fehler beim Verbindungsaufbau mit dem Datenbank-Server.");
  mysqli_set_charset($db,"utf8");
  return $db;
}

function get_result($sql){
  //echo $sql;
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

/* *************************************************************************
/* profil.php
/* ************************************************************************* */
//Name im Profil anzeigen
function get_username($user_id){
  $sql = "SELECT * FROM user_tabelle WHERE user_id = '$user_id';";
  return get_result($sql);
}

//Profildaten aktualisieren
function update_user($user_id,$firstname,$lastname,$email,$password,$confirm_password,$taetigkeit){
  $sql_ok = false;
  $sql = "UPDATE user_tabelle SET ";
  if($firstname !=""){
    $sql.= "vorname ='$firstname', ";
    $sql_ok = true;
  }
  if($lastname !=""){
    $sql.= "name ='$lastname', ";
    $sql_ok = true;
  }
  if($email !=""){
    $sql.= "email ='$email', ";
    $sql_ok = true;
  }
  if($password !="" && $confirm_password == $password){
    $sql.= "passwort ='$password', ";
    $sql_ok = true;
  }
  $sql = substr_replace($sql,' ',-2,1);

  $sql.= "WHERE user_id = $user_id;";
  if($sql_ok){
    return get_result($sql);
  }else{
    return false;
  }
}

//Profil löschen
function delete_user($user_id){
  $sql = "DELETE FROM user_antworten WHERE user_id = '$user_id';";
  get_result($sql);
  $sql = "DELETE FROM user_tabelle WHERE user_id = '$user_id';";
  return get_result($sql);
}

/* *************************************************************************
/* alle test.php Seiten
/* ************************************************************************* */

//Fragen abrufen
function get_fragen(){
  $sql = "SELECT * FROM fragenkatalog;";
  return get_result($sql);
  }

//Antworten in DB abspeichern
  function insert_antworten($user_id, $frageid, $value){
  $sql = "INSERT INTO user_antworten (user_id, frage_id, auspraegung) VALUES ('$user_id', '$frageid', '$value');";
  return get_result($sql);
  }




?>
