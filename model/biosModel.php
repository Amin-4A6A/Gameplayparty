<?php

require_once('controller/dataHandler.php');

class biosModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "MVC", "root", "");
    }

    public function readBios()
    {
       $query = 'SELECT * FROM contacts';
       $bioscopen = $this->dataHandler->ReadData($query);

       return $bioscopen;
    }
}