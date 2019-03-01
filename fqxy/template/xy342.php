<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
	//阻塞代码防止出现脏数据
	$ggmz="gz";
$ininalock1=$ggmz."_lock".".txt";
include("./ini/zsggini.php");


if($zsspd==1&&$zsspd1==1){


if($npcc==1){
$gzname="【青龙居】（仙）";
} elseif ($npcc==2) {
$gzname="【朱雀居】（仙）";
} elseif ($npcc==3) {
$gzname="【玄武居】（仙）";
} elseif ($npcc==4) {
$gzname="【白虎居】（仙）";

} elseif ($npcc==5) {
$gzname="【君临天下】（仙）";

} elseif ($npcc==6) {
$gzname="【唯我独尊】（仙）";

} elseif ($npcc==7) {
$gzname="【雄霸天下】（仙）";

} elseif ($npcc==8) {
$gzname="【盖世英雄】（仙）";

} elseif ($npcc==9) {
$gzname="【绝世枭雄】（仙）";

} elseif ($npcc==10) {
$gzname="【龙吟九霄】（仙）";
} elseif ($npcc==11) {
$gzname="【钟灵毓秀】（仙）";

} elseif ($npcc==12) {
$gzname="【招财进宝】（仙）";

} elseif ($npcc==13) {
$gzname="【富可敌国】（仙）";

} elseif ($npcc==14) {
$gzname="【富贵荣华】（仙）";

} elseif ($npcc==15) {
$gzname="【金玉满堂】（仙）";

} elseif ($npcc==16) {
$gzname="【至尊神殿】（仙）";

} elseif ($npcc==17) {
$gzname="【飘渺阁】（仙）";

} elseif ($npcc==18) {
$gzname="【醉心阁】（仙）";
} elseif ($npcc==19) {
$gzname="【凌烟阁】（仙）";
} elseif ($npcc==20) {
$gzname="【藏龙阁】（仙）";
} elseif ($npcc==21) {
$gzname="【绝天魔宫】（仙）";


} elseif ($npcc==22) {
$gzname="【青龙居】（魔）";
} elseif ($npcc==23) {
$gzname="【朱雀居】（魔）";
} elseif ($npcc==24) {
$gzname="【玄武居】（魔）";
} elseif ($npcc==25) {
$gzname="【白虎居】（魔）";

} elseif ($npcc==26) {
$gzname="【君临天下】（魔）";

} elseif ($npcc==27) {
$gzname="【唯我独尊】（魔）";

} elseif ($npcc==28) {
$gzname="【雄霸天下】（魔）";

} elseif ($npcc==29) {
$gzname="【盖世英雄】（魔）";

} elseif ($npcc==30) {
$gzname="【绝世枭雄】（魔）";

} elseif ($npcc==31) {
$gzname="【龙吟九霄】（魔）";
} elseif ($npcc==32) {
$gzname="【钟灵毓秀】（魔）";

} elseif ($npcc==33) {
$gzname="【招财进宝】（魔）";

} elseif ($npcc==34) {
$gzname="【富可敌国】（魔）";

} elseif ($npcc==35) {
$gzname="【富贵荣华】（魔）";

} elseif ($npcc==36) {
$gzname="【金玉满堂】（魔）";

} elseif ($npcc==37) {
$gzname="【至尊神殿】（魔）";

} elseif ($npcc==38) {
$gzname="【飘渺阁】（魔）";

} elseif ($npcc==39) {
$gzname="【醉心阁】（魔）";
} elseif ($npcc==40) {
$gzname="【凌烟阁】（魔）";
} elseif ($npcc==41) {
$gzname="【藏龙阁】（魔）";
} elseif ($npcc==42) {
$gzname="【绝天魔宫】（魔）";


} else{	

$gzname="";

}




if($gzname!=""){
include("./ini/gz_ini.php");
$gzfzid=$npcc;
$gzfz01=($iniFile->getItem('官宅持有人id',$gzfzid));
$gzfz02=($iniFile->getItem('官宅持有人名字',$gzfzid));

if($gzfz01==$wjid){
	//调用zt.ini是否存在
include("./ini/zt_ini.php");

$fz02=($iniFile->getItem('玩家信息','住宅分类'));
	
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
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$gzname."</font></a>"."<br>";
	} else{	



echo "<font color=black>进入住宅出现问题请联系小轩GM解决</font>"."<br>";

	
}
	
	






} elseif ($gzfz01=="") {
echo "<font color=black>".$gzname."还未出售，可前往开封广场进行购买</font>"."<br>";



} else{	

echo "<font color=black>对不起！你无权进入".$gzname."归玩家".$gzfz02."所有</font>"."<br>";
}



} else{	
echo "<font color=black>此处官宅有问题，请联系小轩GM解决此问题</font>"."<br>";
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