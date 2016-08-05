<?php
require_once("PDO_getdata.php");
class createActive extends connect_two{
    function create($post){
        // var_dump($post);
        // exit;
        $url=rand(1000,9999).$_POST["bookdate_end"].rand(1000,9999);
        if($_POST["partner"]="on")$part="yes";
        else $part="no";
     $sql = "INSERT INTO `active_table` (`act_name`, `max_person`, `partner`, `start_time`,`end_time`,`url`) 
	        values('".$_POST["act_name"]."','".$_POST["max_person"]."',
	        '".$part."','".$_POST["bookdate_start"]."', '".$_POST["bookdate_end"]."','".$url."')";
	 $this->connect_mysql($sql);
    }
    function activeShow(){
        $sql="SELECT * FROM `active_table`";
	    $activeShow=$this->connect_getdata($sql);
	    return $activeShow;
    }
}

?>
