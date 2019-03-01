<?php

if($sll!=0){




if($wpsl<$sl){
	$dqwp=0;
echo "<font color=red>输入有误请重新输入1</font>"."<br>";
echo "<br>";

} elseif($wpsl>$sl){  


	
	$sxsl=$sl;
	
	
	
	
	
////////////////////////////////////////////////////丹药/////////////////////////////////
include("pz/pz03.php");//判断是否为批量使用药品id
if ($mmd2==2) {
	
	
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
$wpsl=($iniFile->getItem('书卷数量',$npcc));
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
$wpsl=($iniFile->getItem('材料数量',$npcc));
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
$wpsl=($iniFile->getItem('商城数量',$npcc));
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
$wpsl=($iniFile->getItem('丹药数量',$npcc));
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
$wpsl=($iniFile->getItem('任务数量',$npcc));
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
$wpsl=($iniFile->getItem('农场数量',$npcc));
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
$wpsl=($iniFile->getItem('宝箱数量',$npcc));
} else{
}
	$sl=$wpsl;
	
	

	
	
	
	
	
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
$sl1=$wpsl1;

if($sl>=$sl1){
$sl=$sl1;
} else{

}


} else{

}

	
	
	
	
	
	
	///////////////////////////////////////////////上限丹药/////////////////////////////////
	
	

include("pz/pz04.php");//判断是否为批量使用药品id
if ($mmd3==2) {
	
	
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
$wpsl=($iniFile->getItem('书卷数量',$npcc));
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
$wpsl=($iniFile->getItem('材料数量',$npcc));
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
$wpsl=($iniFile->getItem('商城数量',$npcc));
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
$wpsl=($iniFile->getItem('丹药数量',$npcc));
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
$wpsl=($iniFile->getItem('任务数量',$npcc));
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
$wpsl=($iniFile->getItem('农场数量',$npcc));
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
$wpsl=($iniFile->getItem('宝箱数量',$npcc));
} else{
}
	$sl=$wpsl;
	
	

	
	
	
include("./wj/dysx.php");
//调用dyxx.ini是否存在
include("./ini/dyxx_ini.php");
$inina="dyxx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$wpsycs=($iniFile->getItem('物品使用次数',$npcc));



//
$dywpsl=$xzcs-$wpsycs;	
if($sxsl <=$dywpsl){	
$sl=$sxsl;
} else{
$sxsl=$dywpsl;
}
if($wpsycs >=1&&$wpsycs <$xzcs){
$dywpsl=$xzcs-$wpsycs;	
if($sl >=$dywpsl){	
$sl=$sxsl;
if($dywpsl>=sl){
$sl=$sxsl;
} else{
}
} else{
}	
} elseif($wpsycs ==""){

if($sl >=$xzcs){	
$sl=$sxsl;
if($dywpsl>=sl){
$sl=$sxsl;
} else{
}
} else{
}
} else{
}






//











//









} else{

}

	
	
	
	
	
	
	
	
	

	
	
	

	//$wpsy=1;//使用失败
include("wp/wpsy.php");

if($wpsy==2){
	
	

 
$wpsl=$wpsl-$sl;
include("./wp/wpxx.php");
//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

if($wpfl==1||$wpfl==2||$wpfl==4||$wpfl==5||$wpfl==6||$wpfl==7||$wpfl==8){
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
} else{



}


///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////



if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
$iniFile->updItem('材料数量', [$npcc => $wpsl]);
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
$iniFile->updItem('商城数量', [$npcc => $wpsl]);
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
$iniFile->updItem('丹药数量', [$npcc => $wpsl]);
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
$iniFile->updItem('任务数量', [$npcc => $wpsl]);
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
$iniFile->updItem('农场数量', [$npcc => $wpsl]);
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);
} else{
}
/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////







//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

if($wpfl==1||$wpfl==2||$wpfl==4||$wpfl==5||$wpfl==6||$wpfl==7||$wpfl==8){
//调用物品信息
include("./wp/wpxx.php");

}



	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);



//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////
//调用yl.ini是否存在
include("./ini/yl_ini.php");
$ymid=($iniFile->getItem('背包页面','页面id'));

//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $ymid]);
echo "<font color=red>你使用了".$wpmz."x".$sl."</font>"."<br>";

//调用使用信息
include("./wp/wpsy.php");


//回城卷直接到游戏页面

if($npcc==1){

if($npcc==1){//回城卷
include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{

}




} else{

	
	
	
	
	
	
	
	



//调用yl.ini是否存在
include("./ini/yl_ini.php");
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



} 





} else{



//调用yl.ini是否存在
include("./ini/yl_ini.php");
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

}




















} elseif($wpsl==$sl){  

//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////
include("./wp/wpxx.php");
$wpsl=$wpsl-$sl;
if($wpfl==1||$wpfl==2||$wpfl==4||$wpfl==5||$wpfl==6||$wpfl==7||$wpfl==8){
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);

} else{


}

///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('书卷id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('书卷数量', $npcc);
# 删除一个子项
$iniFile->delItem('书卷名字', $npcc);
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('材料id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('材料数量', $npcc);
# 删除一个子项
$iniFile->delItem('材料名字', $npcc);
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('商城id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('商城数量', $npcc);
# 删除一个子项
$iniFile->delItem('商城名字', $npcc);
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('丹药id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('丹药数量', $npcc);
# 删除一个子项
$iniFile->delItem('丹药名字', $npcc);
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('任务id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('任务数量', $npcc);
# 删除一个子项
$iniFile->delItem('任务名字', $npcc);
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('农场id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('农场数量', $npcc);
# 删除一个子项
$iniFile->delItem('农场名字', $npcc);
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('宝箱id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('宝箱数量', $npcc);
# 删除一个子项
$iniFile->delItem('宝箱名字', $npcc);
} else{
}

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////










//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////
if($wpfl==1||$wpfl==2||$wpfl==4||$wpfl==5||$wpfl==6||$wpfl==7||$wpfl==8){
//调用物品信息
include("./wp/wpxx.php");

}

	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);



//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////














//调用yl.ini是否存在
include("./ini/yl_ini.php");
$ymid=($iniFile->getItem('背包页面','页面id'));



//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $ymid]);
//调用使用信息
include("./wp/wpsy.php");
echo "<font color=red>你使用了".$wpmz."x".$sl."</font>"."<br>";
//回城卷直接到游戏页面

if($npcc==1){

if($npcc==1){//回城卷
include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{

}




} else{

//调用yl.ini是否存在
include("./ini/yl_ini.php");
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





}












} else {
	
	
	

	
	
	
	
	
	
	
	
	
	
	

}









} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}



?>




