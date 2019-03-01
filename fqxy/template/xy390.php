<?php

//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
include("./ini/pkxx_ini.php");
$npcck=($iniFile->getItem('怪物编号','2号'));
$wjid1=$wjid;
$ckid=$npcck;
$wjid=$ckid;
$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){
	
	
	//查询是否有出战宠物
include("./ini/cw_ini.php");
$ncwcz=($iniFile->getCategory('宠物出战状态'));
$m=count($ncwcz,0)-1; 
if($m>=1){
$ncwczid1=($iniFile->getCategory('宠物id'));	
foreach(array_keys($ncwcz) as $key){
$ncwcz1[]=$ncwcz[$key];
}
foreach(array_keys($ncwczid1) as $key){
$ncwcz3[]=$ncwczid1[$key];
}
$i=-1;
for($x=0;$x<=$m;$x++){	
$i=$i+1;
if($ncwcz1[$i]==2){
$ncwidd=$ncwcz3[$i];
$ncwcz2=2;	
break;
} 
} 
} else{
$ncwcz2=1;		
} 
	
	$zbid=$ncwidd;
include("./ini/cw_ini.php");
//获取宠物属性
if($ncwcz2==2||$ncwcz2==3){
$zbid=$ncwidd;
include("./ini/cw_ini.php");
$ncww01=($iniFile->getItem('宠物名字',$zbid));
$ncww02=($iniFile->getItem('宠物hp',$zbid));
$zbid=$ncwidd;
$cwidd=$zbid;
include("./wj/cwztt.php");
$ncwxx1=($iniFile->getCategory('宠物信息'));
$ncww03=$ncwxx1[血];
} else{
} 

	
	
	
$wjid=$wjid1;	
//人物对战人物
$jnidd=$npcc;	
include("./ini/pkxx_ini.php");
$nwjxx=($iniFile->getCategory('怪物1号属性'));

include("./wp/jnxx.php");
if($ncww02 ==2){//优先获得宠物数据
echo "<font color=black>你对".$nwjxx[名字]."的".$ncww01."使用了一招".$jnmz."</font>"."<br>";
} else{
echo "<font color=black>你对".$nwjxx[名字]."使用了一招".$jnmz."</font>"."<br>";	
} 

include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;



include("./wj/sh01.php");//调用怪物和自己基础数据
include("./wj/sh02.php");//运算伤害数据




//查询是否有出战宠物
include("./ini/npc_ini.php");

$cwcz2=($iniFile->getItem('怪物编号','初始'));//宠物出战状态
$cwidd=($iniFile->getItem('怪物1号属性','初始'));//宠物出战id

if($cwcz2==2){
$zbid=$cwidd;
include("./ini/cw_ini.php");
//获取宠物属性
if($cwcz2==2||$cwcz2==3){
$zbid=$ncwidd;
include("./ini/cw_ini.php");
$cww01=($iniFile->getItem('宠物名字',$zbid));
$cww02=($iniFile->getItem('宠物hp',$zbid));
$zbid=$cwidd;
$cwidd=$zbid;
include("./wj/cwztt.php");
$cwxx1=($iniFile->getCategory('宠物信息'));
$cww03=$cwxx1[血];
} else{
} 
$cwpdsh=2;
include("./wj/cwsh01.php");//调用怪物和自己基础数据
include("./wj/cwsh02.php");//调用怪物和自己基础数据

} else{

}

if($ncwcz2==2){

include("./ini/npc_ini.php");
$cwidd=($iniFile->getItem('怪物1号属性','初始'));//宠物出战id
include("./wj/cwsh01.php");//调用怪物和自己基础数据
include("./wj/cwsh02.php");//调用怪物和自己基础数据
} else{
} 





include("./ini/pk_ini.php");
$swid=($iniFile->getItem('被打死','初始'));

if($swid!=999){
//判断谁死亡了

if($ncwwjsh1<0){
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
$wjid=$wjid1;	
$npcc=$ckid;
include("template/xy391.php");
include("./pz/pz01.php");


} elseif ($wjxx[红]<0){
	
	
	

} elseif ($wjxx[红]>0&&$ncwwjsh1>0) {//正在战斗未分出胜负


//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
$wjid=$wjid1;	
$npcc=$ckid;
include("template/xy389.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{	
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
$wjid=$wjid1;	
$npcc=$ckid;
include("template/xy389.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

}
} else{	




//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
$wjid=$wjid1;	
$npcc=$ckid;
include("template/xy395.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");




}





} else{	
}



//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini





?>