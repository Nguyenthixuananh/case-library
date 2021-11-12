<style>
body{
    background-image: url("View/image/back.jpg");
}
</style>
<div class="container">
    <form action="" method="post">
        <fieldset style="background-color: antiquewhite">
            <table style="background-color: white" border="1px;85%">
                <legend><h2>Login to iLibrary</h2></legend>
                <tr>
                    <td>Email</td>
                    <td><input style="width: 85%" type="text" placeholder="Enter Email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" placeholder="Enter Password" name="password" required></td>
                </tr>
                <tr>
                    <td>Your are - Portion</td>
                    <td>
                        <p><select name="role" id="role" required>
                                <option value="-----">-----</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select></p>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked="checked" name="remember"> Remember me</td>
                    <td>
                        <button type="submit">Login</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><a href="index.php?page=user-create">REGISTER</a> If you do not have an account, please
                        register
                        here
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>