<?php

class Controller
{
    public function model($model,$data = NULL)
    {
        require_once "../book_active/models/$model.php";

        return new $model ();
    }

    public function view($view, $data = Array())
    {
    require_once "../book_active/views/$view.php";
    }
}
