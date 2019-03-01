<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){





$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$zbid=$npcc."_".$npccid;
$zbid1=$zbid;
$wpidd=$npcc;
$cwid1=$arr[2];
$cwid2=$arr[3];
$cwid3=$cwid1."_".$cwid2;
$cwid4=$zbid."_".$cwid3;
$zbid=$cwid3;
include("./ini/cwzbb_ini.php");
$zbid=$zbid1;
include("./wp/zbxx.php");

$xj=($iniFile->getItem('装备星级',$zbid));



if($xj>=0&&$xj<=53){


if($xj!=0){

if($xj!=18||$xj!=27||$xj!=36||$xj!=45||$xj!=54){
$xjj=$xj%9;


if($xjj==0){
$xjj=9;
}


} else{

$xjj=9;

}




} else{

$xjj="无";


}

include("./zbdz/xj.php");

echo "<font color=black>装备：".$xjname.$wp1."</font></a>"."<br>";
echo "<font color=black>星级：".$xjname.$xjj."星</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=384;
$npc[]=$cwid4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开始升星】</font></a>"."<br>";


echo "<font color=black>温馨提示：点击开始升星会自动消耗掉背包中所对应的升星符，此方法升星成功率为百分之百！</font></a>"."<br>";


} else{
	
	
echo "<font color=red>该装备已是目前满星级装备无需继续提升了！！</font></a>"."<br>";



}





echo "<br>";

$cwid3=$zbid."_".$cwid3;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$cwid3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";


echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");



} else{	

} 
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>