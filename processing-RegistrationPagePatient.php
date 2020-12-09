<?php
//processing-RegistrationPagePatient

//receive input
$fName = $_POST["Fname"];
$lName = $_POST["Lname"];
$DOB = $_POST["DOB"];
$email = $_POST["Email"];
$phoneNumber = $_POST["PhoneNumber"];
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
  "INSERT INTO `patients`
  (`ID`,`fName`,`lName`,`DOB`, `Email`, `PhoneNumber`, `UserName`, `Pass`)
  VALUES
  (NULL,'$fName', '$lName', '$DOB', '$email', '$phoneNumber', '$userName', '$passWord');
  ");

$stmt->execute();


//test for error, and return stats_dens_pmf_hypergeometric
print_r($stmt->errorInfo());

if ($stmt->errorInfo()[0] === "00000"){
	echo("Thank you for registering!");
}
else {
	echo ("user failed to add try again");
}


//add an anchor that takes me back to the landing page

?>
<li>
<a href="index.html">
	<?php
	echo("Click Me to Return to the Landing Page!")
	?>
</a>
</li>
?>
