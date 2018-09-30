<?php

require_once('controller/dataHandler.php');
// require_once('model/loginModel.php');

class loginModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    public function getlogin()
    {
       
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

            if($_REQUEST['username']=='root' && $_REQUEST['password']=='root'){
                return true;
            }
            else{
                return false;
            }

        }
    }

}

