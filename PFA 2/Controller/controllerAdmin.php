<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\user.php';
$user = new user();

// Decode the JSON data sent from the client
$data = json_decode(file_get_contents("php://input"), true);

// Delete user if 'id' parameter is set
if(isset($data["id"])){
    $user->delete($data["id"]);
}

$userData = []; // Initialize $userData as an empty array

// Retrieve user data if 'idu' parameter is set
if(isset($data["idu"])) {
    $userData = $user->getUserbyid($data["idu"]);
    print_r ($userData);
}
print_r($data);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id=$_POST["id"];
    $name = $_POST['name'];
    $pname = $_POST['pname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user->updateAdmin($email,$name,$pname,$password,$phone,$id);

    // Perform any further processing here...

    // Respond with a message (optional)
    echo "Form data received successfully!";
} else {
    // Handle other request methods (GET, PUT, DELETE, etc.) or direct access to the script
    echo "Only POST requests are allowed.";
}


