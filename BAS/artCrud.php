<?php
require "basDb.php";
require "basDbCon.php";
class artCrud extends artikelen{

    public function createArtikelen(){


        $conn = getConnection();
        $artNaam = $this->get_artNaam();
        $artOmschrijving = $this->get_artOmschrijving();
        $artInkoop = $this->get_artInkoop();
        $artVerkoop = $this->get_artVerkoop();
        $artVoorraad = $this->get_artVoorraad();
        $artMinVoorraad = $this->get_artMinVoorraad();
        $artMaxVoorraad = $this->get_artMaxVoorraad();
        $artLocatie = $this->get_artLocatie();
        $levId = $this->get_levId();

        if(empty($artNaam) || empty($artOmschrijving) || empty($artInkoop) || empty($artVerkoop) || empty($artVoorraad)|| empty($artMinVoorraad)|| empty($artMaxVoorraad)|| empty($artLocatie)) {
            echo "Please fill in all required fields.";
            return;
        }
        $sql = $conn->Prepare("insert into artikelen (artNaam, artOmschrijving, artInkoop, artVerkoop, artVoorraad, artMinVoorraad, artMaxVoorraad, artLocatie, levId) values ( :artNaam, :artOmschrijving, :artInkoop, :artVerkoop, :artVoorraad, :artMinVoorraad, :artMaxVoorraad, :artLocatie, :levId)");

        $sql->bindParam(":artNaam",$artNaam);
        $sql->bindParam(":artOmschrijving",$artOmschrijving);
        $sql->bindParam(":artInkoop",$artInkoop);
        $sql->bindParam(":artVerkoop",$artVerkoop);
        $sql->bindParam(":artVoorraad",$artVoorraad);
        $sql->bindParam(":artMinVoorraad",$artMinVoorraad);
        $sql->bindParam(":artMaxVoorraad",$artMaxVoorraad);
        $sql->bindParam(":artLocatie",$artLocatie);
        $sql->bindParam(":levId",$levId);

        try {
            $sql->execute();
            echo "Het artikel is toegevoegd. </br>";
        } catch(PDOException $e) {
            echo "Error creating artikel: " . $e->getMessage();
        }
    }

    public function readArtikelen(){
        require "basDbCon.php";
        $conn = getConnection();

        $sql = $conn->prepare(" SELECT * FROM artikelen");
        $sql->execute();
        foreach ($sql as $artikelen){
            echo $artikelen ["artId"]. "<br>";
            echo $this->artNaam=$artikelen["artNaam"]. "<br>";
            echo $this->artOmschrijving=$artikelen["artOmschrijving"]. "<br>";
            echo $this->artInkoop=$artikelen["artInkoop"]. "<br>";
            echo $this->artVerkoop=$artikelen["artVerkoop"]. "<br> ";
            echo $this->artVoorraad=$artikelen["artVoorraad"]. "<br>";
            echo $this->artMinVoorraad=$artikelen["artMinVoorraad"]. " <br> ";
            echo $this->artMaxVoorraad=$artikelen["artMaxVoorraad"]. " <br> ";
            echo $this->artLocatie=$artikelen["artLocatie"]. " <br> ";
            echo $this->levId=$artikelen["levId"]. " <br><br> ";
        }
    }

    public function deleteLeverancier()
    {}

    public function searchArtikelen($artId){
        $conn = getConnection();
        $sql = $conn->prepare("select * from artikelen where artId = :artId");
        $sql->execute([':artId' => $artId]);
        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return false;
        }
        $artikelen = new artikelen(
            $result['artNaam'],
            $result['artOmschrijving'],
            $result['artInkoop'],
            $result['artVerkoop'],
            $result['artVoorraad'],
            $result['artMinVoorraad'],
            $result['artMaxVoorraad'],
            $result['artLocatie'],
            $result['levId']
        );
        $artikelen->set_levId($result['levId']);
        return $artikelen;
    }

}
