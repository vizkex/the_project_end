<?php

//صفحة حذف البيانات من جدول الاختبارات


include 'core/autoload.php';

session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){

header('location:login.php');

};

mysqli_query($conn, "DELETE FROM test WHERE user_id = '$user_id'");

header('location:test.php');

?>