<?php

include_once "Model/BookModel.php";
$bookModel = new BookModel();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($bookModel->getById($id) !== null)
        $book = $bookModel->delete($id);
    header("location:index.php");
}
