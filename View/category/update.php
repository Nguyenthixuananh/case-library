<form action=""method="post">
    <!--    <input type="text" name="type_id"placeholder="TypeID" value="--><?php //echo $note['type_id']?><!--">-->
    <input type="text" name="name" value="<?php echo $category["name"]; ?>">
    <button type="submit">Sửa</button>
    <button><a href="index.php?page=category-list">Back</a></button>
</form>
