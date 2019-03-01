<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

	include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$fzfl =($iniFile->getItem('玩家信息','住宅分类'));
	
//调用家具缓存
include("./ini/jj_ini.php");
# 获取一个分类下所有数据$
$jjxx1=($iniFile->getCategory('家具id'));
$jjxx2=($iniFile->getCategory('家具等级'));
$jjxx3=($iniFile->getCategory('家具摆放'));
$jjxx4=($iniFile->getCategory('家具名字'));
$m=count($jjxx1,0)-1; 
	
echo "<font color=black>我的家具：</font>"."<br>";
	if($m>=1){
foreach(array_keys($jjxx1) as $key){
$keyjjxx1[]=$jjxx1[$key];
}
foreach(array_keys($jjxx2) as $key){
$keyjjxx2[]=$jjxx2[$key];
}
foreach(array_keys($jjxx3) as $key){
$keyjjxx3[]=$jjxx3[$key];
}
foreach(array_keys($jjxx4) as $key){
$keyjjxx4[]=$jjxx4[$key];
}





$i=0;
for($d=0;$d<$m;$d++){
$i=$i+1;

$xxh=$xxh+1;	



if($jjxx1[$i]==22||$jjxx1[$i]==37||$jjxx1[$i]==23||$jjxx1[$i]==39||$jjxx1[$i]==24||$jjxx1[$i]==41){


echo "<font color=black>".$xxh.".</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjxx1[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keyjjxx4[$i]."</font></a>";


} else{

echo "<font color=black>".$xxh.".</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjxx1[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keyjjxx4[$i]."(".$keyjjxx2[$i]."级)</font></a>";

}








if($keyjjxx3[$i]==1){
echo "<font color=black>(未摆放)</font>";
echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=162;
$npc[]=$jjxx1[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>摆放</font></a>";
	} else{	
echo "<font color=black>(已摆放)</font>";
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=163;
$npc[]=$jjxx1[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取消摆放</font></a>";
}
	




if($fzfl==1){

$zgdj=3;//民宅家具最高等级
if($keyjjxx2[$i]<$zgdj){

if($keyjjxx1[$i]!=22&&$keyjjxx1[$i]!=37&&$keyjjxx1[$i]!=36){
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=164;
$npc[]=$jjxx1[$i];

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>升级</font></a>"."<br>";
} else{
	echo "<br>";
}




} else{

echo "<br>";

}



} elseif($fzfl==2){ 
$zgdj=5;//豪宅家具最高等级
if($keyjjxx2[$i]<$zgdj){

if($keyjjxx1[$i]!=23&&$keyjjxx1[$i]!=38&&$keyjjxx1[$i]!=39){
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=164;
$npc[]=$jjxx1[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>升级</font></a>"."<br>";
} else{
	echo "<br>";
}
} else{

echo "<br>";

}

} elseif($fzfl==3){ 

$zgdj=10;//官宅家具最高等级
if($keyjjxx2[$i]<$zgdj){
if($keyjjxx1[$i]!=40&&$keyjjxx1[$i]!=41&&$keyjjxx1[$i]!=24){
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=164;
$npc[]=$jjxx1[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>升级</font></a>"."<br>";
} else{
	echo "<br>";
}
} else{

echo "<br>";

}

} else{



}

	
	
	
	
	
	
}
	
	
	
	
	
	
	
	
	
	
	
	

	
	} else{	
	
	echo "<font color=black>你还未拥有家具</font>"."<br>";
	
}
	
	
	
	
	
echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=5387;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回管家</font></a>"."<br>";






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