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

		 	// if 

		 	$email= mail("brandon.louwaars@gmail.com", "Contact", "Naam: " . $naam . "<br>" . "email: " . $email . "<br><br>" . "Bericht: " . $bericht);
		 } else {
		 	
		 	$this->contact();
		 }
	}
		
}

// $naam = isset($_POST["naam"]);
    //         // check name only contains letters and whitespace
    //         if (!preg_match("/^[a-zA-Z ]*$/",$naam))
    //         {
    //             throw new dataException('alleen letters en witruimtes worden geaccepteerd');
    //         }   
    //         else 
    //         {
    //             if(str_word_count($naam)!=2)
    //             {
    //                  throw new dataException('naam moet worden in gevuld achternaam is optioneel');
    //             }
    //         }