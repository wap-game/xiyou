<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$cwidd=$npcc;
$arr1 = explode("_",$cwidd);
$cwzbfl=$arr1[0];
$cwidx1=$arr1[1];
$cwidx2=$arr1[2];
$cwidx=$cwidx1."_".$cwidx2;
if($cwidd!=""){


# 修改一个分类下子项的值(也可以修改多个)
$ymid=($iniFile->getItem('背包页面','页面id'));
//调用cw.ini是否存在
include("./ini/yl_ini.php");
$iniFile->updItem('背包页面', ['页面id' => '372']);
//调用zb.ini是否存在
include("./ini/zb_ini.php");
//查询出可以让宠物戴的装备
$zbidd1=($iniFile->getCategory('装备id'));

$m=count($zbidd1,0)-1; 

if($m>=1){

foreach(array_keys($zbidd1) as $key){
$keyzbidd1[]=$zbidd1[$key];
}
$i=0;
for($x=0;$x<=$m-1;$x++){	
$i=$i+1;
//调用物品信息
$arr = explode("_",$keyzbidd1[$i]);
$npcc=$arr[0];
include("./wp/zbxx.php");

if($wp29==7&&$cwzbfl==$wp30){
$cwzbid[]=$keyzbidd1[$i];
$cwzbmz[]=$wp1;

$xvjj=($iniFile->getItem('装备星级',$keyzbidd1[$i]));
include("./wp/zbxj.php");
$xvj[]=$xjname;

$zbkk1=($iniFile->getItem('装备孔1',$keyzbidd1[$i]));
$zbkk2=($iniFile->getItem('装备孔2',$keyzbidd1[$i]));
$zbkk3=($iniFile->getItem('装备孔3',$keyzbidd1[$i]));
$zbkk4=($iniFile->getItem('装备孔4',$keyzbidd1[$i]));
$zbkk5=($iniFile->getItem('装备孔5',$keyzbidd1[$i]));
$zbxqq1=($iniFile->getItem('装备镶嵌1',$keyzbidd1[$i]));
$zbxqq2=($iniFile->getItem('装备镶嵌2',$keyzbidd1[$i]));
$zbxqq3=($iniFile->getItem('装备镶嵌3',$keyzbidd1[$i]));
$zbxqq4=($iniFile->getItem('装备镶嵌4',$keyzbidd1[$i]));
$zbxqq5=($iniFile->getItem('装备镶嵌5',$keyzbidd1[$i]));
//装备名字前加镶嵌的宝石
include("./wp/xbs.php");
$xxbs[]=$xbs;











}
}
$m=count($cwzbid,0); 



if($m>=1){
echo "<font color=black>可以给宠物穿戴的装备如下：</font><br>";

$i=-1;
$ik=0;

for($x=0;$x<=$m-1;$x++){	
$i=$i+1;
$ik=$ik+1;
echo "<font color=black>".$ik.".</font>";
echo "<font color=black>".$xvj[$i].$xxbs[$i].$cwzbmz[$i]."</font>";


$strt=$cwzbid[$i]."_".$cwidd;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=373;
$npc[]=$strt;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>穿戴</font></a>"."<br>";

}



} else{	
echo "<font color=black>你还没有此类宠物装备</font>";
} 


echo "<br>";





} else{	
echo "<font color=black>你还没有此类宠物装备</font>";
} 
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=366;
$npc[]=$cwidx;
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




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");









} else{	
echo "<font color=red>穿戴宠物装备有误！！请联系GM解决此问题</font>"."<br>";

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