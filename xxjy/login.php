<?
header("Content-type: text/html; charset=utf-8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>小轩游戏社区-登录</title>

    <link rel="stylesheet" href="../css/touchScreen/mobile.css"/>
    <link rel="stylesheet" href="../css/touchScreen/ch5game.css"/>
    <link rel="stylesheet" href="../css/touchScreen/ccolorbutton.css"/>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon"/>
    <style>

        #search {
            width: 235px;
            height: 32px;
            border-radius: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            background-color: transparent;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        #search1 {
            width: 82px;
            height: 38px;
            background: #0086DB;
            border: 0;
            border-radius: 10px;
            margin-top: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input:focus {
            border-color: #66AFE9 !important;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
        }

        ::-webkit-input-placeholder {
            text-indent: 20px;
            font-size: 16px;
        }

        ::-moz-input-placeholder {
            text-indent: 20px;
            font-size: 16px;
        }


    </style>
</head>
<body>


<?php

$user = 0;
error_reporting(E_ALL & ~E_NOTICE);
//输入用户名密码的判断
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    //连接数据库
    include("../sql/mysql.php");//调用数据库连接
    mysql_query("set names utf8");
    $sql = mysql_query("select uid,password,name from o_user_list where username='$username'", $conn);
    $info1 = @mysql_fetch_array($sql);
    $pass1 = $info1[password];
    $uid = $info1[uid];
    $pass = md5($_POST['password'] . 'ALL_PS');
    $name = $info1[name];
    //$ps = $us ? md5($_POST['password'].'ALL_PS' ) == $row['password'] : 'FALSE';

    if ($pass != "" || $pass1 != "") {

    } else {
        $pass = 1;
    }

    if ($pass == $pass1) {
        //玩家ini
        $wjid = $uid + 10000000;

        //写入本地ini缓存
        include("../class/iniclass.php");//调用iniclass文件
        //调用user.ini是否存在
        include("../ini/user1_ini.php");
        //成功登录游戏
        //拼接网址
        include("../url/url.php");

        //跳转首页
        $xyurl = "http://" . $xxjyurl . "/xxjy/xxjyindex.php?wjid=$wjid&&pass=$pass1";

        echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$xyurl'>";
    } else {
        $user = 1;
    }
}

if ($user == 1) {
    $zcxx = "<font color=red>用户名或密码错误</font>" . "<br>";
} else {

}

?>


<div class="g-hd f-cb">

    <img src="../images/logo1.jpg" alt="">

    <div align="right">
        <div style="margin-right: 10px;" class="m-icon-list">
            <br/>

        </div>
    </div>
</div>
<div class="g-mn">
    <div class="m-box">
        <div class="m-box-hd" style="margin-left: 3%;">
            <div class="tt">
                <? echo $zcxx; ?><br>
                请输入你的账号和密码
            </div>
        </div>
        <div class="m-box-mn" style="padding: 5px 10px 0px 10px;">


            <form action="login.php" method="POST">
                账号：<input type="text" name="username" placeholder="请输入你的账号" id='search'><br>
                密码：<input type="password" name="password" placeholder="请输入你的密码" id='search'><br>
                <input type="submit" name="submit" value="登录" id="search1"><br>
            </form>


            <br>
            <a href='/xxjy/regist.php'><font color=blue>注册账号</font></a>
            <font color=black>|</font>
            <a href='/xxjy/xxjyxg.php'><font color=blue>修改密码</font></a>
            <font color=black>|</font>
            <a href='/xxjy/xxjywj.php'><font color=blue>忘记密码</font></a>
            <br>
            <br>
            <br>


            <div class="article-content" style="font-size: 15px;margin-top: 10px;">

            </div>
        </div>
    </div>
</div>
<div class="g-ft f-cb">

    <div class="f-fr"><a href="../index.php" class="to-top">返回官网</a><br/></div>


</div>

<div style="min-height: 80px;">


</div>
</body>


</html>




