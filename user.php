
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

<!DOCTYPE html>
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
                                <a href="user.php?logout=<?php echo $user_id; ?>" onclick="return confirm('هل أنت متأكد أنك تريد تسجيل الخروج؟');" class="nav__link active-link">
                                <i class='bx bx-log-out nav__icon'></i>
                                <span class="nav__name">تسجيل الخروج</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

<!-- 000 -->

<!-- =========================     المحتوى     ========================== -->
<!-- =========================     المحتوى     ========================== -->
<!-- =========================     المحتوى     ========================== -->
<!-- =========================     المحتوى     ========================== -->



<h1 class="textuser">مرحبا</h1>








    
</body>
</html>