<?php

include_once "Model/BookModel.php";
include_once "Model/BorrowModel.php";
$bookModel = new BookModel();
$borrowModel = new BorrowModel();
var_dump(1);
die();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($bookModel->getById($id) !== null){
        $borrowModel->deleteByBookId($id);
        $bookModel->delete($id);
    }

    header("location:index.php");
}
