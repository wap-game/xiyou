<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
	//阻塞代码防止出现脏数据
	$ggmz="qggz";
$ininalock1=$ggmz."_lock".".txt";
include("./ini/zsggini.php");


if($zsspd==1&&$zsspd1==1){


//调用lt.ini是否存在
   
include("./ini/qggz_ini.php");


$qgxx=($iniFile->getCategory('求购信息'));
$qgmz=($iniFile->getCategory('求购人'));
$qgmzid=($iniFile->getCategory('求购人id'));
$qgjg=($iniFile->getCategory('求购价格'));
$m=count($qgxx,0)-1; 

echo "<font color=black>求购描述/求购人/求购价格</font>"."<br>";
echo "<br>";
if($m>=1){




//将ini值存入数组方便使用
foreach(array_keys($qgxx) as $key){
$keyqgxx[]=$qgxx[$key];
}
foreach(array_keys($qgmz) as $key){
$keyqgmz[]=$qgmz[$key];
}
foreach(array_keys($qgmzid) as $key){
$keyqgmzid[]=$qgmzid[$key];
}
foreach(array_keys($qgjg) as $key){
$keyqgjg[]=$qgjg[$key];
}



$i=0;
$xhh=0;
for($x=0;$x<$m;$x++){
$i=$i+1;
$xhh=$xhh+1;
$qg01= $keyqgxx[$i];
$qg02= $keyqgmz[$i];
$qg03= $keyqgmzid[$i];
$qg04= $keyqgjg[$i];



echo "<font color=black>".$xhh.".".$qg01."-".$qg02."(".$qg04."豆/1套)|</font>";


if($qg03==$wjid){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=321;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>撤消求购</font></a>"."<br>";

} else{	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=322;
$npc[]=$qg03;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>出售官宅</font></a>"."<br>";


}







}









} else{	


echo "<font color=black>暂时没有官宅求购信息</font>"."<br>";









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
include("./ini/jsggini.php");
//解锁当前使用的ini

?>