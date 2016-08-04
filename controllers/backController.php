<?php
class backController extends Controller {
    function back_page(){
        $this->view("backPage");
    }
    function createActive(){//創活動
        $create=$this->model("createActive");
        $create->create($_POST);
        
    }
    function showActive(){
        
    }
    
}

?>
