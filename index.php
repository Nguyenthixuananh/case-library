<?php

include_once "Controller/BookController.php";
include_once "Controller/CategoryController.php";
include_once "Controller/AuthController.php";
include_once "Controller/BorrowController.php";


$bookController = new BookController();
$categoryController = new CategoryController();
$authController = new AuthController();
$borrowController = new BorrowController();


$page = $_GET["page"] ?? null;

$username = $_SESSION["username"] ?? null;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php if ($_SESSION["username"]): ?>
<div class="container">
    <h4 style="margin-top: 100px">Name: <?php echo $username ?></h4>
    <?php endif; ?>
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
        case "borrow-list":
            $borrowController->indexAdmin();
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

        case "search":
            $bookController->showSearchResult();
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
            } else {
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
        case "home-search":
            $key = $_REQUEST["key"];
            $borrowController->search($key);
            break;
        case "home-list":
            $bookController->homeIndex();
            break;
        case "home-detail":
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $id = $_GET["id"];
                $borrowController->showDetail($id);
            } else {
                $borrowController->create($_REQUEST);
            }
            break;
        case "borrow-list":
            $borrowController->indexAdmin();
            break;
        case "borrow-user-list":
            $borrowController->indexBrrowUser();
            break;

        case "home-profile":
            $borrowController->indexUser();
            break;
        case "borrow-delete":
            $borrowController->deleteBorrow($_REQUEST["id"]);
            break;
        case "auth-back":
            $authController->back();
            break;
        default:
            if(isset($_REQUEST['key'])){
                $key = $_REQUEST['key'];
                $bookController->search($key);
            }
            $bookController->index();
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
