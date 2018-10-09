<?php

require_once('controller/dataHandler.php');


class roleModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    public function read(int $id = null) {
        if(!$id) {
            return $this->dataHandler->readData("SELECT * FROM `roles`");
        } else {
            return $this->dataHandler->readData("SELECT * FROM `roles` WHERE `id` = :id", [":id" => $id], false);
        }
    }

}
