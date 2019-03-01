<?php

include("./wj/dyxx.php");
//判断验证使用次数
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$xl1=($iniFile->getItem($wpzz1,$wpzz2));
$xl2=$xl*$sl+$xl1;
# 获取一个分类下所有数据$
$wjxx=($iniFile->getCategory('玩家信息'));

include("./wj/ztt.php");
include("./wj/dyxx.php");

if($wpzz2!="蓝"){
//动态祝福加成数据
include("wj/zfzt.php");
} else{
}




$wpsl1=ceil(($maxhp-$hp)/$xl);

if($wpsl>=$wpsl1){
$wpsl=$wpsl1;
$sydy=2;
} else{


}

if($wpsl>=1){

} else{
include("./wj/dyxx.php");

echo "<font color=red>对不起！你的".$wpzz3."已满不需要恢复了</font><br>";

$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));
	
	
if($ymid==27){//背包书卷
include("template/xy027.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==28){ //背包材料
include("template/xy028.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==30){ //背包商城
include("template/xy030.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==31){ //背包丹药
include("template/xy031.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==32){ //背包任务

include("template/xy032.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($ymid==33){ //背包农场
include("template/xy033.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==34){ //背包宝箱
include("template/xy034.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==35){ //背包宝箱
include("template/xy035.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{



}
exit;
}



?>




