<?php
require_once 'connect.php';
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM `images` WHERE id=$id";
    mysqli_query($connect,$query);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
else{
    die("not_sui");
}