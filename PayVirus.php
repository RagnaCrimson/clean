<?php
session_start();

$fullname3 = $_POST['fullname3'];
$cdate3 = $_POST['cdate3'];
$time3 = $_POST['time3'];
$duration3 = $_POST['duration3'];
$location3 = $_POST['location3'];
$nbhome3 = $_POST['nbhome3'];
$Province3 = $_POST['Province3'];
$VDis1 = $_POST['VDis1'];
$VDis2 = $_POST['VDis2'];
$post3 = $_POST['post3'];
$address3 = $_POST['address3'];
$accbank3 = "บัญชีธนาคาร";

$_SESSION['fullname3'] = $fullname3;
$_SESSION['cdate3'] = $cdate3;
$_SESSION['time3'] = $time3;
$_SESSION['duration3'] = $duration3;
$_SESSION['location3'] = $location3;
$_SESSION['nbhome3'] = $nbhome3;
$_SESSION['Province3'] = $Province3;
$_SESSION['VDis1'] = $VDis1;
$_SESSION['VDis2'] = $VDis2;
$_SESSION['post3'] = $post3;
$_SESSION['address3'] = $address3;
$_SESSION['accbank3'] = $accbank3;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PayVirus</title>
        <link rel="stylesheet" href="stylesClean.css">
    </head>

    <body>
        <div class="frame">
            <form action="History.php" method="post">
                <?php
                echo "<h2>ชำระเงิน</h2>";
                echo "<h3>ประเภท: บริการฆ่าเชื้อและไวรัส</h3>";
                echo "ชื่อ-นามสกุล: ",$fullname3;
                echo " | วัน: ",$cdate3;
                echo "<br><br>";
                echo "ระยะเวลา: ",$duration3;
                echo " | เวลา: ",$time3;
                echo "<br><br>";
                echo "สถานที่ใช้บริการทำความสะอาด: ",$location3;
                echo " | บ้านเลขที่: ",$nbhome3;
                echo " จังหวัด: ",$Province3;
                echo "<br><br>";
                echo "อำเภอ: ",$VDis1;
                echo " | ตำบล: ",$VDis2;
                echo "<br><br>";
                echo "รหัสไปรษณีย์: ",$post3;
                echo " | รายละเอียดที่อยู่: ",$address3;
                echo "<br><br>";
                echo "ชำระเงินโดย: ",$accbank3;
                echo "<br>";
                echo "รวมราคาสุทธิ: 1200";
                echo "<br>";
                echo "ภาษีมูลค่าเพิ่ม: ",1200*0.07;
                echo "<br>";
                echo "ราคารวมภาษีมูลค่าเพิ่ม: ",1200+1200*0.07;    
                ?>
                <br><br>
                <button class="buttonConfirm" type="submit">ตกลง</button>
                <a class="buttonCancel" href="index.html">ยกเลิก</a>
            </form>
        </div>
    </body>
</html>