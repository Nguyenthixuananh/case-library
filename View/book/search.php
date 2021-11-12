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
<div id="main" class="container-fluid">
    <div class="product">
        <div class="row mt-3">
            <?php foreach ($search as $key=>$value): ?>
         <table class="table table-striped table table-hover">
             <tr>
                 <th>Image</th>
                 <th>Title</th>
                 <th>Description</th>
             </tr>
             <tr>
                 <td rowspan="5"><img style="width: 150px" src="<?php echo $value["image"] ?>" alt=""></td>
                 <td>Book</td>
                 <td><?php echo $value["book_name"] ?></td>
             </tr>
             <tr>
                 <td>Category</td>
                 <td><?php echo $value["category_name"] ?></td>
             </tr>
             <tr>
                 <td>Description</td>
                 <td><?php echo $value["description"] ?></td>
             </tr>
             <tr>
                 <td>Author</td>
                 <td><?php echo $value["author"] ?></td>
             </tr>
             <tr>
                 <td>Publishing Company</td>
                 <td><?php echo $value["publishingCompany"] ?></td>
             </tr>
         </table>
            <?php endforeach; ?>
        </div>
    </div>
</div>