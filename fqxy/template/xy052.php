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
$wjxx=($iniFile->getItem('玩家信息',['修炼经验开关']));


$xljykg=$wjxx[修炼经验开关];


//页面值
$q5=52;

if ($xljykg==0) {

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['修炼经验开关' => 1]);
echo "<font color=black>你打开了修炼经验将获得修炼经验(关闭后获得经验)</font>"."<br>";






} elseif ($xljykg==1) {

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['修炼经验开关' => 0]);
echo "<font color=black>你关闭了修炼经验将获得经验(开启后获得修炼经验)</font>"."<br>";



} else{

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