<form action="" method="post">
    <table border="1px">
        <tr>
            <th colspan="2">Information</th>
        </tr>
        <tr>
            <td>Name user</td>
            <td><input type="text" name="name" value="<?php echo $user["name"]; ?>"></td>
        </tr>
        <tr>
            <td>Your phone</td>
            <td><input type="text" name="phone" value="<?php echo $user["phone"]; ?>"></td>
        </tr>
        <tr>
            <td>Your address</td>
            <td><input type="text" name="address" value="<?php echo $user["address"]; ?>"></td>
        </tr>
        <tr>
            <td>Your email</td>
            <td><input type="text" name="email" value="<?php echo $user["email"]; ?>"></td>
        </tr>
        <tr>
            <td>Your password</td>
            <td><input type="text" name="password" value="<?php echo $user["password"]; ?>"></td>
        </tr>
        <tr>
            <td>Your image</td>
            <td><input type="text" name="image" value="<?php echo $user["image"]; ?>"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><select name="role" id="role">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select></td>
        </tr>
<tr>
    <td colspan="2"><button type="submit">Sửa</button></td>
</tr>
    </table>
</form>


<!--    <select name="role" id="role">-->
<!--        <option value="Admin"></option>-->
<!--        <option value="User"></option>-->
<!--    </select>-->
<!--    <select name="role">-->
<!--        --><?php //foreach ($users as $user) : ?>
<!--            <option value="--><?php //echo $user["id"]?><!--">--><?php //echo $user["role"]?><!--</option>-->
<!--        --><?php //endforeach;?>
<!--    </select>-->
<!--    <input type="text" name="type_name" value="--><?php //echo $user["role"]; ?><!--">-->
<!---->
<!--    -->
<!--    <button><a href="index.php?page=user-list">Back</a></button>-->