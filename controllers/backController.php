<?php
class backController extends Controller {
    function back_page(){
        $result=$this->showActive();
        $this->view("backPage",$result);
    }
    function createActive(){//創活動
        $create=$this->model("createActive");
        $create->create($_POST);
        header("location:back_page");
        
    }
    function showActive(){//顯示活動
        $activeShow=$this->model("createActive");
        $result=$activeShow->activeShow();
        // $this->view("backPage",$result);
        return $result;
    }
    
}

?>
