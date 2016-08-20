<?php
class fontController extends Controller
{
    public function fontPage()
    {
        $url = $_GET['id'];
        $result = $this->model("joinActive");
        $result->writeSession($url);
        $this->view("fontPage");
    }

    public function getUrl($url)
    {
        return $url;
    }

    public function participate()
    {
        $url = $_SESSION['url'];
        $joinActive = $this->model("joinActive");
        $joinActive->joinAct($url);
    }
}

