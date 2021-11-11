<div>
    <a href="index.php?page=home-list">
        <button>Back</button>
    </a>
</div>
<br>
<div>
    <table border="1px">
        <thead>
        <tr>
            <th>Image</th>
            <th colspan="2">Information</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="width: 150px" rowspan="5"><?php if (isset($user)) {
                    echo $user["image"];
                } ?></td>
            <td>Name</td>
            <td><?php if (isset($book)) {
                    echo $book["name"];
                } ?></td>
        </tr>
        <tr>
            <!--        <td></td>-->
            <td>Author</td>
            <td><?php if (isset($book)) {
                    echo $book["author"];
                } ?></td>
        </tr>
        <tr>
            <!--        <td></td>-->
            <td>Publishing Company</td>
            <td><?php if (isset($book)) {
                    echo $book["publishingCompany"];
                } ?></td>
        </tr>
        <tr>
            <!--        <td></td>-->
            <td>Description</td>
            <td><?php if (isset($book)) {
                    echo $book["description"];
                } ?></td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div>
    <h3>Registration form to borrow books</h3>
    <form action="" method="post">

    <table border="1px">
        <thead>
        <tr>
            <th colspan="2">Register Form</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2">Code - Book: <input type="text" name="book_id" value="<?php if (isset($book)) {
                    echo $book["id"];
                } ?>"></td>
        </tr>
        <tr>
            <td><input type="date" name="dateStart" required></td>
            <td><input type="date" name="datFinish" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Register"></td>
        </tr>
        </tbody>
    </table>
    </form>

</div>