<?php
require_once("PDO_connect.php");
class createActive extends PDO_connect{
    function create($post){
        $date = new DateTime();
        $url=rand(1000,9999).$date->getTimestamp().rand(1000,9999);
        if($_POST["partner"]="on")$part="yes";
        else $part="no";
        $sql = "INSERT INTO `active_table` (`act_name`, `max_person`, `partner`, `start_time`,`end_time`,`url`) 
            values('".$_POST["act_name"]."','".$_POST["max_per"]."',
            '".$part."','".$_POST["bookdate_start"]."', '".$_POST["bookdate_end"]."','".$url."')";
        $this->connect_PDO($sql);
        return $url;
    }
    function activeShow(){
        $sql="SELECT * FROM `active_table`";
	    $activeShow=$this->connect_getdata($sql);
	    return $activeShow;
    }
    function whocanJoin($url){
        $sql="SELECT `act_id` FROM `active_table` WHERE `url`='{$url}'";
        $act_id= $this->connect_getdata($sql);
        var_dump($_POST['employee_id']);
        foreach($_POST['employee_id'] as $value){
            echo $value;
            $a = $act_id[0]['act_id'];
            $sql="INSERT INTO `active_memo` (`employee_id`,`act_id`) values('$value','$a')";
            $this->connect_PDO($sql);
        }
    }
}

?>
