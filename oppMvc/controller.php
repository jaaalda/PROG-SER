<?php
    
    require('Abstract_Controller.php');

    $action=getAction();

    switch($action[0]){
        case 'borra':
            require_once("controller_delete.php");
            $controller = new controller_delete($action[1]);
            break;
        case 'detalle':
            // Completa la llamada al controlador adecuado
            break;
        default:
            require_once("controller_client.php");
            $controller = new controller_client();
            break;
    } 
     
    function getAction(){
        $uri = $_SERVER['REQUEST_URI'];
        $uri_action=explode('.php',$uri);
        $result_action=explode("/",end($uri_action));
        if (sizeOf($result_action)==3) array_shift($result_action);
        return $result_action;
    }
?>

