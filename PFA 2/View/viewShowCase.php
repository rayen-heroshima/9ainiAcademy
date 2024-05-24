
<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\inscription.php';
$verifInscrit = new inscrit();    
    $user = "localhost";
    $database = "pfa";
    $password = "";
    $pdo;
    $title;
    try {
        $pdo = new PDO("mysql:host=".$user.";dbname=".$database, "root", $password);
        echo "The connection is established";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    if(isset($_GET['input'])) {
        // Retrieve the input value from the URL
        $title = $_GET['input'];
    
        // Use the input value as needed
        echo "Input value: " . $title;
    } else {
        // If the input parameter is not provided, display a message or perform some other action
        echo "No input value provided.";
    }
    $stm = $pdo->prepare("SELECT * FROM courses WHERE title = ?");
$stm->bindValue(1, $title);
$stm->execute();
$result = $stm->fetch(PDO::FETCH_ASSOC);


$stm = $pdo->prepare("SELECT * FROM videos WHERE courseID = ?");
$stm->bindValue(1, $result["id"]);
$stm->execute();
$result1 = $stm->fetchAll(PDO::FETCH_ASSOC);

$verification=$verifInscrit->verification( $result["id"],$_SESSION["id"]);



 


    

    ?>

