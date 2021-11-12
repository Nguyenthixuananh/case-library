<div class="container-fluid">
    <div>
        <a class="btn btn-dark" href="index.php?page=home-list">Back</a>
    </div>
    <br>
    <div>
        <table class="table align-middle">
            <thead class="table-info">
            <tr>
                <th>STT</th>
                <!--            <th>User</th>-->
                <th>Book name</th>
                <th>Start Date</th>
                <th>Finish Date</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($borrowes)) : ?>
                <?php foreach ($borrowes as $key => $borrow): ?>
                    <tr class="text-capitalize">
                        <td><?php echo $key + 1 ?></td>
                        <!--                    <td>--><?php //echo $borrow["user_id"] ?><!--</td>-->
                        <td><?php echo $borrow["book_name"] ?></td>
                        <td><?php echo $borrow["dateStart"] ?></td>
                        <td><?php echo $borrow["datFinish"] ?></td>
                        <td><?php
                            $today = date("Y-m-d");
                            if ($borrow["datFinish"] >= $today) {
                                echo "Còn hạn";
                            } else {
                                echo "Quá hạn mượn sách";
                            }
                            ?></td>

                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>