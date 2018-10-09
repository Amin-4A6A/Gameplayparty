<?php

require_once('model/adminModel.php');
require_once('model/userModel.php');

class adminController
{	
	function __construct()
	{
		$this->adminModel = new adminModel;
		$this->userModel = new userModel;
		$this->userModel->checkUserRole(["admin"]);
		echo "<pre>";
		var_dump($this->userModel);
		echo "</pre>";
	}

	private function debug($data)
	{
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}

	// Router naar form voor invullen bioscoop
	public function addBios() 
	{
		require_once('view/addBios.php');
	}

	// Router naar admin panel
	public function adminPanel()
	{
		require_once('view/adminPanel.php');
	}

	// Router naar over ons aanpassen
	public function editOverOns()
	{
		require_once('view/editOverOns.php');
	}
	
	// Verwerkt ingevulde gegevens
	
	public function collectBios() {
		if(isset($_POST["create"])) {
			$naam = $_POST['bios_naam'];
			$adres = $_POST['adres'];
			$postcode = $_POST['postcode'];
			$stad = $_POST['stad'];
			$provincie = $_POST['provincie'];
			$begintijd = $_POST['begintijd'];
			$eindtijd = $_POST['eindtijd'];
			$auto = $_POST['bereikbaar_auto'];
			$ov = $_POST['bereikbaar_ov'];
			$fiets = $_POST['bereikbaar_fiets'];
			$rolstoel = $_POST['rolstoeltoegankelijkheid'];
			$voorwaarden = $_POST['voorwaarden'];
			$link = $_POST['link'];
			$bioscopen = $this->model->createBios($naam, $adres, $postcode, $stad, $provincie, $begintijd, $eindtijd, $auto, $ov, $fiets, $rolstoel, $voorwaarden, $link);
			header("Location: {$_SERVER['HTTP_REFERER']}");
			exit;
		} else {
			require_once('view/addBios.php');
		}
		
	}

	public function showCMS() 
	{
		$cms = $this->model->readCMS();
		include('view/cms.php');
	}

}
