<?php
require('model_delete.php');

class controller_delete extends AbstractController{

    private $conn;

    function __construct($cliente){
        $this->conn=new client_delete();
        $this->conn->deleteSingleClient($cliente);
        header("Location: /controller.php");
        die();
    }
}  
?>