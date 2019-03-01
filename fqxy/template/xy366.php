<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$cwidd=$npcc;


if($cwidd!=""){



//调用cw.ini是否存在
include("./ini/cw_ini.php");
$cwmz1=($iniFile->getItem('宠物原始名字',$cwidd));
$cwmz2=($iniFile->getItem('宠物名字',$cwidd));
if($cwmz2!=""){
$cwmz3="<font color=red>".$cwmz1."（".$cwmz2."）装备如下：</font>"."<br>";
} else{	
$cwmz3="<font color=red>".$cwmz1."装备如下：</font>"."<br>";
}
$zbid=$cwidd;
//调用cwzbb.ini是否存在
include("./ini/cwzbb_ini.php");
# 获取一个分类下所有数据
$zbid=($iniFile->getCategory('装备id'));
$xl=($iniFile->getCategory('序列'));
$id=($iniFile->getCategory('id'));
# 获取一个分类下所有数据
$zbmz=($iniFile->getCategory('装备名字'));

$zbxj=($iniFile->getCategory('装备星级'));

$zbk1=($iniFile->getCategory('装备孔1'));
$zbk2=($iniFile->getCategory('装备孔2'));
$zbk3=($iniFile->getCategory('装备孔3'));
$zbk4=($iniFile->getCategory('装备孔4'));
$zbk5=($iniFile->getCategory('装备孔5'));

$zbxq1=($iniFile->getCategory('装备镶嵌1'));
$zbxq2=($iniFile->getCategory('装备镶嵌2'));
$zbxq3=($iniFile->getCategory('装备镶嵌3'));
$zbxq4=($iniFile->getCategory('装备镶嵌4'));
$zbxq5=($iniFile->getCategory('装备镶嵌5'));
$zbfl=($iniFile->getCategory('装备分类'));

$m=count($zbid,0)-1; 
$ym=$zbid[初始];
$km=0;
$i=0;

//将ini值存入数组方便使用
foreach(array_keys($zbmz) as $key){
$keyzbmz[]=$zbmz[$key];
}
foreach(array_keys($zbid) as $key){
$keyzbid[]=$zbid[$key];

}
foreach(array_keys($zbxj) as $key){
$keyzbxj[]=$zbxj[$key];
}
foreach(array_keys($zbk1) as $key){
$keyzbk1[]=$zbk1[$key];
}
foreach(array_keys($zbk2) as $key){
$keyzbk2[]=$zbk2[$key];
}

foreach(array_keys($zbk3) as $key){
$keyzbk3[]=$zbk3[$key];
}

foreach(array_keys($zbk4) as $key){
$keyzbk4[]=$zbk4[$key];
}
foreach(array_keys($zbk5) as $key){
$keyzbk5[]=$zbk5[$key];
}
foreach(array_keys($zbxq1) as $key){
$keyzbxq1[]=$zbxq1[$key];
}
foreach(array_keys($zbxq2) as $key){
$keyzbxq2[]=$zbxq2[$key];
}
foreach(array_keys($zbxq3) as $key){
$keyzbxq3[]=$zbxq3[$key];
}
foreach(array_keys($zbxq4) as $key){
$keyzbxq4[]=$zbxq4[$key];
}
foreach(array_keys($zbxq5) as $key){
$keyzbxq5[]=$zbxq5[$key];
}
foreach(array_keys($zbfl) as $key){
$keyzbfl[]=$zbfl[$key];
}
//将ini值存入数组方便使用


for($d=0;$d<=$m;$d++){
$i=$i+1;

$idd[]=$keyzbid[$i];


$mz[]=$keyzbmz[$i];
$xvjj=$keyzbxj[$i];
include("./wp/zbxj.php");
$xvj[]=$xjname;

$zbfl[]=$keyzbfl[$i];

$zbkk1=$keyzbk1[$i];
$zbkk2=$keyzbk2[$i];
$zbkk3=$keyzbk3[$i];
$zbkk4=$keyzbk4[$i];
$zbkk5=$keyzbk5[$i];

$zbxqq1=$keyzbxq1[$i];
$zbxqq2=$keyzbxq2[$i];
$zbxqq3=$keyzbxq3[$i];
$zbxqq4=$keyzbxq4[$i];
$zbxqq5=$keyzbxq5[$i];

//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxbs[]=$xbs;




}


$i=-1;
for($d=0;$d<=$m;$d++){
$i=$i+1;
$clname= $mz[$i];
$str=$idd[$i];
$xxxbs=$xxbs[$i];
$zbxjj=$xvj[$i];
$zbfll=$zbfl[$i];

if($zbfll ==1){
$czbmz1=$zbxjj.$xxxbs.$clname;
$strr1=$str;


} elseif($zbfll ==2){
$czbmz2=$zbxjj.$xxxbs.$clname;
$strr2=$str;

} elseif($zbfll ==3){
$czbmz3=$zbxjj.$xxxbs.$clname;
$strr3=$str;

} elseif($zbfll ==4){
$czbmz4=$zbxjj.$xxxbs.$clname;
$strr4=$str;

} elseif($zbfll ==5){
$czbmz5=$zbxjj.$xxxbs.$clname;
$strr5=$str;

} elseif($zbfll ==6){
$czbmz6=$zbxjj.$xxxbs.$clname;
$strr6=$str;

} elseif($zbfll ==7){
$czbmz7=$zbxjj.$xxxbs.$clname;
$strr7=$str;

} elseif($zbfll ==8){
$czbmz8=$zbxjj.$xxxbs.$clname;
$strr8=$str;

} elseif($zbfll ==9){
$czbmz9=$zbxjj.$xxxbs.$clname;
$strr9=$str;

} elseif($zbfll ==10){
$czbmz10=$zbxjj.$xxxbs.$clname;
$strr10=$str;






} else{

}

}








/*
if($czbmz1!=""){
$strr1=$strr1."_".$cwidd;	
echo "<font color=black>法宝：</font></a>";	
$strr1=$strr1."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz1."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";
} else{

$zbmz1="无";
echo "<font color=black>坐骑：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="1_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";



}

*/

/*

if($czbmz2!=""){
echo "<font color=black>坐骑：</font></a>";	
$strr2=$strr2."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz2."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";
} else{
$zbmz1="无";
echo "<font color=black>坐骑：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="2_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";


}

*/

if($czbmz3!=""){
echo "<font color=black>手持：</font></a>";	
$strr3=$strr3."_".$cwidd;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz3."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>手持：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="3_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";

}


if($czbmz4!=""){
echo "<font color=black>身穿：</font></a>";	
$strr4=$strr4."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz4."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";
} else{

$zbmz1="无";
echo "<font color=black>身穿：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="4_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";


}

if($czbmz5!=""){
echo "<font color=black>头戴：</font></a>";	
$strr5=$strr5."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz5."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";
} else{

$zbmz1="无";
echo "<font color=black>头戴：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="5_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";

}


if($czbmz6!=""){


echo "<font color=black>脚穿：</font></a>";	
$strr6=$strr6."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz6."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";





} else{

$zbmz1="无";
echo "<font color=black>脚穿：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="6_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";



}





if($czbmz7!=""){
echo "<font color=black>佩戴：</font></a>";	
$strr7=$strr7."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz7."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";
} else{

$zbmz1="无";
echo "<font color=black>佩戴：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="7_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";


}



if($czbmz8!=""){
echo "<font color=black>首饰：</font></a>";	
$strr8=$strr8."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz8."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";
} else{

$zbmz1="无";
echo "<font color=black>首饰：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="8_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";


}


/*

if($czbmz9!=""){
echo "<font color=black>婚戒：</font></a>";	
$strr9=$strr9."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz9."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";
} else{

$zbmz1="无";
echo "<font color=black>婚戒：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="9_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";




}



if($czbmz10!=""){
echo "<font color=black>婚链：</font></a>";	
$strr10=$strr10."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$strr10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$czbmz10."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=374;
$npc[]=$strr10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";


} else{

$zbmz1="无";
echo "<font color=black>婚链：".$zbmz1."</font></a>";
echo "<font color=black>|</font></a>";
$strr3="10_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=372;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";




}






echo "<br>";

*/




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