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
<!--    <div>-->
<!--    <a type="button" class="btn btn-dark" href="index.php?page=book-list">Back</a>-->
<!--    </div>-->
    <br>
    <table style="text-align: center" class="table align-middle">
        <thead class="table-info">
        <tr>
            <th>STT</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
<!--            <th>Password</th>-->
            <th>Image</th>
            <th>Role</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($users)) : ?>
            <?php foreach ($users as $key => $user): ?>
                <tr class="text-capitalize">
                    <td><?php echo $key+1?></td>
                    <td><?php echo $user["name"] ?></td>
                    <td><?php echo $user["phone"] ?></td>
                    <td><?php echo $user["address"] ?></td>
                    <td><?php echo $user["email"] ?></td>
<!--                    <td>--><?php //echo $user["password"] ?><!--</td>-->
                    <td><img width="150px" height="150px" src="<?php echo $user["image"] ?>"></td>
                    <td ><?php echo $user["role"] ?></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure??')"
                           href="index.php?page=user-delete&id=<?php echo $user["id"] ?>">Delete</a>
                    <a class="btn btn-warning" href="index.php?page=user-update&id=<?php echo $user["id"] ?>">Edit</a></td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

</div>