<form action=""method="post">
    <input type="text" name="type_name" value="<?php echo $user["name"]; ?>">
    <input type="text" name="type_name" value="<?php echo $user["phone"]; ?>">
    <input type="text" name="type_name" value="<?php echo $user["address"]; ?>">
    <input type="text" name="type_name" value="<?php echo $user["email"]; ?>">
    <input type="text" name="type_name" value="<?php echo $user["password"]; ?>">
    <input type="text" name="type_name" value="<?php echo $user["image"]; ?>">
    <input type="text" name="type_name" value="<?php echo $user["role"]; ?>">

    <button type="submit">Sửa</button>
    <button><a href="index.php?page=user-list">Back</a></button>
</form>