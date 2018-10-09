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

	public function sendMail()
	{
		 if (isset($_POST['submit'])) {
		 	$naam = $_POST['naam'];
		 	$email = $_POST['email'];
		 	$bericht = $_POST['bericht'];

		 	$email= mail("brandon.louwaars@gmail.com", "Contact", "Naam: " . $naam . "<br>" . "email: " . $email . "<br><br>" . "Bericht: " . $bericht);
		 } else {
		 	$this->contact();
		 }
	}
		
}
