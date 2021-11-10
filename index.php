<?php
include_once "Controller/BookController.php";
include_once "Controller/CategoryController.php";
include_once "Controller/AuthController.php";


$bookController = new BookController();
$categoryController = new CategoryController();
$authController = new AuthController();


$page = $_GET["page"] ?? null;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
switch ($page) {
    case "book-list":
//            $authController->checkAuth();
        $bookController->index();
        break;
    case "category-list":
        $categoryController->index();
        break;
    case "user-list":
        $authController->index();
        break;


    case "book-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //show form create
            $bookController->showFormCreate();
        } else {
            //tao san pham
            $bookController->create($_REQUEST);
        }
        break;
    case "book-delete":
        $bookController->deleteBook($_REQUEST["id"]);
        break;
//    case "book-detail":
//        $id = $_GET["id"];
//        $bookController->showDetail($id);
//        break;
    case "book-update":
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $bookController->showFormUpdate();
        } else {
            $bookController->editBook($id, $_REQUEST);
        }

        break;
    case "category-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //show form create
            $categoryController->showFormCreate();
        } else {
            //tao san pham
            $categoryController->create($_REQUEST);
        }
        break;
    case "category-delete":
        $categoryController->deleteCategory($_REQUEST["id"]);
        break;
    case "category-detail":
        $id = $_GET["id"];
        $categoryController->showDetail($id);
        break;
    case "category-update":
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $categoryController->showFormUpdate();
        } else {
            $categoryController->editCategory($id, $_REQUEST);
        }
        break;

    case "login":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormLogin();
        }else {
            $authController->login($_REQUEST);
        }
        break;

    case "logout":
        $authController->logout();
        break;

    case "user-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //show form create
            $authController->showFormCreate();
        } else {
            //tao moi
//                $authController->checkRegister();
            $authController->create($_REQUEST);
        }
        break;

    case "user-delete":
        $authController->deleteUser($_REQUEST["id"]);
        break;
    case "user-detail":
        $id = $_GET["id"];
        $authController->showDetail($id);
        break;
    case "user-update":
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormUpdate();
        } else {
            $authController->editUser($id, $_REQUEST);
        }
        break;


    default:
        $bookController->index();
}
?>
</body>
</html>
