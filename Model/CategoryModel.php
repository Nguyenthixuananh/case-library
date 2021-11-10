<?php

include_once "database/DB.php";

class CategoryModel
{
    private $table;
    private $dbConnect;

    public function __construct()
    {
        $this->table = "categories";
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

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`) VALUE(?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
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
            $sql = "UPDATE $this->table SET `name`=? WHERE `id` = ?";
            $stmt = $this->dbConnect->prepare($sql);
            $stmt->bindParam(1, $data["name"]);
            $stmt->bindParam(2, $data["id"]);
            $stmt->execute();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}