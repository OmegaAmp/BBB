<?php
require "artikelen.php";
require "artCrud.php";
require "basDb.php";
require "basDbCon.php";


if(isset($_POST['submit'])) {
    $artId = NULL;
    $artNaam = $_POST['artNaam'];
    $artOmschrijving = $_POST['artOmschrijving'];
    $artInkoop = $_POST['artInkoop'];
    $artVerkoop = $_POST['artVerkoop'];
    $artVoorraad = $_POST['artVoorraad'];
    $artMinVoorraad = $_POST['artMinVoorraad'];
    $artMaxVoorraad = $_POST['artMaxVoorraad'];
    $artLocatie = $_POST['artLocatie'];
    $levId = $_POST['levId'];

    $artikel = new artikelen($artNaam, $artOmschrijving, $artInkoop, $artVerkoop, $artVoorraad, $artMinVoorraad, $artMaxVoorraad, $artLocatie, $levId);

    $artCrud = new artCrud($artNaam, $artOmschrijving, $artInkoop, $artVerkoop, $artVoorraad, $artMinVoorraad,$artMaxVoorraad, $artLocatie, $levId);
    $artCrud->createArtikelen($artikel);
}