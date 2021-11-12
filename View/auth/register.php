<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width: 50%; ">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" role="form" enctype="multipart/form-data">
                <legend style="font-family: Arial, Helvetica, sans-serif; margin-top: 200px; text-align: center; font-size: 60px; color: black">
                    <strong>Register</strong></legend>
                <p>Please fill in this form to create an account.</p>
                <div class="form-group">
                    <label style="font-size: 20px" for="">User Name:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label style="font-size: 20px" for="">Phone:</label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label style="font-size: 20px" for="">Address:</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label style="font-size: 20px" for="">Email:</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label style="font-size: 20px" for="">Role:</label>
                    <select id="cars" name="role">
<!--                        <option>Admin</option>-->
                        <option>User</option>
                    </select>
                </div>


                <div class="form-group">
                    <label style="font-size: 20px" for="">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label style="font-size: 20px" for="">Repeat Password:</label>
                    <input type="password" class="form-control" name="rPassword">
                </div>
                <div class="form-group">
                    <label style="font-size: 20px" for="">Image:</label>
                    <input type="file" name="file">

                <button type="submit" class="btn btn-primary" style="margin-top: 50px; margin-left: 410px">Register
                </button>
            </form>
        </div>
    </div>
</div>
