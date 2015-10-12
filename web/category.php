<?php

require 'init.php';

$category = mysql_query('SELECT * FROM `category` WHERE `id` = ' . $_REQUEST['id']);
$category = mysql_fetch_array($category, MYSQL_ASSOC);

$productsRes = mysql_query('SELECT * FROM `product` WHERE `category` = ' . $_REQUEST['id']);
$products = array();
while ($product = mysql_fetch_array($productsRes, MYSQL_ASSOC)) {
    $products[] = $product;
}


?>


<!DOCTYPE html>
<html>
    <head lang="en">
        <?require 'bootstrap/inject.php';?>
        <meta charset="UTF-8">
        <title><?=$brand?> | Категория</title>
    </head>
    <body>
        <div class="container">
            <?require 'bootstrap/navbar.php';?>
            <ol class="breadcrumb">
                <li><a href="/"><?=$mainpage?></a></li>
                <li class="active"><?= $category['name'];?></li>
            </ol>
            <ul class="list-group">
                <?foreach ($products as $product) {?>
                    <li class="list-group-item">
                        <p>
                            <a href="/card.php?product=<?=$product['id']?>"><?=$product['name']?></a>
                        </p>
                    </li>
                <?}?>
            </ul>
        </div>
    </body>
</html>