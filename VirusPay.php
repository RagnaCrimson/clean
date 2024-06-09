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
            <form method="get" action="VirusPaySuccess.php">
                <table>
                <h2 style="text-align: center;">ชำระเงิน</h2>
                <h3>ประเภท: บริการฆ่าเชื้อและไวรัส</h3>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><input type="text" name="v_Fullname" id="v_Fullname" value="<?="$_GET[v_Fullname]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>วัน</td>
                        <td><input type="date" name="v_Date" id="v_Date" value="<?="$_GET[v_Date]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>เวลา</td>
                        <td><input type="time" name="v_Time" id="v_Time" value="<?="$_GET[v_Time]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ระยะเวลา(ชั่วโมง)</td>
                        <td><input type="text" name="v_Duration" id="v_Duration" value="<?="$_GET[v_Duration]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>สถานที่ใช้บริการ</td>
                        <td><input type="text" name="v_Location" id="v_Location" value="<?="$_GET[v_Location]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>บ้านเลขที่</td>
                        <td><input type="text" name="v_nbHome" id="v_nbHome" value="<?="$_GET[v_nbHome]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td><input type="text" name="v_Province" id="v_Province" value="<?="$_GET[v_Province]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>อำเภอ</td>
                        <td><input type="text" name="v_District" id="v_District" value="<?="$_GET[v_District]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ตำบล</td>
                        <td><input type="text" name="v_SubDistrict" id="v_SubDistrict" value="<?="$_GET[v_SubDistrict]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td><input type="text" name="v_Post" id="v_Post" value="<?="$_GET[v_Post]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td><input type="text" name="v_Address" id="v_Address" value="<?="$_GET[v_Address]";?>" readonly="readonly"/></td>
                    </tr>
                </table>
                <table>
                    <hr>
                    <tr>
                        <td>ชำระเงินโดย</td>
                        <td><input type="text" name="v_Pay" id="v_Pay" value="<?="$_GET[v_Pay]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รวมราคาสุทธิ</td>
                        <?php $price = 1200*$_GET["v_Duration"]?>
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
                        <td><input type="text" name="v_Price" id="v_Price" value="<?="$total";?>" readonly="readonly"/></td>
                    </tr>
                </table>
                <br>
                <button class="buttonConfirm" type="submit">ตกลง</button>
                <a class="buttonCancel" href="index.php">ยกเลิก</a>
            </form>
        </div>
    </body>
</html>