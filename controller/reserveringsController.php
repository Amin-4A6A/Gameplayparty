<?php

require_once('model/reserveringsModel.php');

class reserveringsController
{	
	function __construct()
	{
		$this->reserveringsModel = new reserveringsModel;
	}

	public function reservering() 
	{
		require_once('view/reserveringsform.php');
		
    }
   
    public function collectreservering() {
		if(isset($_POST["create"])) {
			$voornaam = $_POST['voornaam'];
			$achternaam = $_POST['achternaam'];
			$telefoonnummer = $_POST['telefoonnummer'];
			$straatnaam = $_POST['straatnaam'];
			$huisnummer = $_POST['huisnummer'];
			$toevoeging = $_POST['toevoeging'];
            $postcode = $_POST['postcode'];
            $stad = $_POST['stad'];
            $provincie = $_POST['provincie'];
			$klanten = $this->reserveringsModel->createReservering($voornaam, $achternaam , $telefoonnummer, $straatnaam, $huisnummer, $toevoeging, $postcode, $stad, $provincie);
			$reservering_date = $_POST['reservering_date'];
			$begin_tijd = $_POST['begin_tijd'];
			$eind_tijd = $_POST['eind_tijd'];
			$aantal_personnen = $_POST['aantal_personnen'];
			$klanten = $this->reserveringsModel->createReservering($reservering_date, $begin_tijd , $eind_tijd, $aantal_personnen);
			$tijden = $this->reserveringsModel->createReservering();
			header("Location: {$_SERVER['HTTP_REFERER']}");
			exit;
		} else {
			require_once('view/reserveringsform.php');
		}
		
	}
	
}
