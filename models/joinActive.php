<?php
require_once("PDO_connect.php");
class joinActive extends PDO_connect{
    function writeSession($url){
        $_SESSION['url']=$url;
    }
    function joinAct($url){
        $sql="SELECT `act_id` FROM `active_table` WHERE `url`='{$url}'";
        $act_id= $this->connect_getdata($sql);
        var_dump($act_id);
        exit;//20160808印出$act_id
	    $sql = "INSERT INTO `active_table` (`act_name`, `max_person`, `partner`, `start_time`,`end_time`,`url`) 
            values('".$_POST["act_name"]."','".$_POST["max_per"]."',
            '".$part."','".$_POST["bookdate_start"]."', '".$_POST["bookdate_end"]."','".$url."')";
        $this->connect_PDO($sql);
    }
}

?>
