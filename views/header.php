<?php
session_start();
?>
<link rel="stylesheet" href="css/header.css">
<header>
    <a class="user_login" href="homepage.php"><?= $_SESSION['user']['login']?></a>
    <a href="add_new_img_form.php">Add new image</a>
    <a class="sui" href="includes/exit.php">EXIT</a>
    <a href="">My gallery</a>
    <img class="avatar" src="<?= $_SESSION['user']['avatar']?>" alt="">
</header>


