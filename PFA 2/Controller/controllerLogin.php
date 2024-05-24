<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\user.php';
$user = new user();
$userData = json_decode(file_get_contents('php://input'));
$email = $userData->email;

$password = $userData->password;
$data = $user->read($email, $password);
if ($data) {
    echo "true";

    session_start();
    $_SESSION["name"] = $data["firstname"];
    $_SESSION["pname"] = $data["lastname"];
    $_SESSION["email"] = $data["email"];
    $_SESSION["password"] = $data["password"];
    $_SESSION["role"] = $data["role"];
    $_SESSION["id"] = $data["id"];
    $_SESSION["phone"] = $data["phone"];
    $_SESSION["image"] = $data["image"];
}else{
    echo "false";
}
