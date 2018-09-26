<?php 
    class Router
    {
        public function __construct() 
        {

            $url = $_SERVER['REQUEST_URI'];

            $packets = explode('/',$url);
            
            $this->determineDestination($packets);
            
        }    

        public function determineDestination($packets='')
        {


            if (isset($packets[4]) && $packets[4] !='' && isset($packets[5]) && $packets[5] !=''){
                $this->sendToDestination($packets[4], $packets[5], array_slice($packets, 5));
            }else{
                echo "";
            }
        }


        public function sendToDestination($classname, $method, $params)
        {
            $class =  APP_DIR . 'controller/' . $classname . '.php';
            require_once($class);

            $obj = new $classname;
            die(call_user_func_array(array($obj, $method), $params));
        }

    }
 ?>

	