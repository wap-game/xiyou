<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=81;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我的装备</font></a>";
echo "<font color=black>|</font>";
echo "<font color=red>我的时装</font>"."<br>";

//调用zbb.ini是否存在
   
include("./ini/zbb_ini.php");


//ini文件名字
$inina="zbb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

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
include("wp/zbxj.php");
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

if($zbfll ==12){
$czbmz1=$zbxjj.$xxxbs.$clname;
$strr1=$str;


} elseif($zbfll ==13){
$czbmz2=$zbxjj.$xxxbs.$clname;
$strr2=$str;

} elseif($zbfll ==14){
$czbmz3=$zbxjj.$xxxbs.$clname;
$strr3=$str;

} elseif($zbfll ==15){
$czbmz4=$zbxjj.$xxxbs.$clname;
$strr4=$str;

} elseif($zbfll ==16){
$czbmz5=$zbxjj.$xxxbs.$clname;
$strr5=$str;

} elseif($zbfll ==17){
$czbmz6=$zbxjj.$xxxbs.$clname;
$strr6=$str;

} elseif($zbfll ==18){
$czbmz7=$zbxjj.$xxxbs.$clname;
$strr7=$str;

} elseif($zbfll ==19){
$czbmz8=$zbxjj.$xxxbs.$clname;
$strr8=$str;

} elseif($zbfll ==20){
$czbmz9=$zbxjj.$xxxbs.$clname;
$strr9=$str;

} elseif($zbfll ==21){
$czbmz10=$zbxjj.$xxxbs.$clname;
$strr10=$str;







} else{

}

}







echo"<font color=black>您的时装如下：</font></a>"."<br>";


if($czbmz1!=""){
echo "<font color=black>翅膀：</font></a>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr1;


//颜色控制
$arr = explode("_",$strr1);
$colorid=$arr[0];
if($colorid>=257&&$colorid<=277){
$color1="red";
} else{
$color1="blue";	
}
//颜色控制


echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color1.">".$czbmz1."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>翅膀：".$zbmz1."</font></a>"."<br>";
}





if($czbmz2!=""){
echo "<font color=black>武器：</font></a>";	

//颜色控制
$arr = explode("_",$strr2);
$colorid=$arr[0];
if($colorid==9999){
$color2="red";
} else{
$color2="blue";	
}
//颜色控制
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color2.">".$czbmz2."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>武器：".$zbmz1."</font></a>"."<br>";
}



if($czbmz3!=""){
echo "<font color=black>副手：</font></a>";	

//颜色控制
$arr = explode("_",$strr3);
$colorid=$arr[0];
if($colorid>=453&&$colorid<=553){
$color3="red";
} else{
$color3="blue";	
}
//颜色控制
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color3.">".$czbmz3."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>副手：".$zbmz1."</font></a>"."<br>";
}


if($czbmz4!=""){
echo "<font color=black>面具：</font></a>";	
//颜色控制
$arr = explode("_",$strr4);
$colorid=$arr[0];
if($colorid>=453&&$colorid<=553){
$color4="red";
} else{
$color4="blue";	
}
//颜色控制
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color4.">".$czbmz4."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>面具：".$zbmz1."</font></a>"."<br>";
}

if($czbmz5!=""){
echo "<font color=black>衣服：</font></a>";	
//颜色控制
$arr = explode("_",$strr5);
$colorid=$arr[0];
if($colorid>=453&&$colorid<=553){
$color5="red";
} else{
$color5="blue";	
}
//颜色控制
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color5.">".$czbmz5."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>衣服：".$zbmz1."</font></a>"."<br>";
}


if($czbmz6!=""){
echo "<font color=black>鞋子：</font></a>";	
//颜色控制
$arr = explode("_",$strr6);
$colorid=$arr[0];
if($colorid>=453&&$colorid<=553){
$color6="red";
} else{
$color6="blue";	
}
//颜色控制
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color6.">".$czbmz6."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>鞋子：".$zbmz1."</font></a>"."<br>";
}





if($czbmz7!=""){
echo "<font color=black>戒指：</font></a>";	
//颜色控制
$arr = explode("_",$strr7);
$colorid=$arr[0];
if($colorid>=453&&$colorid<=553){
$color7="red";
} else{
$color7="blue";	
}
//颜色控制
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color7.">".$czbmz7."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>戒指：".$zbmz1."</font></a>"."<br>";
}



if($czbmz8!=""){
echo "<font color=black>项链：</font></a>";	
//颜色控制
$arr = explode("_",$strr8);
$colorid=$arr[0];
if($colorid>=453&&$colorid<=553){
$color8="red";
} else{
$color8="blue";	
}
//颜色控制
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color8.">".$czbmz8."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>项链：".$zbmz1."</font></a>"."<br>";
}




if($czbmz9!=""){
echo "<font color=black>披风：</font></a>";	
//颜色控制
$arr = explode("_",$strr9);
$colorid=$arr[0];
if($colorid>=558&&$colorid<=561){
$color9="red";
} else{
$color9="blue";	
}
//颜色控制
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color9.">".$czbmz9."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>披风：".$zbmz1."</font></a>"."<br>";
}



if($czbmz10!=""){
echo "<font color=black>勋章：</font></a>";	
//颜色控制
$arr = explode("_",$strr10);
$colorid=$arr[0];
if($colorid>=558&&$colorid<=561){
$color10="red";
} else{
$color10="blue";	
}
//颜色控制

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$strr10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=".$color10.">".$czbmz10."</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=84;
$npc[]=$strr10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>卸下</font></a>"."<br>";

} else{
$zbmz1="无";
echo "<font color=black>勋章：".$zbmz1."</font></a>"."<br>";
}

















echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回状态</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br/>";






echo "----------------------"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=1;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏首页</font></a>"."<br/>";
} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>