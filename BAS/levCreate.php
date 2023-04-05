<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<div class="">-->
<!--    --><?php
//        include "basDb.php";
//        require "Leverancier.php";
//        require_once "basDbCon.php";
//    ?>
<!--    <form action="Leverancier.php" method="post">-->
<!--        levNaam:       <input type="text" name="levNaam">         <br />-->
<!--        levContact:    <input type="text" name="levContact">      <br />-->
<!--        levEmail:      <input type="text" name="levEmail">        <br />-->
<!--        levAdress:     <input type="text" name="levAdress">       <br />-->
<!--        levPostcode:   <input type="text" name="levPostcode">     <br />-->
<!--        levWoonplaats: <input type="text" name="levWoonplaats">   <br />-->
<!--       <input type="submit">-->
<!--    </form>-->
<!---->
<!--</div>-->
<!---->
<!--</body>-->
<!--</html>-->
<!doctype html>
<html lang="eng">

<head>
    <title>Create een nieuwe Leverancier</title>
</head>
<body>
<h1></h1>
<form action="levCreate2.php" method="post">
    <label for "levNaam">levNaam: </label>
    <input type = "text" name = "levNaam"></input>
    <br/>
    <label for "levContact">levContact: </label>
    <input type = "text" name = "levContact"></input>
    <br/>
    <label for "levEmail">levEmail: </label>
    <input type = "text" name = "levEmail"></input>
    <br/>
    <label for "levAdress">levAdress: </label>
    <input type = "text" name = "levAdress"></input>
    <br/>
    <label for "levPostcode">levPostcode: </label>
    <input type = "text" name = "levPostcode"></input>
    <br/>
    <label for "levWoonplaats">levWoonplaats: </label>
    <input type = "text" name = "levWoonplaats"></input>
    <br/>
    <input type="submit">
</form>
</body>
</html>
