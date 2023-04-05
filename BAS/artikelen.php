<?php

class artikelen{

    public $artNaam;
    public $artOmschrijving;
    public $artInkoop;
    public $artVerkoop;
    public $artVoorraad;
    public $artMinVoorraad;
    public $artMaxVoorraad;
    public $artLocatie;
    private $levId;

    function __construct($artNaam=NULL, $artOmschrijving=NULL, $artInkoop=NULL, $artVerkoop=NULL, $artVoorraad=NULL, $artMinVoorraad=NULL, $artMaxVoorraad=NULL, $artLocatie=NULL, $levId=NULL ){
        $this->artNaam=$artNaam;
        $this->artOmschrijving=$artOmschrijving;
        $this->artInkoop=$artInkoop;
        $this->artVerkoop=$artVerkoop;
        $this->artVoorraad=$artVoorraad;
        $this->artMinVoorraad=$artMinVoorraad;
        $this->artMaxVoorraad=$artMaxVoorraad;
        $this->artLocatie=$artLocatie;
        $this->levId=$levId;
    }


    function set_artNaam($artNaam){
        $this->artNaam=$artNaam;
    }
    function set_artOmschrijving($artOmschrijving){
        $this->artOmschrijving=$artOmschrijving;
    }
    function set_artInkoop($artInkoop){
        $this->artInkoop=$artInkoop;
    }
    function set_artVerkoop($artVerkoop){
        $this->artVerkoop=$artVerkoop;
    }
    function set_artVoorraad($artVoorraad){
        $this->artVoorraad=$artVoorraad;
    }
    function set_artMinVoorraad($artMinVoorraad){
        $this->artMinVoorraad=$artMinVoorraad;
    }
    function set_artMaxVoorraad($artMaxVoorraad){
        $this->artMaxVoorraad=$artMaxVoorraad;
    }
    function set_artLocatie($artLocatie){
        $this->artLocatie=$artLocatie;
    }
    function set_levId($levId){
        $this->levId=$levId;
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    function get_artNaam(){
        return $this->artNaam;
    }
    function get_artOmschrijving(){
        return $this->artOmschrijving;
    }
    function get_artInkoop(){
        return $this->artInkoop;
    }
    function get_artVerkoop(){
        return $this->artVerkoop;
    }
    function get_artVoorraad(){
        return $this->artVoorraad;
    }
    function get_artMinVoorraad()
    {
        return $this->artMinVoorraad;
    }
    function get_artMaxVoorraad()
    {
        return $this->artMaxVoorraad;
    }
    function get_artLocatie()
    {
        return $this->artLocatie;
    }
    function get_levId()
    {
        return $this->levId;
    }
}