<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
	
	
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖国庆藏宝图〗（金图）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=841;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【国庆金铲】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=837;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量




//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {

$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始



$bz= rand(1, 250);
if($bz >=1&&$bz <=30){
$bz= rand(1,10);
//物品加
$wpdz1[]="〖仙の陨魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=823;//物品id
$wpdz4[]=$bz;//	量
$wpdz5[]=1;//	重量
//物品加
} elseif($bz >=31&&$bz <=40){ 
$wpdz1[]="〖金星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=317;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=41&&$bz <=50){ 
//物品加
$wpdz1[]="〖钻星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=318;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
} elseif($bz >=51&&$bz <=60){ 
//随机
$sl= rand(1, 10);	
//物品加
$wpdz1[]="〖冠军宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=566;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
//物品加
} elseif($bz >=61&&$bz <=70){ 

$bz= rand(1,5);
//物品加
$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=$bz;//	量
$wpdz5[]=1;//	重量
//物品加
} elseif($bz >=71&&$bz <=80){ 
$wpdz1[]="〖双倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=454;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

} elseif($bz >=81&&$bz <=90){ 
$wpdz1[]="〖陨星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=319;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=91&&$bz <=100){ 
$wpdz1[]="〖仙の陨升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=824;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量






} elseif($bz >=101&&$bz <=120){ 
$sl= rand(1, 10);	
//物品加
$wpdz1[]="〖王者宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=587;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=121&&$bz <=130){ 
$sl= rand(1, 10);	
$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量

} elseif($bz >=131&&$bz <=150){ 
$sl= rand(1, 10);		
//物品加
$wpdz1[]="〖5亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=626;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量

} elseif($bz >=151&&$bz <=160){ 
$sl= rand(1, 10);			
//物品加
$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量


} elseif($bz >=161&&$bz <=200){ 
$sl= rand(1, 10);	
$wpdz1[]="【小宇宙】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=729;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量

} elseif($bz >=201&&$bz <=250){ 
$sl= rand(1, 10);	
$wpdz1[]="【占星秘典】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=730;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量

} else{
	

} 	
	




include("./rwmap/rwget.php");

echo "<font color=red>恭喜你！！挖开了国庆宝藏获得大量奖励</font>"."<br>";








} else{
echo "<font color=red>对不起！！挖宝需要对应的图纸和对应铲子</font>"."<br>";

}

	
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=639;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
	
	
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