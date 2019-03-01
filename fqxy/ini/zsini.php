<?php


if ($wjid==10000001) {//gm号可看
echo "<font color=black>操作ID：</font>".$wjid."<br>";


} else{


	
} 




$zspd=0;
$zsspd=0;
  //flock($fp, LOCK_NB);
   //路径
$path='./ache/'.$wjid;
$gglockname=$path."/".$ininalock;
//阻塞代码防止出现脏数据
$zspd=0;
$zsspd=0;
for($x=0;$x<=30;$x++){

$fp = fopen($gglockname, "w+");
if(flock($fp,LOCK_EX | LOCK_NB)){
  $zsspd=1;
  flock($fp,LOCK_EX);
     //sleep(1);
  break;
}else{


	//排队等待
	//延时200毫秒
	usleep(200000);
	$zspd=$zspd+1;//五秒内没获得锁则提示服务器繁忙
	if($zspd>=25){
	$zsspd=2;	
	  break;
	} else{	
	} 

}

}


//阻塞代码防止出现脏数据



?>