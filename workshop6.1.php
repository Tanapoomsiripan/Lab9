<?php include "connect.php" ?>

<html>
<head><meta charset="utf-8">
</head>
<body>
    
    <?php
        $stmt = $pdo->prepare("SELECT *FROM member");
        $stmt->execute();
    
    while($row = $stmt->fetch()) { 
    ?>      
            <?php echo "ชื่อ " .$row["name"]."<br>"; ?>
            <?php echo "ที่อยู่ " .$row["address"]."<br>"; ?>
            <?php echo "อีเมล์ " .$row["email"]."<br>"; ?>
            <a href="editform.php?username=<?php echo $row["username"]; ?>">แก้ไข</a>
            <a href="deleteDatauser.php?username=<?php echo $row["username"]; ?>">ลบ</a>
            <hr>
    <?php } ?>
    

</body>
</html>