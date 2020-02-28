<?php

include_once (__DIR__.'/../config/Common.php');



$urlid=1;//1为本地2为服务器






//选区后网址转换
if($qy==1){
	
	
if ($urlid==1) {//本地游戏地址
$url1=config_item('host');//一区
} elseif($urlid==2){//服务器
$url1="101.200.44.226";//一区
}else{
$url1=config_item('host');//一区
}


$url=$url1;
} elseif($qy==2){
if ($urlid==1) {//本地游戏地址
$url2=config_item('host');//二区
} elseif($urlid==2){//服务器
$url2="39.98.55.119";//二区
}else{
$url2=config_item('host');//二区
}

$url=$url2;

} elseif($qy==3){
if ($urlid==1) {//本地游戏地址
$url3=config_item('host');//三区
} elseif($urlid==2){//服务器
$url3="39.98.55.119";//三区
}else{
$url3=config_item('host');//三区
}

$url=$url3;
} elseif($qy==4){
if ($urlid==1) {//本地游戏地址
$url4=config_item('host');//四区
} elseif($urlid==2){//服务器
$url4="39.98.55.119";//四区
}else{
$url4=config_item('host');//四区
}

$url=$url4;







}else{
	
}
?>




