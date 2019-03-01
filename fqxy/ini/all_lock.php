<?php





$all_lock1=0;
$all_lock2=0;


   //路径
   //echo $wjid;

$lockmzz=$path."/".$lockmz;

for($x=0;$x<=30;$x++){

$allfp = fopen($lockmzz, "w+");
if(flock($allfp,LOCK_EX | LOCK_NB)){
  $all_lock2=1;
 //usleep(800);
 
 
  flock($allfp,LOCK_EX);

  break;
}else{
	//排队等待
	//延时200毫秒
	usleep(200000);
	$all_lock1=$all_lock1+1;//五秒内没获得锁则提示服务器繁忙//zspd2
	if($all_lock1>=25){//zspd2
	$all_lock2=2;	//zsspd2
	  break;
	} else{	
	} 

}

}

//阻塞代码防止出现脏数据




?>