<?php
include 'C:\xampp\htdocs\PFA V0\PFA 2\Controller\controllerSearch.php';

   $user = "localhost";
   $database = "pfa";
   $password = "";
  $pdo;

   
    try {
        $pdo = new PDO("mysql:host=".$user.";dbname=".$database, "root", $password);
        echo "The connection is established";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $sql = "SELECT * FROM courses WHERE title LIKE ?";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(1,$userData);
$stmt->execute();
$results= $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "$userData";
?>





    <div class="container-img">
        
        
            <?php foreach ($results as $row) : ?>

                
                    <div class="card6 col-md-4 mb-4">
                    <div class="imge" style="background-image: url('<?php echo $row['image']; ?>');">
            <div class="save">
              <i class="fa-solid fa-bookmark"></i>
            </div>
          </div>
                        
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $row['title']; ?></h5>
                            <h6 class="card-subtitle "><?php echo $row['subtitle']; ?></h6>
                            
                            <p class="card-text"><strong>Category:</strong> <?php echo $row['category']; ?></p>
                            <p class="card-text"><strong>Price:</strong> <?php echo $row['courseprice']; ?> TND</p>
                            <a href="" class="btn">Learn More</a>
                        </div>
                    </div>
                
            <?php endforeach; ?>
        
    </div>


