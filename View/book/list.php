<a type="button" href="index.php?page=book-create">ADD NEW BOOK</a>

<a type="button" class="btn btn-outline-warning mt-3 mb-3 ps-5 pe-5 p-10" href="index.php?page=category-list">Category</a>

<!--<form action=""></form>-->

<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Name of book</th>
        <th>Category</th>
        <th>Description</th>
        <th>Author</th>
        <th>Publishing Company</th>
        <th>Quantity</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($books)) : ?>
        <?php foreach ($books as $key => $book): ?>
            <tr>
                <td><?php echo $key+1?></td>
                <td><?php echo $book["book_name"] ?></td>
                <td><?php echo $book["category_name"] ?></td>
                <td><?php echo $book["description"] ?></td>
                <td><?php echo $book["author"] ?></td>
                <td><?php echo $book["publishingCompany"] ?></td>
                <td><?php echo $book["quantity"] ?></td>
<!--                <td><a class="btn btn-success" href="index.php?page=note-detail&id=--><?php //echo $note["id"] ?><!--">Detail</a></td>-->
                <td><a onclick="return confirm('Are you sure??')"
                       href="index.php?page=book-delete&id=<?php echo $book["id"] ?>">Delete</a></td>
                <td><a href="index.php?page=book-update&id=<?php echo $book["id"] ?>">Edit</a></td>

            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>