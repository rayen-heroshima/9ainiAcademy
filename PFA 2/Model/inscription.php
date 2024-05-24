<?php
class inscrit{

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
        
        $stm = $this->pdo->prepare("INSERT INTO inscription (courseID,userID) VALUES(?,?)");
        $stm->bindValue(1,$userID);
        $stm->bindValue(2,$courseID);
        
        $stm->execute();
    }
    public function affichagebyID($id){
        $stm=$this->pdo->prepare("SELECT DISTINCT * from inscription where userID = ? ");
        $stm->bindValue(1,$id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
    public function verification($courseID,$userID){
        
        $stm = $this->pdo->prepare("SELECT * from inscription where courseID = ? and userID=?");
        $stm->bindValue(1,$courseID);
        $stm->bindValue(2,$userID);
        
        
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>