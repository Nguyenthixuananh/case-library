<div class="container-fluid">
<!--    <div class="navbar">-->
<!--        <a type="button" class="btn btn-dark" href="index.php?page=logout">Logout</a>-->

<!--        <a type="button" class="btn btn-toutline-warning mt-3 mb-3 ps-5 pe-5 p-10" href="index.php?page=note-list">Note</a>-->
<!--    </div>-->

    <a type="button" class="btn btn-primary mt-3 mb-3 ps-5 pe-5 p-3" href="index.php?page=category-create">ADD NEW CATEGORY</a>

    <a type="button" class="btn btn-toutline-warning mt-3 mb-3 ps-5 pe-5 p-10" href="index.php?page=book-list">Book List</a>
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