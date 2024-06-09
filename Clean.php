<?php
session_start();
$objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
$db = mysqli_select_db($objConnect, "DBClean");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$strSQL = "SELECT * FROM Clean";
$objQuery = mysqli_query($objConnect, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clean</title>
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
            <form method="get" action="CleanPay.php">
                <table>
                <h2 style="text-align: center;">ทำความสะอาดทั่วไป</h2>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><input type="text" name="c_Fullname" id="c_Fullname" size="25" required placeholder="Fullname"></td>
                    </tr>
                    <tr>
                        <td>วัน</td>
                        <td><input type="Date" name="c_Date" id="c_Date" required></td>
                    </tr>
                    <tr>
                        <td>เวลา</td>
                        <td><input type="time" name="c_Time" id="c_Time" required></td>
                    </tr>
                    <tr>
                        <td>ระยะเวลา(ชั่วโมง)</td>
                        <td><input type="text" name="c_Duration" id="c_Duration" required placeholder="Duration"></td>
                    </tr>
                    <tr>
                        <td>สถานที่ใช้บริการทำความสะอาด</td>
                        <td><input type="text" name="c_Location" id="C_Location"></td>
                    </tr>
                    <tr>
                        <td>บ้านเลขที่</td>
                        <td><input type="text" name="c_nbHome" id="c_nbHome"></td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td><input type="text" name="c_Province" id="c_Province"></td>
                    </tr>
                    <tr>
                        <td>อำเภอ</td>
                        <td><input type="text" name="c_District" id="c_District"></td>
                    </tr>
                    <tr>
                        <td>ตำบล</td>
                        <td><input type="text" name="c_SubDistrict" id="c_SubDistrict"></td>
                    </tr>
                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td><input type="text" name="c_Post" id="c_Post"></td>
                    </tr>
                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td><input type="text" name="c_Address" id="c_Address"></td>
                    </tr>
                    <tr>
                        <td>ชำระเงินโดย</td>
                        <td><select id="c_Pay" name="c_Pay">
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