<?php

require_once('model/catalogusModel.php');

class catalogusController
{	
	function __construct()
	{
		$this->model = new catalogusModel;
	}

	public function showCatalogus() 
	{
		$bioscopen = $this->model->readCatalogus();
		include('view/catalogus.php');
	}
	public function addCatalogus() 
	{
		// $bioscopen = $this->model->readCatalogus();
		include('view/addBios.php');
	}
}

