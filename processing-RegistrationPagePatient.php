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
$drEmail = $_POST["Assigned"];

//insert a new patient into the patients DB
$dsn = "mysql:host=localhost;dbname=healthtrackerapp;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$admindefault = FALSE;
//todo turn the above statement into its own file...

//this is when we create the user, first we need to see if the doctor they are trying to link with exists
$stmtDR = $pdo->prepare("SELECT * FROM `doctors`
WHERE `Email` = '$drEmail'");
$stmtDR->execute();
$dr = $stmtDR->fetch();
//print_r($stmtDR->errorInfo());
//print_r($dr["ID"]);
//now that we have a doctor, lets see if they exist
if ($stmtDR->errorInfo()[0] === "00000"){
  //now that we know they exist, lets try to create a user
  echo("Doctor was Targeted!");
  $stmt = $pdo->prepare(
    "INSERT INTO `patients`
    (`ID`,`fName`,`lName`,`DOB`, `Email`, `PhoneNumber`, `UserName`, `Pass`)
    VALUES
    (NULL,'$fName', '$lName', '$DOB', '$email', '$phoneNumber', '$userName', '$passWord');
  ");

  $stmt->execute();

  //test for error, and return stats_dens_pmf_hypergeometric
  print_r($stmt->errorInfo());

  //if 00000 that means everything is good else its not
  if ($stmt->errorInfo()[0] === "00000"){
  	echo("User was Created!");
    //if the dr exists and the user exists get the user ID

    //after we get both id's create a new relationship between the DR and the patient in the dr-patient table
    $stmtPat = $pdo->prepare("SELECT * FROM `patients`
    WHERE `UserName` = '$userName'
    AND `Pass` = '$passWord'");
    $stmtPat->execute();
    $pat = $stmtPat->fetch();
    //print_r($stmtPat->errorInfo());
    //echo($pat['ID']);
    $updatePD = $pdo->prepare("INSERT INTO `dr-patients`
    ( `ID`, `DrID`, `PatientID`)VALUES(NULL,'$dr[ID]','$pat[ID]')");
    $updatePD->execute();
    if ($updatePD->errorInfo()[0] === "00000"){
      print_r("DR-PAT relationship created!");
    }
    else {
      print_r("Error with Dr-Pat");
    }
  }
  else {
  	echo ("user failed to add try again");
  }

}
else {
  echo("doctor was unable to be targeted");
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
