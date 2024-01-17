<?php

//صفحة عرض المذكره

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
    $TITLE = clear($_POST['Title']);
    $CONTENT = clear($_POST['content']);

    $updete = "UPDATE note SET Title='$TITLE' , content='$CONTENT'  WHERE id=$ID ";

    mysqli_query($conn,$updete);
    
    header('location:Note.php');
};


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Show_Note.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>جدولكم | عرض المذكرة</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>


<!-------------------------------( النافبار )----------------------------------->


<!-------------------------------( تسجيل )----------------------------------->

<?php
include 'core/autoload.php';

$ID = $_GET['id'];

$up = mysqli_query($conn, "SELECT * FROM note WHERE id=$ID");

$data = mysqli_fetch_array($up);

?>
       
<div class="form-container" dir='rtl'>

<form action="" method="post">
      <h3></h3>

      <input type="text" name="id" value='<?php echo $data['id'] ?>'  placeholder="...العنوان" style='display:none;' class="box" >

      <input type="text" name="Title" value='<?php echo $data['Title'] ?>' required  placeholder="...العنوان"  class="box">
      
      <textarea name="content" value='' placeholder="...المحتوى" class="box-content"><?php echo $data['content'] ?></textarea>

      <input type="submit" name="update" class="btn" value="رجوع">
</form>
</div>
<script src="js/script.js"></script>


</body>
</html>