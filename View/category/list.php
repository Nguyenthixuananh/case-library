<?php
include_once "View/esset/topAdmin.php";
?>
<style>
    body {
        background-image: url("View/image/background.jpg");
    }

    table {
        background-color: white;
    }
</style>
<div class="container-fluid">
    <div>
<!--        <a type="button" class="btn btn-dark" href="index.php?page=book-list">Back</a>-->
        <a type="button" class="btn btn-dark" href="index.php?page=category-create">ADD NEW CATEGORY</a>
<!--        <a type="button" class="btn btn-dark" href="index.php?page=book-list">Book List</a>-->
    </div>
    <br>
    <table class="table align-middle">
        <thead class="table-info">
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($categories)) : ?>
            <?php foreach ($categories as $key => $category): ?>
                <tr class="text-capitalize">
                    <td><?php echo $key+1?></td>
                    <td><?php echo $category["name"] ?></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure??')"
                           href="index.php?page=category-delete&id=<?php echo $category["id"] ?>">Delete</a></td>
                    <td><a class="btn btn-warning" href="index.php?page=category-update&id=<?php echo $category["id"] ?>">Edit</a></td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>


</div>

<!--<section>-->
<!--    --><?php
//    include_once "View/esset/footer.php";
//    ?>
<!--</section>-->
