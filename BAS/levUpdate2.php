<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "basDb.php";
include "basDbCon.php";
include "Leverancier.php";
include "LevCrud.php";
$conn = getConnection();
$id = $_POST["LevId"];
$leveranciers = $conn->prepare("SELECT levId, levNaam, levContact, levEmail, levAdress, levPostcode, levWoonplaats FROM leveranciers WHERE levId = :levId");
$leveranciers->execute(["levId" => $id]);
echo "<form action='levUpdate3.php' method='post'>";
foreach ($leveranciers as $leverancier)
{
    echo "leId:" . $leverancier["levId"];
    echo "<input type='hidden' name='levId'";
    echo "value='" .$leverancier["levId"]. "'><br />";
    echo " levNaam: <input type='text' ";
    echo " name='levNaam' ";
    echo " value='".$leverancier["levNaam"]. "'";
    echo "><br />";

    echo " levContact: <input type='text' ";
    echo " name='levContact' ";
    echo " value='".$leverancier["levContact"]. "'";
    echo "><br />";

    echo " levEmail: <input type='text' ";
    echo " name='levEmail' ";
    echo " value='".$leverancier["levEmail"]. "'";
    echo "><br />";

    echo " levAdress: <input type='text' ";
    echo " name='levAdress' ";
    echo " value='".$leverancier["levAdress"]. "'";
    echo "><br />";

    echo " levPostcode: <input type='text' ";
    echo " name='levPostcode' ";
    echo " value='".$leverancier["levPostcode"]. "'";
    echo "><br />";

    echo " levWoonplaats: <input type='text' ";
    echo " name='levWoonplaats' ";
    echo " value='".$leverancier["levWoonplaats"]. "'";
    echo "><br />";
}

echo "<input type='submit' >";
echo "</form>";

?>

</body>
</html>
