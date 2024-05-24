<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\user.php';
session_start();
$user = new user();
$pdo = $user->pdo;
$userData = json_decode(file_get_contents('php://input'));

$email = $userData->email;
$firstname = $userData->firstname;
$lastname = $userData->lastname;
$password = $userData->password;
$phone = $userData->phone;
$stm = $pdo->prepare("SELECT `id`, `email`, `firstname`, `lastname`, `password`, `role`, `image`, `phone` FROM users WHERE email = ? and NOT id = ?");
$stm->bindValue(1, $email);
$stm->bindValue(2, $_SESSION["id"]);
$stm->execute();
$data = $stm->fetch(PDO::FETCH_ASSOC);

if ($data) {
    echo "invalid";
} else {
    $user->update($email, $firstname, $lastname, $password, $phone, id: $_SESSION["id"]);
    echo "valid";
    $_SESSION["name"] = $firstname;
    $_SESSION["pname"] = $lastname;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["phone"] = $phone;
}
