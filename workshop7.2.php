<?php include "connect.php" ?>

<?php
    $stmt = $pdo->prepare("INSERT INTO member(username,password,name,address,mobile,email) VALUE(?,?,?,?,?,?)");
    $stmt->bindParam(1,$_POST["username"]);
    $stmt->bindParam(2,$_POST["password"]);
    $stmt->bindParam(3,$_POST["name"]);
    $stmt->bindParam(4,$_POST["address"]);
    $stmt->bindParam(5,$_POST["mobile"]);
    $stmt->bindParam(6,$_POST["email"]);
    $stmt->execute();
    
    $pid = $pdo->lastInsertId();
    header("location:workshop6.1.php");
?>
