<?php
include 'C:\xampp\htdocs\PFA V0\PFA 2\Model\submit.php';
$cours1=new coursedatabase();

$sql = "SELECT distinct title , image
        FROM enrollments inner join courses where enrollments.courseID=courses.id and enrollments.UserID =?
        ";


$results = $cours1->affichageparametre($sql,$_SESSION["id"]);

?>

<div class="container-five">
    
    <div class="row">
        <?php foreach ($results as $row) : ?>
            <div class="col-md-4 mb-4">
                <div class="card6 card4">
                    <img src="<?php echo $row['image']; ?>" alt="Course Image" class="img">

                    <div>
                        <h2 class="card-title"><?php echo $row['title']; ?></h2>
                        <a  id="btn" class="btn">GO</a>
                    </div>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

