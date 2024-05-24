<?php

$user = "localhost";
$database = "pfa";
$password = "";
$pdo;

try {
    $pdo = new PDO("mysql:host=".$user.";dbname=".$database, "root", $password);
    echo "The connection is established";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$json_data = file_get_contents('php://input');
    
 
$data = json_decode($json_data, true);
$user = "localhost";
$database = "pfa";
$password = "";
$pdo;
session_start();
try {
    $pdo = new PDO("mysql:host=".$user.";dbname=".$database, "root", $password);
    echo "The connection is established";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
echo $data;
$id;
$sql = "SELECT id FROM courses WHERE title = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $data);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($result) {
        $id= $result['id']; // Return the ID if found
    } else {
        $id= null; // Return null if no matching title found
    }

    try {
        $stm = $pdo->prepare("INSERT INTO enrollments (courseID,UserID) VALUES(?,?)");
    $stm->bindValue(1,$id);
    $stm->bindValue(2,$_SESSION["id"]);
   
    $stm->execute();

    } catch (\Throwable $th) {
        //throw $th;
    }

?>