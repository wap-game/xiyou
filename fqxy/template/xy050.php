<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['经验', '等级']));


$lvl=$wjxx[等级];
$wjjy=$wjxx[经验];

//页面值
$q5=50;



//当前等级升级所需要的经验
$lvl1=($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+200;




if($wjjy >=$lvl1){

$lvl2=0;

} else{


$lvl2=$lvl1-$wjjy;

}


if($lvl ==200&&$lvl2==0){

echo "<font color=black>恭喜你已达到目前游戏未解封最高等级敬请期待下步游戏解封等级</font>"."<br>";

} else{






//数字转汉字
$yl=$lvl2;
include("./pz/ylts.php");




echo "<font color=black>当前等级升级还需要:</font>".$ylxx."<font color=black>经验</font>"."<br>";
}




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回状态</font></a>"."<br>";
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