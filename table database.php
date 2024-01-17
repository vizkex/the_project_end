<html>

    <head>

        <meta charset="UTF-8">

        <title></title>

    </head>

    <body>

    

        <?php

            //الإتصال بخادم قاعدة البيانات

           $conn = mysqli_connect("localhost","root","","jadwalukum") OR die("<br>لا يمكن الاتصال بخادم قاعدة البيانات");

        echo "<br>تم الاتصال بخادم قاعدة البيانات";

        //    mysqli_query($conn, 'CREATE DATABASE jadwalukum ;') or  die("لا يمكن إنشاء قاعدة البيانات"); 
        //    echo "<h3>تم إنشاء قاعدة البيانات بنجاح</h3>";


          //  mysqli_select_db($conn,"jadwalukum"); hello this message from yousef thx for your work all the love for u  

            //إنشاء جدول

        //    $sql = "CREATE TABLE  `user_form` (`id` INT(100) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` INT(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

        //    mysqli_query($conn, $sql) OR die("<br>user_form لا يمكن إنشاء الجدول");

        //    echo "<br>user_form تم إنشاء الجدول";

                        
        //    $sql = "CREATE TABLE note (id INT(100) NOT NULL AUTO_INCREMENT , user_id int(100) NOT NULL , Title VARCHAR(100) NOT NULL , content VARCHAR(100) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;";

        //    mysqli_query($conn, $sql) OR die("<br>note لا يمكن إنشاء الجدول");

        //    echo "<br>note تم إنشاء الجدول";


        //    $sql = "CREATE TABLE Class (id INT(100) NOT NULL AUTO_INCREMENT , user_id int(100) NOT NULL , name VARCHAR(100) NOT NULL , timing time NOT NULL , place int(100) NOT NULL , doctor VARCHAR(100) NOT NULL , nhs int(100) NOT NULL , email VARCHAR(100) NOT NULL, SerialNumber int(6) NOT NULL  , PRIMARY KEY (id)) ENGINE = InnoDB;";

        //    mysqli_query($conn, $sql) OR die("<br>Class لا يمكن إنشاء الجدول");

        //    echo "<br>Class تم إنشاء الجدول";

            $sql = "CREATE TABLE Favorite (id INT(100) NOT NULL AUTO_INCREMENT , user_id int(100) NOT NULL , name VARCHAR(100) NOT NULL , timing time NOT NULL , place int(100) NOT NULL , doctor VARCHAR(100) NOT NULL , nhs int(100) NOT NULL , email VARCHAR(100) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;";

            mysqli_query($conn, $sql) OR die("<br>Favorite لا يمكن إنشاء الجدول");

            echo "<br>Favorite تم إنشاء الجدول";


        //    $sql = "CREATE TABLE test (id INT(100) NOT NULL AUTO_INCREMENT , user_id int(100) NOT NULL , name VARCHAR(100) NOT NULL , timing time NOT NULL , place int(100) NOT NULL , doctor VARCHAR(100) NOT NULL , nhs int(100) NOT NULL , email VARCHAR(100) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;";

        //    mysqli_query($conn, $sql) OR die("<br>test لا يمكن إنشاء الجدول");

        //    echo "<br>test تم إنشاء الجدول";
            
            //إغلاق الاتصال بقاعدة البيانات

            mysqli_close($conn);

            echo "<h2>تم تجهيز قاعدة البيانات</h2>";                

        ?>

    </body>

</html>