<?php
require_once 'connect.php';
if (isset($_GET['id']) && isset($_POST['edit-btn'])){
    $id=$_GET['id'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $query="";
    header('Location: homepage.php');
}
