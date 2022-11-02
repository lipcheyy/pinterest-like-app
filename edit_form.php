<?php
session_start();
include 'connect.php';
include 'views/header.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <form action="includes/edit.php?id=<?= $_GET['id']?>" method="post">
        <label for="">Change description</label>
        <input type="text" name="description">
        <input type="submit" name="edit-btn">
    </form>
</body>
</html>
