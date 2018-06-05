
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>晴空新闻注册</title>
        <style media="screen">
            .register {
                text-align: center;
            }
            .register input {
                height: 25px;
                width: 150px;
            }
            .words {
                font-size: 32px;
            }
            .register a {
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="register">
            <form class="" action="registerphp.php" method="POST">
                <br>
                <br>
                <br>
                <br>
                <div class="words">
                    欢迎来到晴空新闻
                </div>
                <br><br>
                <input type="text" name="username" value="" placeholder="用户名">
                <br><br>
                <input type="password" name="password" value="" placeholder="请输入密码">
                <br><br>
                <input type="password" name="confirm" value="" placeholder="请再次输入密码">
                <br><br>
                <input type="Submit" name="Submit" value="注册">
                <!-- <button type="Submit" name="Submit">注册</button> -->
                <br><br>
                <a href="News-Website.php">点按以返回主页面</a>
            </form>
        </div>
    </body>
</html>
