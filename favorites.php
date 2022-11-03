<?php
session_start();
include 'connect.php';
include 'views/header.php';
include 'includes/favor.php';
include 'includes/remove-from-favorites.php';
$users_favorites=$_SESSION['user']['login'];
$images=mysqli_query($connect,"SELECT * FROM `favorites` WHERE user='$users_favorites'");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php while ($value=mysqli_fetch_array($images)){?>
        <div class="item">
            <input type="hidden" name="id">
            <img src="<?php echo $value['path'];?>" alt="">
            <p class="description"><?= $value['description']?></p>
            <a href="includes/remove-from-favorites.php?id=<?=$value['id']?>" class="favor" ">Remove from favorites</a>
        </div>

    <?php }?>
</div>
</body>
</html>
