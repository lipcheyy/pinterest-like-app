<?php
session_start();
require_once 'connect.php';
$name=$_SESSION['user']['login'];
$id=$_GET['id'];

if (isset($_GET['id'])){
    $current_usr=$_SESSION['user']['login'];
    $query=mysqli_query($connect,"SELECT path,description FROM `images` WHERE id='$id'");
    $row=mysqli_fetch_row($query);
    mysqli_query($connect,"INSERT INTO `favorites` (`id`, `user`, `path`, `description`) VALUES (NULL, '$current_usr', '$row[0]', '$row[1]')");
    header('Location: ../homepage.php');
    //print_r($row);

}
else{
    echo 123;
}
