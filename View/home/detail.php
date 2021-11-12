<style>
    table {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="container-fluid">
    <a class="btn btn-dark" href="index.php?page=home-list">
        Back
    </a>
</div>
<br>
<div>
    <table class="table table-striped table table-hover" style="width: 80%">
        <thead class="table-dark">
        <tr style="text-align: center">
            <th>Image</th>
            <th colspan="2">Information</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="width: 150px" rowspan="5"><img width="150px" height="150px" src="<?php echo $book["image"] ?>">
            </td>
            <td>Name</td>
            <td><?php if (isset($book)) {
                    echo $book["name"];
                } ?></td>
        </tr>
        <tr>
            <!--        <td></td>-->
            <td>Author</td>
            <td><?php if (isset($book)) {
                    echo $book["author"];
                } ?></td>
        </tr>
        <tr>
            <!--        <td></td>-->
            <td>Publishing Company</td>
            <td><?php if (isset($book)) {
                    echo $book["publishingCompany"];
                } ?></td>
        </tr>
        <tr>
            <!--        <td></td>-->
            <td>Description</td>
            <td><?php if (isset($book)) {
                    echo $book["description"];
                } ?></td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div>
    <form action="" method="post">

        <table class="table table-striped table table-hover" style="width: 30%">
            <thead>
            <tr>
                <th colspan="2">Register Form</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="2">Book ID:
                    <select name="book_id" id="" style="width: 100%">
                        <option value="<?php if (isset($book)) {
                            echo $book["id"];
                        } ?>"><?php if (isset($book)) {
                                echo $book["id"];
                            } ?></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date Start<input type="date" name="dateStart" required></td>
                <td>Date Finish<input type="date" name="datFinish" required></td>
            </tr>
            <tr>
                <td colspan="2"><input style="background-color: #FECA2C" type="submit" value="Register"></td>
            </tr>
            </tbody>
        </table>
    </form>

</div>