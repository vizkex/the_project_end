<?php

include 'core/autoload.php';

session_start();

if(isset($_POST['submit'])){

    $numbers = clear($_POST['numbers']);
 
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE user_id = '$numbers' ") or die('query failed');
   // تستخدم لاسترداد عدد الصفوف الموجودة في نتائج استعلام .
    if(mysqli_num_rows($select) > 0){
       $row = mysqli_fetch_assoc($select);
       $_SESSION['numbers_id'] = $row['id'];
       header('location:The product.php');

    }
 
 };

?>