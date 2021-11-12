<?php
?>
<div id="main" class="container">
    <div class="product">
        <div class="row mt-3">
            <?php foreach ($search as $key=>$value): ?>

                <tr>
                    <td><img width="150px" height="150px"  src="<?php echo $value["image"] ?>"></td>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $value["book_name"] ?></td>
                    <td><?php echo $value["category_name"] ?></td>
                    <td><?php echo $value["description"] ?></td>
                    <td><?php echo $value["author"] ?></td>
                    <td><?php echo $value["publishingCompany"] ?></td>
                    <td><?php echo $value["quantity"] ?></td>

                    <!--                <td><a class="btn btn-success" href="index.php?page=note-detail&id=--><?php //echo $note["id"] ?><!--">Detail</a></td>-->
<!--                    <td><a onclick="return confirm('Are you sure??')"-->
<!--                           href="index.php?page=book-delete&id=--><?php //echo $book["id"] ?><!--">Delete</a></td>-->
<!--                    <td><a href="index.php?page=book-update&id=--><?php //echo $book["id"] ?><!--">Edit</a></td>-->

                </tr>



            <?php endforeach; ?>
        </div>
    </div>
</div>