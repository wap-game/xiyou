<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));


if($dtx==78||$dtx==79){
 echo "<font color=black>对不起！！你正在挑战内请先离开</font><br>";
  	
	
} else{	



//调用zt.ini是否存在
include("./ini/zt_ini.php");
$fz=($iniFile->getItem('玩家信息','住宅id'));
$fz02=($iniFile->getItem('玩家信息','住宅分类'));
$fz01=($iniFile->getItem('玩家信息','住宅名字'));

if($fz>=1){
//操作合法调用购买房子代码
include("./ini/user_ini.php");
# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));



if($dtx ==71||$dtx==72||$dtx==73){
echo "<font color=black>你已经在住宅里面了无需重复进入</font>"."<br>";


} else{

	echo "<font color=red>".$fz01."</font>"."<br>";
	
	
	
if($fz02==1){	
$fz02=166;
} elseif($fz02 ==2){
$fz02=167;
} elseif($fz02 ==3){
$fz02=168;
} else{
$zzcw=1;
}
	
	
	
if($zzcw!=1){	
	
	
	
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=$fz02;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$fz01."</font></a>"."<br>";
	
	} else{	



echo "<font color=black>进入住宅出现问题请联系小轩GM解决</font>"."<br>";

	
}
	
	
	

}


















} else{	
echo "<font color=black>你暂时还没有住宅,请前往开封广场进行选购</font>"."<br>";
}




} 



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