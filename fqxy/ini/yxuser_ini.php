<?php

//连接数据库
include("../sql/mysql.php");//调用数据库连接

$sqid = $wjid . "_" . $xxjy_qy;
$q2 = "o_user_list";
$sql = mysql_query("select uid,password from $q2 where sqid='$sqid'", $conn);
$info1 = @mysql_fetch_array($sql);
$uid = $info1[uid];
$pass1 = $info1[password];

//游戏服id
if ($xxjy_qy == 1) {
    $wjini = $uid + 10000000;
} elseif ($xxjy_qy == 2) {
    $wjini = $uid + 10000000;
} elseif ($xxjy_qy == 3) {
    $wjini = $uid + 10000000;
} elseif ($xxjy_qy == 4) {
    $wjini = $uid + 10000000;
} else {
    $uid = "";
}

if ($uid != "") {
    $inina = "yxuser.ini";
    $path = '../ache/' . $wjini;
    $file = $path . "/" . $inina;
    if (file_exists($file)) {
        $hf = 2;
    } else {
        //ini文件名字
        $inina = "yxuser.ini";
        //判断文件夹是否存在
        //路径
        $path = '../ache/' . $wjini;
        $dir = iconv("UTF-8", "GBK", "$path");
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        } else {

        }

        if ($uid != "") {
            $hf = 2;
            file_put_contents($file, "[玩家信息]");
            # 实例化ini文件操作类，并载入 .ini文件
            $iniFile = new iniFile($file);
            $iniFile->addItem('验证信息', ['初始' => 123]);
            $iniFile->addCategory('验证信息', ['玩家id' => $wjini, '玩家验证' => $pass1, '社区id' => $wjid]);
        } else {
            $hf = 1;
            if (rmdir("$path")) {

            } else {

            }
        }
    }

    if ($hf == 2) {
        $iniFile = new iniFile($file);
    } else {

    }
} else {

}

?>