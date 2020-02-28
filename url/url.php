<?php

include_once (__DIR__.'/../config/Common.php');

$urlid=1;//1为本地2为服务器

if ($urlid==1) {//本地游戏地址
$xxjyurl=config_item('host');//小轩家园本地地址
} elseif($urlid==2){  
$xxjyurl="101.200.44.226";//返回官网地址
}else{
$xxjyurl=config_item('host');//小轩家园本地地址
}


?>




