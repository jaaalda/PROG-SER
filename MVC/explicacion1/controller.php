<?php

require_once('model.php');

require_once('view.php');


// render($diccionario, 'templates/templates00.html');
// render($diccionario2, 'templates/templates01.html');

$actionarray= explode(".php",$_SERVER['REQUEST_URI']);
$action=$actionarray[1];


 switch ($action) {
    case '/articulo':
    render(getArticulo($conex), "template.html");
        break;
    
        case '/foto':
        render(getFoto($conex), "template01.html");
        break;
        case '/empresaF':
        render(getEmpresaF($conex), "template03.html");
        break;
    default:
    render($diccionario, "template.html"); 

