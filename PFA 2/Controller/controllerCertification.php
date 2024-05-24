<?php
session_start();
echo $_SESSION["id"].$_SESSION["cours_now"];
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\certification.php';
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\course.php';
$cours= new coursedatabase();

$certif =new certification();
$certif->insert($_SESSION["id"],$cours->getID($_SESSION["cours_now"]));
?>