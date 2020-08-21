<?php

class Route
{
    public static function start(): void
    {

        $controllerName = 'Page';
        $modelName = 'Page';
        $actionName = 'index';
        $route = [];

        if (!empty($_GET['path'])) {
            $route = explode('/', $_GET['path']);
        }

        if (!empty($route[0])) {
            $controllerName = $route[0];
            $modelName = $route[0];
        }

        if (!empty($route[1])) {
            $actionName = $route[1];
        }

        $controllerName = $controllerName . 'Controller';
        $actionName = 'action_' . $actionName;
        $modelName = $modelName . 'Model';
        $modelPath = 'App/Models/' . $modelName . '.php';

        if (file_exists($modelPath)) {
            require_once $modelPath;
        }

        $controllerPath = 'App/Controllers/' . $controllerName . '.php';

        if (file_exists($controllerPath)) {
            require $controllerPath;
        } else {
            header("Location:/404.php");
            die();
        }

        $controller = new $controllerName;

        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            header("Location:/404.php");
            die();
        }
    }
}