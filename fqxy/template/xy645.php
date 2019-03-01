<?php

//验证时间
include("./time/bhmjtime.php");

$date=date("H:i:s");
if($date> $time1 && $date < $time2){
echo "<font color=red>对不起！！【采花大盗】还未结束不能领奖</font>"."<br>";



 } else{	

//验证秘境的时间
include("./ini/bhmj_ini.php");
$mjtime=($iniFile->getItem('百花秘境时间','初始'));
$nowtime=date('Y-m-d');
if ($nowtime==$mjtime&&$mjtime!="") { 
$yseday=date("Y-m-d",strtotime("-1 day"));   	
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('百花秘境时间', ['初始' => $yseday]);

//阻塞代码防止出现脏数据

$zspd=0;
$zsspd=0;
$ininalock="phb15";


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



include("./ini/phb15_ini.php");



$phbzz2=($iniFile->getCategory('排行榜值2'));
$phbzz4=($iniFile->getCategory('排行榜值4'));
$hm=0;

$ik=0;
$hm=count($phbzz2,0); 


if($hm>=1){


foreach(array_keys($phbzz2) as $key){
$keyphbzz2[]=$phbzz2[$key];
}

foreach(array_keys($phbzz4) as $key){
$keyphbzz4[]=$phbzz4[$key];
}

$mt=0;
for($b=0;$b<$hm;$b++){
$xb[]=$keyphbzz2[$mt]*10000+$keyphbzz4[$mt];
$fb[]=$keyphbzz2[$mt]*10000;


$mt=$mt+1;

}

if ($hm>0){
rsort($fb);
rsort($xb);

} else{
} 


$mt=0;
for($b=0;$b<$hm;$b++){

$xbb[]=$xb[$mt]-$fb[$mt];
$mt=$mt+1;
}
$mm=0;
$i=-1;
for($b=0;$b<$hm;$b++){
$i=$i+1;
$xbbb=$xbb[$i];

$phmz[]=($iniFile->getItem('排行榜名字',$xbbb));
$phidd[]=($iniFile->getItem('排行榜值1',$xbbb));
$phsx[]=($iniFile->getItem('排行榜值2',$xbbb));
$vvip[]=($iniFile->getItem('排行榜值3',$xbbb));

}














$i=-1;
for($d=0;$d<$hm-1;$d++){
$i=$i+1;

$ik=$ik+1;





if ($wjid==$phidd[$i]){


echo "<font color=red>恭喜你！！领取到了【采花大盗】第".$ik."名奖励，请明天继续加油哦~~</font>"."<br>";	



if($ik==1){   

$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖采花花魁〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=863;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量






//物品加
include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==2){   
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=40;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖采花花魁〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=863;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==3){  
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=30;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖采花花魁〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=863;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==4){  
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==5){  
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=18;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==6){  
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=15;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==7){  
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==8){  
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==9){  
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} elseif($ik==10){  
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加量
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量


include("./rwmap/rwget.php");

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."领取了【采花大盗】第".$ik."名奖励！！得到百花仙子的青睐~~~";
include("./msg/msgg02.php");
break;
} else{	
	
} 	
	
	
	
	


} else{



} 




if ($ik>=10){
echo "<font color=red>对不起！！【采花大盗】活动你在第十名以外</font>"."<br>";	
	
break;
}	
}

 

 
 
 
 } else{	
echo "<font color=red>对不起！！【采花大盗】排名鬼都没有一个</font>"."<br>";

}

 

 
 flock($fp,LOCK_UN);
	} else{	

echo "服务器开小差了";




}






} else{	
echo "<font color=red>对不起！你今日未曾参加过【采花大盗】活动或已领取过奖励了</font></br>"; 
} 



 

}






echo "</br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";


?>