<?php






//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){





include("./ini/zz_ini.php");

# 获取一个分类下某个子项的值
$zzdj=($iniFile->getItem('种植等级','1'));
# 获取一个分类下某个子项的值
$zzwpid=($iniFile->getItem('种植物品','1'));
# 获取一个分类下某个子项的值
$zztime=($iniFile->getItem('种植时间','1'));
# 获取一个分类下某个子项的值
$sftime=($iniFile->getItem('施肥时间','1'));
# 获取一个分类下某个子项的值
$shtime=($iniFile->getItem('收获时间','1'));
# 获取一个分类下某个子项的值
$zzwpmz=($iniFile->getItem('种植名字','1'));
# 获取一个分类下某个子项的值
$zzwpsl=($iniFile->getItem('种植数量','1'));


$npcc=$zzwpid;
//调用物品信息
include("./wp/wpxx.php");




if($zzwpid>=1){
$nowtime=date('Y-m-d H:i:s');
if($sftime>$nowtime){

if($nowtime>$shtime){


$bz= rand(1, 10);


$bz= rand(1, 10);
if($bz<=4){

if($bz<=3){
$bz=3;
} else{	
$bz=2;
} 
include("./sql/mysql.php");//调用数据库连接 
$wpsl=$zzwpsl*$zzdj*$bz;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]=$wpmz;//名字
$wpdz2[]=$wpfl;//物品分类
$wpdz3[]=$zzwpid;//物品id
$wpdz4[]=$wpsl;//	量
$wpdz5[]=$wpzl;//	重量

//物品加

include("./rwmap/rwget.php");




echo "<font color=red>恭喜您！！意外收获到了".$wpmz."x".$zzwpsl."（".$bz."倍）</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."意外收获到了".$wpmz."x".$zzwpsl."（".$bz."倍）";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>很遗憾！！您的种植物遭遇了千年难得一遇的虫灾~~~</font>"."<br>";
}

include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$strsql = "delete from $q2 where id=1 ";//物品id号必改值
$result = mysql_query($strsql);

//更新缓存数据
$inina="zz.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

} else{	
echo "<font color=red>对不起！！您还没有种植产物，还未成熟（收获时间未到）</font>"."<br>";
}

} else{	
echo "<font color=red>对不起！！由于您未在施肥时间前来施肥作物已死亡（下次记得按时前来哦）</font>"."<br>";
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$strsql = "delete from $q2 where id=1 ";//物品id号必改值
$result = mysql_query($strsql);

//更新缓存数据
$inina="zz.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
}

} else{	
echo "<font color=red>对不起！！您还没有种植产物，想不劳而获么？！</font>"."<br>";
}


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=658;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";




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