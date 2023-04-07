<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "LevCrud.php";

    $levId = $_POST["levId"];
    $levNaam = $_POST["levNaam"];
    $levContact = $_POST["levContact"];
    $levEmail = $_POST["levEmail"];
    $levAdress = $_POST["levAdress"];
    $levPostcode = $_POST["levPostcode"];
    $levWoonplaats = $_POST["levWoonplaats"];

    $leverancier = new Leverancier( $levNaam, $levContact, $levEmail, $levAdress, $levPostcode, $levWoonplaats);

    $levCrud = new LevCrud('', '', '', '', '', '');
    $levCrud->updateLeverancier($leverancier);
}