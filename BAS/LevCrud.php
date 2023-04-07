<?php
require "basDb.php";
require "basDbCon.php";
include "Leverancier.php";
class LevCrud extends Leverancier{


    public function createLeverancier()
    {

        $conn = getConnection();
        $levNaam = $this->get_levNaam();
        $levContact = $this->get_levContact();
        $levEmail = $this->get_levEmail();
        $levAdress = $this->get_levAdress();
        $levPostcode = $this->get_levPostcode();
        $levWoonplaats = $this->get_levWoonplaats();

        if(empty($levNaam) || empty($levContact) || empty($levEmail)
            || empty($levAdress) || empty($levPostcode) || empty($levWoonplaats))
        { echo "Please fill in all required fields."; return;
        }

        $sql = $conn->prepare("INSERT INTO leveranciers (levNaam, levContact, levEmail, levAdress, levPostcode, levWoonplaats) 
                       VALUES (:levNaam, :levContact, :levEmail, :levAdress, :levPostcode, :levWoonplaats)");
        $sql->bindParam(":levNaam",$levNaam);
        $sql->bindParam(":levContact",$levContact);
        $sql->bindParam(":levEmail",$levEmail);
        $sql->bindParam(":levAdress",$levAdress);
        $sql->bindParam(":levPostcode",$levPostcode);
        $sql->bindParam(":levWoonplaats",$levWoonplaats);

        try {
            $sql->execute();
            echo "De leverancier is toegevoegd. </br>";
        } catch(PDOException $e) {
            echo "Error creating leverancier: " . $e->getMessage();
        }
    }

    public function readLeverancier(){
        $conn = getConnection();
        $sql = $conn->prepare("SELECT * FROM leveranciers");
        $sql->execute();

        foreach ($sql as $leveranciers) {
            $leverancier = new Leverancier(
                $leveranciers["levNaam"],
                $leveranciers["levContact"],
                $leveranciers["levEmail"],
                $leveranciers["levAdress"],
                $leveranciers["levPostcode"],
                $leveranciers["levWoonplaats"]
            );

            echo $leverancier->get_levId() . " - ";
            echo $leverancier->get_levNaam() . " - ";
            echo $leverancier->get_levContact() . " - ";
            echo $leverancier->get_levEmail() . " - ";
            echo $leverancier->get_levAdress() . " - ";
            echo $leverancier->get_levPostcode() . " - ";
            echo $leverancier->get_levWoonplaats() . " <br> ";
        }
    }


    public function updateLeverancier($leverancier) {
        try {
            $conn = getConnection();
            $sql = $conn->prepare("UPDATE leveranciers SET levNaam=:levNaam, levContact=:levContact, levEmail=:levEmail, levAdress=:levAdress, levPostcode=:levPostcode, levWoonplaats=:levWoonplaats WHERE levId=:levId");
            $sql->bindValue(':levNaam', $leverancier->get_levNaam());
            $sql->bindValue(':levContact', $leverancier->get_levContact());
            $sql->bindValue(':levEmail', $leverancier->get_levEmail());
            $sql->bindValue(':levAdress', $leverancier->get_levAdress());
            $sql->bindValue(':levPostcode', $leverancier->get_levPostcode());
            $sql->bindValue(':levWoonplaats', $leverancier->get_levWoonplaats());
            $sql->bindValue(':levId', $leverancier->get_levId());
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function deleteLeverancier($levId) {
        $conn = getConnection();
        $sql = $conn->prepare("DELETE FROM leveranciers WHERE levId = :levId");
        $sql->bindParam(":levId", $this->levId);
        $sql->execute();


        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function searchLeverancier($levId) {
        $conn = getConnection();
        $sql = $conn->prepare("SELECT * FROM leveranciers WHERE levId = :levId");
        $sql->execute([':levId' => $levId]);
        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return false;
        }

        $leverancier = new Leverancier(
            $result['levNaam'],
            $result['levContact'],
            $result['levEmail'],
            $result['levAdress'],
            $result['levPostcode'],
            $result['levWoonplaats']
        );
        $leverancier->set_levId($result['levId']);
        return $leverancier;
    }

    public function getLeverancierById($levId)
{
    $conn = getConnection();
    $sql = "SELECT * FROM leveranciers WHERE levId = :levId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':levId', $levId, PDO::PARAM_INT);

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $leverancier = new Leverancier(
            $result['levNaam'],
            $result['levContact'],
            $result['levEmail'],
            $result['levAdress'],
            $result['levPostcode'],
            $result['levWoonplaats']
         );
         $leverancier->set_levId($result['levId']);

            return $leverancier;
        } else {
            return null;
        }
    }
}
