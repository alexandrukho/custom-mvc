<?php

namespace app\core;

class Router
{
    private static $controllerName;
    private static $actionName;

    public static function run()
    {
        self::parseUrl();

        $controllerName = self::$controllerName;
        $actionName = self::$actionName;
        $className = '\app\controllers\\' . ucfirst($controllerName);
        $filePath = 'app/controllers/' . $controllerName . '.php';

        try {
            if (file_exists($filePath)) {
                require_once $filePath;
            } else {
                throw new \Exception('File not found');
            }
            if (class_exists($className)) {
                $controller = new $className();
            } else {
                throw new \Exception('Class not found');
            }
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                throw new \Exception('Method not found');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function parseUrl()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        self::$controllerName = $routes[1] ?: 'Main';
        self::$actionName = $routes[2] ?: 'index';
    }

    public static function errorPage($code)
    {
        http_response_code($code);
        require_once "app/views/errors/" . $code . '.php';
    }
}
