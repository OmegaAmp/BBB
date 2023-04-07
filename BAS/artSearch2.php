<?php
require "artikelen.php";
require "artCrud.php";

$artId = $_POST["artId"];

$crud = new artCrud('', '', '', '', '', '', '', '', '');
$artikelenData = $crud->searchArtikelen($artId);

if ($artikelenData) {
    echo "<table>";
    echo "<tr><th>artikel naam</th><th>Omschrijving</th><th>Inkoop</th><th>Verkoop</th><th>Voorraad</th><th>Min Voorraad</th><th>Max Voorraad</th><th>Locatie</th><th>Leverancier Id</th></tr>";
    echo "<tr>";
    echo "<td>" . $artikelenData->get_artNaam() . "</td>";
    echo "<td>" . $artikelenData->get_artOmschrijving() . "</td>";
    echo "<td>" . $artikelenData->get_artInkoop() . "</td>";
    echo "<td>" . $artikelenData->get_artVerkoop() . "</td>";
    echo "<td>" . $artikelenData->get_artVoorraad() . "</td>";
    echo "<td>" . $artikelenData->get_artMinVoorraad() . "</td>";
    echo "<td>" . $artikelenData->get_artMaxVoorraad() . "</td>";
    echo "<td>" . $artikelenData->get_artLocatie() . "</td>";
    echo "<td>" . $artikelenData->get_levId() . "</td>";
    echo "</tr>";
    echo "</table><br />";
} else {
    echo "Geen resultaten gevonden.";
}

