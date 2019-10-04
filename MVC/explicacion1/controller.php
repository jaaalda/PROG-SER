<?php

require_once('model.php');

require_once('view.php');


// render($diccionario, 'templates/templates00.html');
// render($diccionario2, 'templates/templates01.html');

$actionarray= explode(".php",$_SERVER['REQUEST_URI']);
$action=$actionarray[1];
switch($action){
    case "/articulo":
        render 
}
?>