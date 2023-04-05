<?php

class artCrud extends artikelen{

    public function createArtikelen(){
        require "basDb.php";
        require "basDbCon.php";

        $artId = NULL;
        $artNaam = $this->get_artNaam();
        $artOmschrijving = $this->get_artOmschrijving();
        $artInkoop = $this->get_artInkoop();
        $artVerkoop = $this->get_artVerkoop();
        $artVoorraad = $this->get_artVoorraad();
        $artMinVoorraad = $this->get_artMinVoorraad();
        $artMaxVoorraad = $this->get_artMaxVoorraad();
        $artLocatie = $this->get_artLocatie();
        $levId = $this->get_levId();


        $sql = $conn->Prepare("insert into artikelen values ( :artId, :artNaam, :artOmschrijving, :artInkoop, :artInkoop, :artVerkoop, :artVoorraad, :artMinVoorraad, :artMaxVoorraad, :artLocatie, :levId)");

        $sql->bindParam(":artId",$artId);
        $sql->bindParam(":artNaam",$artNaam);
        $sql->bindParam(":artOmschrijving",$artOmschrijving);
        $sql->bindParam(":artInkoop",$artInkoop);
        $sql->bindParam(":artVerkoop",$artVerkoop);
        $sql->bindParam(":artVoorraad",$artVoorraad);
        $sql->bindParam(":artMinVoorraad",$artMinVoorraad);
        $sql->bindParam(":artMaxVoorraad",$artMaxVoorraad);
        $sql->bindParam(":artLocatie",$artLocatie);
        $sql->bindParam(":levId",$levId);
        $sql->execute();

        echo "Het artikel is toegevoegd: </br>";
    }
    public function readArtikelen(){
        require "basDbCon.php";

        $sql = $conn->prepare(" SELECT * FROM artikelen");
        $sql->execute();
        foreach ($sql as $artikelen){
            echo $artikelen ["artId"]. " - ";
            echo $this->artNaam=$artikelen["artNaam"]. " - ";
            echo $this->artOmschrijving=$artikelen["artOmschrijving"]. " - ";
            echo $this->artInkoop=$artikelen["artInkoop"]. " - ";
            echo $this->artVerkoop=$artikelen["artVerkoop"]. " - ";
            echo $this->artVoorraad=$artikelen["artVoorraad"]. " - ";
            echo $this->artMinVoorraad=$artikelen["artMinVoorraad"]. " <br> ";
            echo $this->artMaxVoorraad=$artikelen["artMaxVoorraad"]. " <br> ";
            echo $this->artLocatie=$artikelen["artLocatie"]. " <br> ";
            echo $this->levId=$artikelen["levId"]. " <br> ";
        }
    }
    public function deleteLeverancier()
    {}
    public function searchLeverancier($artId){
        require "basDbCon.php";
        $sql = $conn->prepare("select * from artikelen where artId = :artId");
        $sql->bindParam("artId", $artId);
        $sql->execute();

        foreach($sql as $artikelen){
            echo $artikelen["artId"];
            echo $this->artNaam=$artikelen["artNaam"];
            echo $this->artOmschrijving=$artikelen["artOmschrijving"];
            echo $this ->artInkoop=$artikelen["artInkoop"];
            echo $this ->artVerkoop=$artikelen["artVerkoop"];
            echo $this ->artVoorraad=$artikelen["artVoorraad"];
            echo $this ->artMinVoorraad=$artikelen["artMinVoorraad"];
            echo $this ->artMaxVoorraad=$artikelen["artMaxVoorraad"];
            echo $this ->artLocatie=$artikelen["artLocatie"];
            echo $this ->levId=$artikelen["levId"];
        }
    }
}
