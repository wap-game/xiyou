<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
include("./ini/zbb_ini.php");
# 获取一个分类下某个子项的值
$zbid=($iniFile->getItem('装备星级','初始'));
if($cmdd==73){
$iniFile->updItem('装备孔1', ['初始' => $npcc]);
} else{

}
//保存页面id方便分页使用


if($cmdd==73){
//调用yl.ini是否存在
   
include("./ini/yl_ini.php");

$iniFile->updItem('背包页面', ['页面id' => $cmdd]);
} else{

}







echo"<font color=black>请放入你需要镶嵌进装备的宝石</font></a>"."<br>";
include("./ini/qt_ini.php");




# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他数量', ['初始' => 35]);



# 获取一个分类下所有数据
$wpid=($iniFile->getCategory('其他id'));
# 获取一个分类下所有数据
$wpmz=($iniFile->getCategory('其他名字'));

# 获取一个分类下所有数据
$wpsl=($iniFile->getCategory('其他数量'));

$m=count($wpid,0)-1; 
$i=0;

$ym=$wpid[初始];

$km=0;





//将ini值存入数组方便使用
foreach(array_keys($wpmz) as $key){
$keywpmz[]=$wpmz[$key];
}
foreach(array_keys($wpsl) as $key){
$keywpsl[]=$wpsl[$key];
}
foreach(array_keys($wpid) as $key){
$keywpid[]=$wpid[$key];
}
//将ini值存入数组方便使用













for($d=0;$d<$m;$d++){
$i=$i+1;

$ivd=$keywpid[$i];
$mvz=$keywpmz[$i];
$svl=$keywpsl[$i];



if($svl>100){

$mm=$svl;
$mc=intval(floor($mm/100))+1;
$km=$km+$mc;
$xd=$mc-1;


for($x=0;$x<=$xd-1;$x++){

	
$mz[]=$mvz;
$iid[]=$ivd;
}
for($x=0;$x<=$xd-1;$x++){


$ssl[]=100;

}
if($mm%100>0){
$mz[]=$mvz;
$iid[]=$ivd;
$ssl[]=$mm%100;
} else{
$km=$km-1;
}


} else{
$mmz[]=$mvz;
$ssl[]=$svl;
$iid[]=$ivd;
$km=$km+1;
$mz[]=$mvz;
//echo $mmz[0];
}






}






$i=-1;
$mcc=$km/10;


if($mcc>=$ym){


for($x=0;$x<=9;$x++){

$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];



if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=74;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl</font>"."<br>";
}

}


} else{

if($ym>=1){
$mcc=$km%10;
$i=-2;
for($x=0;$x<=$mcc;$x++){
$i=$i+1;


$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];



if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=74;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl</font>"."<br>";
}


}
} else{
$i=-1;
for($x=0;$x<=$km-1;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];


$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];


if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=74;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl</font>"."<br>";
}



}


}





}





$f=0;

if($ym!=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=40;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>首页</font></a>";
echo  "<font color=blue>|</font></a>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=39;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>上页</font></a>";

$f=1;

}
$mcc=$km/10;
if($f>0&&$mcc>$ym){
echo  "<font color=blue>|</font></a>";
}



$mcc=$km/10;
if($mcc>$ym){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=38;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下页</font></a>";
echo  "<font color=blue>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=41;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>末页</font></a>";
$f=1;
}

if($f>0){
echo "<br>";
}



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$zbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>