<?php

require 'init.php';

$result = mysql_query('SELECT * FROM `category`');
$categories = array();
while ($row = mysql_fetch_array($result)) {
    $categories[$row['id']] = $row['name'];
}

?>




<!DOCTYPE html>
<html>
    <head lang="en">
        <?require 'bootstrap/inject.php';?>
        <meta charset="UTF-8">
        <title><?=$brand?> | Главная страница</title>
    </head>
    <body>
        <div class="container">
            <?require 'bootstrap/navbar.php';?>
            <ol class="breadcrumb">
                <li class="active"><?= $mainpage;?></li>
            </ol>
            <ul class="list-group">
                <?php
                foreach ($categories as $id => $name) {
                    echo '<li class="list-group-item"><a href="/category.php?id=' . $id . '">' . $name . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </body>
</html>

