<?php



if ($wjid==10000001) {//gm号可看



echo "<font color=black>操作公共资源：</font>".$ininalock5."<br>";

} else{


	
} 


$zspd5=0;
$zsspd5=0;
   //路径
   $path='acher/lock';
$gglockname5=$path."/".$ininalock5;
//echo $gglockname1;
for($x=0;$x<=30;$x++){

$fp5 = fopen($gglockname5, "w+");
if(flock($fp5,LOCK_EX | LOCK_NB)){
  $zsspd5=1;
 //usleep(800);
  flock($fp,LOCK_EX);
     //sleep(1);
  break;
}else{
	//排队等待
	usleep(200000);
	$zspd=$zspd+1;//五秒内没获得锁则提示服务器繁忙
	if($zspd5>=25){
	$zsspd5=2;	
	  break;
	} else{	
	} 

}

}

//阻塞代码防止出现脏数据



?>