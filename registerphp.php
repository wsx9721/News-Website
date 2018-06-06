<?php
$servername = "localhost";
$username = "root";
$password = "";

if($_POST['Submit'] == "注册"){
    $user = $_POST["username"];
    $psw = $_POST["password"];
    $psw_confirm = $_POST["confirm"];
    if($user == "" || $psw == "" || $psw_confirm == "")
    {
        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
    }
    if ($psw == $psw_confirm) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=hahaha", $username, $password);
            $sql = "INSERT INTO USERS (user,password)
            VALUES ('$user', '$psw')";
            $conn->exec($sql);
        }
        catch(PDOException $e)
        {

        }
        echo "<script>alert('注册成功！'); history.go(-1);</script>";
        $conn = null;
    }
    else {
        echo "<script>alert('密码不一致！'); history.go(-1);</script>";
    }
}

 ?>
