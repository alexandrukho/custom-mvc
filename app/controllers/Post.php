<?php

namespace app\controllers;

use app\core\MainController;

class Post extends MainController
{
    public function index()
    {
        $posts = $this->post->all();
        $this->view->render('admin/post', $posts);
    }

    public function store()
    {
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['image'] = $_FILES['image'];
        if ($data['image']['error'] === 4) {
            $data['image'] = '/public/images/posts/default.png';
        } else {
            $uploadDir = './public/images/posts/';
            $uploadFile = $uploadDir . time() . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                $data['errors'] = '';
                $uploadFile = mb_substr($uploadFile, 1);
                $data['image'] = $uploadFile;
            } else {
                $data['errors'] = 'Произошла ошибка при загрузке файла';
            }
        }
        $this->post->createPost($data);
        return header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->post->deletePost($id);
        return header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}