<?php
include 'database.php';

class coursedatabase extends Database
{

  private $title;
  private $subtitle;
  private $description;
  private $courseCategory;
  private $filePath;
  private $filePath2 = ''; // Set a default value for video path
  private $price;
  public function getID($title)
  {
    $this->connect();
    $sql = "SELECT id FROM courses WHERE title = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(1, $title);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
      return $result['id']; // Return the ID if found
    } else {
      return null; // Return null if no matching title found
    }
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function read($title, $subtitle, $description, $courseCategory, $price, $filePath, $filePath2, $data1, $id)
  {
    if (isset($title) && trim($title) != "") {
      // INSERT query
      $stm = $this->pdo->prepare("INSERT INTO courses (title, subtitle, description,creatorID, category, courseprice, video, image) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
      $stm->bindValue(1, $title);
      $stm->bindValue(2, $subtitle);
      $stm->bindValue(3, $description);
      $stm->bindValue(4, $id);
      $stm->bindValue(5, $courseCategory);
      $stm->bindValue(6, $price);
      $stm->bindValue(7, $filePath2); // Bind the video path, even if it's empty
      $stm->bindValue(8, $filePath);
      $stm->execute();

      // UPDATE query for image and video
      $sql = "UPDATE courses SET img = ? WHERE title = ?";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([$data1, $title]); // Execute the query directly with the file data

    }
  }

  public function creat($title, $coursSubtitle, $coursDescrition,$id, $photoUrl, $videoUrl, $price)
  {
    $this->connect();
    $stm = $this->pdo->prepare('INSERT INTO courses (title, subtitle, description,creatorID, courseprice, video, image) VALUES ( ?,?, ?, ?, ?, ?, ?)');
    $stm->bindValue(1, $title);
    $stm->bindValue(2, $coursSubtitle);
    $stm->bindValue(3, $coursDescrition);
    $stm->bindValue(4, $id);
    $stm->bindValue(5, $photoUrl);
    $stm->bindValue(6, $videoUrl);
    $stm->bindValue(7, $price);
    $stm->execute();
  }

  public function delete($id = null, $title = "")
  {
    $this->connect();
    $stm = $this->pdo->prepare("DELETE FROM courses WHERE title= ? or id= ?;");
    $stm->bindValue(1, $title);
    $stm->bindValue(2, $id);
    $stm->execute();
  }
  public function find($sql)
  {
    $this->connect();
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function affiche()
  {
    $this->connect();
    $sql = "SELECT *
        FROM courses
        ";

    $stmt = $this->pdo->prepare($sql,);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  public function afficheone($sql, $var)
  {
    $this->connect();


    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(1, $var);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  public function affichageparametre($sql, $var)
  {
    $this->connect();


    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(1, $var);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function update($titleOrigen, $title = "", $coursSubtitle = "", $coursDescrition = "", $photoUrl = "", $videoUrl = "", $price = null, $id = null)
  {
    $this->connect();
    $sql = "UPDATE courses SET title = ?, subtitle = ? , description =? , courseprice =? ,video=?,image=?  WHERE id = ? or title =?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(1, $title);
    $stmt->bindValue(2, $coursSubtitle);
    $stmt->bindValue(3, $coursDescrition);
    $stmt->bindValue(4, $photoUrl);
    $stmt->bindValue(5, $videoUrl);
    $stmt->bindValue(6, $price);
    $stmt->bindValue(7, $id);
    $stmt->bindValue(8, $titleOrigen);

    $stmt->execute();
  }
}

class videodatabase extends Database
{
  public function read($title, $uploadFile, $filePath2, $id)
  {

    $stm = $this->pdo->prepare("INSERT INTO  videos (title,courseID,quizzesURL,url) VALUES(?,?,?,?)");
    $stm->bindValue(1, $title);
    $stm->bindValue(2, $id);
    $stm->bindValue(3,  $uploadFile);
    $stm->bindValue(4, $filePath2);
    $stm->execute();
  }


  public function creat($title, $fileUrl, $videoUrl)
  {
    $this->connect();
    $stm = $this->pdo->prepare('INSERT INTO videos (title,quizzesURL,url) VALUES(?,?,?)');
    $stm->bindValue(1, $title);
    $stm->bindValue(2, $fileUrl);
    $stm->bindValue(3, $videoUrl);

    $stm->execute();
  }

  public function delete($id = null, $title = "")
  {
    $this->connect();
    $stm = $this->pdo->prepare("DELETE FROM videos WHERE title= ? or id= ?;");
    $stm->bindValue(1, $title);
    $stm->bindValue(2, $id);
    $stm->execute();
  }

  public function update($titleOrigen, $title = "", $videourl = "",  $fileUrl = "", $id = null)
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
  public function affichage($id)
  {
    $this->connect();



    $stm = $this->pdo->prepare("SELECT * FROM videos WHERE courseID = ?");
    $stm->bindValue(1, $id);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
}
