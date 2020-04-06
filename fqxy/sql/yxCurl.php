<?php
ini_set("error_reporting", "E_ALL & ~E_NOTICE");//防止报错代码
//打印获得的数据
$arguments = file_get_contents('php://input');
$arguments_arr = explode("|", $arguments);
foreach ($arguments_arr as $val) {
    $a[] = $val;
}

$yxhe = $a[0];
$wjid = $a[1];
$xxjy_pass = $a[2];
$xxjy_qy = $a[3];

//合法信息
if ($yxhe == 2) {
    //生成社区玩家在此游戏的id和验证
    $qy = 1;

    include("../class/iniclass.php");//调用iniclass文件
    //o_user_list中查询是否存在，返回是否合法，合法2，不合法1
    include("../ini/yxuser_ini.php");

    //include("/mysql.php");//调用数据库连接
    //$sqid=$wjid."_".$qy;
    //$q2="o_user_list";
    //$sql=mysql_query("select password from $q2 where sqid='$sqid'",$conn);
    //$info1=@mysql_fetch_array($sql);
    //$pass=$info1[password];

    //社区验证游戏

    //验证成功是合法的信息
    if ($hf == 2) {
        $pass = ($iniFile->getItem('验证信息', '玩家验证'));
    } else {

    }

    if ($pass == $xxjy_pass && $xxjy_pass != "" && $pass != "") {
        //存在用户的信息

        $wjid = $wjini;

        include("../ini/xuser_ini.php");

        # 获取一个分类下某个子项的值
        $uwjid = ($iniFile->getItem('验证信息', '玩家id'));
        $a10 = ($iniFile->getItem('验证信息', '玩家游戏码'));

        $img = 'pic/login/1.jpg';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<font color=black>---------------------------</font>" . "<br>";
        echo "<font color=black>请将此页面存为书签,方便下次访问</font>" . "<br>";
        echo "<font color=red>特别提示:为了你的账号安全请不要将书签发给任何人,如有遗失后果自负</font>" . "<br>";
        echo "<br>";
        echo "<br>";
        echo "<font color=red>王者绝非偶然,实力打造非凡</font>" . "<br>";
        echo "<font color=red>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspby:小轩</font>" . "<br>";
        echo "<font color=black>---------------------------</font>" . "<br>";
        echo "<a href='./xy.php?uid=$wjini&&cmd=$kcmid&&sid=$ka1'><font color=blue>【开启游戏之旅】</font></a>" . "<br>";

    } else {
        //不存在用户的信息

        //检测uid是否存在如果存在整么社区号修改过密码需要重新更新游戏数据
        if ($uid != "") {
            //更改密码后的操作
            $zcxx1 = "小轩娱乐温馨提醒（由于小轩一站式通行证进行过修改数据验证已同步至游戏，重新登录下即可）";
            include("mysql.php");//调用数据库连接
            $q2 = "o_user_list";
            $strsql = "update $q2 set password='$xxjy_pass' where sqid='$sqid'";//物品id号必改值
            $result = mysql_query($strsql);

            $inina = "yxuser.ini";
            //路径
            $path = '../ache/' . $wjini;
            //判断ini文件是否存在
            $ininame = $path . "/" . $inina;
            # 实例化ini文件操作类，并载入 .ini文件
            $iniFile = new iniFile($ininame);

            //更新缓存数据
            unlink($ininame); //删除文件
            //更新缓存数据

            include("../xxjyindex.php");

            //检测uid是否存在如果存在整么社区号修改过密码需要重新更新游戏数据
        } else {
            //游戏无数据添加新数据
            //todo 这里是注册同步数据之后跳转的页面，出现跳转链接问题

            include("../xxsql/xxsql.php");

            include("../xxjyindex5.php");
        }
    }
} else {
    //验证失败不是合法的信息	（被人为的修改过网页传递信息等等）
    include("../xxjyindex.php");
}

?>