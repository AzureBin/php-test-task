<!DOCTYPE html>
<?php 
    include('data/catalog.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Shop</title>
</head>
<body>
    <div class="breadcrumbs">
        <span>Home</span>
    </div>

    <h1>Home</h1>

    <ul>
        <?php foreach ($catalog['categories'] as $category_id => $category) : ?>
            <li>
                <a href="/category.php?category_id=<?= $category_id?>">
                    <?= $category['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
