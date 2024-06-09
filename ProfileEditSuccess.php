<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile Edit</title>
        <link rel="stylesheet" href="styData.css">
    </head>

    <body>
        <div class="navbar">
            <img src="clean.jpg" width="3%" style="float: left; padding-left: 8">
            <a href="index.php">หน้าหลัก</a>
            <a class="active" href="Profile.php">โปรไฟล์</a>
            <a href="History.php">ดูรายการ</a>
            <a class="buttonExit" href="logout.php" style="float: right;">ออกจากระบบ</a>
        </div>
        
        <div class="frameSuccess">
            <?php
            $objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
            $db = mysqli_select_db($objConnect, "DBClean");
            mysqli_query($objConnect, "SET NAMES utf8");

            $sql_update="UPDATE users 
                            SET username='$_GET[username]',
                                fullname='$_GET[fullname]',
                                tel='$_GET[tel]',
                                email='$_GET[email]',
                                pw='$_GET[pw]',
                                nbhome='$_GET[nbhome]',
                                province='$_GET[province]',
                                district='$_GET[district]',
                                subdistrict='$_GET[subdistrict]',
                                post='$_GET[post]',
                                addressLocation='$_GET[addressLocation]'";

            $result= mysqli_query($objConnect, $sql_update);

            if(!$result) {
                echo "<br><center>Can't Update!!!</center><br>";
            } else {
                echo "<br><center>Success </center><br>";
            }
            ?>
            <center><a class="buttonConfirm" href='Profile.php'>กลับสู่หน้าโปรไฟล์</a></center>
        </div>
    </body>
</html>