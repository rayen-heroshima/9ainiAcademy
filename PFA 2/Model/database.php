<?php

class Database{
    public  $user = "localhost";
    public  $database = "pfa";
    public  $password = "";
    public $pdo;

    public  function connect(){
        try {
            $this->pdo = new PDO("mysql:host=".$this->user.";dbname=".$this->database, "root", $this->password);
            
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}


?>