<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="stylesMain.css">
    </head>

    <body>
        <div class="frame">
            <form method="get" action="RegisterSuccess.php">
                <h2>สมัครสมาชิกผู้ใช้งาน</h2>
                <table>
                    <tr>
                        <td>ชื่อผู้ใช้</td>
                        <td><input type="text" name="username" id="username" size="25" required placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><input type="text" name="fullname" id="fullname" size="25" required placeholder="Fullname"></td>
                    </tr>
                    <tr>
                        <td>เบอร์โทร</td>
                        <td><input type="tel" name="tel" id="tel" size="25" required placeholder="Tel"></td>
                    </tr> 
                    <tr>
                        <td>อีเมลล์</td>
                        <td><input type="email" name="email" id="email" size="25" required placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td>รหัสผ่าน</td>
                        <td><input type="password" name="password" id="password" size="25" required placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td>บ้านเลขที่</td>
                        <td><input type="text" name="nbhome" id="nbhome" size="25" placeholder="House Number"></td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td><input type="text" name="province" id="province" size="25" placeholder="Province"></td>
                    </tr>
                    <tr>
                        <td>อำเภอ</td>
                        <td><input type="text" name="district" id="district" size="25" placeholder="District"></td>
                    </tr>
                    <tr>
                        <td>ตำบล</td>
                        <td><input type="text" name="subdistrict" id="subdistrict" size="25" placeholder="Sub-District"></td>
                    </tr>
                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td><input type="text" name="post" id="post" size="25" placeholder="Post"></td>
                    </tr>
                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td><input type="text" name="address" id="address" size="25" placeholder="Address"></td>
                    </tr>
                </table>
                <br>
                <button class="buttonConfirm" type="submit">สมัครสมาชิก</button>
                <a class="buttonCancel" href="main.html">ยกเลิก</a>
            </form>
        </div>
    </body>
</html>