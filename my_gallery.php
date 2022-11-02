<?php
session_start();
include 'connect.php';
include 'views/header.php';
include 'includes/foo.php';
$creator=$_SESSION['user']['login'];
$images=mysqli_query($connect,"SELECT * FROM `images` WHERE creator='$creator'");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/my_gallery.css">
</head>
<body>
<div class="container">
    <?php while ($value=mysqli_fetch_array($images)){?>
        <div class="item">
            <input type="hidden" name="id" value="">
            <img src="<?php echo $value['path'];?>" alt="">
            <p class="description"><?= $value['description']?></p>
            <div class="btns">
                <a href="includes/delete.php?id=<?= $value['id']?>" class="remove">remove</a>
                <a href="edit_form.php?id=<?= $value['id']?>" class="edit">Edit</a>
            </div>

        </div>
    <?php }?>
</div>
</body>
</html>
