<?php

//الصفحة الرىيسية

include 'core/autoload.php';

session_start();

$user_id = $_SESSION['user_id'];


if(!isset($user_id)){

header('location:login.php');

};

if(isset($_GET['logout'])){

unset($user_id);

session_destroy();

header('location:login.php');
};

$numbers = $_POST['numbersb'];

if(isset($_POST['submitb'])){
    
    $name = clear($_POST['name']);
    $timing = clear($_POST['timing']);
    $place = clear($_POST['place']);

    foreach ($name as $key => $value) {

        $save = "INSERT INTO friend (user_id,name,timing,place)VALUES('".$numbers."','".$value."','".$timing[$key]."','".$place[$key]."')";

        $query = mysqli_query($conn,$save);
    

    }

    header('location:index.php');
};




?>