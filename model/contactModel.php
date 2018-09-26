<?php

require_once('controller/dataHandler.php');

class contactModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }

}

