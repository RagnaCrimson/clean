<html>
    <head>
        <meta charset="UTF-8">
        <title>Clean Insert</title>
        <link rel="stylesheet" href="styData.css">
    </head>
    <body>
        <div class="navbar">
            <img src="clean.jpg" width="3%" style="float: left; padding-left: 8">
            <a class="active" href="index.php">หน้าหลัก</a>
            <a href="Profile.php">โปรไฟล์</a>
            <a href="History.php">ดูรายการ</a>
            <a class="buttonExit" href="logout.php" style="float: right;">ออกจากระบบ</a>
        </div>

        <div class="frameSuccess">
        <?php
        $objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
        mysqli_select_db($objConnect,"DBClean");
        mysqli_query($objConnect ,"SET NAMES utf8");

        $sql_insert ="INSERT INTO clean(c_Fullname, c_Date, c_Time, c_Duration, c_Location, c_nbHome, c_Province, c_District, c_SubDistrict, c_Post, c_Address, c_Pay, c_Price) 
                        VALUES ('$_GET[c_Fullname]','$_GET[c_Date]','$_GET[c_Time]','$_GET[c_Duration]','$_GET[c_Location]','$_GET[c_nbHome]',
                                '$_GET[c_Province]','$_GET[c_District]','$_GET[c_SubDistrict]','$_GET[c_Post]','$_GET[c_Address]','$_GET[c_Pay]','$_GET[c_Price]')";

        $result = mysqli_query($objConnect, $sql_insert);

        if(!$result) {
            echo "Can't insert!!!<br>";
            echo "<br>";
        } else {
            echo "Insert data successfully <br>";
        }
        ?>
        <br>
        <a class="buttonConfirm" href='index.php'>กลับสู่หน้าหลัก</a>
        </div>
    </body>
</html>