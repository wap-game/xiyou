<?php

//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckid=($iniFile->getItem('最后页面id','ckid'));

$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];





//调用装备信息
include("./wp/zbxx.php");


	
//ini文件名字
$inina="gszb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

$iniFile->updItem('装备星级', ['初始' => $zbid]);



# 获取一个分类下某个子项的值
$xvjj=($iniFile->getItem('装备星级',$zbid));
$zbkk1=($iniFile->getItem('装备孔1',$zbid));
$zbkk2=($iniFile->getItem('装备孔2',$zbid));
$zbkk3=($iniFile->getItem('装备孔3',$zbid));
$zbkk4=($iniFile->getItem('装备孔4',$zbid));
$zbkk5=($iniFile->getItem('装备孔5',$zbid));
$zbxqq1=($iniFile->getItem('装备镶嵌1',$zbid));
$zbxqq2=($iniFile->getItem('装备镶嵌2',$zbid));
$zbxqq3=($iniFile->getItem('装备镶嵌3',$zbid));
$zbxqq4=($iniFile->getItem('装备镶嵌4',$zbid));
$zbxqq5=($iniFile->getItem('装备镶嵌5',$zbid));
//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
include("wp/zbxj.php");
$zbxjj=$xjname;
$clname=$wp1;


//宝石镶嵌属性
$xqmg=0;
$xqfy=0;
$xgxl=0;
$xggj=0;


if($zbkk1>0){
if($zbxqq1>0){
$bsid=$zbxqq1;
include("wp/zbbs.php");//npc页面
$xqmg=$xqmg+$bsmg;
$xqfy=$xqfy+$bsfy;
$xqxl=$xqxl+$bsxl;
$xqgj=$xqgj+$bsgj;


} else{
}
}

if($zbkk2>0){
if($zbxqq2>0){
$bsid=$zbxqq2;
include("wp/zbbs.php");//npc页面
$xqmg=$xqmg+$bsmg;
$xqfy=$xqfy+$bsfy;
$xqxl=$xqxl+$bsxl;
$xqgj=$xqgj+$bsgj;
} else{
}
}


if($zbkk3>0){
if($zbxqq3>0){
$bsid=$zbxqq3;
include("wp/zbbs.php");//npc页面
$xqmg=$xqmg+$bsmg;
$xqfy=$xqfy+$bsfy;
$xqxl=$xqxl+$bsxl;
$xqgj=$xqgj+$bsgj;
} else{
}
}


if($zbkk4>0){
if($zbxqq4>0){
$bsid=$zbxqq4;
include("wp/zbbs.php");//npc页面
$xqmg=$xqmg+$bsmg;
$xqfy=$xqfy+$bsfy;
$xqxl=$xqxl+$bsxl;
$xqgj=$xqgj+$bsgj;
} else{
}
}




if($zbkk5>0){
if($zbxqq5>0){
$bsid=$zbxqq5;
include("wp/zbbs.php");//npc页面
$xqmg=$xqmg+$bsmg;
$xqfy=$xqfy+$bsfy;
$xqxl=$xqxl+$bsxl;
$xqgj=$xqgj+$bsgj;
} else{
}
}



$xjxl=0;
$xjgj=0;
$xjmg=0;
$xjfy=0;
include("wp/xj.php");

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








echo "<font color=red>".$zbxjj.$xxxbs.$clname."</font>"."<br>";
echo "<font color=black>描述：".$wp2."</font>"."<br>"; 	
echo "<font color=black>星级：".$zbxjj.$xjj."&nbsp&nbsp星</font></a>"."<br>";

echo "<font color=black>价格：".$wp27."&nbsp&nbsp两</font>"."<br>";
echo "<font color=black>重量：".$wp25."</font>"."<br>"; 	
echo "<font color=black>门派：".$wp29."</font>"."<br>"; 	
echo "<font color=black>需要等级：".$wp24."&nbsp&nbsp级</font>"."<br>"; 	
echo "<font color=black>是否绑定：".$wp26."</font>"."<br>"; 	


if($wp14>0||$xqxl>0){

$wp14=$wp14+$xjxl+$xqxl;
echo "<font color=black>血量：$wp14</font>"."<br>"; 
}
if($wp15>0||$xqgj>0){

$wp15=$wp15+$xjgj+$xqgj;
$wpp15 = ceil(($wp15)/ 1.3);
echo "<font color=black>攻击：".$wpp15."-".$wp15."</font>"."<br>";
}
if($wp16>0||$xqmg>0){
$wp16=$wp16+$xjmg+$xqmg;

$wpp16 = ceil(($wp16)/ 1.3);
echo "<font color=black>魔攻：".$wpp16."-".$wp16."</font>"."<br>";
}
if($wp17>0||$xqfy>0){

$wp17=$wp17+$xjfy+$xqfy;
$wpp17 = ceil(($wp17)/ 1.3);
echo "<font color=black>防御：".$wpp17."-".$wp17."</font>"."<br>";

}





if($zbkk1>0){
echo "<font color=black>孔一：</font>";

if($zbxqq1>0){
$bsid=$zbxqq1;
include("wp/zbbs.php");//npc页面
echo "<font color=black>$bsmz</font>"."<br>";
} else{
echo "<font color=black>未镶嵌</font>"."<br>";
}




}

if($zbkk2>0){
echo "<font color=black>孔二：</font>";
if($zbxqq2>0){
$bsid=$zbxqq2;
include("wp/zbbs.php");//npc页面
echo "<font color=black>$bsmz</font>"."<br>";
} else{
echo "<font color=black>未镶嵌</font>"."<br>";
}
}

if($zbkk3>0){
echo "<font color=black>孔三：</font>";
if($zbxqq3>0){
$bsid=$zbxqq3;
include("wp/zbbs.php");//npc页面
echo "<font color=black>$bsmz</font>"."<br>";
} else{
echo "<font color=black>未镶嵌</font>"."<br>";
}
}

if($zbkk4>0){
echo "<font color=black>孔四：</font>";
if($zbxqq4>0){
$bsid=$zbxqq4;
include("wp/zbbs.php");//npc页面
echo "<font color=black>$bsmz</font>"."<br>";
} else{
echo "<font color=black>未镶嵌</font>"."<br>";
}
}

if($zbkk5>0){
echo "<font color=black>孔五：</font>";
if($zbxqq5>0){
$bsid=$zbxqq5;
include("wp/zbbs.php");//npc页面
echo "<font color=black>$bsmz</font>"."<br>";
} else{
echo "<font color=black>未镶嵌</font>"."<br>";
}
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




$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=232;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=226;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回挂售</font></a>"."<br>";


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