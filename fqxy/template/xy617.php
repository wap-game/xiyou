<?php
$zlid=$npcc;
/////////公共锁
$path='acher/lock';//路径
$lockmz='ltbw_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁

if($all_lock2==1){

if($zlid==1){
$ltpmms="【武道大会◎第一名】";	
} elseif ($zlid==2) {
$ltpmms="【武道大会◎第二名】";	
} elseif ($zlid==3) {
$ltpmms="【武道大会◎第三名】";	
} elseif ($zlid==4) {
$ltpmms="【武道大会◎第四名】";	
} elseif ($zlid==5) {
$ltpmms="【武道大会◎第五名】";	
} elseif ($zlid==6) {
$ltpmms="【武道大会◎第六名】";	
} elseif ($zlid==7) {
$ltpmms="【武道大会◎第七名】";	
} elseif ($zlid==8) {
$ltpmms="【第八名】";	
} elseif ($zlid==9) {
$ltpmms="【武道大会◎第九名】";	
} elseif ($zlid==10) {
$ltpmms="【武道大会◎第十名】";	
} else{	
$ltpmms="【未取得信息】";	
} 


include("./ini/ltbw_ini.php");
# 获取一个分类下某个子项的值
$ltmz0=($iniFile->getItem('占领玩家id',$zlid));
if($ltmz0!=$wjid){
if($ltmz0>10000000){

include("./ini/ltmb_ini.php");	
$ltbw=($iniFile->getItem('擂台比武','初始'));
if($ltbw>=1){




include("./ini/ltbw_ini.php");
	
//将对手属性写入自己	
$lt01=($iniFile->getItem('占领玩家id',$zlid));
$lt02=($iniFile->getItem('占领玩家',$zlid));
$lt03=($iniFile->getItem('比武hp',$zlid));
$lt04=($iniFile->getItem('比武攻击',$zlid));
$lt05=($iniFile->getItem('比武魔攻',$zlid));
$lt06=($iniFile->getItem('比武防御',$zlid));
$lt07=($iniFile->getItem('比武门派',$zlid));
$lt08=$npcc;
//更新缓存数据
$inina="ltbwsx.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

include("./ini/ltbwsx_ini.php");							
echo "<font color=black>你确定要向玩家：".$lt02."（".$ltpmms."）进行比武吗？？</font>"."<br>";		
	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=618;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>确定！我要比武</font></a>"."<font color=black></font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>算了！我认怂</font></a>"."<font color=black></font>"."<br>";
	
	
} else{	
echo "<font color=black>对不起！！你今日比武机会用用完，请明日再来</font>"."<br>";		
	
	
} 
	
	
	

} else{	



//判断是否存在擂台
include("./ini/ltbw_ini.php");
$ltmz1=($iniFile->getItem('占领玩家id','1'));
$ltmz2=($iniFile->getItem('占领玩家id','2'));
$ltmz3=($iniFile->getItem('占领玩家id','3'));
$ltmz4=($iniFile->getItem('占领玩家id','4'));
$ltmz5=($iniFile->getItem('占领玩家id','5'));
$ltmz6=($iniFile->getItem('占领玩家id','6'));
$ltmz7=($iniFile->getItem('占领玩家id','7'));
$ltmz8=($iniFile->getItem('占领玩家id','8'));
$ltmz9=($iniFile->getItem('占领玩家id','9'));
$ltmz10=($iniFile->getItem('占领玩家id','10'));
if($ltmz1!=$wjid&&$ltmz2!=$wjid&&$ltmz3!=$wjid&&$ltmz4!=$wjid&&$ltmz5!=$wjid&&$ltmz6!=$wjid&&$ltmz7!=$wjid&&$ltmz8!=$wjid&&$ltmz9!=$wjid&&$ltmz10!=$wjid){

echo "<font color=black>恭喜你！！获得了".$ltpmms."</font>"."<br>";
include("./sql/mysql.php");//调用数据库连接 
   
include("./ini/zt_ini.php");
$wd01=($iniFile->getItem('玩家信息','玩家名字'));
$wd08=($iniFile->getItem('玩家信息','门派'));
$wd02=date('Y-m-d H:i:s');
$wd03=0;
include("./wj/ztt.php");
include("./wj/zfzt.php");

$wd04=$wjxx1[血];
$wd05=$wjxx1[max攻击];
$wd06=$wjxx1[max魔攻];
$wd07=$wjxx1[max防御];


$q2="all_ltbw";
mysql_query("set names utf8");
$strsql = "update $q2 set wjid='$wjid',wjmz='$wd01',zltime='$wd02',zlmb='$wd03',lthp='$wd04',ltgj='$wd05',ltmg='$wd06',ltfy='$wd07',ltmp='$wd08' where id=$zlid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/ltbw_ini.php");
//
$iniFile->updItem('玩家擂台排名', [$zlid => $wjid]);
$iniFile->updItem('占领玩家', [$zlid => $wd01]);
$iniFile->updItem('占领玩家id', [$zlid => $wjid]);
$iniFile->updItem('占领时间', [$zlid => $wd02]);
$iniFile->updItem('占领膜拜', [$zlid => $wd03]);
$iniFile->updItem('比武hp', [$zlid => $wd04]);
$iniFile->updItem('比武攻击', [$zlid => $wd05]);
$iniFile->updItem('比武魔攻', [$zlid => $wd06]);
$iniFile->updItem('比武防御', [$zlid => $wd07]);
$iniFile->updItem('比武门派', [$zlid => $wd08]);



} else{	
echo "<font color=black>对不起！！您已是我们【天下第一武道会】的成员了~~</font>"."<br>";
}


















}

} else{	
echo "<font color=black>无间道么！？自己和自己比武？</font>"."<br>";
}






echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<font color=black></font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";


echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
} else{	
}

//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini

?>