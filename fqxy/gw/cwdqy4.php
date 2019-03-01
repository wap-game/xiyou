<?php



$ininalock="cwd".$dtx."x".$dty;
//阻塞代码防止出现脏数据

$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/map';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){

$fp = fopen($gglockname, "w+");
if(flock($fp,LOCK_EX | LOCK_NB)){
  $zsspd=1;
 //usleep(800);
 
 
   flock($fp, LOCK_NB);

  break;
}else{
	//排队等待
	//延时200毫秒
	usleep(800);
	$zspd=$zspd+1;
	if($zspd>=25){
	$zsspd=2;	
	  break;
	} else{	
	} 

}

}


if($zsspd==1){
	
if($vipqy == 2){	
$bosid=727;//区域bossid
$msgtime=120;//区域小boss时间
$bossx=77;//boss区域x
$bossy=4;//boss区域y
$bossmz="【九天玄女】";
include("cw.php");//调用boss


$bosid=728;//区域bossid
$msgtime=120;//区域小boss时间
$bossx=77;//boss区域x
$bossy=4;//boss区域y
$bossmz="【五行裂云兽】";
include("cw.php");//调用boss




echo "</br>";
	} else{	
	}

	} else{	





echo "fm";












}




?>







