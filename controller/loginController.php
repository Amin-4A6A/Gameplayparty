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
        $result = $this->model->getlogin();

        if($result == true)
        {
            require_once('view/addBios.php');
        }else
        {
            require_once('view/login.php');
        }

	}
	
}
