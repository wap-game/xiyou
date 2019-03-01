<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
if($npcc==1){
$csbs=1;
} elseif($npcc==2){   
$csbs=2;
} elseif($npcc==3){   
$csbs=5;
} elseif($npcc==4){   
$csbs=10;
} elseif($npcc==5){   
$csbs=20;
} elseif($npcc==6){   
$csbs=50;
} elseif($npcc==7){  
$csbs=100;
} elseif($npcc==8){  
$csbs=200;
} elseif($npcc==9){  
$csbs=500;

 
} else{	
}



include("./ini/moneybs_ini.php");
$iniFile->updItem('财神倍数', ['初始' => $csbs]);
echo "<font color=red>你选择了财神".$csbs."倍场，加油哦~~~（".$csbs."财神币/次）</font>"."<br>";


echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=564;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<font color=black></font>"."<br>";



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>