<?php
session_start();
?>
<link rel="stylesheet" href="css/header.css">
<header>
    <a class="user_login text" href="homepage.php">Hello, <?= $_SESSION['user']['login']?></a>
    <a href="add_new_img_form.php " class="text">Add new image</a>
    <a href="my_gallery.php" class="text">My gallery</a>
    <a href="favorites.php">Favirotes</a>
    <?php if ($_SESSION['user']['login']=='admin'):?>
        <a href="adminpanel.php">Admin Panel</a>
    <?php endif;?>
    <a class="sui text" href="includes/exit.php">EXIT</a>
    <img class="avatar" src="<?= $_SESSION['user']['avatar']?>" alt="">
</header>


