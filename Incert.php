<?php

//صفحة اضافة البيانات في جدول الحصص

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





if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $timing = $_POST['timing'];
    $place = $_POST['place'];
    $SerialNumber = $_POST['SerialNumber'];

    foreach ($name as $key => $value) {

        $save = "INSERT INTO Class (user_id,name,timing,place,SerialNumber)VALUES('".$user_id."','".$value."','".$timing[$key]."','".$place[$key]."','".$SerialNumber."')";

        $query = mysqli_query($conn,$save);
    

    }

    header('location:index.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Incert.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <a href="#" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">حسابي</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

<!-------------------------------( الجدول )----------------------------------->


<form action="" method="post">


<table dir="rtl" border="1" id="table_field">


    <tr class="b">

        <th>الاحد</th>
        <th>الاثنين</th>
        <th>الثلاثاء</th>
        <th>الاربعاء</th>
        <th>الخميس</th>  

    </tr>

    <tr>

        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>

    </tr>
    <tr>

        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>

    </tr>
    <tr>

        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>

    </tr>
    <tr>

        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>
        <td><input type="text" maxlength="40" name='name[]' placeholder='اكتب اسم المادة...' ><br><span><input type="time" name='timing[]'></span><br><span><input type="number"  name='place[]' placeholder='اكتب مكان القاعة...'></span></td>

    </tr>


</table>

<input type="submit" name="submit" class="button" value="حفظ الجدول">

<input  type="hidden" name='SerialNumber' value="<?php echo mt_rand(99999,999999);?>">

</form>

   
</body>
</html>