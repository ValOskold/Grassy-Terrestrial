<?php
//processing-login.php
session_start();

//receive variables
$userName = $_POST["userName"];
$passWord = $_POST["password"];

//put this part in a seperate file
$dsn = "mysql:host=localhost;dbname=healthtrackerapp;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);


if (isset($_POST['cb'])){
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
    ?>
    <li>
    <a href="dashboard_doctor.php">
      <?php
      echo("Log in Successful, click to visit dashboard!")
      ?>
    </a>
    </li>
    <?php
  }
  else{
    //get the user to try to log in again, redirect to login page
    ?>
    <li>
    <a href="login.php">
    	<?php
    	echo("Account not found, return home")
    	?>
    </a>
    </li>
    <?php
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
    ?>
    <li>
    <a href="dashboard_patient.php">
      <?php
      echo("Log in Successful, click to visit dashboard!")
      ?>
    </a>
    </li>
    <?php
  }
  else{
    //get the user to try to log in again, redirect to login page
    ?>
    <li>
    <a href="login.php">
      <?php
      echo("Account not found, return home")
      ?>
    </a>
    </li>
    <?php
  }

}

?>
