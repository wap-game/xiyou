<?php



//////////pk和死亡
include("./yq/yq5.php");	



//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	



	
	
	
	
	
	
	
//人物
$jnidd=$npcc;	
include("./ini/npc_ini.php");
$npcc=($iniFile->getItem('怪物编号','1号'));
//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;
//获取返回战斗页面
if ($cljpost==130){//世界boss
include("./npc/bossxx.php");
} else{	
include("./npc/npcxx.php");

}

include("./wp/jnxx.php");
$dgts="<font color=black>你对".$nname."使用了一招".$jnmz."</font>"."<br>";

include("./wj/sh01.php");//调用怪物和自己基础数据
include("./wj/sh02.php");//运算伤害数据
//人物


//宠物
include("./ini/npc_ini.php");
$cwcz2=($iniFile->getItem('怪物编号','初始'));//宠物出战状态
//获取宠物属性

if($cwcz2==2){
$cwidd=($iniFile->getItem('怪物1号属性','初始'));//宠物出战id
include("./wj/cwsh01.php");//调用怪物和宠物基础数据
include("./wj/cwsh02.php");//运算伤害数据
} else{
} 


//宠物






if($mppppd!=1){

} else{	
echo "<font color=black>对不起！你的MP不足以使用".$jnmz."</font>"."<br>";
} 




if($wjssh!=""&&$wjssh<=0){//自己死亡
include("template/xy349.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif ($dxssh!=""&&$dxssh<=0){//对象死亡


//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;
//获取返回战斗页面


if ($cljpost==130){//世界boss




include("template/xy387.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");




} else{	

include("template/xy350.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
}











} elseif ($dxssh!=""&&$wjssh!=""&&$wjssh>0&&$dxssh>0) {//正在战斗未分出胜负

//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;
//获取返回战斗页面


if ($cljpost==130){//世界boss
include("template/xy130.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{	
include("template/xy010.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
}









} else{	

if($mppppd==1){
include("template/xy130.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");	
	
} else{	
echo "<font color=black>对不起！战斗信息有误！联系GM解决</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
echo "<br>";
echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
}
} 


/*
//记录刷bug玩家

$bugtime = microtime(true);  
$ip = $_SERVER['REMOTE_ADDR'];
include("./ini/bug_ini.php");
$bugtime1=($iniFile->getItem('bug检测','初始'));
$bugtime3=($bugtime-$bugtime1)*1000;
if($bugtime3<=1500){

$inina="bug".$wjid.".ini";
$path='acher/bug';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,$ip);


} else{	
$iniFile->updItem('bug检测', ['初始' => $bugtime]);
}


*/






} else{	

} 
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>