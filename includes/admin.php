<?php
require_once "connect.php";
$query=mysqli_query($connect,"SELECT login FROM users");
$photos=mysqli_query($connect,"SELECT path FROM images");
$registered=mysqli_num_rows($query);
$uploaded=mysqli_num_rows($photos);
$i=$s=$k=0;
$i= $registered;
$s=$uploaded;


