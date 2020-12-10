<?php
//processing-RegistrationPageDoctor

//receive input
$fName = $_POST["Fname"];
$lName = $_POST["Lname"];
$DOB = $_POST["DOB"];
$email = $_POST["Email"];
$phoneNumber = $_POST["PhoneNumber"];
$medicalEstablishment = $_POST["MedicalEstablishment"];
$medicalLocation = $_POST["MedicalLocation"];
$userName = $_POST["UserName"];
$passWord = $_POST["Pass"];

//insert a new patient into the patients DB
// $dsn = "mysql:host=localhost;dbname=healthtrackerapp;charset=utf8mb4";

// $dbusername = "root";
// $dbpassword = "";
// $pdo = new PDO($dsn, $dbusername, $dbpassword);
// $admindefault = FALSE;
//todo turn the above statement into its own file...

//connect to database
include('includes/db-config.php');

$stmt = $pdo->prepare(
  "INSERT INTO `doctors`
  (`ID`,`Fname`,`Lname`,`DOB`, `Email`, `PhoneNumber`,`MedicalEstablishment`, `MedicalLocation`, `UserName`, `Pass`)
  VALUES
  (NULL,'$fName', '$lName', '$DOB', '$email', '$phoneNumber','$medicalEstablishment', '$medicalLocation', '$userName', '$passWord');
  ");

$stmt->execute();

//test for error, and return stats_dens_pmf_hypergeometric
if ($stmt->errorInfo()[0] === "00000"){
  //echo("Thank you for registering!");
  ?>
  <script>
    alert("Account Created! Please Login.");
    window.location.replace("login.php");
  </script>
  <?php
}
else {
  //echo ("user failed to add try again");
  ?>
  <script>
    alert("User failed to add! Please try again.");
    window.location.replace("getstarted.php");
  </script>
  <?php
}
?>
