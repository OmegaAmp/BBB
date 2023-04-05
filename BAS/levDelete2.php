<<!doctype html>
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
            include "Leverancier.php";
            include "LevCrud.php";


            echo "<table>";
            foreach ($leveranciers as $leverancier)
            {
                echo "<tr>";
                echo "<td>" . $leverancier["levNaam"] . "</td>";
                echo "<td>" . $leverancier["levContact"] . "</td>";
                echo "<td>" . $leverancier["levEmail"] . "</td>";
                echo "<td>" . $leverancier["levPostcode"] . "</td>";
                echo "<td>" . $leverancier["leveWoonplaats"] . "</td>";
                echo "</tr>";
            }
            echo "</table><br />";

            echo "<form action='levDelete3.php' method='post'>";
            echo "<input type='hidden' name='levId' value='$levId'>";
            echo "<input type='hidden' name='verwijder' value='0'>";
            echo "<input type='checkbox' name='verwijder' value='1'>";
            echo "Verwijder deze Leverancier. <br />";
            echo "<input type='submit'>";
            echo "</form>";

        ?>
    </body>
</html>