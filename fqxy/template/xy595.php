<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){



if($bpid>=1){


//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));


include("./ini/bp_ini.php");
# 获取一个分类下所有数据$
$bpdj=($iniFile->getItem('国家信息','国家等级'));

$bpzz01=($iniFile->getItem('国家信息','国家资金'));
$bpzz02=($iniFile->getItem('国家信息','国家经验'));
$bpzz03=($iniFile->getItem('国家信息','国家声望'));

if($bpdj==1){   
$bpcc01=10000000000;//国家资金
$bpcc02=5000;//国家经验
$bpcc03=5000;//国家声望
} elseif($bpdj==2){   
$bpcc01=20000000000;//国家资金
$bpcc02=10000;//国家经验
$bpcc03=10000;//国家声望
} elseif($bpdj==3){   
$bpcc01=30000000000;//国家资金
$bpcc02=15000;//国家经验
$bpcc03=15000;//国家声望
} elseif($bpdj==4){   
$bpcc01=40000000000;//国家资金
$bpcc02=20000;//国家经验
$bpcc03=20000;//国家声望
} elseif($bpdj==5){   
$bpcc01=50000000000;//国家资金
$bpcc02=20000;//国家经验
$bpcc03=20000;//国家声望
} elseif($bpdj==6){   
$bpcc01=60000000000;//国家资金
$bpcc02=25000;//国家经验
$bpcc03=250000;//国家声望
} elseif($bpdj==7){   
$bpcc01=70000000000;//国家资金
$bpcc02=30000;//国家经验
$bpcc03=30000;//国家声望
} elseif($bpdj==8){   
$bpcc01=80000000000;//国家资金
$bpcc02=50000;//国家经验
$bpcc03=50000;//国家声望
} elseif($bpdj==9){   
$bpcc01=99999999999;//国家资金
$bpcc02=100000;//国家经验
$bpcc03=100000;//国家声望
} else{
$bpcc01=9999999999;//国家资金
$bpcc02=9999999999;//国家经验	
$bpcc03=9999999999;//国家声望

} 

if($bpzz01>=$bpcc01&&$bpzz02>=$bpcc02&&$bpzz03>=$bpcc03){ 








//升级国家代码

$bpdj=$bpdj+1;
if($bpdj==2){   
$bpbb01=40;//国家人数max
$bpbb02=5000;//国家经验max
} elseif($bpdj==3){   
$bpbb01=60;//国家人数max
$bpbb02=10000;//国家经验max
} elseif($bpdj==4){   
$bpbb01=80;//国家人数max
$bpbb02=15000;//国家经验max
} elseif($bpdj==5){   
$bpbb01=100;//国家人数max
$bpbb02=20000;//国家经验max
} elseif($bpdj==6){   
$bpbb01=150;//国家人数max
$bpbb02=20000;//国家经验max
} elseif($bpdj==7){   
$bpbb01=200;//国家人数max
$bpbb02=25000;//国家经验max
} elseif($bpdj==8){   
$bpbb01=300;//国家人数max
$bpbb02=30000;//国家经验max
} elseif($bpdj==9){   
$bpbb01=400;//国家人数max
$bpbb02=50000;//国家经验max
} elseif($bpdj==10){   
$bpbb01=500;//国家人数max
$bpbb02=100000;//国家经验max
} else{
$bpbb01=20;//国家人数max
$bpbb02=5000;//国家经验max	
} 




$bpcc01=$bpzz01-$bpcc01;
$bpcc02=$bpzz02-$bpcc02;
$bpcc03=$bpzz03-$bpcc03;
$iniFile->updItem('国家信息', ['国家等级' => $bpdj]);
$iniFile->updItem('国家信息', ['国家人数max' => $bpbb01]);
$iniFile->updItem('国家信息', ['国家经验max' => $bpbb02]);
$iniFile->updItem('国家信息', ['国家资金' => $bpcc01]);
$iniFile->updItem('国家信息', ['国家经验' => $bpcc02]);
$iniFile->updItem('国家信息', ['国家声望' => $bpcc03]);

include("./sql/mysql.php");//调用数据库连接 	
$q2="all_bp";
$strsql = "update $q2 set bpdj=$bpdj,bprsmax=$bpbb01,bprsmax=$bpbb01,bpjymax=$bpbb02,bpyl=$bpcc01,bpsw=$bpcc03 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);

echo "<font color=red>恭喜你！！成功将".$bpmz."升级到了".$bpdj."级！！</font><br>";
echo "<font color=red>".$bpmz."人口提升为".$bpbb01."人口！！</font><br>";





//升级国家代码





echo "<br>";



} else{
echo "<font color=black>对不起！！升级".$bpmz."需要：国家资金".$bpcc01."，国家经验".$bpcc02."，国家声望".$bpcc03."</font><br>";



} 

} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
}





echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国家</font></a>"."<br>";
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
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>