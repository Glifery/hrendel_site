<?php

require 'init.php';

$product = mysql_query('SELECT * FROM `product` WHERE `id` = ' . $_REQUEST['product']);
$product = mysql_fetch_array($product, MYSQL_ASSOC);

$category = mysql_query('SELECT * FROM `category` WHERE `id` = ' . $product['category']);
$category = mysql_fetch_array($category, MYSQL_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head lang="en">
        <?require 'bootstrap/inject.php';?>
        <meta charset="UTF-8">
        <title><?=$brand?> | Товар</title>
    </head>
    <body>
        <div class="container">
            <?require 'bootstrap/navbar.php';?>
            <ol class="breadcrumb">
                <li><a href="/"><?=$mainpage?></a></li>
                <li><a href="/"><?=$category['name']?></a></li>
                <li class="active"><?= $product['name'];?></li>
            </ol>
            <div class="jumbotron">
                <h2>Товар: <?=$product['name']?></h2>
                <p><b>Описание:</b> <?=$product['description']?></p>
                <p><b>Цена:</b> <?=$product['price']?></p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Купить</a></p>
            </div>
        </div>
    </body>
</html>