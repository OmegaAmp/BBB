<?php

class Leverancier{

    protected $levId;
    public $levNaam;
    public $levContact;
    public $levEmail;
    public $levAdress;
    public $levPostcode;
    public $levWoonplaats;


    public function __construct($levNaam, $levContact, $levEmail, $levAdress, $levPostcode, $levWoonplaats){
        $this->levNaam=$levNaam;
        $this->levContact=$levContact;
        $this->levEmail=$levEmail;
        $this->levAdress=$levAdress;
        $this->levPostcode=$levPostcode;
        $this->levWoonplaats=$levWoonplaats;
    }

    // setters
    function set_levId($levId)
    {
        $this->levId = $levId;
    }
    function set_levNaam($levNaam){
        $this->levNaam=$levNaam;
    }
    function set_levContact($levContact){
        $this->levContact=$levContact;
    }
    function set_levEmail($levEmail){
        $this->levEmail=$levEmail;
    }
    function set_levAdress($levAdress){
        $this->levAdress=$levAdress;
    }
    function set_levPostcode($levPostcode){
        $this->levPostcode=$levPostcode;
    }
    function set_levWoonplaats($levWoonplaats){
        $this->levWoonplaats=$levWoonplaats;
    }

    function get_levId(){
        return $this->levId;
    }
    function get_levNaam(){
        return $this->levNaam;
    }
    function get_levContact(){
        return $this->levContact;
    }
    function get_levEmail(){
        return $this->levEmail;
    }
    function get_levAdress(){
        return $this->levAdress;
    }
    function get_levPostcode(){
        return $this->levPostcode;
    }
    function get_levWoonplaats()
    {
        return $this->levWoonplaats;


    }
}
