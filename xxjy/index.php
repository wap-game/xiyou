<?php

header("Content-type: text/html; charset=utf-8");

error_reporting(E_ALL & ~E_NOTICE);
include("../class/iniclass.php");//调用iniclass文件
$wjid = $_GET['wjid'];//wjid = 用户id
$password = $_GET['pass'];//pass = 密码hash
if ($wjid != "" || $password != "") {
    //调用user.ini是否存在
    include("../ini/user_ini.php");
    $pass = ($iniFile->getItem('验证信息', '玩家验证'));
    if ($pass == $password && $password != "" && $pass != "") {
        $name = ($iniFile->getItem('验证信息', '玩家昵称'));
        $zcxx = "<font color=red>欢迎【" . $name . "】来到小轩娱乐游戏社区！！</font>";
        $xxjyurl = "?wjid=" . $wjid . "&&pass=" . $password;
    } else {
        $xxjyurl = "";
        $zcxx = "<a href='login.php'><font color=red>登录</font></a>" . "<font color=black>亲！你还没有登录哦</font><a href='regist.php'><font color=red>注册</font></a>";
        $zcxx = "<a href='login.php'>登录</a>";
    }
} else {
    $xxjyurl = "";
    $zcxx = "<a href='login.php'><font color=red>登录</font></a>" . "<font color=black>亲！你还没有登录哦</font><a href='regist.php'><font color=red>注册</font></a>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>小轩娱乐游戏社区</title>
    <link rel="shortcut icon" href="/images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/css/touchScreen/css.css"/>
    <link rel="stylesheet" type="text/css" href="/css/touchScreen/index.css"/>
    <link rel="stylesheet" type="text/css" href="/css/touchScreen/shuoshuoChildren.css"/>
    <script type="text/javascript" src='/js/touchScreen/iscroll.js'></script>
    <link id="colorStyle" rel="stylesheet" type="text/css" href="/css/touchScreen/1_colorStyle.css"/>
    <link rel="stylesheet" type="text/css" href="/touchNav/nav.css"/>
    <script type="text/javascript" src='/touchNav/nav.js'></script>
    <script type="text/javascript" src='/js/touchScreen/jq.js'></script>

    <style>
        .friend_right, .home_gd {
            width: 80%;
            right: 3%;
            text-align: left;
        }

        .index_friends {
            width: 94%;
        }

        .friend_name {
            width: 80%;
        }

        .but {
            right: 0;
        }

        .padding_box {
            padding: 2% 3%;
        }

        .friend_name {
            width: 100%;
        }

        .title .visit {
            float: left;
        }

        .title .friend_visit {
            float: left;
        }

        .tribe_list ul li:last-of-type {
            border-bottom: 0 none;
        }

        .logo {
            position: relative;
            top: -75px;
            padding: 5px 0;
        }

        .logo > div {
            z-index: 99999;
            position: absolute;
            width: 96px;
            height: 50px;
            line-height: 50px;
            right: 0;
            top: 5px;
            text-align: center;
        }

        .logo > div > span {
            color: #9e9e9e;
        }

        .shuoshuo_delete {
            margin-top: -38px;
        }

        .ss_delete_tips {
            text-align: left;
        }

        #wrapper {
            position: relative;
            top: 60px;
        }

        .nav_open {
            position: relative;
            height: 38px;
            width: 100%;
            top: -38px;
        }

        .wrap_open_down {
            position: absolute;
            top: 60px;
            float: right;
        }

        .wrap_open {
            position: relative;
            top: 60px;
        }

        .hidden {
            position: relative;
            top: 0;
        }

        .wrap_open_up {
            position: relative;
            float: right;
        }

        .voice {
            float: left;
            margin: 0 5px 5px 0;
            width: 80px;
            height: 25px;
            border: 1px solid #adcef7;
            border-radius: 6px;
            text-align: center;
            background: #adcef7;
            color: #ebf1fb;
        }

        .voice > span {
            color: #ebf1fb;
        }

        .voice > img {
            float: left;
            width: 20px !important;
        }

        .ec-imggif {
            display: none;
        }

        .ec-span {
            float: right;
            color: white;
            margin-top: 2px;
            margin-right: 10%;
        }


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

    <script type="text/javascript">
        var _speedMark = new Date();

        $(function () {
            var home = '/xxjy/index.php<?echo $xxjyurl;?>';
            var friend = '/xxjy/friendIndex.php<?echo $xxjyurl;?>';
            var family = '/xxjy/familyIndex.php<?echo $xxjyurl;?>';
            var bbs = '/xxjy/newIndex.php<?echo $xxjyurl;?>';
            var msgbox = '/xxjy/msgboxIndex.php<?echo $xxjyurl;?>';
            var game = '/xxjy/gameIndex.php<?echo $xxjyurl;?>';
            var spShare = '/xxjy/shareIndex.php<?echo $xxjyurl;?>';
            var customer = '/xxjy/customerIndex.php<?echo $xxjyurl;?>';
            var about = '/xxjy/aboutIndex.php<?echo $xxjyurl;?>';

            head(0, home, friend, family, bbs, msgbox, game, spShare, customer, about);


            function fun() {
                var height = $(".user_icon_rotate").innerHeight();
                var width = $(".user_icon_rotate").innerWidth();
                $(".user_icon_bg").height(height).width(width);
            }

            fun();
            $(window).resize(function () {
                fun();
            });
            $(".user_icon_rotate img").on("load", function () {
                fun();
                $(window).resize(function () {
                    fun();
                });
            })

            var buttons = $('.voice');
            for (var i = 0; i < buttons.length; i++) {

                buttons[i].onclick = function () {
                    /* var audio = document.getElementById("bgMusic"); */
                    var audioId = $(this).attr("i");
                    var audio = document.getElementById(audioId);
                    if (audio.paused) {
                        audio.play();

                        audio.onended = function () {
                            $('.ec-imggif').hide().next().show();
                            $(event.target).find('.ec-imggif').hide().next().show();
                        };

                        $('.ec-imggif').hide().next().show();
                        $(event.target).find('.ec-imggif').show().next().hide();
                        return;
                    }
                    ;


                    audio.pause();
                    audio.currentTime = 0;
                    $('.ec-imggif').hide().next().show();
                    $(event.target).find('.ec-imggif').hide().next().show();
                }
            }
            ;
        })
    </script>
