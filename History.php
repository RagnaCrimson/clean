<?php
session_start();
$objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
$db = mysqli_select_db($objConnect, "DBClean");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$strSQL_Clean = "SELECT * FROM Clean";
$objQuery = mysqli_query($objConnect, $strSQL_Clean);
$objResult = mysqli_fetch_array($objQuery);
$resultClean = $objConnect->query($strSQL_Clean);

$strSQL_Virus = "SELECT * FROM Virus";
$objQuery = mysqli_query($objConnect, $strSQL_Virus);
$objResult = mysqli_fetch_array($objQuery);
$resultVirus = $objConnect->query($strSQL_Virus);
?>

<html>
    <head class="navbar">
        <meta charset="UTF-8">
        <title>History</title>
        <link rel="stylesheet" href="styHis.css">
    </head>

    <body>
        <div class="navbar">
            <img src="clean.jpg" width="3%" style="float: left; padding-left: 8">
            <a href="index.php">หน้าหลัก</a>
            <a href="Profile.php">โปรไฟล์</a>
            <a class="active" href="History.php">ดูรายการ</a>
            <a class="buttonExit" href="logout.php" style="float: right;">ออกจากระบบ</a>
        </div>
        <div class="frame">
            <h1>ทำความสะอาดทั่วไป</h1>
            <table>
            <?php
            if ($resultClean->num_rows > 0) {
                ?>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>วัน</th>
                    <th>ระยะเวลา</th>
                    <th>เวลา</th>
                    <th>สถานที่</th>
                    <th>บ้านเลขที่</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>รายละเอียดที่อยู่</th>
                    <th>ราคา</th>
                </tr>

                <tr>
                <?php
                while($row = $resultClean->fetch_assoc()) {
                    ?>
                    <td><?php echo $row["c_ID"]?></td>
                    <td><?php echo $row["c_Fullname"]?></td>
                    <td><?php echo $row["c_Date"]?></td>
                    <td><?php echo $row["c_Time"]?></td>
                    <td><?php echo $row["c_Duration"]?></td>
                    <td><?php echo $row["c_Location"]?></td>
                    <td><?php echo $row["c_nbHome"]?></td>
                    <td><?php echo $row["c_Province"]?></td>
                    <td><?php echo $row["c_District"]?></td>
                    <td><?php echo $row["c_SubDistrict"]?></td>
                    <td><?php echo $row["c_Post"]?></td>
                    <td><?php echo $row["c_Address"]?></td>
                    <td><?php echo $row["c_Price"]?></td>   
                    <tr><br>
                <?php
                }
            } else {
                echo "ไม่มีข้อมูลรายการ";
            } 
            ?>
            </table>
        </div>

        <br>

        <div class="frame">
            <h1>บริการฆ่าเชื้อและไวรัส</h1>
            <table>
            <?php
            if ($resultVirus->num_rows > 0) {
                ?>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>วัน</th>
                    <th>ระยะเวลา</th>
                    <th>เวลา</th>
                    <th>สถานที่</th>
                    <th>บ้านเลขที่</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>รายละเอียดที่อยู่</th>
                    <th>ราคา</th>
                </tr>
                
                <tr>
                <?php
                while($row = $resultVirus->fetch_assoc()) {
                    ?>
                    <td><?php echo $row["v_ID"]?></td>
                    <td><?php echo $row["v_Fullname"]?></td>
                    <td><?php echo $row["v_Date"]?></td>
                    <td><?php echo $row["v_Time"]?></td>
                    <td><?php echo $row["v_Duration"]?></td>
                    <td><?php echo $row["v_Location"]?></td>
                    <td><?php echo $row["v_nbHome"]?></td>
                    <td><?php echo $row["v_Province"]?></td>
                    <td><?php echo $row["v_District"]?></td>
                    <td><?php echo $row["v_SubDistrict"]?></td>
                    <td><?php echo $row["v_Post"]?></td>
                    <td><?php echo $row["v_Address"]?></td>
                    <td><?php echo $row["v_Price"]?></td>   
                    <tr><br>
                <?php
                }
            } else {
                echo "ไม่มีข้อมูลรายการ";
            } 
            ?>
            </table>
        </div>
    </body>
</html>