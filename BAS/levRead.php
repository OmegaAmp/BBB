
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1></h1>
<p>Alle gegevens van de leveranciers:</p>
<?php
require "Leverancier.php";
require "LevCrud.php";

$leveranciers = new levCrud();
$leveranciers->readLeverancier();

?>
</body>
</html>
