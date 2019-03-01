<?php




//调用zt.ini是否存在
   
include("./ini/tx_ini.php");







# 获取一个分类下所有数据
$wpid=($iniFile->getCategory('头衔id'));
# 获取一个分类下所有数据
$wpmz=($iniFile->getCategory('头衔名字'));

# 获取一个分类下所有数据
$txxs=($iniFile->getCategory('头衔显示'));

$m=count($wpid,0)-1; 
$i=0;

$ym=$wpid[初始];

$km=0;

//将ini值存入数组方便使用
foreach(array_keys($wpmz) as $key){
$keywpmz[]=$wpmz[$key];
}
foreach(array_keys($txxs) as $key){
$keytxxs[]=$txxs[$key];
}
foreach(array_keys($wpid) as $key){
$keywpid[]=$wpid[$key];
}
$xxh=0;


echo "<font color=black>当前拥有称号：</font>"."<br>";
//将ini值存入数组方便使用
for($d=0;$d<$m;$d++){
$i=$i+1;
$xxh=$xxh+1;
$ivd=$keywpid[$i];
$mvz=$keywpmz[$i];
$svl=$keytxxs[$i];

echo "<font color=black>".$xxh.".</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=252;
$npc[]=$ivd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$mvz</font></a>";

if($svl ==2){
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=253;
$npc[]=$ivd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>不显示</font></a>"."<br>";
} elseif($svl ==1){
echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=253;
$npc[]=$ivd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>显示</font></a>"."<br>";
	
	
	
	
	
} else{

}








}

if($i ==0){
	echo "<font color=black>目前还未获得任何称号</font>"."<br>";
	
	
} else{

}









echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回状态</font></a>"."<br>";
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


?>