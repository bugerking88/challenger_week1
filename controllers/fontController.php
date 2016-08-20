<?php
class fontController extends Controller {
    function font_page(){
        $url=$_GET['id'];
        $result=$this->model("joinActive");
        $result->writeSession($url);
        $this->view("fontPage");
        }
    function getUrl($url){
        //private $url;
        return $url;
    }
    function participate(){
        $url=$_SESSION['url'];
        $joinActive=$this->model("joinActive");
        $joinActive->joinAct($url);
    }
}

?>
