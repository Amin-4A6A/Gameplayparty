<?php

require_once('controller/dataHandler.php');

class adminModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }


    public function createBios($naam, $adres, $postcode, $stad, $provincie, $begintijd, $eindtijd, $auto, $ov, $fiets, $rolstoel, $voorwaarden, $link) { 
	
	try {
		if ($rolstoel == "ja") {
			$toegang = 1;
		} else {
			$toegang = 0;
		}

		$sql = "INSERT INTO bioscopen(bios_naam, adres, postcode, stad, provincie, begintijd, eindtijd, bereikbaar_auto, bereikbaar_ov, bereikbaar_fiets, rolstoeltoegankelijkheid, voorwaarden, link) VALUES ('$naam', '$adres', '$postcode', '$stad', '$provincie', '$begintijd',  '$eindtijd',  '$auto',  '$ov',  '$fiets',  '$toegang', '$voorwaarden', '$link')";
		$result = $this->dataHandler->CreateData($sql);

		return $result;
	} catch (Exception $e) {
		throw $e;
	}
		return $result;
	}

	public function readCMS()
    {
       $query = 'SELECT * FROM paginas';
       $cms = $this->dataHandler->ReadData($query);

       return $cms;
    }
}
