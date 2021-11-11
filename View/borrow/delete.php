<?php

include_once "Model/BorrowModel.php";
$borrowModel = new BorrowModel();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($borrowModel->getById($id) !== null)
        $borrow = $borrowModel->delete($id);
    header("location:index.php");
}