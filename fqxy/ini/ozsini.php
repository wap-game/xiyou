<?php


//echo "<font color=black>操作ID：</font>".$wjid."<br>";



$zspd2=0;
$zsspd2=0;

   //路径
   //echo $wjid;
$path='ache/'.$wjid;
$gglockname2=$path."/".$ininalock2;

for($x=0;$x<=30;$x++){

$fp2 = fopen($gglockname2, "w+");
if(flock($fp2,LOCK_EX | LOCK_NB)){
  $zsspd2=1;
 //usleep(800);
 
 
  flock($fp2,LOCK_EX);

  break;
}else{
	//排队等待
	//延时200毫秒
	usleep(200000);
	$zspd2=$zspd2+1;//五秒内没获得锁则提示服务器繁忙
	if($zspd2>=25){
	$zsspd2=2;	
	  break;
	} else{	
	} 

}

}

//阻塞代码防止出现脏数据



?>