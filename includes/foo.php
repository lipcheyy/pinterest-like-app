<?php
require_once 'connect.php';
$images=mysqli_query($connect,"SELECT * FROM `images`");

$information=mysqli_fetch_assoc($images);
/*$_SESSION['info']=[
  'id'=>$information['id'],
  'description'=>$information['description'],
    'creator'=>$information['creator']
];*/