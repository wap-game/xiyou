<?php






//调用装备信息
include("./wp/zbxx.php");





if($wp29==1){
$wp29="将军府";
} elseif($wp29==2){
$wp29="龙宫";
} elseif($wp29==3){
$wp29="月宫";
} elseif($wp29==4){
$wp29="方寸山";
} elseif($wp29==5){
$wp29="普陀山";

} elseif($wp29==6){
$wp29="通用";


} else{
$wp29="未知错误";

}
if($wp26==0){
$wp26="是";
} else{
$wp26="否";

}


echo "<font color=red>".$wp1."</font>"."<br>";
echo "<font color=black>描述：".$wp2."</font>"."<br>"; 	
echo "<font color=black>星级：无&nbsp&nbsp星</font></a>"."<br>";
echo "<font color=black>价格：".$wp27."&nbsp&nbsp两</font>"."<br>";
echo "<font color=black>重量：".$wp25."</font>"."<br>"; 	
echo "<font color=black>门派：".$wp29."</font>"."<br>"; 	
echo "<font color=black>需要等级：".$wp24."&nbsp&nbsp级</font>"."<br>"; 	
echo "<font color=black>是否绑定：".$wp26."</font>"."<br>"; 






if($wp14>0){

$wp14=$wp14+$xjxl+$xqxl;
echo "<font color=black>血量：$wp14</font>"."<br>"; 
}
if($wp15>0){


$wpp15 = ceil(($wp15)/ 1.3);
echo "<font color=black>攻击：".$wpp15."-".$wp15."</font>"."<br>";
}
if($wp16>0){


$wpp16 = ceil(($wp16)/ 1.3);
echo "<font color=black>魔攻：".$wpp16."-".$wp16."</font>"."<br>";
}
if($wp17>0){


$wpp17 = ceil(($wp17)/ 1.3);
echo "<font color=black>防御：".$wpp17."-".$wp17."</font>"."<br>";

}


if($wp18>0||$wp19>0||$wp20>0){
echo "<font color=black>攻击元素：</font>"; 	
}
if($wp18>0){
echo "<font color=black>冰+".$wp18."&nbsp&nbsp</font>"; 
}
if($wp19>0){	
echo "<font color=black>火+".$wp19."&nbsp&nbsp</font>"; 	
}
if($wp20>0){	
echo "<font color=black>雷+".$wp20."&nbsp&nbsp</font>"; 
}

if($wp18>0||$wp19>0||$wp20>0){
echo "<br>"; 	
}
if($wp21>0||$wp22>0||$wp23>0){
echo "<font color=black>防御元素：</font>"; 	
}
if($wp21>0){
echo "<font color=black>冰+".$wp21."&nbsp&nbsp</font>"; 
}
if($wp22>0){	
echo "<font color=black>火+".$wp22."&nbsp&nbsp</font>"; 	
}
if($wp23>0){	
echo "<font color=black>雷+".$wp23."&nbsp&nbsp</font>"; 
}

if($wp21>0||$wp22>0||$wp23>0){
echo "<br>"; 	
}



echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";






echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");





























?>