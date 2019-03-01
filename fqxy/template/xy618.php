<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("wj/ztt.php");
//动态祝福加成数据
include("wj/zfzt.php");


include("./ini/ltbwsx_ini.php");	
$n001=($iniFile->getItem('擂台玩家属性','玩家名字'));
$n002=($iniFile->getItem('擂台玩家属性','玩家hp'));
$n003=($iniFile->getItem('擂台玩家属性','玩家maxhp'));
$n004=($iniFile->getItem('擂台玩家属性','玩家攻击'));
$n005=($iniFile->getItem('擂台玩家属性','玩家魔攻'));
$n006=($iniFile->getItem('擂台玩家属性','玩家防御'));
$n007=($iniFile->getItem('擂台玩家属性','玩家门派'));


$nmz=$n001;
$nhp=$n002;
$nmaxhp=$n003;
$nmaxgj=$n004;
$nmaxmg=$n005;
$nmaxfy=$n006;
$nwjmp=$n007;






//动态祝福加成数据

include("./wj/zfzt.php");
$ohp=$wjxx[红];
$omaxhp=$wjxx1[血];
$omaxgj=$wjxx1[max攻击];
$omaxmg=$wjxx1[max魔攻];
$omaxfy=$wjxx1[max防御];

include("./ini/user_ini.php");
$yymid=($iniFile->getItem('最后页面id','页面id'));
//运算伤害
if($yymid==618){

include("./wj/ltpk01.php");

} else{

include("./ini/ltmb_ini.php");	
$ltbw=($iniFile->getItem('擂台比武','初始'));
$ltbw=$ltbw-1;
$iniFile->updItem('擂台比武', ['初始' => $ltbw]);

} 



//调用zt.ini是否存在
   $wjxx="";
     $wjxx1="";
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("wj/ztt.php");
//动态祝福加成数据
include("wj/zfzt.php");


include("./ini/ltbwsx_ini.php");	
$n001=($iniFile->getItem('擂台玩家属性','玩家名字'));
$n002=($iniFile->getItem('擂台玩家属性','玩家hp'));
$n003=($iniFile->getItem('擂台玩家属性','玩家maxhp'));


$nmz=$n001;
$nhp=$n002;
$nmaxhp=$n003;
$ohp=$wjxx[红];
$omaxhp=$wjxx1[血];	
	

if($nhp<=1){
include("template/xy620.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
exit;
} else{
} 

if($ohp<=1){

//恢复自己满血
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['红' => '1000']);
include("template/xy619.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
exit;
} else{
} 





include("./ini/zd_ini.php");
# 获取一个分类下所有数据
$jnnid=($iniFile->getCategory('快捷技能id'));
$jnnfl=($iniFile->getCategory('快捷分类'));
$jnnmz=($iniFile->getCategory('快捷名字'));
//将ini值存入数组方便使用
foreach(array_keys($jnnid) as $key){
$keyjnnid[]=$jnnid[$key];
}
foreach(array_keys($jnnfl) as $key){
$keyjnnfl[]=$jnnfl[$key];
}
foreach(array_keys($jnnmz) as $key){
$keyjnnmz[]=$jnnmz[$key];
}

$jnid1=$keyjnnid[1];
$jnid2=$keyjnnid[2];
$jnid3=$keyjnnid[3];
$jnid4=$keyjnnid[4];
$jnid5=$keyjnnid[5];
$jnid6=$keyjnnid[6];
$jnid7=$keyjnnid[7];
$jnid8=$keyjnnid[8];
$jnid9=$keyjnnid[9];


$jnfl1=$keyjnnfl[1];
$jnfl2=$keyjnnfl[2];
$jnfl3=$keyjnnfl[3];
$jnfl4=$keyjnnfl[4];
$jnfl5=$keyjnnfl[5];
$jnfl6=$keyjnnfl[6];
$jnfl7=$keyjnnfl[7];
$jnfl8=$keyjnnfl[8];
$jnfl9=$keyjnnfl[9];


$jnmz1=$keyjnnmz[1];
$jnmz2=$keyjnnmz[2];
$jnmz3=$keyjnnmz[3];
$jnmz4=$keyjnnmz[4];
$jnmz5=$keyjnnmz[5];
$jnmz6=$keyjnnmz[6];
$jnmz7=$keyjnnmz[7];
$jnmz8=$keyjnnmz[8];
$jnmz9=$keyjnnmz[9];

$jnfl=$jnfl1;
$jnid=$jnid1;
$jnnamex=$jnmz1;
$jn=1;
include("./wj/ltxx.php");




$jnfl=$jnfl2;
$jnid=$jnid2;
$jnnamex=$jnmz2;
$jn=2;
include("./wj/ltxx.php");

$jnfl=$jnfl3;
$jnid=$jnid3;
$jnnamex=$jnmz3;
$jn=3;
include("./wj/ltxx.php");
if($dxsh>=1){
$dxsh="-".$dxsh;
} elseif($dxsh==0&&$dxsh!=""){  
$dxsh="-".$dxsh;
} else{
$dxsh="";	
} 


if($pk003>=1){
$wjsh=$pk003;
if($wjsh>=1){
$wjsh="-".$wjsh;
} elseif($wjsh==0&&$wjsh!=""){  
$wjsh="-".$wjsh;
} else{
$wjsh="";	
} 	
} else{	
if($wjsh>=1){

$wjsh="-".$wjsh;
} elseif($wjsh==0&&$wjsh!=""){  
$wjsh="-".$wjsh;
} else{
$wjsh="";	
} 
} 







//显示对方
echo "<font color=black>".$nmz.":</font>"."<br>";
echo "<font color=black>HP:(".$nhp."/".$nmaxhp.")".$dxsh."</font>"."<br>";

//显示对方

echo "<font color=black>----------</font>"."<br>";
echo "<font color=red>自己:</font>"."<br>";
//显示自己
echo "<font color=black>HP:(".$ohp."/".$omaxhp.")".$wjsh."</font>"."<br>";

//显示自己



$jnfl=$jnfl4;
$jnid=$jnid4;
$jnnamex=$jnmz4;
$jn=4;
include("./wj/ltxx.php");
$jnfl=$jnfl5;
$jnid=$jnid5;
$jnnamex=$jnmz5;
$jn=5;
include("./wj/ltxx.php");
$jnfl=$jnfl6;
$jnid=$jnid6;
$jnnamex=$jnmz6;
$jn=6;
include("./wj/ltxx.php");
$jnfl=$jnfl7;
$jnid=$jnid7;
$jnnamex=$jnmz7;
$jn=7;
include("./wj/ltxx.php");
$jnfl=$jnfl8;
$jnid=$jnid8;
$jnnamex=$jnmz8;
$jn=8;
include("./wj/ltxx.php");
$jnfl=$jnfl9;
$jnid=$jnid9;
$jnnamex=$jnmz9;
$jn=9;
include("./wj/ltxx.php");
echo "<font color=black>===================</font>"."<br>";



echo "<br>";





echo "<font color=black>----------------------</font>"."<br>";






//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回武道大会</font></a>"."<font color=black></font>"."<br>";





} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>