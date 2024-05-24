<?php

  $user = "localhost";
  $database = "pfa";
  $password = "";
  $pdo;

  
    try {
        $pdo = new PDO("mysql:host=".$user.";dbname=".$database, "root", $password);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $stm=$pdo->prepare("SELECT DISTINCT * from courses inner join inscription ON inscription.courseID=courses.id && inscription.userID=?");
    $stm->bindValue(1,$_SESSION["id"]);
    $stm->execute();
    $resultInscription=$stm->fetchAll(PDO::FETCH_ASSOC);
    



?>