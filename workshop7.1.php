<?php include "connect.php" ?>
<html>
    <head><meta charset = "UTF-8"></head>
    <body>
        <form action = "workshop7.2.php" method="post">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            ชื่อ: <input type="tetx" name="name"><br>
            ที่อยู่:<br>
            <textarea name="address" cols="40" rows="3"></textarea><br>
            เบอร์โทรศัพท์: <input type="tel" name="mobile"><br>
            email: <input type="email" name="email"><br>
            <input type="submit" value="เพิ่มผู้ใช้">
        </form>
    </body>
</html>