<?php



//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));
if($bpid>=1){
include("./ini/bpp_ini.php");
$xl=($iniFile->getItem('序列',$wjid));
$gj06=($iniFile->getItem('国战积分',$xl));
$gj05=($iniFile->getItem('国战死亡次数',$xl));
include("./ini/gz03_ini.php");
$gj03=($iniFile->getItem('国家积分',$bpid));


include("./ini/gz01_ini.php");
$zlgj=($iniFile->getItem('国家名字','100'));
$zlgjid=($iniFile->getItem('国家id','100'));



if($zlgj!=""){

$gj01=$zlgj;

} else{

$gj01="无";
}

if($bpid==$zlgjid){

$gj02="防守方";

} else{

$gj02="进攻方";
}

echo "<font color=red>".$bpmz."的国战信息</font>"."<br>";
echo "<font color=black>国家积分前三甲排名：</font>"."<br>";


include("./ini/gz02_ini.php");
# 获取一个分类下所有数据
$gjxx01=($iniFile->getCategory('id'));
$gjxx02=($iniFile->getCategory('国家积分'));
$m=count($gjxx01,0)-1; 
$i=0;

if ($m>0){

foreach(array_keys($gjxx01) as $key){
$keygjxx01[]=$gjxx01[$key];
}
foreach(array_keys($gjxx02) as $key){
$keygjxx02[]=$gjxx02[$key];
}

for($d=0;$d<$m;$d++){
$i=$i+1;	
$kidd[]=$keygjxx01[$i];
$kid[]=$keygjxx01[$i];
$ki[]=$keygjxx02[$i];
$hm=$hm+1;

}

$mt=0;
for($b=0;$b<$hm;$b++){
$xb[]=$ki[$mt]*10000+$kidd[$mt];
$fb[]=$ki[$mt]*10000;


$mt=$mt+1;
}
if ($hm>0){
rsort($fb);
rsort($xb);
} else{
}

$mt=0;
for($b=0;$b<$hm;$b++){

$xbb[]=$xb[$mt]-$fb[$mt];
$mt=$mt+1;
}

$mm=0;
$i=-1;
$gj04=0;
if ($hm>0){

for($b=0;$b<$hm;$b++){
$i=$i+1;
$xbbb=$xbb[$i];


include("./ini/gz02_ini.php");

$gjid=($iniFile->getItem('国家id',$xbbb));
$gjmz=($iniFile->getItem('国家名字',$xbbb));
$gjjf=($iniFile->getItem('国家积分',$xbbb));

if ($gj04==0){
if ($gjid==$bpid){
$gj04=$mm+1;
} else{
}
} else{
}


$phname[]=$gjmz;
$xue[]=$gjjf;

$mm=$mm+1;

if ($mm>=100){
break;
}
}


}

if ($hm>=1){
echo "<font color=black>1".".".$phname[0]."(".$xue[0]."分)</font></a>"."<br>";





if ($hm>=2){
echo "<font color=black>2".".".$phname[1]."(".$xue[1]."分)</font></a>"."<br>";

} else{

}

if ($hm>=3){
echo "<font color=black>3".".".$phname[2]."(".$xue[2]."分)</font></a>"."<br>";

} else{

}

} else{

echo "<font color=black>当前无任何国家积分排名</font>"."<br>";

}
} else{

echo "<font color=black>当前无任何国家积分排名</font>"."<br>";

}







//获取战场位置和时间变量
$weekarray=array("7","1","2","3","4","5","6");
$week=$weekarray[date("w")];

if($week ==1){
$zcwz="傲来国";
} elseif($week ==2){
$zcwz="宝象国";
} elseif($week ==3){
$zcwz="乌鸡国";
} elseif($week ==4){
$zcwz="女儿国";
} elseif($week ==5){
$zcwz="车迟国";
} elseif($week ==6){
$zcwz="无";
$kfsj="休整";
} elseif($week ==7){
$zcwz="祭赛国";
} else{
$zcwz="无";

}



$gzjs=0;
$h= date('i')*1;
$i= date('i')*1;
$s= date('s')*1;
$yjf=30-$i-1;
$yjm=60-$s-1;

if($h ==21){
if($yjf <=0){

if($i <=29){
echo "<font color=black>".$yjm."秒</font>"."<br>";

$zcsj=$yjm."秒";

} else{

$zcsj="0秒";
}
} else{
$zcsj=$yjf."分".$yjm."秒";
}
} else{

$zcsj="0秒";
}


echo "<font color=black>----------------------</font>"."<br>";
echo "<font color=black>国战剩余时间:".$zcsj."</font>"."<br>";
echo "<font color=black>战场位置：【".$zcwz."】</font>"."<br>";
echo "<font color=black>国家状态：【".$gj02."】</font>"."<br>";
echo "<font color=blue>当前防守：".$gj01."</font>"."<br>";
echo "<font color=black>国家排名：【第".$gj04."名】</font>"."<br>";
echo "<font color=black>国家积分：【".$gj03."分】</font>"."<br>";
echo "<font color=black>我的积分：【".$gj06."分】</font>"."<br>";
echo "<font color=black>剩余死亡次数：【".$gj05."次】</font>"."<br>";


} else{

echo "<font color=red>对不起！你还没有国家</font>"."<br>";
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







?>