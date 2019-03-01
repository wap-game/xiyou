<?php

//调用dw.ini是否存在
   
include("./ini/dw_ini.php");



//查询是否有队伍

$m=0;
$inina="dw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$dwid=($iniFile->getItem('队伍id','已加队伍id'));

$wjid1=$wjid;



if ($dwid>10000000){

if ($dwid!=$wjid1){
$wjid=$dwid;
} elseif($dwid!=$wjid1){
$wjid=$wjid1;
} else{

}




//调用dw.ini是否存在
include("./ini/dw_ini.php");

$inina="dw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);


# 获取一个分类下所有数据
$ltpx=($iniFile->getCategory('玩家排序'));
# 获取一个分类下所有数据
$ltpxm=($iniFile->getCategory('玩家排序1'));
# 获取一个分类下所有数据
$ltwjid=($iniFile->getCategory('玩家id'));
# 获取一个分类下所有数据
$ltwjvip=($iniFile->getCategory('玩家vip'));
# 获取一个分类下所有数据
$ltwjname=($iniFile->getCategory('玩家名字'));
$dwid1=($iniFile->getItem('队伍id','已加队伍id'));

foreach(array_keys($ltwjid) as $key){
$keyltwjid[]=$ltwjid[$key];
}
foreach(array_keys($ltpx) as $key){
$keyltpx[]=$ltpx[$key];
}
foreach(array_keys($ltpxm) as $key){
$keyltpxm[]=$ltpxm[$key];
}
foreach(array_keys($ltwjvip) as $key){
$keyltwjvip[]=$ltwjvip[$key];
}
foreach(array_keys($ltwjname) as $key){
$keyltwjname[]=$ltwjname[$key];
}


$m=count($ltpx,0)-1; 	
$wjid=$wjid1;
echo "<font color=black>当前队伍（".$m."/4）</font><br>";



$i=0;
for($b=0;$b<$m;$b++){

$i=$i+1;

if ($dwid1==$keyltwjid[$i]){
echo "<font color=black>队长：</font>";
$img='pic/vip/'."vip".$keyltwjvip[$i].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	

if ($wjid1==$keyltwjid[$i]){
	
	echo "<font color=black>".$keyltwjname[$i]."</font>";
	
		} else{
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$keyltwjid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keyltwjname[$i]."</font></a>";

	}







echo "</br>";
	} else{

	} 


}
	
	
$i=0;

for($b=0;$b<$m;$b++){
$i=$i+1;

if ($dwid1!=$keyltwjid[$i]){
	
echo "<font color=black>队员：</font>";


$img='pic/vip/'."vip".$keyltwjvip[$i].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	

if ($wjid1==$keyltwjid[$i]){
	
	echo "<font color=black>".$keyltwjname[$i]."</font>";
	
		} else{
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$keyltwjid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keyltwjname[$i]."</font></a>";

	}
	
	
	if ($wjid1==$dwid1){
	
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=112;
$npc[]=$keyltwjid[$i];

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>踢出</font></a>"."<br>";
	} else{
		

echo "</br>";
	} 


	} else{

	} 



}


	
	if ($wjid1==$dwid1){
	echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=113;
$npc[]=$wjid1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>解散队伍</font></a>"."<br>";
	} else{
		echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=113;
$npc[]=$dwid1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开队伍</font></a>"."<br>";
	} 

	

	
	


	} else{
echo "<font color=black>我的队伍：</font><br>";
echo "<font color=black>当前还未有队伍</font><br>";
	}





	$wjid=$wjid1;


echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "<font color=black>----------------------</font></a>"."<br>";
//cmd及超链接值
include("fhgame.php");


?>








