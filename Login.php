<html>
    <head>
        <meta charset="UTF-8">
        <title>Users Login</title>
        <link rel="stylesheet" href="stylesMain.css">
    </head>

    <body>
        <div class="frame">
            <h2>เข้าสู่ระบบผู้ใช้ทั่วไป</h2>
            <img src="user.png" width="20%"><br><br>
            <form name="formLogin"  method="post" action="LoginCheck.php">
                <label>ชื่อผู้ใช้</label><br>
                    <input type="text" name="username" id="username" size="25" required placeholder="Username"><br><br>
                <label>รหัสผ่าน</label><br>
                    <input type="password" name="password" id="password" size="25" required placeholder="Password"><br><br>
                <button class="buttonConfirm" type="submit">เข้าสู่ระบบ</button>
            </form>
            <a class="buttonRegister" href="Register.php">ลงทะเบียน</a>
        </div>
    </body>
</html>