<?php

//صفحة تعديل بيانات جدول ل=الحصص 

include 'core/autoload.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){

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


    $updete = "UPDATE Class SET name='$name' , timing='$timing' , place='$place' , doctor='$doctor', nhs='$nhs' ,email='$email' WHERE id=$ID ";

    mysqli_query($conn,$updete);
    
    header('location:index.php');
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>


<!-------------------------------( النافبار )----------------------------------->

<header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo">جدولكم</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">
                                <i class='bx bx-home-alt nav__icon'></i>
                                <span class="nav__name">الرئيسية</span>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                        <a href="Note.php" class="nav__link">
                                <i class='bx bx-book-alt nav__icon'></i>
                                <span class="nav__name">المذكرة</span>
                            </a>
                        </li>

                        <li class="nav__item">
                        <a href="games.php" class="nav__link">
                                <i class='bx bx-briefcase-alt nav__icon'></i>
                                <span class="nav__name">ترفية</span>
                           
                            </a>
                        </li>

                        <li class="nav__item">
                                <a href="#" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">حسابي</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>



<!-------------------------------( تسجيل )----------------------------------->


<?php
include 'core/autoload.php';

$ID = $_GET['id'];

$up = mysqli_query($conn, "SELECT * FROM Class WHERE id=$ID");

$data = mysqli_fetch_array($up);

?>
    
<div class="form-container" dir='rtl'>

<form action="" method="post">
      <h3>تعديل البيانات</h3>
      <input type="text"   name='id' value='<?php echo $data['id'] ?>'  class="box" style='display:none;'>
      <input type="text"   name='name' maxlength="40" value='<?php echo $data['name'] ?>' placeholder='اسم المادة' class="box">
      <input type="time"   name='timing' value='<?php echo $data['timing'] ?>' placeholder='الوقت' class="box">
      <input type="number" name='place' value='<?php echo $data['place'] ?>' placeholder='القاعة' class="box">
      <input type="text"   name='doctor' maxlength="40" value='<?php echo $data['doctor'] ?>' placeholder='اسم الدكتور' class="box">
      <input type="number" name='nhs' value='<?php echo $data['nhs'] ?>' placeholder='عدد ساعة المادة' class="box">
      <input type="email"  name='email' value='<?php echo $data['email'] ?>' placeholder='ايميل الدكتور' class="box">

      <input type="submit" name="update" class="btn" value="حفظ التعديل">

</form>
</div>



</body>
</html>