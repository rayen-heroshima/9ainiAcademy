<?php

$title = $subtitle = $description = $courseCategory = $filePath = $filePath2 = $titleChapter = "";
$price=0;
$imageData1="" ;
require_once 'C:\xampp\htdocs\PFA V0\PFA 2\Model\submit.php';
if (isset($_POST["title"])) {
  $title = $_POST["title"];
}
if (isset($_POST["subtitle"])) {
  $subtitle = trim($_POST["subtitle"]);
} else {
  $subtitle = 'no';
}
if (isset($_POST["description"])) {
  $description = trim($_POST["description"]);
}
if (isset($_POST['course_category'])) {
  $courseCategory = htmlspecialchars($_POST['course_category']);
}
if (isset($_POST["pricing"])) {
  $price = $_POST["pricing"];
}
if (isset($_FILES['image'])) {
  $imageData1 = file_get_contents($_FILES['image']['tmp_name']);



  $uploadDir = 'C:\xampp\htdocs\PFA V0\PFA 2\Model\uploads\ ';
  $uploadFile = $uploadDir . basename($_FILES['image']['name']);
  $filePath = 'http://localhost/PFA%20V0/PFA%202/Model/uploads/%20' . basename($_FILES["image"]["name"]);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {

    echo "File uploaded and saved to database.";
  } else {

    echo "Error uploading image. Please try again.";
  }
} else {

  $filePath = '';
}


if (isset($_FILES['video-upload'])) {
  //$imageData2 = file_get_contents($_FILES["video-upload"]["tmp_name"]);
  //$imageData2 = file_get_contents($filePath_2);
  /*$uploadDir = 'C:\xampp\htdocs\PFA V0\PFA 2\Model\uploads\\';
  $uploadFile = $uploadDir . basename($_FILES['video']['name']);*/

  $uploadDir2 = 'C:\xampp\htdocs\PFA V0\PFA 2\Model\uploads\ ';
  $uploadFile2 = $uploadDir2 . basename($_FILES['video-upload']['name']);
  $filePath2 = 'http://localhost/PFA%20V0/PFA%202/Model/uploads/%20' . basename($_FILES['video-upload']['name']);
  if (move_uploaded_file($_FILES['video-upload']['tmp_name'], $uploadFile2)) {
    //$imageData2 = file_get_contents($uploadFile2);
    echo "Video uploaded successfully.";
  } else {

    echo "Error uploading video. Please try again.";
    $filePath2 = "";
  }
}


$course = new coursedatabase();

$course->connect();

$course->read($title, $subtitle, $description, $courseCategory, $price, $filePath, $filePath2, $imageData1, $_SESSION["id"]);
$_SESSION["user_id"] = $course->getID($title);
