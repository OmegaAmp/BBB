<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete form</title>
</head>
<body>
<?php
include "LevCrud.php";
?>
<div class="">
    <form action="levDelete2.php" method="post">
        Welke Leverancier wilt u verwijderen?
        <input type="text" name="levId"> <br />
        <input type="submit">
    </form>
</div>
</body>
</html>