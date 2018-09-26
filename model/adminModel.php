<?php

require_once('controller/dataHandler.php');

class adminModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }

    // public function addCatalogus()
    // {
    //    $query = 'INSERT INTO bioscopen () VALUES()';
    //    $bioscopen = $this->dataHandler->CreateData($query);

    //    return $bioscopen;
    // }

}