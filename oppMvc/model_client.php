<?php
require_once("model_main.php");

class client extends database{

    function __construct(){
        $this->connect();
    }

    function __destruct(){
        $this->db=null;
    }

    function getClients(){
        try{
                $statement = $this->db->prepare('SELECT CLIENTE_COD, NOMBRE, TELEFONO FROM CLIENTE');
                $statement->execute();
                return array('data_table'=>$statement->fetchAll(PDO::FETCH_ASSOC));
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
    }
    function getSingleClient($cliente){
        try{
                // Crea el código necesario para devolver la información de un cliente en concreto
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }

    }
}

?>
