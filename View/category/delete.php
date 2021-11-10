<?php
include_once "Model/CategoryModel.php";
$categoryModel = new CategoryModel();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($categoryModel->getById($id)!==null)
        $category = $categoryModel->delete($id);
    header("location:index.php");
}