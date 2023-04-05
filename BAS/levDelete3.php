<?php
include "LevCrud.php";
include "Leverancier.php";

$id =$_POST["id"];
$verwijderen =$_POST["verwijder"];
if ($verwijderen) {
    $leverancier->deleteLeverancier();
    {
        echo "De gegevens zijn verwijderen. <br />";
    }
else
    {
        echo "De gegevens zijn niet verwijderd. <br />";
    }
    echo "<a href=''>Terug naar het menu.</a>";
}