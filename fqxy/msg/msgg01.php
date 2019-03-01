<?php
//header("Content-type: text/html; charset=utf-8");

$i=0;
$m=5;
$msgtime=30;//系统消息存活秒数
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
//echo "创建时间：".date("Y-m-d H:i:s",$a);

$startdate=date("Y-m-d H:i:s",$a);
$enddate=date('Y-m-d H:i:s');
$date=floor((strtotime($enddate)-strtotime($startdate))/86400);
$hour=floor((strtotime($enddate)-strtotime($startdate))%86400/3600);
$minute=floor((strtotime($enddate)-strtotime($startdate))%86400/60);
$second=floor((strtotime($enddate)-strtotime($startdate))%86400%60);

if($second <= $msgtime){
include($file01);
echo "</br>";
} else{
//删除
unlink($file01); //删除文件  

} 


}else{

}
}

?>




