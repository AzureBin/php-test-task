<?php
include('data/catalog.php');
extract($_GET);
$category = $catalog['categories'][$category_id];
$product = $category['products'][$product_id];
$title = $product['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,th {
            border: 1px solid black;
            padding: 5px 10px;
            text-align: center;
        }

        .attributes {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="breadcrumbs">
        <a href="/">Home</a> >
        <a href=<?= "/category.php?category_id=" . $category_id ?>>
            <?= $category['name'] ?>
        </a> >
        <span><?= $title ?></span>
    </div>

    <h1><?= $title ?></h1>

    <p class="description">Description: <?= $product['description'] ?></p>


        <table class="attributes">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>value</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>SKU</td>
                    <td><?= $product['sku'] ?></td>
                </tr>
                <? if (isset($product['attributes'])) : ?>
                    <?php foreach ($product['attributes'] as $key => $value) : ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $value ?></td>
                        </tr>
                    <?php endforeach; ?>
                <? endif; ?>
            </tbody>
        </table>

    <div class="product-price">
        Product price: <b className="price"><?= $product['price'] ?></b>
    </div>
</body>

</html>