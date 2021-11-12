<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <table class="table table-striped table table-hover">
            <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Name</td>
                <td><input style="width: 100%" type="text"name="name"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><select style="width: 100%" id="cars" name="category_id">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category["id"]?>"><?php echo $category["name"]?></option>
                        <?php endforeach;?>
                    </select></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea style="width: 100%" type="text"name="description"></textarea></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input style="width: 100%" type="text"name="author"></td>
            </tr>
            <tr>
                <td>Publishing Company</td>
                <td><input style="width: 100%" type="text"name="publishingCompany"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input style="width: 100%" type="file" name="file"></td>
            </tr>

            <td>
                <a href="index.php?page=book-list"><button>Back</button></a>
            </td>
            <td>
                <button style="width: 200px;background-color: #FECA2C" type="reset">Reset</button>
                <button style="width: 200px;background-color: #FECA2C" type="submit">Add book</button>
            </td>
            </tbody>
        </table>
    </form>
</div>

</body>
</html>