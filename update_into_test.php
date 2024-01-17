<?php

//صفحة تعديل بيانات جدول الاختبارات 

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


if(isset($_POST['update'])){
    
    $ID = clear($_POST['id']);
    $name = clear($_POST['name']);
    $timing = clear($_POST['timing']);
    $place = clear($_POST['place']);
    $doctor = clear($_POST['doctor']);
    $nhs = clear($_POST['nhs']);
    $email = clear($_POST['email']);


    $updete = "UPDATE test SET name='$name' , timing='$timing' , place='$place' , doctor='$doctor', nhs='$nhs' ,email='$email' WHERE id=$ID ";

    mysqli_query($conn,$updete);
    
    header('location:Test.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>جدولكم | تعديل الجدول</title>
</head>
<body>


<!-------------------------------( النافبار )----------------------------------->



<!-------------------------------( تسجيل )----------------------------------->


<?php
include 'core/autoload.php';

$ID = $_GET['id'];

$up = mysqli_query($conn, "SELECT * FROM test WHERE id=$ID");

$data = mysqli_fetch_array($up);

?>
    
<div class="form-container" dir='rtl'>

<form action="" method="post">
      <h3>تعديل البيانات</h3>
      <input type="text" name='id' value='<?php echo $data['id'] ?>'  class="box" style='display:none;'>
      <input type="text" name='name' value='<?php echo $data['name'] ?>'  class="box">
      <input type="time" name='timing' value='<?php echo $data['timing'] ?>' class="box">
      <input type="number" name='place' value='<?php echo $data['place'] ?>' class="box">
      <input type="text" name='doctor' value='<?php echo $data['doctor'] ?>' placeholder='اسم الدكتور' class="box">
      <input type="number" name='nhs' value='<?php echo $data['nhs'] ?>' placeholder='عدد ساعة المادة' class="box">
      <input type="email" name='email' value='<?php echo $data['email'] ?>' placeholder='ايميل الدكتور' class="box">

      <input type="submit" name="update" class="btn" value="حفظ التعديل">

</form>
</div>



</body>
</html>