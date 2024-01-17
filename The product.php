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




?>


<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Add a friend's table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>جدولكم</title>
</head>
<body>


<?php

if(isset($message)){

foreach($message as $message){

echo '<div class="message" onclick="this.remove();">'.$message.'</div>';

}   
}
?>


<!-------------------------------( النافبار )----------------------------------->
<label>
    <input type="checkbox">
    <div class="toggle">
        <spen class="tob_line common"></spen>
        <spen class="middle_line common"></spen>
        <spen class="bottm_line common"></spen>
    </div>
    <div class="slide">
        
        <ul>
            <h1>جدولكم</h1>
            <li style='display:none;'><a href="#" class="c"><i class="fa-solid fa-user"></i> حسابي</a></li>
            <li><a href="#The product"><i class="fa-solid fa-plus"></i> بحث عن جدول صديق</a></li>
            <li style='display:none;'><a href="#"><i class="fa-solid fa-envelope"></i> ابلاغ عن مشكلة</a></li>
            <li style='display:none;'><a href="#"><i class="fa-solid fa-gear"></i> الاعدادت</a></li>
        </ul>
        <ul>
        <li><a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('هل أنت متأكد أنك تريد تسجيل الخروج؟');" class="e"><i class="fa-solid fa-arrow-right-from-bracket"></i>تسجيل الخروج </a></li>
        </ul>
    </div>
</label>

<header dir="rtl">

<a href="index.php" class="logo">جدولكم</a>

    <nav class="navigation">
        <a href="index.php">الحصص</a>
        <a href="Test.php">الاختبار</a>
        <a href="Note.php">المذكرة</a>
    </nav>
<h1></h1>
<!--<a href="index.php?logout=<//?php echo $user_id; ?>" onclick="return confirm('هل أنت متأكد أنك تريد تسجيل الخروج؟');" class="Exit">تسجيل خروج</a>-->

</header>

<div class="bor"></div>


<!-------------------------------( البحث )----------------------------------->






<!-------------------------------( الجدول )----------------------------------->







<section class='projects'dir='rtl'>


   
<div class="content-title">

    <div class='title'>
   <div class="title-info">
    <h2>الاحد</h2>
    </div>
    </div>

    <div class='title'>
   <div class="title-info">
    <h2>الاثنين</h2>
    </div>
    
    </div>
    <div class='title'>
   <div class="title-info">
    <h2>الثلاثاء</h2>
    </div>
    
    </div>
    <div class='title'>
   <div class="title-info">
    <h2>الاربعاء</h2>
    </div>
    
    </div>
    <div class='title'>
   <div class="title-info">
    <h2>الخميس</h2>
    </div>
    
    </div>

    </div>



    <div class='content'>

<?php

include 'core/autoload.php';


$numbers = $_POST['numbers'];

$result = mysqli_query($conn, "SELECT * FROM Class WHERE SerialNumber = '$numbers'");

if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
    echo "


    <div class='card'>
    <div class='card-details'>
      <p class='text-title'>$row[name]</p>
      <p class='text-body'>القاعة:$row[place]</p>
      <p class='text-body'>الوقت:$row[timing]</p>
    </div>
    <button class='card-button'><a href='update.php? id=$row[id]'>تفصيل</a></button>
  </div>

    ";

}
   
}else{
    echo "
  
    <div class='project-else'>
        <div class='project-info-else'>
            <h3 class='project-category-else'>لايوجد جدول</h3>
        </div>
    </div>

";
}
?>


    </div>
</section>

<div class="pbr"></div>

<footer class="footer">
    
        <p class="footer-title">جميع الحقوق محفوظة - <span>جدولكم</span></p>
        <div class="social-icons">

            <a href="#"><i class="fab fa-twitter"></i></a>

        </div>
    </footer>
</body>
</html>