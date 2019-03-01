<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


include("./pz/pz06.php");//调用可以捕捉的宠物id

if ($cwbz==2) {
 
 //传递宠物伤害
 //调用大数运算
include("./wp/func1.php");
 //////////////////造成自己伤害//////////////////
 include("./wj/sh01.php");
 include("./wj/sh03.php");
//////////////////造成自己伤害//////////////////
 include("./ini/npc_ini.php");
$npcc=($iniFile->getItem('怪物编号','1号'));
include("./npc/npcxx.php");
 if($wjssh!=""&&$wjssh<=0){//自己死亡
 include("template/xy349.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

 




} else{	
 //随机的概率捕捉到宠物
 $bz= rand(1, 100);//随机
if($bz >=1&&$bz<=$bzgl){
//随机的概率捕捉到宠物
 include("template/xy360.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


 
} else{	

 $bz1= rand(1, 100);//随机//逃跑概率

if($bz1 >=1&&$bz1<=$tpgl){	
	
echo "<font color=red>你对".$nname."使用了捕捉！！</font>"."<br>";	
echo "<font color=red>但是捕捉失败了！！</font>"."<br>";	
include("template/xy010.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{	

include("template/xy361.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

 
 } 
 
 
 
 


}



}



} else{	
 include("./ini/npc_ini.php");
 $yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;
//获取返回战斗页面

if($yymid==130){
 
 $npcc=($iniFile->getItem('怪物编号','1号'));
include("./npc/bossxx.php");
echo "<font color=red>对不起！！你不能对".$nname."使用宠物捕捉！！！</font>"."<br>";
 
 include("template/xy130.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
 } else{	
$npcc=($iniFile->getItem('怪物编号','1号'));
include("./npc/npcxx.php");
echo "<font color=red>对不起！！你不能对".$nname."使用宠物捕捉！！！</font>"."<br>";




include("template/xy010.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
 }

} 
} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>