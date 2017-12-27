<?php
namespace app\model;

use app\core\MainModel;

class User extends MainModel
{
    public function all()
    {
        $post = $this->capsule->table('users')->get()->all();
        return $post;
    }

    public function createUser(array $userData)
    {
        $this->capsule->table('users')->insert([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'status' => $userData['status'],
        ]);
    }

    public function deleteUser($id)
    {
        $this->capsule->table('users')->delete($id);
    }
}