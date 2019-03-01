<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$cwidd=$npcc."_".$npccid;
if($npccid!=""){


//调用cw.ini是否存在
include("./ini/cw_ini.php");
$cw01x=($iniFile->getItem('宠物原始名字',$zbid));
$cw04x=($iniFile->getItem('宠物品质',$zbid));
$cw19x=($iniFile->getItem('宠物变异',$zbid));

$cw04=$cw04x;
$cw19=$cw19x;


if($cw04x==1){
$cw04x="<font color=black>品质：普品</font><br>";	
} elseif($cw04x==2){  
$cw04x="<font color=red>品质：极品</font><br>";
} elseif($cw04x==3){  
$cw04x="<font color=red>品质：灵品</font><br>";
} elseif($cw04x==4){  
$cw04x="<font color=red>品质：仙品</font><br>";
} elseif($cw04x==5){  
$cw04x="<font color=red>品质：神品</font><br>";
} elseif($cw04x==6){  
$cw04x="<font color=red>品质：圣品</font><br>";
} else{	
$cw04x="<font color=black>品质：普品</font><br>";
}
$cw19x=($iniFile->getItem('宠物变异',$zbid));
if($cw19x==1){
$cw19x="<font color=black>变异：无变异</font><br>";	
} elseif($cw19x==2){  
$cw19x="<font color=red>变异：一级变异</font><br>";
} elseif($cw19x==3){  
$cw19x="<font color=red>变异：二级变异</font><br>";
} elseif($cw19x==4){  
$cw19x="<font color=red>变异：三级变异</font><br>";
} elseif($cw19x==5){  
$cw19x="<font color=red>变异：四级变异</font><br>";
} elseif($cw19x==6){  
$cw19x="<font color=red>变异：五级变异</font><br>";
} else{	
$cw19x="<font color=black>变异：无变异</font><br>";
}




//调用宠物属性加成
include("./wj/cwsx.php");
$arr1 = explode("_",$zbid);
$cwid=$arr1[0];
//获取宠物基础属性
include("./cw/cwxx.php");
//初始maxhp，maxmp，攻击，防御，魔攻

//maxhp
$djhp=ceil((($ndj+15)*($ndj+15)*2+$nmaxhp)*$cw04*$cw03*$cw19);

//maxmp
$djmp=ceil((($ndj+30)*($ndj+20)/ 4+$nmp)*$cw04*$cw03*$cw19);

//攻击
$djgj=ceil((($ndj+1)*($ndj+2)*3+$ngj)*$cw04*$cw03*$cw19+300);
//防御
$djfy=ceil((($ndj+1)*($ndj+1)*2+$nfy)*$cw04*$cw03*$cw19+200);
//魔攻
$djmg=ceil((($ndj+1)*($ndj+2)*3+$nmg)*$cw04*$cw03*$cw19+300);



//加成后的属性
//maxhp
$maxhp=$djhp;
//maxmp
$maxmp=$djmp;

//攻击
$djgj=$djgj;
//魔攻
$djmg=$djmg;
//防御
$djfy=$djfy;



$gjj = ceil(($djgj)/ 1.3);
$maxgj=$djgj;

$fyy = ceil(($djfy)/ 1.3);
$maxfy=$djfy;

$mgg = ceil(($djmg)/ 1.3);
$maxmg=$djmg;

$bg=$nbg;
$hg=$nhg;
$lg=$nlg;

$bf=$nbf;
$hf=$nhf;
$lf=$nlf;

echo  "<font color=red>【宠物初始属性一览】</font><br>";


echo "<font color=red>品种：".$cw01x."</font>";



$zbid=$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=370;
$npc[]=$zbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp&nbsp放生</font></a>"."<br>";

echo $cw04x;
echo $cw19x;


echo  "<font color=black>HP：".$maxhp."</font><br>";
echo  "<font color=black>MP：".$maxmp."</font><br>";
echo "<font color=black>攻击：".$gjj."-".$maxgj."</font><br/>";
echo "<font color=black>魔攻：".$mgg."-".$maxmg."</font><br/>";
echo "<font color=black>防御：".$fyy."-".$maxfy."</font><br/>";
echo  "<font color=black>攻击元素：冰+</font>".$bg."<font color=black>&nbsp火+</font>".$hg."<font color=black>&nbsp雷+</font>".$lg."<br>";
echo  "<font color=black>防御元素：冰+</font>".$bf."<font color=black>&nbsp火+</font>".$hf."<font color=black>&nbsp雷+</font>".$lf."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=365;
$npc[]=$cwidd;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=362;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宠物</font></a>"."<br>";
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
echo "<font color=red>宠物有误！！请联系GM解决此问题</font>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}










} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>