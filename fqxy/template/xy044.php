<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){








$rw33=0;
//调用zt.ini是否存在
include("./ini/yxrw_ini.php");
$rwid3=($iniFile->getCategory('日常任务'));
$rw33=count($rwid3,0)-1; 









include("./ini/zxrw_ini.php");
$rwfl=($iniFile->getCategory('任务分类'));
$m=count($rwfl,0)-1; 
$rw1=0;
$rw2=0;
$rw3=0;
$rw4=0;
$rw5=0;
$i=0;
if($m>=1){
foreach(array_keys($rwfl) as $key){
$keyrwfl[]=$rwfl[$key];
}
for($d=0;$d<$m;$d++){
$i=$i+1;
if($keyrwfl[$i]==1){
$rw1=$rw1+1;
}	
if($keyrwfl[$i]==2){
$rw2=$rw2+1;
}	
if($keyrwfl[$i]==4){
$rw4=$rw4+1;
}	
if($keyrwfl[$i]==5){
$rw5=$rw5+1;
}	
}	
} else{	

}

$rw3=$rw33+$rw5;








//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=45;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>主线任务（".$rw1."）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=46;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>支线任务（".$rw2."）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=47;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>日常任务（".$rw3."）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=48;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>活动任务（".$rw4."）</font></a>"."<br>";
echo "----------------------"."<br>";


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