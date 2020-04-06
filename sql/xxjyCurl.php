<?php
//打印获得的数据
$arguments = file_get_contents('php://input');
$arguments_arr = explode("|", $arguments);
foreach ($arguments_arr as $val) {
    $a[] = $val;
}

$wjid = $a[0];
$xxjy_pass = $a[1];
$xxyou_url = $a[2];
$xxyou_qy = $a[3];

//判断区域是否正确防止网页修改
$qy = $xxyou_qy;
include("../url/yxurl.php");

if ($xxyou_url == $url) {
    if ($wjid > 10000000 && $xxjy_pass != "") {
        include("../class/iniclass.php");//调用iniclass文件
        //调用user.ini是否存在
        include("../ini/user_ini.php");

        //验证合法性
        if ($hf == 2) {
            $pass = ($iniFile->getItem('验证信息', '玩家验证'));
        } else {

        }

        if ($pass == $xxjy_pass && $xxjy_pass != "" && $pass != "") {
            //echo "合法";
            //echo "</br>";
            $yxhe = 2;
        } else {
            $yxhe = 1;
            //echo "不合法";
            //echo "</br>";
        }
    } else {
        $yxhe = 1;
        //echo "不合法id或者验证码有问题";
        //echo "</br>";
    }
} else {
    $yxhe = 1;
    //echo "不合法游戏区域有问题";
    //echo "</br>";
}

//将信息回调给游戏
$post_data = $yxhe . '|' . $wjid . '|' . $xxjy_pass . '|' . $xxyou_qy;

//初始化 curl
$ch = curl_init();

//将玩家id和md5值传送给服务器验证防止人为修改
curl_setopt($ch, CURLOPT_URL, 'http://' . $xxyou_url . '/fqxy/sql/yxCurl.php');
//这里设置成 post 方式
curl_setopt($ch, CURLOPT_POST, 1);
//这里添加需要 post 的数据
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

//开始请求服务器
$response = curl_exec($ch);
//打印服务器返回的数据
//var_dump($response);
curl_close($ch);


?>