<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\admin.php';
$admin=new admin();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $res=$admin->isUser($email,$password);
        
        if(isset($res["id"])){
            echo"done";
        }else{
            echo"none";
        }
        
    } else {
        echo "Tous les champs requis ne sont pas définis.";
    }
} else {
    echo "Erreur : Cette page ne peut être accédée directement.";
}
?>


