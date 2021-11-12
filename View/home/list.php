<?php
include_once "View/esset/top.php";
$page = $_GET["page"] ?? null;

$username = $_SESSION["username"] ?? null;
?>

<?php if ($_SESSION["username"]): ?>
    <?php print_r($username) ?>
<?php endif; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-image: url("View/image/background.jpg");
        }

        table {
            background-color: white;
        }
    </style>
</head>
<body>
<div class="container-fluid">
<!--    <p><a type="button" class="btn btn-dark" href="index.php?page=logout">Logout</a> <a type="button" class="btn btn-dark" href="index.php?page=borrow-user-list">Borrowed</a></p>-->
<!--    <form action="" method="get">-->
<!--        <input type="text" name="search" placeholder="Nhập từ khóa">-->
<!--        <input type="submit" value="Tìm">-->
<!--    </form>-->
    <table class="table table-striped table table-hover">
        <thead class="table-dark">
        <tr>
            <th>No.</th>
            <!--        <th>Image</th>-->
            <th>Book</th>
            <th>Category</th>
            <th>Author</th>
            <th>Publishing Company</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($books)): ?>
            <?php foreach ($books as $key => $book): ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <!--                <td><img width="150px" height="150px"  src="-->
                    <?php //echo $book["image"] ?><!--"></td>                <td>-->
                    <?php //echo $book["book_name"] ?><!--</td>-->
                    <td><?php echo $book["book_name"] ?></td>
                    <td><?php echo $book["category_name"] ?></td>
                    <td><?php echo $book["author"] ?></td>
                    <td><?php echo $book["publishingCompany"] ?></td>
                    <td><a href="index.php?page=home-detail&id=<?php echo $book["id"] ?>">
                            <button style="background-color: #FECA2C">Detail</button>
                        </a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Don't have any book</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
<!--<a type="button" class="btn btn-dark" href="index.php?page=book-list">Back</a>-->
