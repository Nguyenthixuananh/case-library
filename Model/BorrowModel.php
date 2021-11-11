<?php
include_once "database/DB.php";

class BorrowModel
{
    private $table;
    private $dbConnect;

    public function __construct()
    {
        $this->table = "borrowers";
        $db = new DB();
        $this->dbConnect = $db->connect();
    }

//    public function getAll()
//    {
//        $sql = "SELECT * FROM $this->table";
//        $stmt = $this->dbConnect->query($sql);
//        return $stmt->fetchAll();
//    }

    public function getAll()
    {
        $sql = "select `borrowers`.id,`books`.name as `book_name`, `borrowers`.dateStart, `borrowers`.datFinish, `borrowers`.status
from `borrowers`
         inner join `books` on `books`.id = `borrowers`.book_id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }





    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id= $id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function checkBookById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE book_id= $id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->rowCount() > 0;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id= :id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function deleteByBookId($id)
    {
        $sql = "DELETE FROM $this->table WHERE book_id=:id";
        $stmt = $this->dbConnect->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }


    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`book_id`,`dateStart`,`datFinish`) VALUE(?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["book_id"]);
        $stmt->bindParam(2, $data["dateStart"]);
        $stmt->bindParam(3, $data["datFinish"]);
        $stmt->execute();
    }
}
