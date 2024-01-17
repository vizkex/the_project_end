<?php

//صفحة اضافة البيانات المذكرة

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

    $TITLE = clear($_POST['Title']);
    
    $CONTRNT = clear($_POST['content']);
    
    
    $incert = " INSERT INTO `note` (user_id,Title,content,shortContent)  VALUES ('$user_id','$TITLE','$CONTRNT','$CONTRNT')";
    
    mysqli_query($conn,$incert);

    header('location:Note.php');

    
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>جدولكم | انشاء مذكرة</title>
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


    
<div class="form-container" dir='rtl'>

<form action="" method="post">
      <h3>انشاء مذكرة</h3>
      <input type="text" name="Title" required placeholder="...العنوان" class="box">
      
      <textarea name="content" placeholder="...المحتوى" class="box-content"></textarea>

      <input type="submit" name="update" class="btn" value="حفظ">
</form>
</div>



</body>
</html>


