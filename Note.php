<?php

//صفحة المذكره

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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Note.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>جدولكم | مذكرة</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
                        <a href="Note.php" class="nav__link active-link">
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






<!-------------------------------( المتوى )----------------------------------->

<section class='projects'dir='rtl'>

    <div class='title'>
    <a href="Incert_into_Note.php"><i class="fa-solid fa-plus"></i></a>
    </div>

<div class='content'>
<?php

include 'core/autoload.php';

$result = mysqli_query($conn, "SELECT * FROM note WHERE user_id = '$user_id'");
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){

    echo "

        <div class='card'>
  <div class='img'></div>
  <div class='textBox'>
    <div class='textContent'>
      <p class='h1'><a href='Show_Note.php? id=$row[id]'>$row[Title]</a></p>
      <span class='span'>12 min ago</span>
    </div>
    <div class='elet'>
    <p class='p'>$row[shortContent].........</p>
    <a href='delete_Note.php? id=$row[id]'><i class='fa-solid fa-xmark'></i></a>
    </div>
  <div>
</div></div></div>

    ";

}

}else{
    echo "
<div class='nawn'>
<i class='bx bx-confused'></i>
    <h1>لا يوجد اي مذكرة</h1>

</div>
";
 }

?>

    </div>
</section>



<footer class="footer">
            <div class="social-icons">
        <p class="footer-title">جميع الحقوق محفوظة - <span>جدولكم</span></p>
        <a href="#"><i class="fab fa-twitter"></i>تبعنا على تويتر</a>

        </div>
    
    <div class="pbrr">
        <div class="contpbrr">
            <a href="whowe.php">من نحن</a>
        </div>
    </div>
</footer>






    <script src="js/script.js"></script>

    
</body>
</html>