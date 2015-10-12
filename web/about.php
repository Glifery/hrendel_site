<?php
require 'init.php';
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
        <li class="active">Контакты</li>
    </ol>
    <div class="jumbotron">
        <h2>ЧУП "<?=$brand?>"</h2>
        <p>Магазин находится по адресу: Немига 3, павильон 3</p>
        <p><b>Email:</b> <a href="mailto:lordofrings_2002@mail.ru">lordofrings_2002@mail.ru</a></p>
    </div>
</div>
</body>
</html>