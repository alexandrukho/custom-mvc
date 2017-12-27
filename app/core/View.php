<?php
namespace app\core;

class View
{
    public function render(String $filename, array $data = null)
    {
        return require_once __DIR__."/../views/".$filename.".php";
    }

}