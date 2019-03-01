<?php

//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
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
$wjid1=$wjid;
$wpid=$npcc;
$wjid=$ckid;

$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){
	
$wjid=$wjid1;
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));
$wjid=$ckid;
include("./ini/gswp_ini.php");
$wpsl=($iniFile->getItem('物品数量',$npcc));
$wpjgg=($iniFile->getItem('物品价格',$npcc));

if($yl>=1000){
$gmsl=floor($yl/$wpjgg);

if($gmsl>$wpsl){
$gmsl=$wpsl;
} else{	
}

} else{
$gmsl=0;
echo "<font color=red>提示：你身上携带的银两不足哦！！</font>"."<br>";

} 

if($wpsl>1){

	

//调用物品信息
include("./wp/wpxx.php");
include("npcc/gsgmwp01.php");






///////////////////////////丢弃数量等于1的物品/////////////////////////////

} elseif($wpsl==1){  
$sl=1;
$wpsl=1;
$sll=1;
//调用物品信息
include("./wp/wpxx.php");


include("npcc/gsgmwp02.php");


///////////////////////////丢弃数量等于1的物品/////////////////////////////







} else{



echo "<font color=red>该物品已被下架或者被买走了！！</font>"."<br>";
echo "<br>";





} 


$wjid=$wjid1;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=222;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=226;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回挂售</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";



} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

?>