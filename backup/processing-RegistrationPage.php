<?php
//processing-RegistrationPage.php

//receive input
$userName=$_POST ["userName"];
$emailAddress=$_POST ["emailAddress"];
$passPhrase=$_POST["password"];
//insert a new person row in the person table

$dsn = "mysql:host=localhost;dbname=healthtrackerapp;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `users`");

$stmt->execute();

//todo turn this look into a check to make sure the same email is not registered twice
//do this again for username

//ive made usernames and emails unique feilds, now i just need to check if the prepare statement works or not and display a message accordingly.
/*
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {     

	echo("<p>");
	//echo($row["User Name"]." ".$row["Email"]." ".$row["Password"]); //or $row[0]; //used for debugging


}
*/

$stmt = $pdo->prepare("INSERT INTO `users` (`User Name`, `Email`, `Password`) VALUES ('$userName ', '$emailAddress', '$passPhrase');");

$stmt->execute();

//print_r($stmt->errorInfo()); //if no error returns 00000 in cell 0

if ($stmt->errorInfo()[0] === "00000"){
	echo("user added");
}
else {
	echo ("user failed to add try again");
}


?>

