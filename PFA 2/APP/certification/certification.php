<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\Controller\controllerCertification.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="info">
    <strong class="name"><?php
    echo  $_SESSION["name"] . " " . $_SESSION["pname"];
    ?></strong>
    <p class="para">To successfully complete <?php echo $_SESSION["cours_now"];?> course</p>
    </div>
    
</body>
</html>