<?php

require_once('controller/dataHandler.php');

class catalogusModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "mvc", "root", "");
    }

    public function readCatalogus()
    {
       $query = 'SELECT * FROM contacts';
       $bioscopen = $this->dataHandler->ReadData($query);

       return $bioscopen;
    }
}