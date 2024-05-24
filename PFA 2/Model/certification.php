<?php
class certification {
    public $user = "localhost";
    public $database = "pfa";
    public $password = "";
    public $pdo;
    
    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=".$this->user.";dbname=".$this->database, "root", $this->password);
            
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function insert($userID,$courseID){
        
        $stm = $this->pdo->prepare("INSERT INTO certification (courseID,userID) VALUES(?,?)");
        
        $stm->bindValue(1,$courseID);
        $stm->bindValue(2,$userID);
        
        $stm->execute();
    }
}

?>