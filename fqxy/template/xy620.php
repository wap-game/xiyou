<?php


/////////公共锁
$path='acher/lock';//路径
$lockmz='ltbw_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁

if($all_lock2==1){


include("./ini/ltbwsx_ini.php");	
$zlid=($iniFile->getItem('擂台玩家属性','擂台编号'));
if($zlid>=1&&$zlid<=10){

include("./sql/mysql.php");//调用数据库连接 



//如果有擂台存在则初始化

$m=10;
$zlidd=0;
//判断值是否存在
for($d=0;$d<$m;$d++){
$zlidd=$zlidd+1;

//判断是否存在擂台
include("./ini/ltbw_ini.php");
$ltwjidd=($iniFile->getItem('占领玩家id',$zlidd));

if($ltwjidd==$wjid){

$ltid01=123;
$ltid02=123;
$nowtime=date('Y-m-d H:i:s');
$q2="all_ltbw";
mysql_query("set names utf8");
$strsql = "update $q2 set wjid='$ltid01',wjmz='$ltid02',zltime='$nowtime',zlmb='0',lthp='0',ltgj='0',ltmg='0',ltfy='0',ltmp='0' where id=$zlidd";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/ltbw_ini.php");
//'$ltid','$ltid01','$ltid02','$nowtime','0','0','0','0','0','0'
$iniFile->updItem('玩家擂台排名', [$zlidd => $ltid01]);
$iniFile->updItem('占领玩家', [$zlidd => $ltid01]);
$iniFile->updItem('占领玩家id', [$zlidd => $ltid02]);
$iniFile->updItem('占领时间', [$zlidd => $nowtime]);
$iniFile->updItem('占领膜拜', [$zlidd => '0']);
$iniFile->updItem('比武hp', [$zlidd => '0']);
$iniFile->updItem('比武攻击', [$zlidd => '0']);
$iniFile->updItem('比武魔攻', [$zlidd => '0']);
$iniFile->updItem('比武防御', [$zlidd => '0']);
$iniFile->updItem('比武门派', [$zlidd => '0']);
}


}













 $wjxx="";
 $wjxx1="";
include("./ini/zt_ini.php");
$wd01=($iniFile->getItem('玩家信息','玩家名字'));
$wd08=($iniFile->getItem('玩家信息','门派'));
$wd02=date('Y-m-d H:i:s');
$wd03=0;
include("./wj/ztt.php");
$wd04=($iniFile->getItem('玩家信息','血'));
$wd05=($iniFile->getItem('玩家信息','max攻击'));
$wd06=($iniFile->getItem('玩家信息','max魔攻'));
$wd07=($iniFile->getItem('玩家信息','max防御'));

$q2="all_ltbw";
mysql_query("set names utf8");
$strsql = "update $q2 set wjid='$wjid',wjmz='$wd01',zltime='$wd02',zlmb='$wd03',lthp='$wd04',ltgj='$wd05',ltmg='$wd06',ltfy='$wd07',ltmp='$wd08' where id=$zlid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/ltbw_ini.php");
$ltzlwjid=($iniFile->getItem('占领玩家id',$zlid));



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


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【天下第一武道大会】中获得第".$zlid."名的好成绩，如有不服，天外来战（具体参照擂台）";
include("./msg/msgg02.php");











if($ltzlwjid>10000000){
///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////


$wjid1=$wjid;
$wjid=$wjid;//自己
$u_wjid=$wjid;
include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));


	//调用msg.ini是否存在
 $wjtake="在天下第一武道大会将你打得体无完肤，道馆失守了哦！！请速度前去夺回属于自己的荣耀！！";
 

 
 $wjid=$ltzlwjid;//对方

include("./ini/msg_ini.php");
$hkeyltpx1[]="";
$hltpx1="";
$arr3="";
# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($hltpx1) as $key){
$hkeyltpx1[]=$hltpx1[$key];
}
	
	
$tmp1="排序";
$arr3=$hkeyltpx1;
foreach( $arr3 as $k=>$v) {
    if($tmp1 == $v) unset($arr3[$k]);
}

$ltmax1=max($arr3);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $u_wjid]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 

///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////
$wjid=$wjid1;//自己


} else{	
}






} else{	
}

echo "<font color=red>恭喜你！！比武胜利了~~</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回武道场</font></a>"."<font color=black></font>"."<br>";
	
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