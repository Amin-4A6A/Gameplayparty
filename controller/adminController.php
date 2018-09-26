<?php

require_once('model/adminModel.php');

class adminController
{	
	function __construct()
	{
		$this->model = new adminModel;
	}

	public function addBios() 
	{
		include('view/addBios.php');
	}
}