</head>
<body>

<div class="logo font_l">
    <img src="/images/logo.gif" alt="">


    <div>


    </div>

</div>


<!--用户信息-->
<div class="bg_top ">
    <div class="title">
        <span class="font_lx">
<?
echo $zcxx;
?>
		
		</span>
    </div>
</div>

<!--热门游戏-->
<div class="bg_top ">
    <div class="title">
        <span class="font_lx">热门游戏</span>
    </div>


    <div class="play ">
        <div class="friend_list">
            <ul style="border:none" class="boder_radius del_radius">


                <li>
                    <div class="tx_icon left"><img src='/images/xxxy.gif'></div>
                    <div class="right friend_right">
                        <div class="left friend_name font_l">


                            <p class="overflow_p"><a href='/wapyx/xywap.php<? echo $xxjyurl; ?>' class="blue_a">小轩西游</a>&nbsp;&nbsp;2057409人在玩
                            </p>
                            <p class=" i_jia_list">古典神话网游，持神兵利器，降五爪金龙，携爱行走西游路……</p>


                        </div>


                    </div>
                </li>


            </ul>


            <div class="in_chat" style="width: 94%; margin: 0 auto;">
                <p class="font_l"><a href="/xxjy/friendIndex.php<? echo $xxjyurl; ?>"> 更多热门</a></p>

            </div>


        </div>


    </div>

</div>


<?
//调用xxzx.ini是否存在
include("../ini/xxzx_ini.php");

//ini文件名字
$inina = "xxzx.ini";
//路径
$path = '../acher';
//判断ini文件是否存在
$ininame = $path . "/" . $inina;
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下所有数据
$zxidd = ($iniFile->getCategory('咨询idd'));
$zxbt = ($iniFile->getCategory('咨询标题'));
foreach (array_keys($zxidd) as $key) {
    $keyzxidd[] = $zxidd[$key];
}
foreach (array_keys($zxbt) as $key) {
    $keyzxbt[] = $zxbt[$key];
}


$mmm = 0;
$mmm = count($keyzxidd, 0) - 1;

if ($mmm >= 1) {


    $tmp = "排序";
    $arr = $keyzxidd;
    foreach ($arr as $k => $v) {
        if ($tmp == $v) unset($arr[$k]);
    }

    $ltmax = max($arr);
    $ltmax1 = min($arr);
    $ltmax = $ltmax + 1 - $ltmax1;


    $ii = -1;

    for ($b = 0; $b < $mmm; $b++) {

        $ii = $ii + 1;
        $dtbt = $keyzxbt[$ltmax - $ii];

        $dtbtt = $dtbtt . "<img src='/images/hd_hot.gif'alt='' style='width: 19px;height: 19px;'>" . $dtbt . "</br>";

        if ($ii == 4) {

            break;
        }


    }

} else {
    $dtbtt = "";
}


?>


<!--小轩咨询-->
<div class="bg_top ">

    <div class="title">
        <span class="font_lx">小轩咨询</span>
    </div>


    <div class="padding_box font_l">


        <a href="/xxjy/shareIndex.php<? echo $xxjyurl; ?>"><font color=Violet><? echo $dtbtt; ?></font></a>


    </div>

    <div class="in_chat" style="width: 94%; margin: 0 auto;">

        <p class="font_l"><a href="/xxjy/shareIndex.php<? echo $xxjyurl; ?>"> 更多小轩咨询</a></p>
    </div>


</div>


