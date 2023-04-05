<?php
$servername ="localhost";
$dbname ="bbb";
$username ="root";
$password ="root";

error_reporting(E_ALL);
ini_set('display_errors', 'On');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connectie gelukt";
}
catch (PDOException $e)
{
    echo "connectie mislukt". $e->getMessage();
}
