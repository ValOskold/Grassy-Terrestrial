<?php
//processing-login.php
session_start();

//receive variables
$userName = $_POST["userName"];
$passWord = $_POST["password"];
$successD = '{"success":"true"}';
$successP = '{"success":"true2"}';
$failed = '{"success":"false"}';

//connect to database
include('includes/db-config.php');


if (isset($_POST["cb"])){
  //this means we should try logging in as a doctor
  $stmt = $pdo->prepare("SELECT * FROM `doctors`
	WHERE `UserName` = '$userName'
	AND `Pass` = '$passWord'");

  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row){
    //if there is a target
    $_SESSION["ID"] = $row["ID"];
    $_SESSION["ROLE"] = "Doctor";
    echo($successD);
  }
  else{
    //get the user to try to log in again, redirect to login page
    echo($failed);
  }

}
else {
  //this means we should try logging in as a patient
  $stmt = $pdo->prepare("SELECT * FROM `patients`
  	WHERE `UserName` = '$userName'
  	AND `Pass` = '$passWord'");

  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row){
    //if there is a target
    $_SESSION["ID"] = $row["ID"];
    $_SESSION["ROLE"] = "Patient";
    echo($successP);
  }
  else{
    //get the user to try to log in again, redirect to login page
    echo($failed);
  }

}

?>
