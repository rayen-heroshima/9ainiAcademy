<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles1.css" />
    
    <style>
      .btn{
    text-decoration: none;
    color: white;
    background-color: #5856D6;
    padding: 5%;
    margin: 5%;
    border-radius: 10px;
    cursor: pointer;
}
.btn:hover{
    color: #5856D6;
    background-color: white;
    border: #5856D6 1px solid;
}
      .imge{
    
    position: relative !important;
    width: 100% !important;
    border-radius: 30px 30px 0px 0px;
    background-size: cover; 
  background-position: center; 
  background-repeat: no-repeat;
    
    
}
.card-body{
    padding: 5%;
    display: flex;
    flex-direction: column;
    
}
.card-body strong{
    color: #5856D6;
    font-weight: 700;
}
.container-img{
    display: flex;
    flex-wrap: wrap;
    width: 100% !important;
}


.save {
    position: absolute;
    top: 10px;
    right: 10px;
    
    border-radius: 50%;
    padding: 5px;
}
.save {
    transition: 0.2s ease-in-out;
    border-radius: 50px;
    margin: 20px;
    width: 30px;
    height: 30px;
    
    background-color: white !important;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text {
    margin: 10px;
    display: flex;
    flex-direction: column;
    align-items: space-around;
    margin-top: -50px;
}

.save i {
    transition: 0.2s ease-in-out;
    width: 15px;
    height: 15px;
}
      .card6 {
    width: 300px;
    height:450px;
    
    border-radius: 30px;
    box-shadow: 15px 15px 30px #bebebe,
        -15px -15px 30px #ffffff;
    transition: 0.2s ease-in-out;
    margin-left: 150px;
    text-decoration: none;
    
    display: flex;
    flex-direction: column;
    gap: 5%;
    margin-top: 100px;
    
}
      .save:hover {
    transform: scale(1.1) rotate(10deg);
    background-color: #5856D6;
}

.save:hover .i {
    fill: #ced8de;
}

      .save .i {
    transition: 0.2s ease-in-out;
    width: 15px;
    height: 15px;
    fill: #F0F0F0;
}
      .save {
    transition: 0.2s ease-in-out;
    border-radius: 50px;
    margin: 20px;
    width: 30px;
    height: 30px;
    background-color: #000;
    display: flex;
    align-items: center;
    justify-content: center;

}
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
    <div class="midcontent">
      <nav class="navbar">
        <h2>Browse Courses</h2>
        <div class="searchBox">
          <input id="searchInput"
            class="searchInput"
            type="text"
            name=""
            placeholder="Search something"
          />
          <button id="searchButton" class="searchButton" href="#">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
      </nav>
      <h5
        style="
          margin-left: 90px;
          margin-top: 30px;
          padding-top: 20px;
          border-top: solid 1px;
          border-color: #f2f2f2;
        "
      >
        Personalized Recommendations
      </h5>
      <div class="keywords">
        <button class="keywordsbtn" href="#">Explore Marketing</button>
        <button class="keywordsbtn" href="#">Explore Marketing</button>
        <button class="keywordsbtn" href="#">Explore Marketing</button>
        <button class="keywordsbtn" href="#">Explore Marketing</button>
        <button class="keywordsbtn" href="#">Explore Marketing</button>
        <button class="keywordsbtn" href="#">Explore Marketing</button>
        <button class="keywordsbtn" href="#">Explore Marketing</button>
        <button class="keywordsbtn" href="#">Explore Marketing</button>
      </div>
    </div>
    <h5
      style="
        margin-left: 90px;
        margin-top: 30px;
        padding-top: 20px;
        border-top: solid 1px;
        border-color: #f2f2f2;
      "
    >
      popular searches
    </h5>
    
    <?php
      include 'C:\xampp\htdocs\PFA V0\PFA 2\View\view.php';
      ?>
    
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
