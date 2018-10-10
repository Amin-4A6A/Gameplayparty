<?php

require_once('controller/dataHandler.php');

class reserveringsModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    public function createReservering($voornaam, $achternaam , $telefoonnummer, $straatnaam, $huisnummer, $toevoeging, $postcode, $stad, $provincie) { 
	
        try {
    
            $sql = "INSERT INTO klant(voornaam, achternaam, telefoonnummer, straatnaam, huisnummer, toevoeging, postcode, stad, provincie) VALUES ('$voornaam', '$achternaam' ,'$telefoonnummer', '$straatnaam',  '$huisnummer',  '$toevoeging',  '$postcode', '$stad', '$provincie')";
            $result = $this->dataHandler->CreateData($sql);
    
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
            return $result;
        }

}