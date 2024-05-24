<?php
session_start();
?>
<?php
 include 'C:\xampp\htdocs\PFA V0\PFA 2\Controller\controller2.php';
 include 'C:\xampp\htdocs\PFA V0\PFA 2\Controller\controller.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
 
 <style>
    a{
        text-decoration: none;
        color: white;
    }
    body{
        background-color: #EFEFEF;
    }
    aside{
        background-color: white;
    }
    #courseLandingPage,#courseStructure{
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }
    .links label{
    font-size: 1.2em;
    padding: 10px ;
    font-weight: 700;
    

}
.links label:hover{
    background-color: #5856D6;
    color: white;
    cursor: pointer;
}
#core{
    width: 80%;
    margin-left: 2.5%;
}
button{
    background-color: #5856D6 !important;
}
button:hover{
    background-color: white !important;
    color: #5856D6 !important ;
}
    
</style>   
</head>

<body class="body">
<div class="modal fade"  id="curriculumItemModal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="curriculumItemModalLabel">Upload Curriculum Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="submit.php" id="childform2" enctype="multipart/form-data" >
          <div class="mb-3">
            <label for="curriculumItemType" class="form-label">Select Curriculum Item Type:</label>
            <select class="form-select" id="curriculumItemType">
              <option value="pdf">PDF</option>
              <option value="article">Article</option>
              <option value="quiz">Quiz</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="curriculumItemFile" class="form-label">Choose File:</label>
            <input class="form-control" name="uploadFile-quizz" type="file" id="curriculumItemFile" >
          </div>
          <button type="button" id="buttonUpload2" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="uploadModal" tabindex="100000000000000000000" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form id="childForm" method="POST" action="submit.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" class="form-control" id="videoFile" name="videoFile" >
                    </div>
                    <button type="button" id="buttonUpload" class="btn btn-primary" style="background-color: #5856D6;">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
<nav>
        <div class="container">
            <div class="left">
            <span class="material-symbols-outlined personne">
person
</span>
<strong><span class="material-symbols-outlined">
    
home
</span> <span><a href="http://localhost/PFA%20V0/PFA%202/APP/Home/nothome.php">
home</a></span></strong>

            </div>
            <div class="right">
                <form action="" class="search">
                    <input type="search" name="search" id="search" placeholder="Search..." value="<?=$val9 ?>">
                    <button type="submit"><span class="material-symbols-outlined">
search
</span></button>
                </form>

            </div>
        </div>
    </nav>
    <div class="core" >
        <aside>
            <div class="asidebar">
                <div class="upper">
                    <p class="par">Creat your  content</p>
                    
                    <div class="links">
    <input type="radio" id="courseStructure" name="courseOption" value="structure" >
    <label for="courseStructure">Course Structure</label>
    <input type="radio" id="courseLandingPage" name="courseOption" value="landing" >
    <label for="courseLandingPage">Course Landing Page</label>
</div>
           
       
       
                </div>
                <div class="lower">
                    <button type="submit" class="btn btn-primary but"> Submit</button>
        
                </div>
            </div>
            </aside>
           

            <div id="core">
                
            

            
            
            </div>
         
    </div>
   
 

    <script src="index.js" >
                
    
                </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
            

        </script>
        

    

    

</body>
</html>
