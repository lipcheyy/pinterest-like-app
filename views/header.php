<?php
session_start();
?>
<link rel="stylesheet" href="css/header.css">
<header>
    <div class="user_login"><?= $_SESSION['user']['login']?></div>
    <a class="sui" href="../includes/exit.php">EXIT</a>
    <img class="avatar" src="<?= $_SESSION['user']['avatar']?>" alt="">
</header>


