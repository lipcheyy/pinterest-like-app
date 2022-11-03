<?php
$connect= mysqli_connect('localhost','root','root','gallery');
//debug for chercking if db connected
if (!$connect){
    die('disconnected');
}
