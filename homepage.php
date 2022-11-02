<?php
session_start();
include 'connect.php';
if(!$_SESSION['user']){
    header('Location: authorization/index.php');
}
include "views/header.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <div class="item">
            <img src="img/1667398480sui.jpeg" alt="">
        </div>
    </div>
</body>
</html>
