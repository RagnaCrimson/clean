<?php
session_start();
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
        <div class="frame">
            <form method="get" action="ProfileEditSuccess.php">
                <img src="user.png" class="imgLogo">
                <h2>ข้อมูลส่วนตัว</h2>
                <table>
                    <tr>
                        <td>ชื่อผู้ใช้</td>
                        <td>
                            <input type="text" name="username" id="username" value="<?=$objResult['username'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td>
                            <input type="text" name="fullname" id="fullname" value="<?=$objResult['fullname'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>เบอร์โทร</td>
                        <td>
                            <input type="text" name="tel" id="tel" value="<?=$objResult['tel'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>อีเมลล์</td>
                        <td>
                            <input type="text" name="email" id="email" value="<?=$objResult['email'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>รหัสผ่าน</td>
                        <td>
                            <input type="text" name="pw" id="pw" value="<?=$objResult['pw'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>บ้านเลขที่</td>
                        <td>
                            <input type="text" name="nbhome" id="nbhome" value="<?=$objResult['nbhome'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td>
                            <input type="text" name="province" id="province" value="<?=$objResult['province'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>อำเภอ</td>
                        <td>
                            <input type="text" name="district" id="district" value="<?=$objResult['district'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>ตำบล</td>
                        <td>
                            <input type="text" name="subdistrict" id="subdistrict" value="<?=$objResult['subdistrict'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td>
                            <input type="text" name="post" id="post" value="<?=$objResult['post'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td>
                            <input type="text" name="addressLocation" id="addressLocation" value="<?=$objResult['addressLocation'];?>"/>
                        </td>
                    </tr>
                </table>
                <br><br>
                <button class="buttonConfirm" type="submit">ยืนยัน</button>
                <button class="buttonCancel" type="cancel" onclick="window.location='Profile.php';return false;">ยกเลิก</button>
            </form>
        </div>
    </body>
</html>