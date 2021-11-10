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
<form action="" method="post">
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Description</th>
        <th>Author</th>
        <th>Publishing Company</th>
        <th>Quantity</th>
    </tr>
    </thead>
    <tbody>
    <td><input type="text"name="name"></td>
    <td><select id="cars" name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category["id"]?>"><?php echo $category["name"]?></option>
            <?php endforeach;?>
        </select></td>
    <td><textarea type="text"name="description"></textarea></td>
    <td><input type="text"name="author"></td>
    <td><input type="text"name="publishingCompany"></td>
    <td><input type="text"name="quantity"></td>
    <td>
        <a href="index.php?page=book-list"><button>Back</button></a>
    </td>
    <td>
        <button type="reset">Reset</button>
    </td>
    <td>
        <button type="submit">Add note</button>
    </td>
    </tbody>
</table>
</form>
</body>
</html>