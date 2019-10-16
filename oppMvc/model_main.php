<?php

class database {
    private $host = 'localhost';
    private $db_name = 'empresa';
    private $user_name = 'root';
    private $password  = '';
    protected $db;

    protected function connect(){
        try{
            $this->db = new PDO("mysql:host=$this->host;
                           dbname=$this->db_name", 
                           $this->user_name, 
                           $this->password);
            $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
