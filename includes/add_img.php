<?php
session_start();
require_once 'connect.php';
$description=$_POST['description'];
$creator=$_SESSION['user']['login'];
if (isset($_POST['save'])){
    $path="img/". time(). $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],'../'.$path);
    /** @var TYPE_NAME $connect */
    mysqli_query($connect,"INSERT INTO `images` (`id`, `creator`, `description`, `path`) VALUES (NULL, '$creator', '$description', '$path')");
}

