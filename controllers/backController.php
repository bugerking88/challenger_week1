<?php

class backController extends Controller
{
    public function backPage()
    {
        $result = $this->showActive();
        $this->view("backPage",$result);
    }

    //創活動
    public function createActive()
    {
        $a = $this->model("createActive");
        $url = $a->create($_POST);
        $a->whocanJoin($url);

        header("location:back_page");
    }

    //顯示活動
    public function showActive()
    {
        $activeShow = $this->model("createActive");
        $result = $activeShow->activeShow();
        return $result;
    }
}
