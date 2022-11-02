<?php
include 'views/header.php';
include 'connect.php';
include 'includes/admin.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container"
    style="
    width: 400px;
    margin: 20px auto;
    ">
    <h1>Статистика</h1>
    <div>Зареэстрованих користувачів: <?=$i?></div>
    <div>Всього фото: <?=$s?></div>
</div>

</body>
</html>
