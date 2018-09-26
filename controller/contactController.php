<?php

require_once('model/contactModel.php');

class contactController
{	
	function __construct()
	{
		$this->model = new contactModel;
	}

	public function contact() 
	{
		include('view/contact.php');
		
	}
	
}
