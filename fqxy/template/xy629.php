<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
	
	
include("./ini/xydfw_ini.php");
$mqlc=($iniFile->getItem('所处楼层','初始'));
$lccs=($iniFile->getItem($npcc,'初始'));

if($lccs==1){
$iniFile->updItem($mqlc, ['初始' => '2']);
echo "<font color=red>恭喜你！！领取到了第".$mqlc."楼奖励！！</font>"."<br>";
if($mqlc==10){   

$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖银星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=316;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖碎银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=659;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");




} elseif($mqlc==20){   
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=317;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖荣誉宝石包〗（2个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=494;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

include("./rwmap/rwget.php");
} elseif($mqlc==50){   
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖钻星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=318;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖冠军宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=566;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");
} elseif($mqlc==60){   
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖陨星升星符〗x1";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=319;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖王者宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=587;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加

include("./rwmap/rwget.php");
} elseif($mqlc==80){   
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【金秋的思念】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=744;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖皇者宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=808;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加

include("./rwmap/rwget.php");
} elseif($mqlc==100){  
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖时装契约〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=818;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖时装碎片〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=819;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加

include("./rwmap/rwget.php");
} elseif($mqlc==150){ 
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖诛仙令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=593;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=661;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加

include("./rwmap/rwget.php");

} elseif($mqlc==200){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="【占星秘典】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=730;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");
} elseif($mqlc==300){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖5亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=626;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="【占星秘典】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=730;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加

include("./rwmap/rwget.php");
} elseif($mqlc==400){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖双倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=454;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加

include("./rwmap/rwget.php");
} elseif($mqlc==500){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始




$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖四倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=455;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

include("./rwmap/rwget.php");
} elseif($mqlc==600){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始


$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=7;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖圣贤宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=791;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="〖仙の陨升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=824;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

include("./rwmap/rwget.php");
} elseif($mqlc==700){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始



$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖圣贤宝石包〗（3个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=792;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="〖仙の陨升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=824;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
} elseif($mqlc==800){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始


$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=9;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖圣贤宝石包〗（8个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=793;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="〖金块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=661;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

include("./rwmap/rwget.php");
} elseif($mqlc==900){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖八倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=456;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="〖如意の称号宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=822;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="〖金块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=662;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加

include("./rwmap/rwget.php");
} elseif($mqlc==1000){   
 $manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=15;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖八倍掉宝符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=456;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="〖如意の称号宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=822;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量



$wpdz1[]="〖金块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=662;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
$sl= rand(1,10);

if($sl==1){   
$sl=3;	
} elseif($sl>=2&&$sl<=4){   
$sl=2;
} else{
$sl=1;		
} 

$wpdz1[]="〖至尊宝石包〗（1个）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=856;//物品id
$wpdz4[]=$sl;//	量
$wpdz5[]=1;//	重量



//物品加

include("./rwmap/rwget.php");
} else{	
echo "<font color=red>此项奖励未添加（联系GM处理）！！</font>"."<br>";
}
if($mqlc==10||$mqlc==20||$mqlc==50||$mqlc==60||$mqlc==80||$mqlc==100||$mqlc==150||$mqlc==200||$mqlc==300||$mqlc==400||$mqlc==500||$mqlc==600||$mqlc==700
||$mqlc==80||$mqlc==900||$mqlc==1000){
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【幸运大富翁】领取了第".$mqlc."楼的丰厚奖励！！";
include("./msg/msgg02.php");
} else{

}

} else{	
echo "<font color=red>对不起！！你已领取过了".$mqlc."楼奖励！！</font>"."<br>";
}







echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=626;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回第".$mqlc."层楼</font></a>"."<br>";






echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

	
?>