<!--小轩咨询-->
<div class="bg_top ">

    <div class="title">
        <span class="font_lx">小轩趣图</span>
    </div>


    <div class="padding_box font_l">

        <p>


        </p>

        <img src="/pic/1.jpg" alt="">


    </div>

    <div class="in_chat" style="width: 94%; margin: 0 auto;">
        <p class="font_l"><a href="/xxjy/familyIndex.php<? echo $xxjyurl; ?>"> 更多小轩趣图</a></p>

    </div>


</div>


<!--小轩咨询-->
<div class="bg_top ">

    <div class="title">
        <span class="font_lx">小轩段子</span>
    </div>


    <div class="padding_box font_l">


        <a href="/xxjy/gameIndex.php<? echo $xxjyurl; ?>"> <font color=Violet>小轩家园段子建设中</font></a>


    </div>

    <div class="in_chat" style="width: 94%; margin: 0 auto;">
        <p class="font_l"><a href="/xxjy/gameIndex.php<? echo $xxjyurl; ?>"> 更多小轩段子</a></p>

    </div>


</div>


<?


//调用wjdt.ini是否存在
include("../ini/wjdt_ini.php");

//ini文件名字
$inina = "wjdt.ini";
//路径
$path = '../acher';
//判断ini文件是否存在
$ininame = $path . "/" . $inina;
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下所有数据
$ltpx = ($iniFile->getCategory('玩家排序'));
# 获取一个分类下所有数据
$ltwjtake = ($iniFile->getCategory('玩家发言'));
$b1 = ($iniFile->getCategory('年'));
$b2 = ($iniFile->getCategory('月'));
$b3 = ($iniFile->getCategory('日'));
$b4 = ($iniFile->getCategory('时'));
$b5 = ($iniFile->getCategory('分'));
$b6 = ($iniFile->getCategory('秒'));


foreach (array_keys($ltpx) as $key) {
    $keyltpx[] = $ltpx[$key];
}


foreach (array_keys($ltwjtake) as $key) {
    $keyltwjtake[] = $ltwjtake[$key];
}
foreach (array_keys($b1) as $key) {
    $keyb1[] = $b1[$key];
}
foreach (array_keys($b2) as $key) {
    $keyb2[] = $b2[$key];
}
foreach (array_keys($b3) as $key) {
    $keyb3[] = $b3[$key];
}

foreach (array_keys($b4) as $key) {
    $keyb4[] = $b4[$key];
}
foreach (array_keys($b5) as $key) {
    $keyb5[] = $b5[$key];
}
foreach (array_keys($b6) as $key) {
    $keyb6[] = $b6[$key];
}


$mmm = 0;
$mmm = count($keyltpx, 0) - 1;

if ($mmm >= 1) {


    $tmp = "排序";
    $arr = $keyltpx;
    foreach ($arr as $k => $v) {
        if ($tmp == $v) unset($arr[$k]);
    }

    $ltmax = max($arr);
    $ltmax1 = min($arr);
    $ltmax = $ltmax + 1 - $ltmax1;


    $ii = -1;

    for ($b = 0; $b < $mmm; $b++) {

        $ii = $ii + 1;
        $dt = $keyltwjtake[$ltmax - $ii];
        $dt1 = $keyb1[$ltmax - $ii];
        $dt2 = $keyb2[$ltmax - $ii];
        $dt3 = $keyb3[$ltmax - $ii];
        $dt4 = $keyb4[$ltmax - $ii];
        $dt5 = $keyb5[$ltmax - $ii];
        $dt6 = $keyb6[$ltmax - $ii];
        $zf = "";
        include("../wapyx/dtsj.php");
        $wjdt = $wjdt . $dt . "[" . $zf . "前]</br>";

        if ($ii == 5) {
            //删除多余的
            $mmm = $mmm - 6;
            $ltmax = min($arr);
            $ii = $ltmax - 1;

            for ($b = 0; $b < $mmm; $b++) {
                $ii = $ii + 1;
# 删除一个子项
                $iniFile->delItem('玩家发言', $ii);
                $xlhh = ($iniFile->getItem('玩家idd', $ii));
# 删除一个子项
                $iniFile->delItem('玩家排序', $xlhh);
                $iniFile->delItem('玩家idd', $ii);
                $iniFile->delItem('年', $ii);
                $iniFile->delItem('月', $ii);
                $iniFile->delItem('日', $ii);
                $iniFile->delItem('时', $ii);
                $iniFile->delItem('分', $ii);
                $iniFile->delItem('秒', $ii);


            }


            break;
        }


    }

} else {
    $wjdt = "暂无玩家动态</br>";
}


?>


<!--小轩咨询-->
<div class="bg_top ">

    <div class="title">
        <span class="font_lx">玩家动态</span>
    </div>


    <div class="padding_box font_l">


        <font color=Violet><? echo $wjdt; ?></font>


    </div>

    <div class="in_chat" style="width: 94%; margin: 0 auto;">


    </div>


</div>


</body>


</html>