<?php
require_once 'connect.php';
if (isset($_GET['id']) && isset($_POST['edit-btn'])){
    $id=$_GET['id'];
    $description=$_POST['description'];
    $query="UPDATE `images` SET `description`='$description' WHERE id='$id'";
    mysqli_query($connect,$query);
    header("Location: ../my_gallery.php");
}
