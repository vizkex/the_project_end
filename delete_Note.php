<?php

//صفحة حذف البيانات من المذكرة

include 'core/autoload.php';

session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){

header('location:login.php');

};


$ID = $_GET['id'];

mysqli_query($conn, "DELETE FROM note WHERE id=$ID");

header('location:Note.php');

?>