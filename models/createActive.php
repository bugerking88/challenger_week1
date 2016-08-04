<?php
require_once("PDO_getdata");
class createActive {
    function create($post){
     $sql = "INSERT INTO `active_table` (`act_id`, `act_name`, `max_person`, `partner`, `start_time`,`end_time`,`url`) 
	        values ('".."','".."', '".."','".."', '".."')";
	 $this->connect_mysql($sql);   
    }
}

?>
