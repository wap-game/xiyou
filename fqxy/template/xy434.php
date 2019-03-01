<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




include("./ini/xl_ini.php");
$xldj1=($iniFile->getItem('修炼等级','2'));
$xldj=$xldj1+1;
include("./zbdz/xlms.php");

//提供需要扣除的物品作为判读依据
$fbb1=$xlxq;//修炼经验
$fbb2=$xl09;//银两
$fbb3=$xl06;//声望
$fbb4=$xl08;//金豆





if($fbb4>=1){


include("./ini/zt_ini.php");
$fb1=($iniFile->getItem('玩家信息','修炼经验'));
include("./ini/yl_ini.php");
$fb2=($iniFile->getItem('背包仓库银两','背包银两'));
include("./ini/sw_ini.php");
$fb3=($iniFile->getItem('声望值','西游声望'));
include("./ini/sc_ini.php");
$fb4=($iniFile->getItem('商城数量','127'));
if($fb1>=$fbb1&&$fb2>=$fbb2&&$fb3>=$fbb3&&$fb4>=$fbb4){
include("./sql/mysql.php");//调用数据库连接 
include("./ini/zt_ini.php");
$fbbb1=$fb1-$fbb1;
$iniFile->updItem('玩家信息', ['修炼经验' => $fbbb1]);
include("./ini/yl_ini.php");
$fbbb2=$fb2-$fbb2;
$iniFile->updItem('背包仓库银两', ['背包银两' => $fbbb2]);
$q2="all_yl";  
$strsql = "update $q2 set bbyl=$fbbb2 where wjid=$wjid";
$result = @mysql_query($strsql);

include("./ini/sw_ini.php");
$fbbb3=$fb3-$fbb3;
$iniFile->updItem('声望值', ['西游声望' => $fbbb3]);
$q2="sw".$wjid;  
$strsql = "update $q2 set swzz=$fbbb3 where swid=8";
$result = @mysql_query($strsql);


include("./ini/sc_ini.php");
$fbbb4=$fb4-$fbb4;
$iniFile->updItem('商城数量', ['127' => $fbbb4]);
$q2="wp".$wjid;  
$strsql = "update $q2 set wpsl=$fbbb4 where wpid=127";
$result = @mysql_query($strsql);


//修炼等级提升
include("./ini/xl_ini.php");
$rwxldj=($iniFile->getItem('修炼等级','2'));
if($rwxldj==0){
$rwxldj=$rwxldj+2;
} else{	
$rwxldj=$rwxldj+1;
} 
$iniFile->updItem('修炼等级', ['2' => $rwxldj]);
$q2="xl".$wjid;  
$strsql = "update $q2 set xldj=$rwxldj where xlid=2";
$result = @mysql_query($strsql);
//修炼等级提升
//更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

echo "<font color=red>恭喜你！！【人物修炼（攻）】成功，实力大幅度提升</font>"."<br>";
//数字转汉字
$yl=$fbb1;
include("./pz/ylts.php");
$fbb1=$ylxx;
echo "<font color=red>失去：".$fbb1."修炼经验</font>"."<br>";
//数字转汉字
$yl=$fbb2;
include("./pz/ylts.php");
$fbb2=$ylxx;
echo "<font color=red>失去：".$fbb2."银两</font>"."<br>";
//数字转汉字
$yl=$fbb3;
include("./pz/ylts.php");
$fbb3=$ylxx;
echo "<font color=red>失去：".$fbb3."西游声望</font>"."<br>";
echo "<font color=red>失去：〖金豆〗x".$fbb4."</font>"."<br>";




} else{	
echo "<font color=red>对不起！！【人物修炼（攻）】失败！！</font>"."<br>";
echo "<font color=red>需要：".$ms2."</font>"."<br>";
}
} else{	

include("./ini/zt_ini.php");
$fb1=($iniFile->getItem('玩家信息','修炼经验'));
include("./ini/yl_ini.php");
$fb2=($iniFile->getItem('背包仓库银两','背包银两'));
include("./ini/sw_ini.php");
$fb3=($iniFile->getItem('声望值','西游声望'));

if($fb1>=$fbb1&&$fb2>=$fbb2&&$fb3>=$fbb3){
include("./sql/mysql.php");//调用数据库连接 
include("./ini/zt_ini.php");
$fbbb1=$fb1-$fbb1;
$iniFile->updItem('玩家信息', ['修炼经验' => $fbbb1]);
include("./ini/yl_ini.php");
$fbbb2=$fb2-$fbb2;
$iniFile->updItem('背包仓库银两', ['背包银两' => $fbbb2]);
$q2="all_yl";  
$strsql = "update $q2 set bbyl=$fbbb2 where wjid=$wjid";
$result = @mysql_query($strsql);

include("./ini/sw_ini.php");
$fbbb3=$fb3-$fbb3;
$iniFile->updItem('声望值', ['西游声望' => $fbbb3]);
$q2="sw".$wjid;  
$strsql = "update $q2 set swzz=$fbbb3 where swid=8";
$result = @mysql_query($strsql);


//修炼等级提升
include("./ini/xl_ini.php");
$rwxldj=($iniFile->getItem('修炼等级','2'));
if($rwxldj==0){
$rwxldj=$rwxldj+2;
} else{	
$rwxldj=$rwxldj+1;
} 


$iniFile->updItem('修炼等级', ['2' => $rwxldj]);



$q2="xl".$wjid;  
$strsql = "update $q2 set xldj=$rwxldj where xlid=2";
$result = @mysql_query($strsql);
//修炼等级提升

//更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据



echo "<font color=red>恭喜你！！【人物修炼（攻）】成功，实力大幅度提升</font>"."<br>";

//数字转汉字
$yl=$fbb1;
include("./pz/ylts.php");
$fbb1=$ylxx;
echo "<font color=red>失去：".$fbb1."修炼经验</font>"."<br>";
//数字转汉字
$yl=$fbb2;
include("./pz/ylts.php");
$fbb2=$ylxx;
echo "<font color=red>失去：".$fbb2."银两</font>"."<br>";
//数字转汉字
$yl=$fbb3;
include("./pz/ylts.php");
$fbb3=$ylxx;
echo "<font color=red>失去：".$fbb3."西游声望</font>"."<br>";

} else{	
echo "<font color=red>对不起！！【人物修炼（攻）】失败！！</font>"."<br>";
echo "<font color=red>需要：".$ms2."</font>"."<br>";
}

















}







} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
include("template/xy429.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

?>