<?php

//echo $wjid;
/*
if($npcc>0){
$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;
} else{

}
*/

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

/*

if($npcc>0){
$wjid=$wjid1;
} else{

}

*/

//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");
//调用shuax.ini是否存在
   
include("./ini/shuax_ini.php");
$inina="shuax.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$shuax=($iniFile->getItem('玩家信息','刷新过快'));
$shuaxx=$shuax[刷新过快];


$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));

if($shuaxx==1){//上下首位也防止刷新过快出现错误数据

if($ymid==21){//聊天


$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('页面id','公共页面'));
$ym=$ym+1;
$iniFile->updItem('页面id', ['公共页面' => $ym]);
} elseif($ymid==175){ //国家成员
$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('页面id','国家成员页面'));

$ym=$ym+1;
$iniFile->updItem('页面id', ['国家成员页面' => $ym]);

} elseif($ymid==176){ //任命国家成员


$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('页面id','任命国家成员页面'));

$ym=$ym+1;
$iniFile->updItem('页面id', ['任命国家成员页面' => $ym]);


} elseif($ymid==92){ //附近玩家页


$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('页面id','附近玩家页面'));

$ym=$ym+1;
$iniFile->updItem('页面id', ['附近玩家页面' => $ym]);





} elseif($ymid==24){ //私聊

$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('页面id','私聊页面'));
$ym=$ym+1;
$iniFile->updItem('页面id', ['私聊页面' => $ym]);





} elseif($ymid==27||$ymid==261||$ymid==538){ //背包书卷


$inina="wp.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('书卷id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('书卷id', ['初始' => $ym]);
$wpyeid=($iniFile->getItem('书卷数量','初始'));



} elseif($ymid==28||$ymid==262||$ymid==539){ //背包材料


$inina="cl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('材料id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('材料id', ['初始' => $ym]);

} elseif($ymid==29||$ymid==263||$ymid==540){ //背包装备


$inina="zb.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('装备id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('装备id', ['初始' => $ym]);

} elseif($ymid==30||$ymid==264||$ymid==541){ //背包商城

$inina="sc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('商城id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('商城id', ['初始' => $ym]);

} elseif($ymid==31||$ymid==265||$ymid==542){ //背包丹药


$inina="dy.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('丹药id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('丹药id', ['初始' => $ym]);

} elseif($ymid==32||$ymid==266||$ymid==543){ //背包任务


$inina="rw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('任务id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('任务id', ['初始' => $ym]);


} elseif($ymid==33||$ymid==267||$ymid==544){ //背包农场


$inina="nc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('农场id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('农场id', ['初始' => $ym]);


} elseif($ymid==34||$ymid==268||$ymid==545){ //背包宝箱


$inina="bx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('宝箱id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('宝箱id', ['初始' => $ym]);

} elseif($ymid==35||$ymid==269||$ymid==73||$ymid==375||$ymid==546){ //背包其他


$inina="qt.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('其他id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他id', ['初始' => $ym]);






} elseif($ymid==278){//背包书卷仓库

$inina="ckwp.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('书卷id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('书卷id', ['初始' => $ym]);
$wpyeid=($iniFile->getItem('书卷数量','初始'));



} elseif($ymid==279){ //背包材料仓库


$inina="ckcl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('材料id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('材料id', ['初始' => $ym]);

} elseif($ymid==280){ //背包装备仓库


$inina="ckzb.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('装备id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('装备id', ['初始' => $ym]);

} elseif($ymid==281){ //背包商城仓库

$inina="cksc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('商城id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('商城id', ['初始' => $ym]);

} elseif($ymid==282){ //背包丹药仓库


$inina="ckdy.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('丹药id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('丹药id', ['初始' => $ym]);

} elseif($ymid==283){ //背包任务仓库


$inina="ckrw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('任务id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('任务id', ['初始' => $ym]);


} elseif($ymid==284){ //背包农场仓库


$inina="cknc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('农场id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('农场id', ['初始' => $ym]);


} elseif($ymid==285){ //背包宝箱仓库


$inina="ckbx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('宝箱id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('宝箱id', ['初始' => $ym]);

} elseif($ymid==286){ //背包其他仓库


$inina="ckqt.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('其他id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他id', ['初始' => $ym]);


} elseif($ymid==219||$ymid==222){ //挂售物品

/*

if($npcc>0){
$wjid=$wjid1;
$inina="gswp.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('物品id','初始'));

$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('物品id', ['初始' => $ym]);

} else{
	*/
$inina="gswp.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('物品id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('物品id', ['初始' => $ym]);
/*
}

*/




} elseif($ymid==229||$ymid==232){ //挂售装备
$inina="gszb.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('装备id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('装备id', ['初始' => $ym]);
} elseif($ymid==236||$ymid==239){ //挂售其他
$inina="gsqt.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('其他id','初始'));
$ym=$ym+1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他id', ['初始' => $ym]);

} elseif($ymid==362){ //宠物
include("./ini/cw_ini.php");
$ym=($iniFile->getItem('宠物id','初始'));
$ym=$ym+1;
$iniFile->updItem('宠物id', ['初始' => $ym]);


} elseif($ymid==502){ //拍卖仓库
include("./ini/mypm_ini.php");
$ym=($iniFile->getItem('拍卖物品id','初始'));
$ym=$ym+1;
$iniFile->updItem('拍卖物品id', ['初始' => $ym]);






} else{

}




} else{
//恢复

//调用shuax.ini是否存在
   
include("./ini/shuax_ini.php");
$inina="shuax.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['刷新过快' => 1]);

}


