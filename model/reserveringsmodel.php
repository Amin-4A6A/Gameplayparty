<?php

require_once('controller/dataHandler.php');

class reserveringsModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    public function createreservation($reservation_date, $begin_date , $end_date, $amount_persons, $subtotaal, $total, $reserved) { 
	
        // try {
        //     if ($rolstoel == "ja") {
        //         $toegang = 1;
        //     } else {
        //         $toegang = 0;
        //     }
    
            $sql = "INSERT INTO reservation(reservation_date, begin_date, end_date, amount_persons, subtotaal, total, reserved) VALUES ('$reservation_date', '$begin_date' ,'$end_date', '$amount_persons', '$subtotaal', '$total', '$reserved')";
            $result = $this->dataHandler->CreateData($sql);
    
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
            return $result;
        }

}