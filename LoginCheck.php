<html>
    <head>
        <meta charset="UTF-8">
        <title>Users Login</title>
        <link rel="stylesheet" href="stylesMain.css">
    </head>

    <div class="frame" style="margin-top: 20%">
        <?php
        session_start();
        $objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
        $db = mysqli_select_db($objConnect, "DBClean");
        mysqli_query($objConnect, "SET NAMES utf8");

        if($objConnect->connect_error) {
            die("Connection failed". $conn->connect_error);
        }

        $username = mysqli_real_escape_string($objConnect, $_POST['username']);
        $password = mysqli_real_escape_string($objConnect, $_POST['password']);

        $strSQL = "SELECT * FROM users WHERE username = '$username' and pw = '$password'";
        $objQuery = mysqli_query($objConnect, $strSQL);
        $objResult = mysqli_fetch_array($objQuery);

        if(!$objResult) {
            echo "<center>ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!</center>";
            echo "<br><br>";
        } else {
            $_SESSION["username"] = $objResult["username"];
            header("location: Profile.php");
            session_write_close();
        }
        ?>
        <center><a class="buttonConfirm" href='Login.php'>กลับหน้าเข้าสู่ระบบ</a></center>
    </div>
</html>