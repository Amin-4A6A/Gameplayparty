<!-- <?php 
    // class Router
    // {
    //     public function __construct() 
    //     {

    //         $url = $_SERVER['REQUEST_URI'];

    //         $packets = explode('/',$url);
            
    //         $this->determineDestination($packets);
    //     }    

    //     public function determineDestination($packets='')
    //     {


    //         if (isset($packets[2]) && $packets[2] !='' && isset($packets[3]) && $packets[3] !=''){
    //             $this->sendToDestination($packets[2], $packets[3], array_slice($packets, 3));
    //         }else{
    //             echo "";
    //         }
    //     }


    //     public function sendToDestination($classname, $method, $params)
    //     {
    //         $class =  APP_DIR . '/controller/' . $classname . '.php';
    //         require_once($class);

    //         $obj = new $classname;
    //         die(call_user_func_array(array($obj, $method), $params));
    //     }

    // }
 ?> -->
 <?php
    class Router
    {
        public function __construct() 
        {

            $url = $_SERVER['REQUEST_URI'];

                $url = trim($url, "/");

            $packets = explode('/',$url);
            
            $this->determineDestination($packets);
        }   

        public function determineDestination($packets='')
        {
            if(!isset($packets[2]) && empty($packets[2])){
                $class = "biosController";
            } else {
                $class = $packets[2];
            }
         var_dump($class);
           if(!isset($packets[3]) && empty($packets[3])){
                $method = "home";
                
            } else {
                $method = $packets[3];
            }
        var_dump($method);

                $this->sendToDestination($class, $method, array_slice($packets, 3));
        }


        public function sendToDestination($classname, $method, $params)
        {
            $class =  APP_DIR . '/controller/' . $classname . '.php';
            require_once($class);

            $obj = new $classname;
            die(call_user_func_array(array($obj, $method), $params));
        }

    }
 ?>

	