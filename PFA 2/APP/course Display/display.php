<?php
session_start();
require 'C:\xampp\htdocs\PFA V0\PFA 2\View\viewDisplay.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles3.css" />
</head>
<body>
<div class="container">
    <div class="main">
        <div class="screen">
            <?php
            foreach($result as $res){
                echo '<div class="right" id="'.$res["title"].'">';
                echo '<h2><strong>'.$res["title"].'</strong></h2>';
                echo '<video id="'.$res["title"].'_video"  controls src="'.$res["quizzesURL"].'"></video>';
                echo '<div class ="note"><input type="checkbox" name="" id=""  > <p>if you finish this course check this </p></div>';
                echo '</div>';
            }
            ?>
            <div class="certification">
                <h4>earn your certification</h4>
                <button type="button" id="certifBtn" class="certif disabled">certification</button>
            </div>
        </div>
        <div class="left">
            <?php foreach($result as $res): ?>
                <div class="course-title">
                    <a href="#<?php echo $res["title"]; ?> " style="text-decoration: none; color : black" ><strong ><?php echo $res["title"]; ?> </strong></a>
                </div>
            <?php endforeach; ?>
</div>
        </div>



    <?php
    require_once '../sidebar.php';
    ?>
    </div>
   <script src="index.js"></script>
    <script
      src="https://kit.fontawesome.com/f90539f5e9.js"
      crossorigin="anonymous"
    ></script>
</body>
</html>