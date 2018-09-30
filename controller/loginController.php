<?php

require_once('model/loginModel.php');

class loginController
{	
	function __construct()
	{
		$this->model = new loginModel;
	}

	public function invoke() 
	{
        $reslt = $this->model->getlogin();

        if($reslt == true)
        {
            include('view/catalogus.php');
        }else
        {
            include('view/login.php');
        }

	}
	
}
