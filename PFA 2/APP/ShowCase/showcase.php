<?php

session_start();
require 'C:\xampp\htdocs\PFA V0\PFA 2\View\viewShowCase.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Couses X</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles3.css" />
  </head>
  <body>
    <div class="main1">
      <div class="first">
        <h2 id="title"><?php
        echo $result["title"];
        ?></h2>
        <p class="disc">
          <?php
          echo $result["subtitle"];
          ?>
        </p>
        <p class="dur_rat">
        <?php
        echo $result["description"];
        ?>  

        </p>
        <br />
        
        <strong>
          <?php
          echo $result["category"];
          ?>

        </strong>
        
        <div class="courses">
          <div class="contenu">
          <?php
        foreach ($result1 as $result2) {
            echo '<div class="course">' . $result2['title'] . '</div>';
        }
        ?>

          </div>


        </div>
      </div>
      <div class="second">
        <div class="Video">
          <div class="card7">
            
          <video width="640" height="360" controls>
        <source src="<?php echo $result['video']; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
          </div>
        </div>
        <div class="bttn">
          
          <button id="btn" class="bttnin"><?php
          if(isset($verification[0])){
            echo "view courses";
          }else{
            echo "enroll";
          }
          ?></button>
          <button class="bttnin"><i class="fa-solid fa-heart"></i></button>
        </div>
      </div>
    </div>
    <?php
    require_once '../sidebar.php';
    ?>
    <script src="index.js"></script>
    <script
      src="https://kit.fontawesome.com/f90539f5e9.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
