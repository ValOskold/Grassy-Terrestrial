<?php

$dsn = "mysql:host=localhost;dbname=howings_healthtrackerapp;charset=utf8mb4";

$dbusername = "howings_group";
$dbpassword = "pFrxH)9rGdm]";
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$admindefault = FALSE;

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
} catch(PDOException $e) {   
    echo 'Error: ' . $e->getMessage() . "<br/>"; 
    die();
}

?>