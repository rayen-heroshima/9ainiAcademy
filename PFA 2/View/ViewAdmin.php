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

$tableProfCourse;
$stm = $pdo->prepare("SELECT * FROM users INNER JOIN courses ON users.id = courses.creatorID");
$stm->execute();
$tableProfCourse = $stm->fetchAll(PDO::FETCH_ASSOC);


$certification;
$stm = $pdo->prepare("SELECT * FROM users INNER JOIN certification ON users.id = certification.userID inner join courses on courses.id=certification.courseID");
$stm->execute();
$certification = $stm->fetchAll(PDO::FETCH_ASSOC);


$prof;
$stm = $pdo->prepare("SELECT * FROM  users inner join courses on users.id=courses.creatorID");
$stm->execute();
$prof=$stm->fetchAll(PDO::FETCH_ASSOC);

$student;
$stm =$pdo->prepare("SELECT * from users inner join inscription on users.id = inscription.userID inner join courses on courses.id=inscription.courseID ");
$stm->execute();
$student =$stm->fetchAll(PDO::FETCH_ASSOC);

$users;
$stm = $pdo->prepare("SELECT * FROM  users ");
$stm->execute();
$users=$stm->fetchAll(PDO::FETCH_ASSOC);





?>
