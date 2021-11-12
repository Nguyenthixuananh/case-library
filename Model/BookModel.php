<?php

include_once "database/DB.php";

class BookModel
{
    private $table;
    private $dbConnect;
    
    public function __construct()
    {
        $this->table = "books";
        $db = new DB();
        $this->dbConnect =$db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT `books`.id, `books`.name as `book_name`, `categories`.name as `category_name`, `books`.description as `description`, `books`.author as `author`, `books`.publishingCompany as `publishingCompany`, `books`.quantity as `quantity`, `books`.image as `image` FROM `books`
INNER JOIN `categories` ON `books`.category_id = `categories`.id";

        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }
    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`,`category_id`,`description`,`author`,`publishingCompany`,`quantity`,`image`) VALUE(?,?,?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["category_id"]);
        $stmt->bindParam(3, $data["description"]);
        $stmt->bindParam(4, $data["author"]);
        $stmt->bindParam(5, $data["publishingCompany"]);
        $stmt->bindParam(6, $data["quantity"]);
        $stmt->bindParam(7, $data["image"]);
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
            $sql = "UPDATE $this->table SET `description`=?,`quantity`=?, `image`=? WHERE `id` = ?";
            $stmt = $this->dbConnect->prepare($sql);
//            $stmt->bindParam(1, $data["category_id"]);
            $stmt->bindParam(1, $data["description"]);
            $stmt->bindParam(2, $data["quantity"]);
            $stmt->bindParam(3, $data["image"]);
            $stmt->bindParam(4, $data["id"]);
            $stmt->execute();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    public function search($key)
    {
//        $sql = "SELECT * FROM `books` WHERE `name` LIKE N'%$key%'";
        $sql = "SELECT `books`.id, `books`.name as `book_name`, `categories`.name as `category_name`, `books`.description as `description`, `books`.author as `author`, `books`.publishingCompany as `publishingCompany`, `books`.image as `image` FROM `books`
INNER JOIN `categories` ON `books`.category_id = `categories`.id WHERE `books`.name LIKE N'%$key%'";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}