<?php

require_once('controller/dataHandler.php');

class reserveringsModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    public function createReservering($voornaam, $achternaam , $telefoonnummer, $straatnaam, $huisnummer, $toevoeging, $postcode, $stad, $provincie, $reservering_date, $begin_tijd, $eind_tijd, $aantal_personnen ) { 
	
        try {
            $sql = "INSERT INTO klant(voornaam, achternaam, telefoonnummer, straatnaam, huisnummer, toevoeging, postcode, stad, provincie) VALUES ('$voornaam', '$achternaam' ,'$telefoonnummer', '$straatnaam',  '$huisnummer',  '$toevoeging',  '$postcode', '$stad', '$provincie')";
            $sql = "INSERT INTO reservering(reservering_date, begin_tijd, eind_tijd, aantal_personnen) VALUES ('$reservering_date', '$begin_tijd' ,'$eind_tijd', '$aantal_personnen')";
            $result = $this->dataHandler->CreateData($sql);
    
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
            return $result;
        }

}