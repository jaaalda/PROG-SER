<?php
require_once("model_main.php");

class client_delete extends database{

    function __construct(){
        $this->connect();
    }

    function __destruct(){
        $this->db=null;
    }

    function deleteSingleClient($cliente){
        try{
                $statement = $this->db->prepare('DELETE FROM CLIENTE WHERE CLIENTE_COD=:cliente');
                $statement->bindParam(':cliente',$cliente);
                $statement->execute();
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }

    }

}

?>
