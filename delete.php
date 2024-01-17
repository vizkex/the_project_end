<?php

//صفحة حذف البيانات من جدول الحصص

include 'core/autoload.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){

header('location:login.php');

};

mysqli_query($conn, "DELETE FROM Class WHERE user_id = '$user_id'");

header('location:index.php');

?>