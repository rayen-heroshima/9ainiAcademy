<?php

require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\course.php';
$course=new coursedatabase();
$video = new videodatabase();
$courseID=$course->afficheone('SELECT id from courses where title =?',$_GET["input"]);
$result=$video->affichage($courseID["id"]);
$_SESSION["cours_now"]=$_GET["input"];


?>