<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

include("./ini/xydfw_ini.php");
$mqlc=($iniFile->getItem('所处楼层','初始'));

if($mqlc<1000){ 
echo "<font color=black>目前楼层：</font><font color=red>【第".$mqlc."楼】</font>"."<br>";



$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {








if($mqlc<=10){   
$mqlcc="（10楼有奖励）";
} elseif($mqlc<=20){   
$mqlcc="（20楼有奖励）";
} elseif($mqlc<=50){   
$mqlcc="（50楼有奖励）";
} elseif($mqlc<=60){   
$mqlcc="（60楼有奖励）";
} elseif($mqlc<=80){   
$mqlcc="（80楼有奖励）";
} elseif($mqlc<=100){   
$mqlcc="（100楼有奖励）";
} elseif($mqlc<=200){   
$mqlcc="（200楼有奖励）";
} elseif($mqlc<=300){   
$mqlcc="（300楼有奖励）";
} elseif($mqlc<=400){   
$mqlcc="（400楼有奖励）";
} elseif($mqlc<=500){   
$mqlcc="（500楼有奖励）";
} elseif($mqlc<=600){   
$mqlcc="（600楼有奖励）";
} elseif($mqlc<=700){   
$mqlcc="（700楼有奖励）";
} elseif($mqlc<=800){   
$mqlcc="（800楼有奖励）";
} elseif($mqlc<=900){   
$mqlcc="（900楼有奖励）";
} elseif($mqlc<=1000){   
$mqlcc="（1000楼有奖励）";
} else{
$mqlcc="";
}



//爆点
$sjbd= rand(1,200);
$bdxx=5;
if($sjbd<=$bdxx){
$bz= rand(10,300);
} else{
$bz= rand(1,6);
}


if($sjbd<=$bdxx){

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【幸运大富翁】惊扰到了大富翁产生超级大爆点！！";
include("./msg/msgg02.php");


} else{

}



$bzz=$mqlc+$bz;

if($mqlc<=1000){
$bkz= rand(1,10);
//作弊重新摇
if($bkz<=8){  
if($bzz==10||$bzz==20||$bzz==50||$bzz==60||$bzz==80||$bzz==100||$bzz==150||$bzz==200||$bzz==300||$bzz==400||$bzz==500||$bzz==600||$bzz==700
||$bzz==800||$bzz==900||$bzz==1000){


$falsebz=$bz;
if($sjbd<=$bdxx){
$bz= rand(10,300);
} else{
$bz= rand(1,6);
}
if($falsebz==$bz){  
if($sjbd<=$bdxx){
$bz= rand(10,300);
} else{
$bz= rand(1,6);
}
if($falsebz==$bz){  
if($sjbd<=$bdxx){
$bz= rand(10,300);
} else{
$bz= rand(1,6);
}
if($falsebz==$bz){  
if($sjbd<=$bdxx){
$bz= rand(10,300);
} else{
$bz= rand(1,6);
}
} else{
} 
} else{
} 
} else{
} 









$bzz=$mqlc+$bz;




} else{
} 
} else{
} 
} else{
} 
//作弊重新摇



if($sjbd<=$bdxx){



echo "<font color=red>【大富翁】：@!#$%^&*(!@#$%^^&*（你惊扰到了大富翁摇点被爆点爆出【".$bz."】点）</font>"."<br>";
} else{
echo "<font color=red>恭喜你！！摇到了".$bz."点</font>"."<br>";

}


if($bzz<=1000){   
echo "<font color=red>确认摇攀爬到第【".$bzz."】楼吗？".$mqlcc."</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=628;
$npc[]=$bzz;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【确定爬楼】</font></a>"."<br>";

} else{
echo "<font color=red>很遗憾！！你爬过头了1000楼的大奖在向你招手！！！（超过1000重新来过）</font>"."<br>";

}

} else{
echo "<font color=red>对不起！！需要〖云梯石〗x1</font>"."<br>";

}






} else{
echo "<font color=red>对不起！！你已达到了1000楼已经没有楼层再爬了请于明日再来</font>"."<br>";
}
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=626;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【返回重来】</font></a>"."<br>";

echo "<br>";





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

	
?>