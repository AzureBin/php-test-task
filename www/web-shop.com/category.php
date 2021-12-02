<?php 
    include('data/catalog.php');

    $category_id = $_GET['category_id'];
    $category = $catalog['categories'][$category_id];
    $title = $category['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <div class="breadcrumbs">
        <a href="/">Home</a> >
        <span><?= $title ?></span>
    </div>

    <h1><?= $title ?></h1>
    Products:
    <?php foreach ($category['products'] as $product_id => $product ) : ?>
        <li>
            <a href="/product.php?category_id=<?= $category_id ?>&product_id=<?= $product_id ?>"><?= $product['name'] ?></a>
        </li>
    <?php endforeach ?>
</body>
</html>