<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//调用cw.ini是否存在
include("./ini/cw_ini.php");
$lvl=($iniFile->getItem('宠物等级',$npcc));
$jy=($iniFile->getItem('宠物经验',$npcc));



//当前等级升级所需要的经验
$lvl1=($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+200;



if($jy >=$lvl1){

$lvl2=0;

} else{


$lvl2=$lvl1-$jy;

}


if($lvl ==200&&$lvl2==0){

echo "<font color=red>恭喜你的宠物已达到了最高等级</font>"."<br>";

} else{





//数字转汉字
$yl=$lvl2;
include("./pz/ylts.php");




echo "<font color=black>当前宠物升级还需要:</font>".$ylxx."<font color=black>经验</font>"."<br>";
}




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=365;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

echo "<br>";
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
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>