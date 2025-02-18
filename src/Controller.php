<?php

namespace App;

class Controller
{
    protected function render($view, $data = [])
    {
        extract($data);

        include "Views/$view.php";
    }

    protected function loadModel($model)
    {
        require_once 'Models/'.$model.'.php';
    }

    protected function renderView($viewPath, $data = [])
    {
        extract($data);

        require_once 'Views/layout.php';
    }
}