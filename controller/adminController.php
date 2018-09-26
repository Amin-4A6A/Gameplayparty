<?php

require_once('model/adminModel.php');

class adminController
{	
	function __construct()
	{
		$this->model = new adminModel;
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

	// Verwerkt ingevulde gegevens
	
	public function collectBios() {
		if(isset($_POST["create"])) {
			$this->model->gatherBiosData();
			// $naam = $_POST['bioscoop_naam'];
			// $info = $_POST['bioscoop_informatie'];
			// $locatie = $_POST['bioscoop_locatie'];
			// $capaciteit = $_POST['bioscoop_capaciteit'];
		
			// $bioscopen = $this->model->createBios($naam, $info, $locatie, $capaciteit);
			header("Location: {$_SERVER['HTTP_REFERER']}");
			exit;
		} else {
			require_once('view/addBios.php');
		}
		
	}
}
