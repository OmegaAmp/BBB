<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
require "LevCrud.php";

$levId= NULL;
$levNaam=$_POST["levNaam"];
$levContact=$_POST["levContact"];
$levEmail=$_POST["levEmail"];
$levAdress=$_POST["levAdress"];
$levPostcode=$_POST["levPostcode"];
$levWoonplaats=$_POST["levWoonplaats"];

$leverancier1 = new leverancier ($levNaam, $levContact, $levEmail, $levAdress, $levPostcode, $levWoonplaats);
$leverancier1->createLeverancier();

echo "De klant is toegevoegd <br/>";
?>
</body>
</html>
