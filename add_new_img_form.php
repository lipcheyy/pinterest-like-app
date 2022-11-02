<?php
session_start();
include 'connect.php';
include "includes/add_img.php";
include 'views/header.php'; ?>
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
<form action="includes/add_img.php" method="post" enctype="multipart/form-data">
    <label for="photo">Choose photo</label>
    <input type="file" name="photo">
    <label for="">description</label>
    <input type="text" name="description">
    <input type="submit" name="save">
</form>
</body>
</html>
