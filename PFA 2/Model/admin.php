<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\user.php';
class admin extends user{
    public function isUser($email,$password){
        $stm=$this->pdo->prepare('select * from admin where email =? and password =?');
        $stm->bindValue(1,$email);
        $stm->bindValue(2,$password);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    
}

?>