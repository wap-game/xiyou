<?php

include("./ini/zt_ini.php");
$npcc=($iniFile->getItem('玩家信息','配偶id'));
$wjid1=$wjid;
if($npcc>10000000){

//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");


$wjid1=$wjid;
$wjid=$npcc;
$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");




$wjid=$wjid1;

if($zsspd==1&&$zsspd2==1){

include("./ini/zt_ini.php");
$jh02=($iniFile->getItem('玩家信息','配偶id'));

if($jh02>10000000){
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
$strsql = "update $q2 set peiou='0',peiouid=0 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");
$pomz=($iniFile->getItem('玩家信息','配偶名字'));
$iniFile->updItem('玩家信息', ['配偶名字' => '0']);
$iniFile->updItem('玩家信息', ['配偶id' => '0']);
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));

$wjid=$npcc;
include("./ini/zt_ini.php");
$jhh02=($iniFile->getItem('玩家信息','配偶id'));

if($jh02==$wjid){
$q2="all_zt";
$strsql = "update $q2 set peiou='0',peiouid=0 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['配偶名字' => '0']);
$iniFile->updItem('玩家信息', ['配偶id' => '0']);
} else{	

}



//调用msg.ini是否存在
 $wjtake="与你离婚了！从此安分守己，再也不说浪迹天涯！！！";
//调用msg.ini是否存在
 //$wjtake="离开了你的队伍";
include("./ini/msg_ini.php");
$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
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
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 






echo "<font color=red>恭喜你！与".$pomz."离婚成功！！从此寻花问柳，闭口不谈厮守一生~~~</font>"."<br>";






} else{	
echo "<font color=red>对不起！你还是单身</font>"."<br>";
}





} else{	
}

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini







} else{	

echo "<font color=red>对不起！你还是单身</font>"."<br>";
}

$wjid=$wjid1;


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");






?>








