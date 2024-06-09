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
            <form method="get" action="CleanPaySuccess.php">
                <table>
                <h2 style="text-align: center;">ชำระเงิน</h2>
                <h3>ประเภท: ทำความสะอาดทั่วไป</h3>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><input type="text" name="c_Fullname" id="c_Fullname" value="<?="$_GET[c_Fullname]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>วัน</td>
                        <td><input type="date" name="c_Date" id="c_Date" value="<?="$_GET[c_Date]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>เวลา</td>
                        <td><input type="time" name="c_Time" id="c_Time" value="<?="$_GET[c_Time]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ระยะเวลา(ชั่วโมง)</td>
                        <td><input type="text" name="c_Duration" id="c_Duration" value="<?="$_GET[c_Duration]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>สถานที่ใช้บริการ</td>
                        <td><input type="text" name="c_Location" id="c_Location" value="<?="$_GET[c_Location]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>บ้านเลขที่</td>
                        <td><input type="text" name="c_nbHome" id="c_nbHome" value="<?="$_GET[c_nbHome]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td><input type="text" name="c_Province" id="c_Province" value="<?="$_GET[c_Province]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>อำเภอ</td>
                        <td><input type="text" name="c_District" id="c_District" value="<?="$_GET[c_District]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ตำบล</td>
                        <td><input type="text" name="c_SubDistrict" id="c_SubDistrict" value="<?="$_GET[c_SubDistrict]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td><input type="text" name="c_Post" id="c_Post" value="<?="$_GET[c_Post]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td><input type="text" name="c_Address" id="c_Address" value="<?="$_GET[c_Address]";?>" readonly="readonly"/></td>
                    </tr>
                </table>
                <table>
                    <hr>
                    <tr>
                        <td>ชำระเงินโดย</td>
                        <td><input type="text" name="c_Pay" id="c_Pay" value="<?="$_GET[c_Pay]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รวมราคาสุทธิ</td>
                        <?php $price = 500*$_GET["c_Duration"]?>
                        <td><input type="text" name="" id="" value="<?="$price";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ภาษีมูลค่าเพิ่ม(7%)</td>
                        <?php $vat = $price*0.07;?>
                        <td><input type="text" name="" id="" value="<?="$vat";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ราคารวมภาษีมูลค่าเพิ่ม</td>
                        <?php $total = $price+$vat;?>
                        <td><input type="text" name="c_Price" id="c_Price" value="<?="$total";?>" readonly="readonly"/></td>
                    </tr>
                </table>
                <br>
                <button class="buttonConfirm" type="submit">ตกลง</button>
                <a class="buttonCancel" href="index.php">ยกเลิก</a>
            </form>
        </div>
    </body>
</html>