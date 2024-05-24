<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\user.php';
$user = new user();
$userData = json_decode(file_get_contents('php://input'));

$firstName = $userData->firstname;
$lastName = $userData->lastname;
$phone = intval($userData->phone); // Convert phone number to integer
$email = $userData->email;
$password = $userData->password;
$role = $userData->role;

try {
    $user->insert($firstName, $lastName, $email, $password, $phone, $role);
    echo "valide";
    $userNow = $user->read($email, $password);
    session_start();
    $_SESSION["name"] = $userNow["firstname"];
    $_SESSION["pname"] = $userNow["lastname"];
    $_SESSION["email"] = $userNow["email"];
    $_SESSION["password"] = $userNow["password"];
    $_SESSION["role"] = $userNow["role"];
    $_SESSION["id"] = $userNow["id"];
    $_SESSION["phone"] = $userNow["phone"];
    $_SESSION["image"] = $userNow["image"];
} catch (\Throwable $th) {
    echo "invalid";
}
