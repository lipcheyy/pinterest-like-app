<?php
require_once "connect.php";
$query=mysqli_query($connect,"SELECT COUNT(login) FROM users");
$photos=mysqli_query($connect,"SELECT COUNT(path) FROM images");
//$active=mysqli_query($connect,"SELECT DISTINCT creator FROM images");
$num=mysqli_fetch_assoc($query);
//$a_num=mysqli_fetch_assoc($active);
$p_num=mysqli_fetch_assoc($photos);
//$num_p=mysqli_fetch_assoc($photos);
$i=$s=$k=0;
foreach ($num as $val){
    $i+=$val;
}
foreach ($p_num as $val){
    $s+=$val;
}
foreach ($a_num as $val){
    $k+=$val;
}

