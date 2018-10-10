<?php

require_once('model/reserveringsModel.php');

class reserveringsController
{	
	function __construct()
	{
		$this->reserveringsModel = new reserveringsModel;
	}

	public function resevering() 
	{
		include('view/reserveringsform.php');
		
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
			$bioscopen = $this->model->createReservering($voornaam, $achternaam , $telefoonnummer, $straatnaam, $huisnummer, $toevoeging, $postcode, $stad, $provincie);
			header("Location: {$_SERVER['HTTP_REFERER']}");
			exit;
		} else {
			require_once('view/reserveringsform.php');
		}
		
	}
	
}
