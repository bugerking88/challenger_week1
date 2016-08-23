<?php

require_once("PDOConnect.php");
class createActive extends PDOConnect
{
    public function create($post)
    {
        // $date = new DateTime();
        // $url = rand(1000, 9999).$date->getTimestamp().rand(1000, 9999);
        // if ($_POST["partner"] = "on") $part = "yes";
        // else $part = "no";
        // $sql = "INSERT INTO `active_table` (`act_name`, `max_person`, `partner`, `start_time`,`end_time`,`url`)
        // VALUES('".$_POST["act_name"]."','".$_POST["max_per"]."',
        // '".$part."','".$_POST["bookdate_start"]."', '".$_POST["bookdate_end"]."','".$url."')";
        // $url = $this->db->prepare($sql);
        // $url->execute();
        // return $url;
    }

    public function activeShow()
    {
        $sql = "SELECT * FROM `active_table`";
	    $a = $this->db->prepare($sql);
	    $a->execute();
	    $accountShow = $a->fetchAll();
	    return $accountShow;
    }

    public function whocanJoin($url)
    {
        // $sql = "SELECT `act_id` FROM `active_table` WHERE `url`='{$url}'";
        // $act_id = $this->db->prepare($sql);
        // $act_id->execute();
        // foreach ($_POST['employee_id'] as $value) {
        // echo $value;
        // $a = $act_id[0]['act_id'];
        // $sql = "INSERT INTO `active_memo` (`employee_id`,`act_id`) values('$value','$a')";
        // $result = $this->db->prepare($sql);
        // $result->execute();
        // }
    }
}

