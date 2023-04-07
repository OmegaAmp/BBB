<?php
require "Leverancier.php";
require "LevCrud.php";
require "basDb.php";
require "basDbCon.php";


if(isset($_POST['submit'])) {
    $levNaam = $_POST['levNaam'];
    $levContact = $_POST['levContact'];
    $levEmail = $_POST['levEmail'];
    $levAdress = $_POST['levAdress'];
    $levPostcode = $_POST['levPostcode'];
    $levWoonplaats = $_POST['levWoonplaats'];

    $leverancier = new leverancier($levNaam, $levContact, $levEmail, $levAdress, $levPostcode, $levWoonplaats);

    $LevCrud = new LevCrud($levNaam, $levContact, $levEmail, $levAdress, $levPostcode, $levWoonplaats);
    $LevCrud->createLeverancier($leverancier);
}
