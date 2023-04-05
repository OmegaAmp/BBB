<?php
include "basDb.php";
function SQLWithResult($db, $command, $values = []){
    $query = $db->prepare($command);
    $query->execute($values);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function SQLWithoutResult($db, $command, $values = []){
    $query = $db->prepare($command);
    $query->execute($values);
}
try {
    $db = new PDO("mysql:host=localhost;dbname=bbb", "root", "root");
    if(isset ($POST['send']))
        $levNaam = filter_input(INPUT_POST, "levNaam",
        FILTER_SANITIZE_STRING);
        $levContact = filter_input(INPUT_POST, "levContact",
        FILTER_SANITIZE_STRING);
        $levEmail = filter_input(INPUT_POST, "levEmail",
        FILTER_SANITIZE_STRING);
        $levAdress = filter_input(INPUT_POST, "levAdress",
        FILTER_SANITIZE_STRING);
        $levPostcode = filter_input(INPUT_POST, "levPostcode",
        FILTER_SANITIZE_STRING);
        $levWoonplaats = filter_input(INPUT_POST, "levWoonplaats",
         FILTER_SANITIZE_STRING);



    $query = $db->prepare("INSERT INTO leveranciers (levNaam, levContact, levEmail, levAdress, levPostcode, levWoonplaats) VALUES (:levNaam, :levContact, :levEmail, :levAdress, :levPostcode, :levWoonplaats");
    $query->bindParam("levNaam", $levNaam);
    $query->bindParam("levContact", $levContact);
    $query->bindParam("levEmail", $levEmail);
    $query->bindParam("levAdress", $levAdress);
    $query->bindParam("levPostcode", $levPostcode);
    $query->bindParam("levWoonplaats", $levWoonplaats);
    if($query->execute()) {
        echo "De nieuwe gegevens zijn opgetreden!";
    } else {
        echo "Er is een fout opgetreden!";
    }
    echo "<br>";
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}
