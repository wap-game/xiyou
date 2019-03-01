<?php

if($npcc ==1009){


} elseif($npcc >=1012&&$npcc <=1031){
include("./wj/dysx.php");
include("./pz/ini_pz08.php");//调用ini缓存位置

} elseif($npcc ==1032){
	
include("./box/tgbx1.php");//调用箱子使用代码
} elseif($npcc ==1033){
include("./box/tgbx2.php");//调用箱子使用代码
} elseif($npcc >=1034&&$npcc <=1045){//称号

include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==1047){

include("./box/ngbx.php");//调用箱子使用代码

} elseif($npcc ==1048){//【177级升级卡】
$wpsy=2;//使用成功
$lvl=177;
include("./pz/ini_pzz043.php");//调用ini缓存位置

} elseif($npcc ==1049){//【155级升级卡】
$wpsy=2;//使用成功
$lvl=155;
include("./pz/ini_pzz043.php");//调用ini缓存位置


} elseif($npcc ==1050){//【160级升级卡】
$wpsy=2;//使用成功
$lvl=160;
include("./pz/ini_pzz043.php");//调用ini缓存位置
} elseif($npcc ==1051){//【165级升级卡】
$wpsy=2;//使用成功
$lvl=165;
include("./pz/ini_pzz043.php");//调用ini缓存位置

} elseif($npcc ==1052){//【170级升级卡】
$wpsy=2;//使用成功
$lvl=170;
include("./pz/ini_pzz043.php");//调用ini缓存位置

} elseif($npcc ==1053){//【175级升级卡】
$wpsy=2;//使用成功
$lvl=175;
include("./pz/ini_pzz043.php");//调用ini缓存位置
} elseif($npcc ==1054){//【180级升级卡】
$wpsy=2;//使用成功
$lvl=180;
include("./pz/ini_pzz043.php");//调用ini缓存位置

} elseif($npcc ==1055){//【185级升级卡】
$wpsy=2;//使用成功
$lvl=185;
include("./pz/ini_pzz043.php");//调用ini缓存位置

} elseif($npcc ==1056){//【190级升级卡】
$wpsy=2;//使用成功
$lvl=190;
include("./pz/ini_pzz043.php");//调用ini缓存位置
} elseif($npcc ==1057){//【195级升级卡】
$wpsy=2;//使用成功
$lvl=195;
include("./pz/ini_pzz043.php");//调用ini缓存位置

} elseif($npcc ==1058){//【199级升级卡】
$wpsy=2;//使用成功
$lvl=199;
include("./pz/ini_pzz043.php");//调用ini缓存位置
} elseif($npcc >=1065&&$npcc <=1084){
include("./wj/dysx.php");
include("./pz/ini_pz08.php");//调用ini缓存位置
} elseif($npcc ==1085){
include("./box/gexylb.php");//调用箱子使用代码
} elseif($npcc ==1087){
include("./box/500xjhb.php");//调用箱子使用代码
} elseif($npcc ==1088){
include("./box/200xjhb.php");//调用箱子使用代码
} elseif($npcc ==1089){
include("./box/50xjhb.php");//调用箱子使用代码






} else{

$wpsy=1;//使用失败
include("wpsyts.php");

}











	

?>




