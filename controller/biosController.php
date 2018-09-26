<?php

require_once('model/biosModel.php');

class biosController
{	
	function __construct()
	{
		$this->model = new biosModel;
	}

	public function showBios() 
	{
		$bioscopen = $this->model->readBios();
		include('view/biosView.php');
	}
	public function home() 
	{
		include('view/home.php');
		
	}
	
}
