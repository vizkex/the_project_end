<?php

//صفحة اضافة البيانات في جدول الاختبارات

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


if(isset($_POST['upload'])){
    
    $name = clear($_POST['name']);
    $timing = clear($_POST['timing']);
    $place = clear($_POST['place']);

    foreach ($name as $key => $value) {

        $save = "INSERT INTO test (user_id,name,timing,place)VALUES('".$user_id."','".$value."','".$timing[$key]."','".$place[$key]."')";

        $query = mysqli_query($conn,$save);

    }

    header('location:test.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Incert.css">
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
        <a href="index.php">الحصص</a>
        <a href="Test.php"  class="v">الاختبار</a>
        <a href="Note.php">المذكرة</a>
    </nav>
<h1></h1>
<!--<a href="index.php?logout=<//?php echo $user_id; ?>" onclick="return confirm('هل أنت متأكد أنك تريد تسجيل الخروج؟');" class="Exit">تسجيل خروج</a>-->

</header>

<div class="bor"></div>

<!-------------------------------( الجدول )----------------------------------->


<form action="" method="post">


<table dir="rtl" border="1" id="table_field">


    <tr class="bc">

        <th>الاحد</th>
        <th>الاثنين</th>
        <th>الثلاثاء</th>
        <th>الاربعاء</th>
        <th>الخميس</th>  

    </tr>

    <tr>

        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>

    </tr>
    <tr>

        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>

    </tr>
    <tr>

        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>

    </tr>
    <tr>

        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td>الماده:<input type="text" name='name[]' placeholder='اكتب اسم المادة...'><br><span>الساعة/<input type="time" name='timing[]'></span><br><span>القاعة/<input type="number" name='place[]' placeholder='اكتب مكان القاعة...'></span></td>

    </tr>


</table>

<input class="button" type="submit" name='upload' id="upload" value="Save Data">

</form>

  
</body>
</html>