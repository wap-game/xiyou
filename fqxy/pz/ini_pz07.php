<?php


//调用zt.ini是否存在
include("./ini/zt_ini.php");





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

if ($bnsy!=2){
if($wpzz2!="蓝"){
//动态祝福加成数据
include("wj/zfzt.php");
} else{
}



//判断验证使用次数
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

if ($xl2<$maxhp) {
//缓存修改
$iniFile->updItem($wpzz1, [$wpzz2 => $xl2]);
//缓存修改
$wpsy=2;//使用成功
echo "<font color=black>恭喜你！".$wpzz3."恢复".$xl*$sl."</font><br>";
} elseif($xl2>=$maxhp&&$xl1<$maxhp){
$xl2=$maxhp;
//缓存修改
$iniFile->updItem($wpzz1, [$wpzz2 => $xl2]);
//缓存修改
$wpsy=2;//使用成功
echo "<font color=black>恭喜你！".$wpzz3."恢复".$xl*$sl."</font><br>";


} else{
$wpsy=1;//使用失败

echo "<font color=black>对不起！你的".$wpzz3."已满不需要恢复了</font><br>";


}


} else{
$wpsy=1;//使用失败

echo "<font color=black>对不起！此物品不能在快捷键使用</font><br>";


}
















?>
