<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$cwidd=$npcc;

if($cwidd!=""){



//调用cw.ini是否存在
include("./ini/cw_ini.php");
$cwmz1=($iniFile->getItem('宠物原始名字',$cwidd));
$cwmz2=($iniFile->getItem('宠物名字',$cwidd));

if($cwmz2!=""){
echo "<font color=red>你成功要将".$cwmz1."（".$cwmz2."）放生了！</font>"."<br>";
} else{	
echo "<font color=red>你成功要将".$cwmz1."放生了！</font>"."<br>";
}

//执行代码
include("./sql/mysql.php");//调用数据库连接 
$arr = explode("_",$cwidd);
$cwidd1=$arr[0];
$cwidd2=$arr[1];
$q2="cw".$wjid;
mysql_query("set names utf8");
$strsql = "delete from $q2 where id=$cwidd2";//物品id号必改值
$result = mysql_query($strsql);
$q2="cwzbb".$wjid;
mysql_query("set names utf8");
$strsql = "delete from $q2 where cwid='$cwidd'";//物品id号必改值
$result = mysql_query($strsql);
//执行代码


//更新缓存数据
$inina="cwzbb_".$cwidd.".ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

//更新缓存数据
$inina="cwztt_".$cwidd.".ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

//更新缓存数据
$inina="cw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=362;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宠物</font></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");


} else{	
echo "<font color=red>宠物有误！！请联系GM解决此问题</font>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>