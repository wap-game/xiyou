<?php



//随机将正确数字写入
include("./ini/jcyx_ini.php");
$jcgk=($iniFile->getItem('竞猜关卡','初始'));
if($jcgk<10){

$jc3=1;
if($jcgk==1){
$jc1=200;
} elseif($jcgk==2){   
$jc1=400;
} elseif($jcgk==3){   
$jc1=800;
} elseif($jcgk==4){   
$jc1=1600;
} elseif($jcgk==5){   
$jc1=3200;
} elseif($jcgk==6){   
$jc1=6400;
} elseif($jcgk==7){   
$jc1=12800;
} elseif($jcgk==8){   
$jc1=25600;
} elseif($jcgk==9){   
$jc1=51200;
} elseif($jcgk==10){   
$jc1=102400;
} else {
$jc1=9999999999;	
} 
$jcid= rand(1, $jc1);
$jcid1= rand(1, $jc1);
$jcid2=$jcid+$jcid1;
$iniFile->updItem('竞猜答案', ['初始' => $jcid]);
$iniFile->updItem('竞猜答案1', ['初始' => $jcid2]);
$iniFile->updItem('竞猜答案2', ['初始' => '1']);
$iniFile->updItem('竞猜关卡', ['初始' => $jcgk+1]);

} else {
include("./ini/jcyx_ini.php");	
$iniFile->updItem('竞猜关卡', ['初始' => '1']);	
	
echo "<font color=red>恭喜你！！竞猜已通关！！</font>"."<br>";
$jc3=2;
} 


if($jc3==1){
$jcgkk=$jcgk+1;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=682;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【继续勇闯第".$jcgkk."关】</font></a>"."<br>";
} else {
} 





echo "</br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

?>
