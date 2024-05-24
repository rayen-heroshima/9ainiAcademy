<?php

require_once 'C:\xampp\htdocs\PFA V0\PFA 2\Model\submit.php' ;
if (isset($_FILES['videoFile'])) {
    $uploadDir = 'C:\xampp\htdocs\PFA V0\PFA 2\Model\uploads\ ';
    $uploadFile = $uploadDir . basename($_FILES['videoFile']['name']);
    if (move_uploaded_file($_FILES['videoFile']['tmp_name'], $uploadFile)) {
      
      echo "File uploaded and saved to database.";
    } else {
     
      echo "Error uploading image. Please try again.";
    }
  } 
  if (isset($_FILES['uploadFile-quizz'])) {
    $uploadDir = 'C:\xampp\htdocs\PFA V0\PFA 2\Model\uploads\ ';
    $uploadFile = $uploadDir . basename($_FILES['uploadFile-quizz']['name']);
    if (move_uploaded_file($_FILES['uploadFile-quizz']['tmp_name'], $uploadFile)) {
      
      echo "File uploaded and saved to database.";
    } else {
     
      echo "Error uploading image. Please try again.";
    }
  } 
  
$video = new videodatabase();
$video->connect();

$json_data = file_get_contents('php://input');
    
    
    $data = json_decode($json_data, true); 
   if(isset($data)) {
    foreach($data as $key => $value) {
      foreach($value as $key2 => $value2) {
        echo $value2['title'];
      echo $value2['videoUrl'];
      $filePath3='http://localhost/PFA%20V0/PFA%202/Model/uploads/%20'.$value2['videoUrl'];
      echo $value2['pdfUrl'];
      $filePath4= 'http://localhost/PFA%20V0/PFA%202/Model/uploads/%20'.$value2['pdfUrl'];
      echo $_SESSION["user_id"];
      $video->read($value2['title'],$filePath3,$filePath4,$_SESSION["user_id"]);

      }
    }
   }
    

