<?php

require_once('controller/dataHandler.php');

class adminModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }

    public function gatherBiosData()
    {
    		$naam = $_POST['bioscoop_naam'];
			$info = $_POST['bioscoop_informatie'];
			$locatie = $_POST['bioscoop_locatie'];
			$capaciteit = $_POST['bioscoop_capaciteit'];
		
			// $bioscopen = $this->model->createBios($naam, $info, $locatie, $capaciteit);
    }

    public function createBios($naam, $info, $locatie, $capaciteit) { 
	
	try {
		$sql = "INSERT INTO bioscopen(bioscoop_naam, bioscoop_informatie, bioscoop_locatie, bioscoop_capaciteit) VALUES ('$naam', '$info', '$locatie', '$capaciteit')";
		$result = $this->dataHandler->CreateData($sql);

		return $result;
	} catch (Exception $e) {
		throw $e;
	}
		return $result;
	}

}