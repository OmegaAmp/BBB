<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1></h1>
<p>Alle gegevens van de artikelen:</p>
<?php
require "artikelen.php";
require "artCrud.php";

$artikelen = new artCrud('', '', '', '', '', '', '', '', '');
$artikelen->readArtikelen();

?>
</body>
</html>