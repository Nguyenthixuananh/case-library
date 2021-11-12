<?php
$page = $_GET["page"] ?? null;

$username = $_SESSION["username"] ?? null;
?>

<?php if ($_SESSION["username"]):?>
<?php print_r($username) ?>
    <?php endif;?>
<!--<a type="button" class="btn btn-dark" href="index.php?page=book-list">Back</a>-->
<a type="button" class="btn btn-dark" href="index.php?page=logout">Logout</a>
<a type="button" class="btn btn-dark" href="index.php?page=borrow-user-list">Borrowed</a>

<form action=""method="get">
    <input type="text" name="search" placeholder="Nhập từ khóa">
    <input type="submit" value="Tìm">
</form>
<table border="1px">
    <thead>
    <tr>
        <th>No.</th>
<!--        <th>Image</th>-->
        <th>Book</th>
        <th>Category</th>
        <th>Author</th>
        <th>Publishing Company</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($books)): ?>
        <?php foreach ($books as $key => $book): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
<!--                <td><img width="150px" height="150px"  src="--><?php //echo $book["image"] ?><!--"></td>                <td>--><?php //echo $book["book_name"] ?><!--</td>-->
                <td><?php echo $book["book_name"] ?></td>
                <td><?php echo $book["category_name"] ?></td>
                <td><?php echo $book["author"] ?></td>
                <td><?php echo $book["publishingCompany"] ?></td>
                <td><a href="index.php?page=home-detail&id=<?php echo $book["id"] ?>">
                        <button>Detail</button>
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


<!--<table border="1px">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>No.</th>-->
<!--        <th>Book</th>-->
<!--        <th>Category</th>-->
<!--        <th>Author</th>-->
<!--        <th>Publishing Company</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //if (isset($books)): ?>
<!--        --><?php //foreach ($books as $key => $book): ?>
<!--            <tr>-->
<!--                <td>--><?php //echo $key + 1 ?><!--</td>-->
<!--                <td>--><?php //echo $book["name"] ?><!--</td>-->
<!--                <td>--><?php //echo $book["category"] ?><!--</td>-->
<!--                <td>--><?php //echo $book["author"] ?><!--</td>-->
<!--                <td>--><?php //echo $book["publishingCompany"] ?><!--</td>-->
<!--                <td><a href="index.php?page=book-detail&id=--><?php //echo $book["id"] ?><!--">-->
<!--                        <button>Detail</button>-->
<!--                    </a></td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--    --><?php //else: ?>
<!--        <tr>-->
<!--            <td colspan="7">Don't have any book</td>-->
<!--        </tr>-->
<!--    --><?php //endif; ?>
<!--    </tbody>-->
<!--</table>-->