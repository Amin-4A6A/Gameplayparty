<?php 
 if (isset($_POST['submit'])) {
 	$naam = $_POST['naam'];
 	$email = $_POST['email'];
 	$bericht = $_POST['bericht'];

 	mail("brandon.louwaars@gmail.com", "Contact", "Naam: " . $naam . "<br>" . "email: " . $email . "<br><br>" . "Bericht: " . $bericht);

 } else {
 	echo "hij doed niet";
 	console.log('Failed to send');
 }
?>