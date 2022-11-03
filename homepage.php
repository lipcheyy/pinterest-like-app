<?php
session_start();
include 'connect.php';
include "views/header.php";
include 'includes/foo.php';
if(!$_SESSION['user']){
    header('Location: authorization/index.php');

}
/** @var TYPE_NAME $connect */
$images=mysqli_query($connect,"SELECT * FROM `images`");
$select=mysqli_query($connect,"SELECT path FROM images WHERE id='37'");
$row=mysqli_fetch_row($select);
$path = $row[0];
echo $path;
?>
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
        <?php while ($value=mysqli_fetch_array($images)){?>
        <div class="item">
            <input type="hidden" name="id">
            <img src="<?php echo $value['path'];?>" alt="">
            <p class="description"><?= $value['description']?></p>
            <p>Added by <span style="color: red; font-weight: bolder"><?= $value['creator']?></span></p>
            <div class="btns">
                <a href="includes/favor.php?id=<?= $value['id']?>" class="fav">Add to favorites</a>
                <?php if ($_SESSION['user']['login']=="admin"): ?>
                    <a href="includes/delete.php?id=<?= $value['id']?>" class="remove">delete</a>
                <?php endif;?>
            </div>
            </div>
        <?php }?>
    </div>
</body>
</html>
