<?php


//随机
$bz= rand(1, 465);
if($bz>=1&&$bz<=100){   
$flormz="【菊花】";
$florxx= rand(1, 3);
} elseif($bz>=101&&$bz<=190){   
$flormz="【梨花】";
$florxx= rand(2, 4);
} elseif($bz>=191&&$bz<=270){   
$flormz="【杏花】";
$florxx= rand(3, 5);
} elseif($bz>=271&&$bz<=340){   
$flormz="【栀子花】";
$florxx= rand(4, 6);
} elseif($bz>=341&&$bz<=400){   
$flormz="【海棠花】";
$florxx= rand(5, 7);
} elseif($bz>=401&&$bz<=430){   
$flormz="【蔷薇花】";
$florxx= rand(6, 8);
} elseif($bz>=431&&$bz<=450){   
$flormz="【茉莉花】";
$florxx= rand(7, 9);
} elseif($bz>=451&&$bz<=460){  
$flormz="【桃花】";
$florxx= rand(8, 10);
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【采花大盗】活动中幸运的采到了".$flormz."获得".$florxx."积分！！其他玩家也请抓紧时间哦";
include("./msg/msgg02.php");

} elseif($bz>=461&&$bz<=465){   
$flormz="【玫瑰花】";
$florxx= rand(10, 15);
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【采花大盗】活动中幸运的采到了".$flormz."获得".$florxx."积分！！其他玩家也请抓紧时间哦";
include("./msg/msgg02.php");
} else{
$flormz="【菊花】";
$florxx= rand(1, 3);
} 



/////////////////////////随机得物品///////////////////////
//随机
$bz= rand(500000, 3000000);
$jy=$bz;
include("./pz/ini_pzz023.php");


//////活动强棒

//阻塞代码防止出现脏数据
$ininalock="phb15.txt";
$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/phb';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){

$fp = fopen($gglockname, "w+");
if(flock($fp,LOCK_EX | LOCK_NB)){
  $zsspd=1;
 //usleep(800);
 
 
  flock($fp,LOCK_EX);

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


if($zsspd==1){
	
$xysw1=$florxx;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hdph03";
$sql1=mysql_query("select ds01 from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$ds01=$info1[ds01];
if($ds01 ==""){
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$vip=($iniFile->getItem('玩家信息','vip等级'));
//获取最大值
$q2="all_hdph03";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
mysql_query("set names utf8");
$sql = "insert into $q2 (id,wjid,wjmz,vip,ds01)  values('$maxidd','$wjid','$wjmz','$vip','$xysw1')";
 if (!mysql_query($sql,$conn)){
 die('Error: ' . mysql_error());
 }
} else{	
$xysw1=$xysw1+$ds01;
$q2="all_hdph03";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$xysw1 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
} 	
//路径
$inina="phb15.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  	


	 flock($fp,LOCK_UN);
	} else{	
echo "<font color=black>服务器睡着了</font><br>";

		echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";


}


//////活动强棒



echo "<font color=red>恭喜你！！在【采花大盗】活动中采摘到了~~".$flormz."请获得".$florxx."积分（总：".$xysw1."积分）</font>"."<br>";

















?>


