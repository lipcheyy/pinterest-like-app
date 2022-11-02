<?php
require_once 'connect.php';
$images=mysqli_query($connect,"SELECT * FROM `images`");
//header("Location: ". $_SERVER['HTTP_REFERER']);
