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
<!--        <a class="btn btn-dark" href="index.php?page=book-list">Back</a>-->
<!--    </div>-->
    <br>
    <table class="table align-middle">
        <thead class="table-info">
        <tr style="text-align: center">
            <th>STT</th>
<!--            <th>User</th>-->
            <th>Book name</th>
            <th>Start Date</th>
            <th>Finish Date</th>
            <th>Status</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($borrowes)) : ?>
            <?php foreach ($borrowes as $key => $borrow): ?>
                <tr class="text-capitalize">
                    <td><?php echo $key+1?></td>
<!--                    <td>--><?php //echo $borrow["user_id"] ?><!--</td>-->
                    <td><?php echo $borrow["book_name"] ?></td>
                    <td><?php echo $borrow["dateStart"] ?></td>
                    <td><?php echo $borrow["datFinish"] ?></td>
                    <td><?php
                        $today = date("Y-m-d");
                        if($borrow["datFinish"]>=$today){
                            echo "Còn hạn";
                        } else {
                            echo "Quá hạn mượn sách";
                        }
                        ?></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure??')"
                           href="index.php?page=borrow-delete&id=<?php echo $borrow["id"] ?>">Delete</a></td>
                    <td><a class="btn btn-warning" href="index.php?page=borrow-update&id=<?php echo $borrow["id"] ?>">Edit</a></td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>


</div>