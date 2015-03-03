<?php 

/**
* Main App Container for PVC
* @author Arandi López <arandilopez.93@gmail.com>
*/

class App
{
    

    public function run()
    {
        $request    = trim($_SERVER['REQUEST_URI'], '/');
        $request    = preg_replace("/\/*".APP_BASE."\/*/", "", $request);
        $datas      = explode('/', $request);
        $controller = isset($datas[0]) ? $datas[0] : false;
        $action     = isset($datas[1]) ? $datas[1] : false;
        $data       = array_slice($datas, 2);
        $this->execute($controller, $action, $data);
    }

    private function execute($controller = false, $method = false, $params = false)
    {
        $controller = (!$controller) ? DEFAULT_CONTROLLER : $controller;
        $currentController = ucfirst($controller)."Controller";
        $currentControllerFile = APP_PATH."controller/$currentController.php";
        if (file_exists($currentControllerFile)) {
            $controllerObject = new $currentController();
            if($method) {
                if(method_exists($controllerObject, $method)) {
                    if ($params) {
                        $controllerObject->$method($params);
                    }
                    else
                    {
                        $controllerObject->$method();
                    }
                }else
                {
                    include APP_PATH."view/includes/404.php";
                }
            }else{
                $defMethod = DEFAULT_METHOD;
                $controllerObject->$defMethod();
            }
        }
        else
        {
            include APP_PATH."view/includes/404.php";
        }
    }
}