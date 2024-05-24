<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="initial-scale=1.0" />
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
  

  <link rel="stylesheet" href="./styles2.css" />
  
  <style>
    .big {
      width: 100% !important;
      
      
    }
    .container{
      width: 100% !important;
    }
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.imge{
  height:40% !important;
  width: 100%;
  display: flex;
  
}
  </style>
</head>

<body>
  <div class="big">
    <div class="container">
      <h2 style="margin-left: 90px">Categories</h2>
      <br />

      <div class="main1">
        <div class="all">
          <div class="card3-image">
            <i class="fa-solid fa-chart-line"></i>
            <p>Business Insights</p>
          </div>
          <div class="card3-image">
            <i class="fa-solid fa-users"></i>
            <p>Human Resources</p>
          </div>
          <div class="card3-image">
            <i class="fa-brands fa-vine"></i>
            <p>Digital Marketing</p>
          </div>
          <div class="card3-image">
            <i class="fa-solid fa-calendar-days"></i>
            <p>Visual Communication</p>
          </div>
          <div class="card3-image">
            <i class="fa-solid fa-pen-ruler"></i>
            <p>Data Analysis</p>
          </div>
          <div class="card3-image">
            <i class="fa-solid fa-lightbulb"></i>
            <p>Digital Marketing</p>
          </div>
          <div class="card3-image">
            <i class="fa-solid fa-circle"></i>
            <p>Lorem ipsum</p>
          </div>
        </div>
      </div>
      <br />
      <h2 style="margin-left: 90px">My favorite</h2>
      <br />
      <?php
      include 'C:\xampp\htdocs\PFA V0\PFA 2\View\view2.php';
      ?>

       
      <br />
      <br />
      <h2 style="margin-left: 100px">Featured Courses</h2>
      <br />
      <?php
      include 'C:\xampp\htdocs\PFA V0\PFA 2\View\view.php';
      ?>
      <br />
      
    </div>
    <?php
    require_once '../sidebar.php';
    ?>
  </div>
  <script src="./index.js"></script>
  <script src="https://kit.fontawesome.com/f90539f5e9.js" crossorigin="anonymous"></script>
</body>

</html>