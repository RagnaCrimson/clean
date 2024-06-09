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

        $sql_insert ="INSERT INTO Virus(v_Fullname, v_Date, v_Time, v_Duration, v_Location, v_nbHome, v_Province, v_District, v_SubDistrict, v_Post, v_Address, v_Pay, v_Price) 
                        VALUES ('$_GET[v_Fullname]','$_GET[v_Date]','$_GET[v_Time]','$_GET[v_Duration]','$_GET[v_Location]','$_GET[v_nbHome]',
                                '$_GET[v_Province]','$_GET[v_District]','$_GET[v_SubDistrict]','$_GET[v_Post]','$_GET[v_Address]','$_GET[v_Pay]','$_GET[v_Price]')";

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