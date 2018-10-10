<?php

require_once('model/reserveringsModel.php');

class reserveringsController
{	
	function __construct()
	{
		$this->model = new reserveringsModel;
	}

	public function resevering() 
	{
		include('view/reserveringsform.php');
		
    }
    public function collectreservering() {
		if(isset($_POST["create"])) {
			$reservation_date = $_POST['bios_naam'];
			$begin_date = $_POST['image'];
			$end_date = $_POST['adres'];
			$amount_persons = $_POST['postcode'];
			$subtotaal = $_POST['stad'];
			$total = $_POST['provincie'];
			$reserved = $_POST['begintijd'];
			$eindtijd = $_POST['eindtijd'];
			$auto = $_POST['bereikbaar_auto'];
			$ov = $_POST['bereikbaar_ov'];
			$fiets = $_POST['bereikbaar_fiets'];
			$rolstoel = $_POST['rolstoeltoegankelijkheid'];
			$voorwaarden = $_POST['voorwaarden'];
			$link = $_POST['link'];
			$bioscopen = $this->model->createBios($naam, $foto, $adres, $postcode, $stad, $provincie, $begintijd, $eindtijd, $auto, $ov, $fiets, $rolstoel, $voorwaarden, $link);
			header("Location: {$_SERVER['HTTP_REFERER']}");
			exit;
		} else {
			require_once('view/addBios.php');
		}
		
	}
	
}
