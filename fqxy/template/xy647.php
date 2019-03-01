<?php



//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
 
  $sjcs=1;
	$sjcs1=1;
	$sjcs2=1;
	$sjcs3=1;
	$sjcs4=1;
	$sjcs5=1;
	$sjcs6=1;
    $sjcs7=1;
	$sjcs8=1;
	$sjcs9=1;
	$sjcs10=1;
	$sjcs11=1;
	$sjcs12=1;
	$sjcs13=1;
	$sjcs14=1;
	$sjcs15=1;
	$sjcs16=1;
    $sjcs17=1;
	$sjcs18=1;
	$sjcs19=1;
	$sjcs20=1;
	$sjcs21=1;
	$sjcs22=1;
	$sjcs23=1;
	$sjcs24=1;
	$sjcs25=1;
	$sjcs26=1;
    $sjcs27=1;
	$sjcs28=1;
	$sjcs29=1;
	$sjcs30=1;
	$sjcs31=1;
	$sjcs32=1;
	$sjcs33=1;
	$sjcs34=1;
	$sjcs35=1;
	$sjcs36=1;
    $sjcs37=1;
	$sjcs38=1;
	$sjcs39=1;
	$sjcs40=1;
	$sjcs41=1;
	$sjcs42=1;
	$sjcs43=1;
	$sjcs44=1;
	$sjcs45=1;
	
	
	$xyswxs=0;
	
include("./ini/dy_ini.php");
$wpsl1=($iniFile->getItem('丹药数量','625'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=625;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*100000000;

} else{	
}


	
include("./ini/dy_ini.php");
$wpsl1=($iniFile->getItem('丹药数量','626'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖5亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=626;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500000000;

} else{	
}

include("./ini/dy_ini.php");
$wpsl1=($iniFile->getItem('丹药数量','627'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖10亿修炼经验丹〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=627;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000000000;

} else{	
}






if ($xysw1>0) {



//调用zt.ini是否存在
include("./ini/zt_ini.php");
$xljy1=($iniFile->getItem('玩家信息','修炼经验'));
$jy2=$xljy1+$xysw1;//值
$iniFile->updItem('玩家信息', ['修炼经验' => $jy2]);

echo "<font color=black>获得：".$xysw1."修炼经验</font><br>";		

} else{	
echo "<font color=black>对不起,你没有修炼丹可兑换</font><br>";
} 
  





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