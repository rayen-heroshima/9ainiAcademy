<?php
session_start();
require 'C:\xampp\htdocs\PFA V0\PFA 2\Model\user.php';
require 'C:\xampp\htdocs\PFA V0\PFA 2\Controller\controllerInscription.php';
$user = new user();

if (isset($_FILES["image"])&&$_FILES["image"]["error"]!=4) {

  
  $image = $_FILES['image']['tmp_name'];
  $imageData = file_get_contents($image);
  $sql = "UPDATE users SET img = :image_data WHERE id = :id";
  $stmt = $user->pdo->prepare($sql);
  //$stmt->bindParam(':image_name', $imageName);
  $stmt->bindParam(':image_data', $imageData, PDO::PARAM_LOB);
  //$stmt->bindValue(1, $_SESSION["id"]);
  $stmt->bindParam(':id', $_SESSION["id"]);

  $stmt->execute();
  $uploadDir = 'C:\xampp\htdocs\PFA V0\PFA 2\Model\uploads\ ';
  $uploadData = 'http://localhost/PFA%20V0/PFA%202/Model/uploads/ ';
  $uploadFile = $uploadDir . basename($_FILES['image']['name']);
  $_SESSION["image"] = $uploadData . basename($_FILES['image']['name']);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
    // Update method call with positional arguments
    $stm = $user->pdo->prepare("UPDATE users SET image = ? WHERE id = ?");
    $stm->bindValue(1, $_SESSION["image"]);
    $stm->bindValue(2, $_SESSION["id"]);
    $stm->execute();
  } 
  
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>profile</title>
  <link rel="stylesheet" href="./styles.css" />


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>

  </style>


</head>

<body>
  <div class="big-container">


    <div class="content">
      <div class="first-content">
        <div class="zouz">
          <div class="card">
            <main>
              <a href="">
                <img src="<?= $_SESSION["image"];
                          ?>" alt="">
              </a>
            </main>
          </div>
          <div>
            <div class="info">
              <h2><?php
                  if (isset($_SESSION["name"])) {
                    echo $_SESSION["name"];
                  } else {
                    echo "user";
                  }
                  ?></h2>
              <p><i class="fa-solid fa-graduation-cap"></i> <?php
                                                            if (isset($_SESSION["role"])) {
                                                              echo $_SESSION["role"];
                                                            }
                                                            ?></p>
            </div>
            <div class="card1">
              <div class="card1-image">
                <div class="d">
                  <p>5</p>
                  <p>mathematics</p>
                </div>
                <div class="d">
                  <p>2</p>
                  <p>science</p>
                </div>
                <div class="d">
                  <p>20</p>
                  <p>course</p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="main1">
          <h2>Course Insights</h2>
          <div class="all">
            <div class="card3">
              <div class="card3-image">
                <i class="fa-solid fa-clock" style="
                transform: scale(2);
                align-items: center;
                padding-left: 50%;
                padding-right: 50%;
                padding-top: 10%;
              "></i>
              </div>

              <p class="card3-body">enrolled courses</p>
              <p class="f1"><?php
                            echo count($resultInscription);
                            ?></p>
            </div>

            <div class="card3">
              <div class="card3-image">
                <i class="fa-solid fa-chart-bar" style="
                transform: scale(2);
                align-items: center;
                padding-left: 50%;
                padding-right: 50%;
                padding-top: 10%;
              "></i>
              </div>

              <p class="card3-body">Certificates Earned</p>
              <p class="f1">7</p>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h2>my enrollment</h2>
        <div class="control">

          <div class="enrollment">
            <?php

            foreach ($resultInscription as $res) {
              echo '<div class="mta3widhni section">';

              echo '<div class="card4">';

              echo '<img src="' . $res["image"] . '" alt="" style="height:150; width:150; border-radius: 20px; ">';


              echo '<div>';
              echo '<h2 style="margin-left: 20px !important; " class="title">' . $res['title'] . '</h2>';
              echo '<p style="margin-left: 20px !important;">' . $res['description'] . '</p>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
            ?>
          </div>
          <div class="button-control">
            <button id="scroll-prev">
              << Previous</button>
                <button id="scroll-next">Next >></button>
          </div>

        </div>
      </div>
    </div>
    <div class="card2">
      <div class="card2-image">
        <p>9arini academy</p>
      </div>

      <h1 class="h22"><?php
                      if (isset($_SESSION["name"]) && isset($_SESSION["pname"])) {
                        echo $_SESSION["name"] . " " . $_SESSION["pname"];
                      } else {
                        echo "user";
                      }
                      ?></h1>
      <br />
      <p class="card2-body"><?php
                            if (isset($_SESSION["email"])) {
                              echo $_SESSION["email"];
                            } else {
                              echo "exapmle@gmail.com";
                            }
                            ?></p>
      <br />
      <p class="card2-body"><?php
                            if (isset($_SESSION["phone"])) {
                              echo "+216 " . $_SESSION["phone"];
                            } else {
                              echo "+216 xx-xxx-xxx";
                            }
                            ?></p>
      <br />

      <br />
      <br />
      <br />
      <p class="card2-body" style="color: #5856d6"><?php
                                                    if (isset($_SESSION["role"])) {
                                                      echo $_SESSION["role"];
                                                    }
                                                    ?></p>
      <button data-bs-toggle="modal" data-bs-target="#myModal">Modify</button>
    </div>
  </div>
  <div class="modal" tabindex="-1" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="profile.php" id="signup-form" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="<?php
                                                                                                    if (isset($_SESSION["name"])) {
                                                                                                      echo $_SESSION["name"];
                                                                                                    } else {
                                                                                                      echo "";
                                                                                                    }
                                                                                                    ?>">
              <div id="name-message" class="error-message"></div>
            </div>
            <div class="mb-3">
              <label for="pname" class="form-label">Pname</label>
              <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="<?php
                                                                                                      if (isset($_SESSION["pname"])) {
                                                                                                        echo $_SESSION["pname"];
                                                                                                      } else {
                                                                                                        echo "";
                                                                                                      }
                                                                                                      ?>">
              <div id="pname-message" class="error-message"></div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">phone</label>
              <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" value="<?php
                                                                                                      if (isset($_SESSION["phone"])) {
                                                                                                        echo $_SESSION["phone"];
                                                                                                      } else {
                                                                                                        echo "";
                                                                                                      }
                                                                                                      ?>">
              <div id="phone-message" class="error-message"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php
                                                                                                      if (isset($_SESSION["email"])) {
                                                                                                        echo $_SESSION["email"];
                                                                                                      } else {
                                                                                                        echo "";
                                                                                                      }
                                                                                                      ?>">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              <div id="email-message" class="error-message"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" value="<?php
                                                                                if (isset($_SESSION["password"])) {
                                                                                  echo $_SESSION["password"];
                                                                                } else {
                                                                                  echo "";
                                                                                }
                                                                                ?>">
              <div id="password-message" class="error-message"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">photo</label>
              <input type="file" class="form-control" name="image" id="photo">
              <div id="password-message" class="error-message"></div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <?php
  require_once '../sidebar.php';
  ?>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/f90539f5e9.js" crossorigin="anonymous"></script>
</body>

</html>