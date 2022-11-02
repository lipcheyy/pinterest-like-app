<?php
require_once 'connect.php';
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $select=mysqli_query($connect,"SELECT path FROM images WHERE id='$id'");
    $row=mysqli_fetch_row($select);
    $path =$row[0];
    unlink($path);
    $query="DELETE FROM `images` WHERE id=$id";
    mysqli_query($connect,$query);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
else{
    die("not_sui");
}