<?php


class videodatabase extends Database{
  public function read(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST["title"])){
            $title = trim($_POST["title"]);

    }
    if ( isset($_FILES["uploadFile"])) {
        $uploadDir = "uploads/";
        $uploadFile = $uploadDir . basename($_FILES["uploadFile"]["name"]);
        if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $uploadFile)) {
           
            echo "PDF uploaded successfully. Click <a href='$uploadFile' download>here</a> to download.";
        }
    
   

    if(isset($_FILES["videoFile"])){
      $uploadDir2 = "uploads/"; 
    $uploadFile2 = $uploadDir2 . basename($_FILES["videoFile"]["name"]);

    
    if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $uploadFile2)) {
        echo "File is valid, and was successfully uploaded.\n";
       
        $filePath2 = $uploadFile2;
        
    }

    }
    $stm=$this->pdo->prepare("INSERT INTO  videos (title,quizzesURL,url) VALUES(?,?,?)");
    $stm->bindValue(1, $title);
    
    $stm->bindValue(2,  $uploadFile);
    $stm->bindValue(3, $filePath2);
    $stm->execute();


  
  }
}
}
  public function creat($title, $fileUrl, $videoUrl){
    $this->connect();
    $stm = $this->pdo->prepare('INSERT INTO videos (title,quizzesURL,url) VALUES(?,?,?)');
    $stm->bindValue(1, $title);
    $stm->bindValue(2, $fileUrl);
    $stm->bindValue(3, $videoUrl); 
   
    $stm->execute();
  }
  
  public function delete($id=null,$title=""){
    $this->connect();
    $stm = $this->pdo->prepare("DELETE FROM videos WHERE title= ? or id= ?;");
    $stm->bindValue(1, $title);
    $stm->bindValue(2,$id);
    $stm->execute();

  
  }
  
  public function update($titleOrigen,$title="", $videourl="",  $fileUrl="",$id=null)
  {
    $this->connect();
    $sql = "UPDATE videos SET title = ?, url = ? , quizzesURL =?   WHERE id = ? or title =?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(1, $title);
    $stmt->bindValue(2, $videourl);
    $stmt->bindValue(3, $fileUrl);

    $stmt->bindValue(4, $id);
    $stmt->bindValue(5, $titleOrigen);

    $stmt->execute();


  }
}


?>