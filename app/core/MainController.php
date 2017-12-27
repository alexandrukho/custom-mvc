<?php
namespace app\core;

use app\model\Post;
use app\model\User;

class MainController
{
    protected $view;
    protected $post;
    protected $user;
    public function __construct()
    {
        $this->view = new View();
        $this->post = new Post();
        $this->user = new User();
        new MainModel();
    }
    public function redirect($to)
    {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.$to);
    }
}