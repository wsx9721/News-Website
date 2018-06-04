<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>晴空新闻</title>
        <style media="screen">
            .guide {
                position: absolute;
                top:0;
                background-color: #484848;
                width: 100%;
                height: 50px;
                color: white;
            }
            .weather {
                font-size: 18px;
            }
            .report {
                position: absolute;
                top: 1%;
                right: 4%;
            }
            .report a {
                color: white;
            }
            .logo {
                position: absolute;
                left: 10%;
                top: 8%;
            }
            .logo div {
                float: left;
            }
            .logo_picture {
                height:80px;
                width: 80px;
            }
            .left_list {
                position: absolute;
                left: 12%;
                top: 20%;
            }
            .left_list li {
                list-style-type: none;
                font-size: 24px;
                height: 50px;
                width: 100px;
                text-align: center;
                border-radius:5px;
            }
            .left_list li:hover {
                background-color: orange;
                color: white;
            }
            .news {
                position: absolute;
                left: 40%;
                top: 20%;
                font-size: 50px;
            }
            .main {
                position: absolute;
                left: 29%;
                top: 22%;
            }
            .main div {
                display: none;
            }
            .main .show {
                display: block;
            }
            .search {
                position: absolute;
                right: 15%;
                top: 8%;
            }
            .search_box {
                height: 25px;
                width: 150px;
                border-radius:5px;
            }
            .search_button {
                height: 25px;
                border-radius:5px;
            }
            .login_and_register {
                position: absolute;
                right: 15%;
                top: 15%;
                height: 200px;
                width: 200px;
                border: 1px solid grey;
                box-shadow: 1px 1px 5px 5px #E8E8E8 inset;
            }
            .username_input {
                height: 25px;
                width: 150px;
                border-radius:5px;
                margin-left: 25px;
                margin-top: 30px;
            }
            .password_input {
                height: 25px;
                width: 150px;
                border-radius:5px;
                margin-left: 25px;
                margin-top: 30px;
            }
            .login_and_register a {
                color: black;
                text-decoration: none;
            }
            .login_input {
                margin-left: 50px;
                width: 37px;
                height: 20px;
            }
            .advertisement {
                position: absolute;
                right: 15%;
                top: 45%;
            }
            .advertisement img {
                height: 200px;
                width: 200px;
            }
            .bottom {
                position: absolute;
                bottom: 0;
                left: 39%;
            }
        </style>
    </head>
    <body>
        <div class="guide">
            <div class="weather">
                <pre>天气：晴  30°/22°</pre>
            </div>
            <div class="report">
                <h4>
                    <a href="">反馈</a>
                </h4>
            </div>
        </div>
        <div class="logo">
            <div class="">
                <img src="logo.png" alt="" class="logo_picture">
            </div>
            <div class="">
                <h1>晴空新闻</h1>
            </div>
        </div>
        <div class="left_list">
            <ul>
                <li id="tab1" onclick="changeTab(this.id)" class="selected">推荐</li>
                <li id="tab2" onclick="changeTab(this.id)">热点</li>
                <li id="tab3" onclick="changeTab(this.id)">科技</li>
                <li id="tab4" onclick="changeTab(this.id)">娱乐</li>
                <li id="tab5" onclick="changeTab(this.id)">游戏</li>
                <li id="tab6" onclick="changeTab(this.id)">更多</li>
            </ul>
        </div>
        <span class="main">
            <div id="c1" class="show">
                这里是推荐新闻
            </div>
            <div id="c2" class="">
                这里是热点新闻
            </div>
            <div id="c3" class="">
                这里是科技新闻
            </div>
            <div id="c4" class="">
                这里是娱乐新闻
            </div>
            <div id="c5" class="">
                这里是游戏新闻
            </div>
            <div id="c6" class="">
                更多
            </div>
        </span>
        <div class="search">
            <input type="text" name="" value="" placeholder="请输入要查找的内容" class="search_box">
            <button type="button" name="button" class="search_button">查找</button>
        </div>
        <div class="login_and_register">
            <form class="" action="login.php" method="POST">
                <input type="text" name="username" value="" placeholder="请输入账号" class="username_input">
                <br/>
                <input type="password" name="password" value="" placeholder="请输入密码" class="password_input">
                <br/><br/>
                <input type="submit" name="submit" value="登录" class="login_input">
                <a href="file:///Users/wsx9721/Documents/News-Website/register.html"><button type="button" name="button">注册</button></a>
                <!-- <button type="submit" name="submit" class="login_button">登录</button> -->
            </form>
        </div>
        <div class="advertisement">
            <a href="http://app.tanwan.com/htmlcode/17443.html"><img src="game_advertisement.gif" alt=""></a>
        </div>
        <div class="bottom">
            <h5>Copyright (c) 2018 Copyright Holder All Rights Reserved.</h5>
        </div>
    </body>

    <script type="text/javascript">
    var tabs = [
        {
            tabId: 'tab1',
            contentId: 'c1'
        },
        {
            tabId: 'tab2',
            contentId: 'c2'
        },
        {
            tabId: 'tab3',
            contentId: 'c3'
        },
        {
            tabId: 'tab4',
            contentId: 'c4'
        },
        {
            tabId: 'tab5',
            contentId: 'c5'
        },
        {
            tabId: 'tab6',
            contentId: 'c6'
        }
    ]

    function changeTab(id) {
        for (var i of tabs) {
            if (i.tabId === id) {
                document.getElementById(i.tabId).className = 'selected'
                document.getElementById(i.contentId).className = 'show'
            } else {
                document.getElementById(i.tabId).className = ''
                document.getElementById(i.contentId).className = ''
            }
        }
    }
    </script>
</html>
