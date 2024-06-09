<?php
session_start();
$objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
$db = mysqli_select_db($objConnect, "DBClean");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$strSQL = "SELECT * FROM Virus";
$objQuery = mysqli_query($objConnect, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Virus</title>
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

        <div class="frame">
            <form method="get" action="VirusPay.php">
                <table>
                <h2 style="text-align: center;">บริการฆ่าเชื้อและไวรัส</h2>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><input type="text" name="v_Fullname" id="v_Fullname" size="25" required placeholder="Fullname"></td>
                    </tr>
                    <tr>
                        <td>วัน</td>
                        <td><input type="Date" name="v_Date" id="v_Date" required></td>
                    </tr>
                    <tr>
                        <td>เวลา</td>
                        <td><input type="time" name="v_Time" id="v_Time" required></td>
                    </tr>
                    <tr>
                        <td>ระยะเวลา(ชั่วโมง)</td>
                        <td><input type="text" name="v_Duration" id="v_Duration" required placeholder="Duration"></td>
                    </tr>
                    <tr>
                        <td>สถานที่ใช้บริการทำความสะอาด</td>
                        <td><input type="text" name="v_Location" id="v_Location"></td>
                    </tr>
                    <tr>
                        <td>บ้านเลขที่</td>
                        <td><input type="text" name="v_nbHome" id="v_nbHome"></td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td><input type="text" name="v_Province" id="v_Province"></td>
                    </tr>
                    <tr>
                        <td>อำเภอ</td>
                        <td><input type="text" name="v_District" id="v_District"></td>
                    </tr>
                    <tr>
                        <td>ตำบล</td>
                        <td><input type="text" name="v_SubDistrict" id="v_SubDistrict"></td>
                    </tr>
                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td><input type="text" name="v_Post" id="v_Post"></td>
                    </tr>
                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td><input type="text" name="v_Address" id="v_Address"></td>
                    </tr>
                    <tr>
                        <td>ชำระเงินโดย</td>
                        <td><select id="v_Pay" name="cv_Pay">
                            <option value="บัญชีธนาคาร">บัญชีธนาคาร</option>
                            <option value="บัตรเครดิต">บัตรเครดิต</option>
                            <option value="บัตรเดบิต">บัตรเดบิต</option>
                        </select><td>
                    </tr>
                </table>
                <br>
                <button class="buttonConfirm" type="submit">ตกลง</button>
                <a class="buttonCancel" href="index.php">ยกเลิก</a>
            </form>
        </div>
    </body>
</html>