if($ymid==21){
include("template/xy021.php");//公共聊天

} elseif($ymid==24){  
include("template/xy024.php");//私聊


} elseif($ymid==27){  
include("template/xy027.php");
} elseif($ymid==28){  
include("template/xy028.php");
} elseif($ymid==29){  
include("template/xy029.php");
} elseif($ymid==30){  
include("template/xy030.php");
} elseif($ymid==31){  
include("template/xy031.php");
} elseif($ymid==32){  
include("template/xy032.php");
} elseif($ymid==33){  
include("template/xy033.php");
} elseif($ymid==34){  
include("template/xy034.php");
} elseif($ymid==35){  
include("template/xy035.php");
} elseif($ymid==73){  
include("template/xy073.php");//镶嵌分页

} elseif($ymid==92){  
include("template/xy092.php");//附近玩家页面

} elseif($ymid==175){  
include("template/xy175.php");//国家成员分页
} elseif($ymid==176){  
include("template/xy176.php");//任命国家成员分页
} elseif($ymid==219){  
include("template/xy219.php");//挂售物品分页
} elseif($ymid==222){  
//$npcc=$ckid;
include("template/xy222.php");//对方挂售物品分页
} elseif($ymid==229){  
include("template/xy229.php");//挂售装备分页
} elseif($ymid==232){  
include("template/xy232.php");//对方挂售装备分页
} elseif($ymid==236){  
include("template/xy236.php");//挂售其他分页
} elseif($ymid==239){  
include("template/xy239.php");//对方挂售其他分页
} elseif($ymid==261){  
include("template/xy261.php");//仓库书卷分页
} elseif($ymid==262){  
include("template/xy262.php");//仓库丹药分页
} elseif($ymid==263){  
include("template/xy263.php");//仓库装备分页
} elseif($ymid==264){  
include("template/xy264.php");//仓库商城分页
} elseif($ymid==265){  
include("template/xy265.php");//仓库丹药分页
} elseif($ymid==266){  
include("template/xy266.php");//仓库任务分页
} elseif($ymid==267){  
include("template/xy267.php");//仓库农场分页
} elseif($ymid==268){  
include("template/xy268.php");//仓库宝箱分页
} elseif($ymid==269){  
include("template/xy269.php");//仓库其他分页


} elseif($ymid==278){  
include("template/xy278.php");//仓库书卷分页
} elseif($ymid==279){  
include("template/xy279.php");//仓库丹药分页
} elseif($ymid==280){  
include("template/xy280.php");//仓库装备分页
} elseif($ymid==281){  
include("template/xy281.php");//仓库商城分页
} elseif($ymid==282){  
include("template/xy282.php");//仓库丹药分页
} elseif($ymid==283){  
include("template/xy283.php");//仓库任务分页
} elseif($ymid==284){  
include("template/xy284.php");//仓库农场分页
} elseif($ymid==285){  
include("template/xy285.php");//仓库宝箱分页
} elseif($ymid==286){  
include("template/xy286.php");//仓库其他分页
} elseif($ymid==362){  
include("template/xy362.php");//宠物分页
} elseif($ymid==375){  
include("template/xy375.php");//宠物装备镶嵌宝石

} elseif($ymid==502){  
include("template/xy502.php");//拍卖仓库

} elseif($ymid==538){  
include("template/xy538.php");//赠送书卷类
} elseif($ymid==539){  
include("template/xy539.php");//赠送材料类
} elseif($ymid==540){  
include("template/xy540.php");//赠送装备类
} elseif($ymid==541){  
include("template/xy541.php");//赠送商城类
} elseif($ymid==542){  
include("template/xy542.php");//赠送丹药类
} elseif($ymid==543){  
include("template/xy543.php");//赠送任务类
} elseif($ymid==544){  
include("template/xy544.php");//赠送农场类
} elseif($ymid==545){  
include("template/xy545.php");//赠送宝箱类
} elseif($ymid==546){  
include("template/xy546.php");//赠送其他类










} else{

}


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>