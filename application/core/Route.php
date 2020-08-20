<?php
class Route
{
    public static function start(){
        //http://personalblog.test/
        //http://personalblog.test/Page/contacts
        //http://personalblog.test?path=/Page/contacts
        $controllerName = 'Page';
        $modelName = 'Page';
        $actionName = 'index';
        $route= [];
        if(!empty($_GET['path'])){
            $route = explode('/', $_GET['path']);
        }

        if(!empty($route[0])){
            $controllerName = $route[0];
            $modelName = $route[0];
        }
        if(!empty($route[1])){
            $actionName = $route[1];
        }
        $controllerName = 'Controller_'.$controllerName;
        $actionName = 'action_'.$actionName;
        $modelName = 'Model_'.$modelName;
        $modelPath = 'application/models/'.$modelName.'.php';
        if(file_exists($modelPath)){
            require_once $modelPath;
        }

        $controllerPath =  'application/controllers/'.$controllerName.'.php';
        if(file_exists($controllerPath)){
            require_once $controllerPath;
        }else{
            die('NOT FOUND');
        }



        $controller = new $controllerName;

        if(method_exists($controller, $actionName)){
            $controller->$actionName();
        }else{
            die('NOT FOUND');
        }

    }
}