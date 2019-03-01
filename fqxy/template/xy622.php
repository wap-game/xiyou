<?php


/////////公共锁
$path='acher/lock';//路径
$lockmz='ltbw_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁

if($all_lock2==1){





include("./ini/ltbw_ini.php");


$ltpmid1=($iniFile->getItem('玩家擂台排名','1'));
$ltpmid2=($iniFile->getItem('玩家擂台排名','2'));
$ltpmid3=($iniFile->getItem('玩家擂台排名','3'));
$ltpmid4=($iniFile->getItem('玩家擂台排名','4'));
$ltpmid5=($iniFile->getItem('玩家擂台排名','5'));
$ltpmid6=($iniFile->getItem('玩家擂台排名','6'));
$ltpmid7=($iniFile->getItem('玩家擂台排名','7'));
$ltpmid8=($iniFile->getItem('玩家擂台排名','8'));
$ltpmid9=($iniFile->getItem('玩家擂台排名','9'));
$ltpmid10=($iniFile->getItem('玩家擂台排名','10'));




if($ltpmid1==$wjid){
$ltid=1;
} elseif($ltpmid2==$wjid){  
$ltid=2;
} elseif($ltpmid3==$wjid){  
$ltid=3;
} elseif($ltpmid4==$wjid){  
$ltid=4;
} elseif($ltpmid5==$wjid){  
$ltid=5;
} elseif($ltpmid6==$wjid){   
$ltid=6;
} elseif($ltpmid7==$wjid){
$ltid=7;
} elseif($ltpmid8==$wjid){  
$ltid=8;
} elseif($ltpmid9==$wjid){ 
$ltid=9;
} elseif($ltpmid10==$wjid){  
$ltid=10;
} else{	
$ltid=999;

}

if($ltid>=1&&$ltid<=10){
include("./ini/ltmb_ini.php");	
$ltbw=($iniFile->getItem('擂台更新','初始'));

if($ltbw>=1){	
$ltbw=$ltbw-1;
$iniFile->updItem('擂台更新', ['初始' => $ltbw]);	
echo "<font color=black>恭喜你！！【天下第一武道会】的属性已更新，接受来自全区的大佬比武中</font>"."<br>";


$zlid=$ltid;
include("./sql/mysql.php");//调用数据库连接 
 $wjxx="";
 $wjxx1="";
include("./ini/zt_ini.php");
$wd01=($iniFile->getItem('玩家信息','玩家名字'));
$wd08=($iniFile->getItem('玩家信息','门派'));
$wd03=0;
include("./wj/ztt.php");
include("./wj/zfzt.php");

$wd04=$wjxx1[血];
$wd05=$wjxx1[max攻击];
$wd06=$wjxx1[max魔攻];
$wd07=$wjxx1[max防御];


$q2="all_ltbw";
mysql_query("set names utf8");
$strsql = "update $q2 set wjid='$wjid',wjmz='$wd01',lthp='$wd04',ltgj='$wd05',ltmg='$wd06',ltfy='$wd07',ltmp='$wd08' where id=$zlid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/ltbw_ini.php");
$iniFile->updItem('玩家擂台排名', [$zlid => $wjid]);
$iniFile->updItem('占领玩家', [$zlid => $wd01]);
$iniFile->updItem('占领玩家id', [$zlid => $wjid]);
$iniFile->updItem('比武hp', [$zlid => $wd04]);
$iniFile->updItem('比武攻击', [$zlid => $wd05]);
$iniFile->updItem('比武魔攻', [$zlid => $wd06]);
$iniFile->updItem('比武防御', [$zlid => $wd07]);
$iniFile->updItem('比武门派', [$zlid => $wd08]);

} else{	
echo "<font color=black>对不起！！您今日在【天下第一武道会】的更新次数已用完</font>"."<br>";

}




} else{	
echo "<font color=black>对不起！！您还未在【天下第一武道会】拿到名次，无需更新武道会属性</font>"."<br>";
}





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回武道场</font></a>"."<font color=black></font>"."<br>";

} else{	
}

//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini
	
	

?>