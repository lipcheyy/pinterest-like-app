<?php
require_once 'connect.php';
session_start();
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM `favorites` WHERE id=$id";
    mysqli_query($connect,$query);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}