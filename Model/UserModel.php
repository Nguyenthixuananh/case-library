<?php

class UserModel
{
    private $table;
    private $dbConnect;

    public function __construct()
    {
        $this->table = "users";
        $db = new DB();
        $this->dbConnect = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id= $id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function checkLogin($email, $password)
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email and password = :password";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }


    public function getByEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE email= :email";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":email",$email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`,`phone`,`address`,`email`,`password`,`image`,`role`) VALUE(?,?,?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["phone"]);
        $stmt->bindParam(3, $data["address"]);
        $stmt->bindParam(4, $data["email"]);
        $stmt->bindParam(5, $data["password"]);
        $stmt->bindParam(6, $data["image"]);
        $stmt->bindParam(7, $data["role"]);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id= :id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function edit($data)
    {
        try {
            $sql = "UPDATE $this->table SET `name`=?,`phone`=?,`address`=?,`email`=?,`password`=?,`image`=?,`role`=? WHERE `id` = ?";
            $stmt = $this->dbConnect->prepare($sql);
            $stmt->bindParam(1, $data["name"]);
            $stmt->bindParam(2, $data["phone"]);
            $stmt->bindParam(3, $data["address"]);
            $stmt->bindParam(4, $data["email"]);
            $stmt->bindParam(5, $data["password"]);
            $stmt->bindParam(6, $data["image"]);
            $stmt->bindParam(7, $data["role"]);
            $stmt->bindParam(8, $data["id"]);
            $stmt->execute();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}