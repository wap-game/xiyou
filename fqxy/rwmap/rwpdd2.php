<?php
include("./ini/zxrw_ini.php");
$rw1=($iniFile->getCategory('任务id'));
$rw2=($iniFile->getCategory('任务变量'));
$rw3=($iniFile->getCategory('已杀怪'));
$rw4=($iniFile->getCategory('要杀怪'));
$rw5=($iniFile->getCategory('任务分类'));
$rw6=($iniFile->getCategory('任务名字'));

include("./rwmap/rwpdd.php");

if ($m>=2) {//多项任务
$i=-1;
$ik=0;
for($d=0;$d<$m;$d++){
$i=$i+1;
$ik=$ik+1;
if ($rwbl5[$i]==1) {
$rwflmz="（主线）";
} elseif ($rwbl5[$i]==2) {
$rwflmz="（支线）";
} elseif ($rwbl5[$i]==3) {
$rwflmz="（日常）";
} elseif ($rwbl5[$i]==4) {
$rwflmz="（活动）";
} elseif ($rwbl5[$i]==5) {
$rwflmz="（日常）";
} else {
}
echo "<font color=black>".$ik.".</font>";

$strr1=$rwbl1[$i]."_".$rwbl5[$i]."_".$npcc;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$rwbl6[$i].$rwflmz."</font></a>"."<br>";
}
}
?>







