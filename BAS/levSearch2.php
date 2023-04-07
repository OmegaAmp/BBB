<?php
require "Leverancier.php";
require "LevCrud.php";

$levId = $_POST["levId"];

$crud = new LevCrud('', '', '', '', '', '');
$leverancierData = $crud->searchLeverancier($levId);

if ($leverancierData) {
    echo "<table>";
    echo "<tr><th>Leveranciers naam</th><th>Contact</th><th>Email</th><th>Adres</th><th>Postcode</th><th>Woonplaats</th></tr>";
    echo "<tr>";
    echo "<td>" . $leverancierData->get_levNaam() . "</td>";
    echo "<td>" . $leverancierData->get_levContact() . "</td>";
    echo "<td>" . $leverancierData->get_levEmail() . "</td>";
    echo "<td>" . $leverancierData->get_levAdress() . "</td>";
    echo "<td>" . $leverancierData->get_levPostcode() . "</td>";
    echo "<td>" . $leverancierData->get_levWoonplaats() . "</td>";
    echo "</tr>";
    echo "</table><br />";
} else {
    echo "Geen resultaten gevonden.";
}

