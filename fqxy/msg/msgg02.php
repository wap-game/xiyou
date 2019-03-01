<?php

//header("Content-type: text/html; charset=utf-8");


$msg=$xtxx;//系统消息文字
$msgcolor="red";//文字颜色
$msgtime=30;//系统消息存活秒数
$m=5;//系统消息最大条数
$i=0;//初始化
$xtmsg=1;//初始化
for($d=0;$d<$m;$d++){
$i=$i+1;	
if($i == 1){
$file01="./msg/msg01.php";
} elseif($i == 2){
$file01="./msg/msg02.php";
} elseif($i == 3){
$file01="./msg/msg03.php";
} elseif($i == 4){
$file01="./msg/msg04.php";
} elseif($i == 5){
$file01="./msg/msg05.php";
} else{
}
if(file_exists($file01)){
$a=filemtime($file01);
$startdate=date("Y-m-d H:i:s",$a);
$enddate=date('Y-m-d H:i:s');
$date=floor((strtotime($enddate)-strtotime($startdate))/86400);
$hour=floor((strtotime($enddate)-strtotime($startdate))%86400/3600);
$minute=floor((strtotime($enddate)-strtotime($startdate))%86400/60);
$second=floor((strtotime($enddate)-strtotime($startdate))%86400%60);
if($second <= $msgtime){
$xtmsg=1;		
} else{
unlink($file01); //删除文件  
$xtmsg=2;	
file_put_contents($file01,"<?
echo '<font color=".$msgcolor.">[系统]".$msg."</font>';
?>");	
} 


if($i == $m&&$xtmsg==1){
$file01="msg01.php";
unlink($file01); //删除文件  
$file01="msg02.php";
unlink($file01); //删除文件  
$file01="msg03.php";
unlink($file01); //删除文件  
$file01="msg04.php";
unlink($file01); //删除文件  
$file01="msg05.php";
unlink($file01); //删除文件  
$file01="msg01.php";
$xtmsg=2;	
file_put_contents($file01,"<?
echo '<font color=".$msgcolor.">[系统]".$msg."</font>';
?>");	

break;		
}else{
}
}else{
$xtmsg=2;	
file_put_contents($file01,"<?
echo '<font color=".$msgcolor.">[系统]".$msg."</font>';
?>");	
}
if($xtmsg == 2){
	break;
}else{
}
}














?>




