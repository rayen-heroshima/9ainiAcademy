<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\course.php';
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\inscription.php';
session_start();
$inscription = new inscrit();
$currentCourse= new coursedatabase();
$new = json_decode(file_get_contents('php://input'));
$courseID=$currentCourse->afficheone('SELECT id from courses where title =?',$new);
$inscription->insert($courseID["id"],$_SESSION["id"]);
echo"isvalide";




?>