<?php
require('model_client.php');

class controller_client extends AbstractController{

    private $conn;

    function __construct($client=0){
        $this->conn=new client();
        switch($client){
            case 0:
                $this->renderTemplate($this->conn->getClients(),file_get_contents('templates/template1.html'));
                break;
            default:
                // Completa la llamada a renderización de la página de detalle
                break;
        }
    }
}  
?>