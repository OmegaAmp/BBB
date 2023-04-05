<?php
class LevCrud extends Leverancier{

    public function createLeverancier(){
        require "basDb.php";
        require "basDbCon.php";

        $levId = NULL;
        $levNaam = $this->get_levNaam();
        $levContact = $this->get_levContact();
        $levEmail = $this->get_levEmail();
        $levAdress = $this->get_levAdress();
        $levPostcode = $this->get_levPostcode();
        $levWoonplaats = $this->get_levWoonplaats();


        $sql = $conn->Prepare("insert into leveranciers values ( :levId, :levNaam, :levContact, :levEmail, :levAdress, :levPostcode, :levWoonplaats)");

        $sql->bindParam(":levId",$levId);
        $sql->bindParam(":levNaam",$levNaam);
        $sql->bindParam(":levContact",$levContact);
        $sql->bindParam(":levEmail",$levEmail);
        $sql->bindParam(":levAdress",$levAdress);
        $sql->bindParam(":levPostcode",$levPostcode);
        $sql->bindParam(":levWoonplaats",$levWoonplaats);
        $sql->execute();

        echo "De leverancier is toegevoegd: </br>";
    }
    public function readLeverancier(){
        require "basDbCon.php";

      $sql = $conn->prepare(" SELECT * FROM leveranciers");
      $sql->execute();
      foreach ($sql as $leveranciers){
          echo $leveranciers ["levId"]. " - ";
          echo $this->levNaam=$leveranciers["levNaam"]. " - ";
          echo $this->levContact=$leveranciers["levContact"]. " - ";
          echo $this->levEmail=$leveranciers["levEmail"]. " - ";
          echo $this->levAdress=$leveranciers["levAdress"]. " - ";
          echo $this->levPostcode=$leveranciers["levPostcode"]. " - ";
          echo $this->levWoonplaats=$leveranciers["levWoonplaats"]. " <br> ";
      }
    }
    public function updateLeverancier(){
    }
    public function deleteLeverancier()
    {}
    public function searchLeverancier($levId){
        require "basDbCon.php";
        $sql = $conn->prepare("select * from leveranciers where levId = :levId");
        $sql->bindParam("levId", $levId);
        $sql->execute();

        foreach($sql as $leverancier){
            echo $leverancier["levId"];
            echo $this->levNaam=$leverancier["levNaam"];
            echo $this->levContact=$leverancier["levContact"];
            echo $this ->levEmail=$leverancier["levEmail"];
            echo $this ->levAdress=$leverancier["levAdress"];
            echo $this ->levPostcode=$leverancier["levPostcode"];
            echo $this ->levWoonplaats=$leverancier["levWoonplaats"];
        }
    }
}
