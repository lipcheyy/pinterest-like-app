<?php
require_once 'connect.php';
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query="";
    header('Location: homepage.php');
}
else{
    die("not_sui");
}