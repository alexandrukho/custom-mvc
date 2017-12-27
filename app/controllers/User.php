<?php

namespace app\controllers;

use app\core\MainController;

class User extends MainController
{
    public function index()
    {
        $data = $this->user->all();
        return $this->view->render('admin/user', $data);
    }

    public function store()
    {
        if (isset($_POST['check-status'])) {
            $data['status'] = 'admin';
        } else {
            $data['status'] = 'guest';
        }
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $this->user->createUser($data);
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->user->deleteUser($id);
        return header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}