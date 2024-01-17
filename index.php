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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>جدولكم</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
<header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo">جدولكم</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link active-link">
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
                                <a href="user.php" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">حسابي</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

<!-- 000 -->



<!-------------------------------( مرحبا )----------------------------------->


<div class="Welcome">
  <h1>مرحبا بك في موقع جدولكم</h1>
  <p>...من اجل تنظيم حياتك الدراسية وتسهيلها وانشاء جداول ومذكرات واشياء عظيمة قادمة قريبا</p>
</div>


<!-------------------------------( الجدول )----------------------------------->


<section class='projects'dir='rtl'>
    

<ul class='week' dir='rtl'>
    <li>الاحد</li>
    <li>الاثنين</li>
    <li>الثلاثاء</li>
    <li>الاربعاء</li>
    <li>الخميس</li>
</ul>



<div class='content'>

<?php

include 'core/autoload.php';


$result = mysqli_query($conn, "SELECT * FROM Class WHERE user_id = '$user_id'");

if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
?>   

    
    <div class='card'>
    <div class='card-details'>
      <p class='text-title'><?php echo $row['name'] ?></p>
      <p class='text-body'>القاعة:<?php echo $row['place'] ?></p>
      <p class='text-body'>الوقت:<?php echo $row['timing'] ?></p>
    </div>
    
    <a href="update.php? id=<?php echo $row['id'] ?>"><button class='card-button'>تفصيل</button></a>
  </div>

  

<?php
}
?>
<?php
}else{
  ?>
    <div class='project-else'>
        <div class='project-info-else'>
            <h3 class='project-category-else'>لايوجد جدول</h3>
        </div>
    </div>
<?php
 };
?>
</div>
</section>



<div class="delet" dir="rtl">
  <p>قريبا البحث جدول صديق....</p>
  <div class="colz">
    <?php

    $result = mysqli_query($conn, "SELECT * FROM Class WHERE user_id = '$user_id'");

    if(mysqli_num_rows($result)>0){
        echo" <a href='#' class='Incert-if'>تعديل</a>";
    }else{
        echo" <a href='Incert.php' class='Incert'>اضافة جدول حصص</a>";
    }
    ?>
    <a href="delete.php" class="de">حذف الجدول</a>
    </div>
</div>


<!--
<div class='form-container' id='The product' >

<form action='The product.php' method='post'>
      <h3>ابحث عن جدول صديق</h3>
      <h5>البحث يكون عن طريق ايدي المستخدم</h5>
      <input type='number' name='numbers' required placeholder='... بحث' class='box'>
      <input type='submit' name='submit' class='btn' value='بحث'>
</form>
</div>

-->









<footer class="footer">
            <div class="social-icons">
        <p class="footer-title">جميع الحقوق محفوظة - <span>جدولكم</span> 2024-2025 </p>
        <a href="#"><i class="fab fa-twitter"></i>تبعنا على تويتر</a>

        </div>
    
    <div class="pbrr">
        <div class="contpbrr">
            <a href="whowe.php">من نحن</a>
        </div>
    </div>
</footer>


   <!-------------------------------( اكود جافا سكربة )----------------------------------->
   <!-------------------------------( اكود جافا سكربة )----------------------------------->
   <!-------------------------------( اكود جافا سكربة )----------------------------------->
   <!-------------------------------( اكود جافا سكربة )----------------------------------->
   <!-------------------------------( اكود جافا سكربة )----------------------------------->
   <!-------------------------------( اكود جافا سكربة )----------------------------------->
 


    <script src="js/script.js"></script>


    <script>

let months = ["يناير","فبراير","مارس","أبريل","مايو","يونيو","يوليو","أغسطس","سبتمبر","أكتوبر","نوفمبر","ديسمبر"]

let date = new Date();

let dayNum = date.getDay() + 1;

let month = months[date.getMonth()];

let day = date.getDate();

let year = date.getFullYear();

let active = document.querySelector(".week li:nth-child(" + dayNum + ")");
active.classList.add('current');

let h1 = document.createElement('h1');
h1.innerHTML = day;
active.appendChild(h1);

let h5 = document.createElement('h5');
h5.innerHTML = month;
active.appendChild(h5);

let h3 = document.createElement('h3');
h3.innerHTML = year;
active.appendChild(h3);

</script>

</body>
</html>