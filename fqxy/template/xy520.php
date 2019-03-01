<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


















$hdidd=303;

include("./ini/zt_ini.php");
$vip=($iniFile->getItem('玩家信息','vip等级'));
$wjdj=($iniFile->getItem('玩家信息','等级'));

if ($wjdj>=160) {//限制160等级
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$hdidd));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdidd));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证


if($vip==0){  
$ylsl=20000000;
} elseif($vip==1){   
$ylsl=20000000;
} elseif($vip==2){   
$ylsl=50000000;
} elseif($vip==3){   
$ylsl=60000000;
} elseif($vip==4){   
$ylsl=70000000;
} elseif($vip==5){   
$ylsl=80000000;
} elseif($vip==6){   
$ylsl=90000000;
} elseif($vip==7){   
$ylsl=100000000;
} elseif($vip==8){   
$ylsl=100000000;
} elseif($vip==9){   
$ylsl=100000000;
} elseif($vip==10){   
$ylsl=100000000;
} elseif($vip==11){   
$ylsl=200000000;
} elseif($vip==12){   
$ylsl=200000000;
} elseif($vip>=13&&$vip<=20){   
$ylsl=200000000;


} else{	
$ylsl=9999;
}

$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$ylsl;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");


if ($pd==2) {




include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$hdidd";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdidd => $nowtime]);






if($vip==0){  
$jdsl=1;
} elseif($vip==1){   
$jdsl=2;
$jddsl=1;
} elseif($vip==2){   
$jdsl=3;
$jddsl=2;
} elseif($vip==3){   
$jdsl=4;
$jddsl=3;
} elseif($vip==4){   
$jdsl=5;
$jddsl=4;
} elseif($vip==5){   
$jdsl=6;
$jddsl=5;
} elseif($vip==6){   
$jdsl=7;
$jddsl=6;
} elseif($vip==7){   
$jdsl=8;
$jddsl=7;
} elseif($vip==8){   
$jdsl=9;
$jddsl=8;
} elseif($vip==9){   
$jdsl=10;
$jddsl=9;
} elseif($vip==10){   
$jdsl=11;
$jddsl=10;
} elseif($vip==11){   
$jdsl=12;
$jddsl=11;
} elseif($vip==12){   
$jdsl=13;
$jddsl=12;
} elseif($vip==13){   
$jdsl=14;
$jddsl=13;
} elseif($vip==14){   
$jdsl=15;
$jddsl=14;
} elseif($vip==15){   
$jdsl=16;
$jddsl=15;
} elseif($vip==16){   
$jdsl=17;
$jddsl=16;
} elseif($vip==17){   
$jdsl=18;
$jddsl=17;
} elseif($vip==18){   
$jdsl=19;
$jddsl=18;
} elseif($vip==19){   
$jdsl=20;
$jddsl=20;
} elseif($vip==20){   
$jdsl=30;
$jddsl=30;

} else{	
$jdsl=1;
}

$manzu1="";
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始

//得到物品代码



$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=$jdsl;//	量
$wpdz5[]=1;//	重量

if($vip>=1&&$vip<=20){   

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$jddsl;//	量
$wpdz5[]=1;//	重量

} else{	

}


include("./rwmap/rwget.php");
//得到物品代码


echo "<font color=red>恭喜你！！兑换成功</font></br>"; 
} else{
echo "<font color=red>对不起！！你的银两不足来兑换</font></br>"; 	
	
	
}


} else{	
echo "<font color=red>对不起！你今日兑换过了</font></br>"; 
} 
} else{	
echo "<font color=red>对不起!小仙家等级还未满160级啊？伤不起~~伤不起~~</font></br>"; 

}





echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=307;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";







} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>