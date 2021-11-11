<div>
    <h2>Book borrow list</h2>
    <table border="1px">
        <thead>
        <tr>
            <th>No.</th>
            <th>Book</th>
            <th>Date Start</th>
            <th>Date Finish</th>
            <th>Status</th>
        </tr>
        </thead>
    <tbody>
    <?php if (isset($borrowes)) : ?>
        <?php foreach ($borrowes as $key => $borrow): ?>
            <tr class="text-capitalize">
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $borrow["book_name"] ?></td>
                <td><?php echo $borrow["dateStart"] ?></td>
                <td><?php echo $borrow["datFinish"] ?></td>
                <td>
<?php
$today = date("Y-m-d");
if($borrow["datFinish"]>=$today){
    echo "Còn hạn";
} else {
    echo "Quá hạn mượn sách";
}
?>
                </td>
<!--                <td><a class="btn btn-danger" onclick="return confirm('Are you sure??')"-->
<!--                       href="index.php?page=category-delete&id=--><?php //echo $borrow["id"] ?><!--">Delete</a></td>-->
<!--                <td><a class="btn btn-warning"-->
<!--                       href="index.php?page=category-update&id=--><?php //echo $borrow["id"] ?><!--">Edit</a></td>-->

            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
    </table>
</div>