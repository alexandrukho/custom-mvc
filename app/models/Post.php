<?php
namespace app\model;

use app\core\MainModel;

class Post extends MainModel
{
    public function all()
    {
        $post = $this->capsule->table('posts')->get()->all();
        return $post;
    }

    public function createPost(array $postData)
    {
        $this->capsule->table('posts')->insert([
            'title' => $postData['title'],
            'content' => $postData['content'],
            'image' => $postData['image'],
        ]);
    }

    public function deletePost(int $id)
    {
        $this->capsule->table('posts')->delete($id);
    }
}