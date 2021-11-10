<?php
include_once "Model/UserModel.php";
$userModel = new UserModel();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($userModel->getById($id)!==null)
        $user = $userModel->delete($id);
    header("location:index.php");
}