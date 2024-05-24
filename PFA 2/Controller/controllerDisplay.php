<?php
if(isset($_GET["input"])){
    require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\course.php';
    $courseID=$currentCourse->afficheone('SELECT id from courses where title =?',$_GET["input"]);
}

?>