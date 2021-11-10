<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Category</div>
    <div class="card-body text-primary">

        <p class="card-text"><?php if (isset($category)) {echo $category["id"];} ?></p>
        <p class="card-text"><?php if (isset($category)) {echo $category["name"];} ?></p>
    </div>

</body>
</html>