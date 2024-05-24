<?php
class user
{
    public $user = "localhost";
    public $database = "pfa";
    public $password = "";
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=" . $this->user . ";dbname=" . $this->database, "root", $this->password);
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function insert($name, $pname, $email, $password, $phone, $role)
    {

        $stm = $this->pdo->prepare("INSERT INTO users (firstname,lastname,email,password,phone,role) VALUES(?,?,?,?,?,?)");
        $stm->bindValue(1, $name);
        $stm->bindValue(2, $pname);
        $stm->bindValue(3, $email);
        $stm->bindValue(4, $password);
        $stm->bindValue(5, $phone);
        $stm->bindValue(6, $role);
        $stm->execute();
    }
    public function read($email = "", $password = "")
    {
        $stm = $this->pdo->prepare("SELECT `id`, `email`, `firstname`, `lastname`, `password`, `role`, `image`, `phone` FROM users WHERE email = ? and password = ?");
        $stm->bindValue(1, $email);
        $stm->bindValue(2, $password);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
    
    public function update($email = "", $firstname = "", $lastname = "", $password = "", $phone = "", $imgUrl = "", $id = null)
    {

        $sql = "UPDATE users SET email = ?, firstname = ? , lastname =? , password =?, phone =? ,image=?  WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $firstname);
        $stmt->bindValue(3, $lastname);
        $stmt->bindValue(4, $password);
        $stmt->bindValue(6, $imgUrl);
        $stmt->bindValue(5, $phone);

        $stmt->bindValue(7, $id);


        $stmt->execute();
    }
    public function updateAdmin($email = "", $firstname = "", $lastname = "", $password = "", $phone = "", $id = null)
    {

        $sql = "UPDATE users SET email = ?, firstname = ? , lastname =? , password =?, phone =?   WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $firstname);
        $stmt->bindValue(3, $lastname);
        $stmt->bindValue(4, $password);
        
        $stmt->bindValue(5, $phone);

        $stmt->bindValue(6, $id);


        $stmt->execute();
    }
    public function delete($id){
        $stm=$this->pdo->prepare(" DELETE  from users where id = ?");
        $stm->bindValue(1,$id);
        $stm->execute();
    }
    public function getUserbyid($id){
        $stm=$this->pdo->prepare("SELECT * from users where id =?");
        $stm->bindValue(1,$id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}
