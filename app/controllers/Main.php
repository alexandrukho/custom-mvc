<?php

namespace app\controllers;

use app\core\MainController;

class Main extends MainController
{
//    TODO - удаление и создание пользователей нужно переделать с ajax;
    public function index()
    {
        $data = $this->post->all();
        return $this->view->render('main', $data);
    }
}