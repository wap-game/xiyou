<?php




if ($wjid==10000001) {//gm号可看

echo "<font color=black>操作公共资源：</font>".$ininalock1."<br>";

} else{


	
} 


$zspd1=0;
$zsspd1=0;
    flock($fp1, LOCK_NB);
   //路径
   $path='acher/lock';
$gglockname1=$path."/".$ininalock1;
//echo $gglockname1;
for($x=0;$x<=30;$x++){

$fp1 = fopen($gglockname1, "w+");
if(flock($fp1,LOCK_EX | LOCK_NB)){
  $zsspd1=1;
 //usleep(800);
 
 
  flock($fp,LOCK_EX);

  break;
}else{
	//排队等待
	//延时200毫秒
	usleep(800);
	$zspd1=$zspd1+1;
	if($zspd1>=25){
	$zsspd1=2;	
	  break;
	} else{	
	} 

}

}

//阻塞代码防止出现脏数据



?>