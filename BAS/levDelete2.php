<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete2</title>
</head>
<body>
<?php
include "LevCrud.php";
$levId = $_POST["levId"];
$levNaam = "";
$levContact = "";
$levEmail = "";
$levAdress = "";
$levPostcode = "";
$levWoonplaats = "";

$levCrud = new LevCrud($levNaam, $levContact, $levEmail, $levAdress, $levPostcode, $levWoonplaats);
$leverancier = $levCrud->getLeverancierById($levId);
if ($leverancier) {$levNaam = $leverancier->levNaam;
    $levContact = $leverancier->levContact;
    $levEmail = $leverancier->levEmail;
    $levAdress = $leverancier->levAdress;
    $levPostcode = $leverancier->levPostcode;
    $levWoonplaats = $leverancier->levWoonplaats;


    echo "<table>";
    echo "<tr>";
    echo "<th>Naam</th>";
    echo "<th>Contactpersoon</th>";
    echo "<th>E-mail</th>";
    echo "<th>Adres</th>";
    echo "<th>Postcode</th>";
    echo "<th>Woonplaats</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$levNaam</td>";
    echo "<td>$levContact</td>";
    echo "<td>$levEmail</td>";
    echo "<td>$levAdress</td>";
    echo "<td>$levPostcode</td>";
    echo "<td>$levWoonplaats</td>";
    echo "</tr>";
    echo "</table><br />";


    echo "<form action='levDelete3.php' method='post'>";
    echo "<input type='hidden' name='levId' value='$levId'>";
    echo "<input type='hidden' name='verwijder' value='0'>";
    echo "<input type='checkbox' name='verwijder' value='1'>";
    echo "Verwijder deze Leverancier. <br />";
    echo "<input type='submit'>";
    echo "</form>";
} else {
    echo "Leverancier niet gevonden.";
}
?>





