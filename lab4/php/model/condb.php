<?php
$host = "db";
$user = "root";
$pass = "1234";
$db = "db_test";
try {
    mysqli_connect($host,$user,$pass,$db); 
    mysqli_connect($link, "SET NAMES utf8");
} catch (Exception $e) {
    echo $e . ":Error no:" .  mysqli_errno($link);
}

