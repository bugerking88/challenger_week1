<?php
class backController extends Controller {
    function back_page(){
        $result=$this->showActive();
        $this->view("backPage",$result);
    }
    function createActive(){//創活動
        $a=$this->model("createActive");
        $url = $a->create($_POST);
        $a->whocanJoin($url);

        header("location:back_page");
        
    }
    function showActive(){//顯示活動
        $activeShow=$this->model("createActive");
        $result=$activeShow->activeShow();
        return $result;
    }
    
}

?>
