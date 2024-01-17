<?php

//صفحة عرض جدول الاختبارات

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
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>جدولكم | جدول الاختبار</title>
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



<!-------------------------------( النافبار )---------------------------------->


<div class="sidebar">
      <div class="logo-details">

        <div class="logo_name"></div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <i class="bx bx-search"></i>
          <input type="text" placeholder="Search..." />
          <span class="tooltip">بحث</span>
        </li>
        <li>
          <a href="index.php">
          <i class='bx bx-home-alt'></i>
            <span class="links_name">الصفحة الرئيسية</span>
          </a>
          <span class="tooltip">الصفحة الرئيسية</span>
        </li>
        <li>
          <a href="test.php">
            <i class='bx bxs-book'></i>
            <span class="links_name">جدول الاختبارات</span>
          </a>
          <span class="tooltip">جدول الاختبارات</span>
        </li>
        <li>
          <a href="Note.php">
            <i class='bx bxs-edit'></i>
            <span class="links_name">المذكرة</span>
          </a>
          <span class="tooltip">المذكرة</span>
        </li>
        <li>
          <a href="#">
          <i class='bx bxs-game'></i>
            <span class="links_name">العاب</span>
          </a>
          <span class="tooltip">العاب</span>
        </li>
        <li>
          <a href="#">
          <i class='bx bxs-user-check'></i>
            <span class="links_name">ادمن</span>
          </a>
          <span class="tooltip">ادمن</span>
        </li>
        <li>
          <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('هل أنت متأكد أنك تريد تسجيل الخروج؟');">
          <i class="bx bx-log-out" id="log_out"></i>
            <span class="links_name">تسجيل خروج</span>
          </a>
          <span class="tooltip">تسجيل خروج</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="img/p.png" alt="profileImg" />
            <div class="name_job">
              <div class="name">Prem Shahi</div>
              <div class="job">Web designer</div>
            </div>
          </div>
          <i class="bx bxs-user" id="log_out"></i>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="text">جدولكم</div>
    </section>


<!-------------------------------( النافبار )----------------------------------
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
            <li><a href="#The product"><i class="fa-solid fa-plus"></i> اضافة جدول صديق</a></li>
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
        <a href="index.php" >الحصص</a>
        <a href="Test.php" class="v">الاختبار</a>
        <a href="Note.php">المذكرة</a>
    </nav>
<h1></h1>
<a href="index.php?logout=<//?php echo $user_id; ?>" onclick="return confirm('هل أنت متأكد أنك تريد تسجيل الخروج؟');" class="Exit">تسجيل خروج</a>

</header>-->
<div class="bor"></div>

<div class="delet" dir="rtl">
<?php

$result = mysqli_query($conn, "SELECT * FROM test WHERE user_id = '$user_id'");

if(mysqli_num_rows($result)>0){
    echo" <a href='#' class='Incert-if'>تعديل</a>";
}else{
    echo" <a href='Incert_into_test.php' class='Incert'>اضافة جدول الاختبار</a>";
}
?>
    <p>جدول الاختبار</p>
    <a href="delete_test.php" class="de">حذف الجدول</a>
</div>

<!-------------------------------( الجدول )----------------------------------->

<section class='projects'dir="rtl">

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

$result = mysqli_query($conn, "SELECT * FROM test WHERE user_id = '$user_id'");

if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){

    echo "

    <div class='card'>
    <div class='card-details'>
      <p class='text-title'>$row[name]</p>
      <p class='text-body'>القاعة:$row[place]</p>
      <p class='text-body'>الوقت:$row[timing]</p>
    </div>
    <button class='card-button'><a href='update_into_test.php? id=$row[id]'>تفصيل</a></button>
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

<div class="form-container" id="The product" >

<form action="The product.php" method="post">
      <h3>ابحث عن جدول صديق</h3>
      <input type="number" name="numbers" required placeholder="... بحث" class="box">
      <input type="submit" name="submit" class="btn" value="بحث">
</form>
</div>



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



<script>

  /* let months = ["يناير","فبراير","مارس","أبريل","مايو","يونيو","يوليو","أغسطس","سبتمبر","أكتوبر","نوفمبر","ديسمبر"]

    let date = new Date();
    let dayNum = date.getDay();

    let day = date.getDay();
    let month = months[date.getMonth()];
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
    active.appendChild(h3); */

</script>


<div class="pbr"></div>

<footer class="footer">
    
        <p class="footer-title">جميع الحقوق محفوظة - <span>جدولكم</span></p>
        <div class="social-icons">

            <a href="#"><i class="fab fa-twitter"></i></a>

        </div>
    </footer>
    <div class="pbrr">
        <div class="contpbrr">
            <a href="whowe.php">من نحن</a>
            <a href="#">الاحكام وشروط</a>
        </div>
    </div>


<script src="js/script.js"></script>


</body>
</html>