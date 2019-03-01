<?php


$qdy= date('m')*1;
if($qdy ==1){
$qdy="一月";
} elseif($qdy ==2){
$qdy="二月";
} elseif($qdy ==3){
$qdy="三月";
} elseif($qdy==4){   
$qdy="四月";
} elseif($qdy ==5){
$qdy="五月";
} elseif($qdy ==6){
$qdy="六月";
} elseif($qdy==7){   
$qdy="七月";
} elseif($qdy==8){   
$qdy="八月";
} elseif($qdy==9){   
$qdy="九月";
} elseif($qdy==10){   
$qdy="十月";
} elseif($qdy==11){   
$qdy="十一月";
} elseif($qdy==12){   
$qdy="十二月";
} else{	
$qdy="错误月";
}

echo "<font color=red>【".$qdy."签到活动奖励】</font>"."<br>";




echo "<font color=black>每日签到随机获得铁铜银金钻魂</font>"."<br>";


echo "<font color=red>=====2次签到奖励=====</font>"."<br>";
echo "<font color=black>随机得以下物品：</font>"."<br>";
echo "<font color=black>〖打孔器〗x2〖铁魂〗x10〖铜魂〗x10【小蟠桃】x10【蟠桃】x10【VIP练级卷】x1</font>"."<br>";




echo "<font color=red>=====2次签到奖励=====</font>"."<br>";

echo "<br>";
echo "<font color=red>=====5次签到奖励=====</font>"."<br>";
echo "<font color=black>随机得以下物品：</font>"."<br>";
echo "<font color=black>〖普通打孔器〗x2〖铁魂〗x30〖铜魂〗x30【小蟠桃】x20【蟠桃】x20【VIP练级卷】x2</font>"."<br>";


echo "<font color=red>=====5次签到奖励=====</font>"."<br>";



echo "<br>";
echo "<font color=red>=====10次签到奖励=====</font>"."<br>";


echo "<font color=black>随机得以下物品：</font>"."<br>";
echo "<font color=black>〖普通打孔器〗x5〖铜魂〗x50〖银魂〗x50〖小智慧果〗x1【蟠桃】x20【三千年蟠桃】x20【VIP练级卷】x5</font>"."<br>";


echo "<font color=red>=====10次签到奖励=====</font>"."<br>";


echo "<br>";
echo "<font color=red>=====15次签到奖励=====</font>"."<br>";

echo "<font color=black>〖普通打孔器〗x8〖银魂〗x50〖金魂〗x50〖小智慧果〗x2【三千年蟠桃】x20【六千年蟠桃】x20【VIP练级卷】x10</font>"."<br>";

echo "<font color=red>=====15次签到奖励=====</font>"."<br>";


echo "<br>";
echo "<font color=red>=====25次签到奖励=====</font>"."<br>";
echo "<font color=black>〖高级打孔器〗x10〖金魂〗x50〖钻魂〗x50〖大智慧果〗x2【六千年蟠桃】x20【九千年蟠桃】x20【VIP练级卷】x10</font>"."<br>";

echo "<font color=red>=====25次签到奖励=====</font>"."<br>";



echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=409;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";


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