<?php
include('Session.php');
$objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
$db = mysqli_select_db($objConnect, "DBClean");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$strSQL = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' ";
$objQuery = mysqli_query($objConnect, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Main</title>
        <link rel="stylesheet" href="StyData.css">
    </head>

    <body>

        <div class="navbar">
            <img src="clean.jpg" width="3%" style="float: left; padding-left: 8"> 
            <a href="index.php">หน้าหลัก</a>
            <a class="active" href="Profile.php">โปรไฟล์</a>
            <a href="History.php">ดูรายการ</a>
            <a class="buttonExit" href="logout.php" style="float: right;">ออกจากระบบ</a>
        </div>


        <div class="frame">
            <form method="get" action="ProfileEdit.php">
                <img src="user.png" class="imgLogo">
                <h1>ข้อมูลส่วนตัว</h1>
                <table>

                    <tr>
                        <td>ชื่อผู้ใช้</td>
                        <td><?php echo $objResult["username"];?></td>
                    </tr>

                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><?php echo $objResult["fullname"];?></td>
                    </tr>

                    <tr>
                        <td>เบอร์โทร</td>
                        <td><?php echo $objResult["tel"];?></td>
                    </tr>

                    <tr>
                        <td>อีเมลล์</td>
                        <td><?php echo $objResult["email"];?></td>
                    </tr>

                    <tr>
                        <td>รหัสผ่าน</td>
                        <td><?php echo $objResult["pw"];?></td>
                    </tr>

                    <tr>
                        <td>บ้านเลขที่</td>
                        <td><?php echo $objResult["nbhome"];?></td>
                    </tr>

                    <tr>
                        <td>;จังหวัด</td>
                        <td><?php echo $objResult["province"];?></td>
                    </tr>

                    <tr>
                        <td>อำเภอ</td>
                        <td><?php echo $objResult["district"];?></td>
                    </tr>

                    <tr>
                        <td>ตำบล</td>
                        <td><?php echo $objResult["subdistrict"];?></td>
                    </tr>

                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td><?php echo $objResult["post"];?></td>
                    </tr>

                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td><?php echo $objResult["addressLocation"];?></td>
                    </tr>
                    
                </table>
                <button class="buttonConfirm" type="submit">แก้ไข</button>
            </form>
        </div>
    </body>
</html>