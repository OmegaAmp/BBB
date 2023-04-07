<?php
include "LevCrud.php";

$levId = $_POST["levId"];
$verwijderen = $_POST["verwijder"];

if ($verwijderen) {
    $levCrud = new LevCrud('', '', '', '', '', '');
    $leverancier = $levCrud->getLeverancierById($levId);

    if ($leverancier) {
        if ($levCrud->deleteLeverancier($levId)) {
            echo "De gegevens zijn verwijderd. <br />";
        } else {
            echo "De gegevens zijn niet verwijderd. <br />";
        }
    } else {
        echo "Leverancier niet gevonden. <br />";
    }
    echo "<a href=''>Terug naar het menu.</a>";
}
