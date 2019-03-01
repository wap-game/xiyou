<?php



//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));



if($ymid==261){//背包书卷
//ini文件名字
$inina="wp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('书卷数量',$npcc));
} elseif($ymid==262){ //背包材料
//ini文件名字
$inina="cl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('材料数量',$npcc));
} elseif($ymid==264){ //背包商城
//ini文件名字
$inina="sc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('商城数量',$npcc));
} elseif($ymid==265){ //背包丹药
//ini文件名字
$inina="dy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('丹药数量',$npcc));
} elseif($ymid==266){ //背包任务
//ini文件名字
$inina="rw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('任务数量',$npcc));
} elseif($ymid==267){ //背包农场
//ini文件名字
$inina="nc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('农场数量',$npcc));
} elseif($ymid==268){ //背包宝箱
//ini文件名字
$inina="bx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('宝箱数量',$npcc));

} elseif($ymid==269){ //背包其他
//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('其他数量',$npcc));




} else{



}










///////////////////////////丢弃数量大于1的物品/////////////////////////////
if($wpsl>1){

	
if($ymid==261||$ymid==262||$ymid==264||$ymid==265||$ymid==266||$ymid==267||$ymid==268){
//调用物品信息
include("./wp/wpxx.php");



} elseif($ymid==269){ //背包其他
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
} else{



}
include("npcc/crwp01.php");


//echo "<br>";






if($ymid==261){//背包书卷

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=261;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回书卷</font></a>"."<br>";
} elseif($ymid==262){ //背包材料

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=262;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回材料</font></a>"."<br>";



} elseif($ymid==264){ //背包商城

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=264;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回商城</font></a>"."<br>";


} elseif($ymid==265){ //背包丹药
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=265;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回丹药</font></a>"."<br>";


} elseif($ymid==266){ //背包任务

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=266;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回任务</font></a>"."<br>";



} elseif($ymid==267){ //背包农场

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=267;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";




} elseif($ymid==268){ //背包宝箱

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=268;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宝箱</font></a>"."<br>";

} elseif($ymid==269){ //背包其他

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=269;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回其他</font></a>"."<br>";



} else{



}


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");






///////////////////////////丢弃数量大于1的物品/////////////////////////////








///////////////////////////丢弃数量等于1的物品/////////////////////////////

} elseif($wpsl==1){  
$sl=1;
$wpsl=1;
$sll=1;
//调用物品信息
include("./wp/wpxx.php");


include("npcc/crwp02.php");


///////////////////////////丢弃数量等于1的物品/////////////////////////////







} else{

} 




} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini






?>