<?php
$servername = "localhost";
$username = "root";
$password = "";

	if($_POST["submit"] == "登录")
	{
		$user = $_POST["username"];
		$psw = $_POST["password"];
		if($user == "" || $psw == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
            mysqli_connect("localhost","root","sixx");
			mysqli_select_db("HAHAHA");
			// $conn = new PDO("mysql:host=$servername;dbname=hahaha", $username, $password);
			mysqli_query("set names 'gbk'");
			$sql = "select two,three from GRADES where two = '$_POST[username]' and three = '$_POST[password]'";
			$result = mysqli_query($sql);
			$num = mysqli_num_rows($result);
			if($num)
			{
                $row = mysqli_fetch_array($result);
				// $row = $result->fetchAll();
				echo $row[0];
                echo "<script>alert('登录成功！');history.go(-1);</script>";
			}
			else
			{
				echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

?>
