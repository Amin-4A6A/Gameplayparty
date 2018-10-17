<?php

require_once('controller/dataHandler.php');

class reserveringsModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    public function createReservering($reservering_date, $begin_tijd, $eind_tijd, $aantal_personnen ) { 
	
            $sql = "INSERT INTO reservering(reservering_date, begin_tijd, eind_tijd, aantal_personnen) VALUES ('$reservering_date', '$begin_tijd' ,'$eind_tijd', '$aantal_personnen')";
            return $this->dataHandler->CreateData($sql);
        }

        public function readTijden() {
            $sql = 'SELECT `begintijd`, `eindtijd` FROM bioscopen inner join reservering_tijd ON reservering_tijd.bios_id = bioscopen.bios_id';
            return $this->dataHandler->ReadData($sql);
        }

        public function createKlant($voornaam, $achternaam , $telefoonnummer, $straatnaam, $huisnummer, $toevoeging, $postcode, $stad, $provincie) {
            $sql = "INSERT INTO klant(voornaam, achternaam, telefoonnummer, straatnaam, huisnummer, toevoeging, postcode, stad, provincie) VALUES ('$voornaam', '$achternaam' ,'$telefoonnummer', '$straatnaam',  '$huisnummer',  '$toevoeging',  '$postcode', '$stad', '$provincie')";
            return $this->dataHandler->CreateData($sql);
        }

}