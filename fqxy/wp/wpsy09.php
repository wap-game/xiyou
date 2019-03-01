<?php


if($npcc ==999){


} elseif ($npcc==801) {//【极品7位ID号（7777777）】
$lh=7777777;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置


} elseif ($npcc==802) {//【极品7位ID号（8888888）】
$lh=8888888;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置


} elseif ($npcc==803) {//【极品7位ID号（9999999）】
$lh=9999999;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==804) {//【极品7位ID号（1234567）】
$lh=1234567;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置


} elseif ($npcc==805) {//【极品7位ID号（1314520）】
$lh=1314520;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置

} elseif ($npcc==806) {//【极品7位ID号（5201314）】
$lh=5201314;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置


} elseif ($npcc==807) {//【极品7位ID号（5203344）】
$lh=5203344;//靓号id
include("./pz/ini_pz12.php");//调用ini缓存位置





} elseif($npcc ==808){//〖皇者宝石〗1个
$bsid1=28;//宝石id
$jjmz="〖皇者宝石〗";
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功

} elseif($npcc ==809){//〖皇者宝石〗3个
$bsid1=28;//宝石id
$jjmz="〖皇者宝石〗";
$bssl1=3;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功



} elseif($npcc ==810){//〖皇者宝石〗8个
$bsid1=28;//宝石id
$jjmz="〖皇者宝石〗";
$bssl1=8;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功


} elseif($npcc ==811){//〖皇者宝石〗30个
$bsid1=28;//宝石id
$jjmz="〖皇者宝石〗";
$bssl1=30;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功


} elseif($npcc ==812){//〖铁魂〗材料包

//////////////////////////////////////////////////〖铁魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖铁魂〗";//需要的到某个物品的名字    // 
$wwpid=308;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖铁魂〗/////////////////////////////////////////


} elseif($npcc ==813){//〖铜魂〗材料包

//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖铜魂〗";//需要的到某个物品的名字    // 
$wwpid=309;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////


} elseif($npcc ==814){//〖银魂〗材料包

//////////////////////////////////////////////////〖银魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖银魂〗";//需要的到某个物品的名字    // 
$wwpid=310;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖银魂〗/////////////////////////////////////////



} elseif($npcc ==815){//〖金魂〗材料包

//////////////////////////////////////////////////〖金魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖金魂〗";//需要的到某个物品的名字    // 
$wwpid=311;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖金魂〗/////////////////////////////////////////




} elseif($npcc ==816){//〖钻魂〗材料包

//////////////////////////////////////////////////〖钻魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖钻魂〗";//需要的到某个物品的名字    // 
$wwpid=312;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖钻魂〗/////////////////////////////////////////
} elseif($npcc ==817){//〖陨魂〗材料包

//////////////////////////////////////////////////〖陨魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖陨魂〗";//需要的到某个物品的名字    // 
$wwpid=313;                   //需要的到某个物品的id      //
$wwpsl=100;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖陨魂〗/////////////////////////////////////////

} elseif($npcc ==822){//〖如意の称号宝箱〗

include("./box/rychbox.php");//调用使用代码



} elseif($npcc ==844){//〖国庆宝箱〗

include("./box/gqbox.php");//调用使用代码


} elseif($npcc ==846){//〖凤凰圣祖〗（宠物蛋）
$npcccz=$npcc;
$boxcwid=1085;//宠物id
include("./pz/ini_pzz034.php");//调用ini缓存位置

} elseif($npcc ==847){//〖凤凰圣祖〗（宠物蛋）满变异满品质
$npcccz=$npcc;
$boxcwid=1085;//宠物id
include("./pz/ini_pzz039.php");//调用ini缓存位置

} elseif($npcc ==848){//〖国庆充值10元消费礼包〗
include("./box/10gqbox.php");//调用使用代码
} elseif($npcc ==849){//〖国庆充值20元消费礼包〗
include("./box/20gqbox.php");//调用使用代码
} elseif($npcc ==850){//〖国庆充值50元消费礼包〗
include("./box/50gqbox.php");//调用使用代码
} elseif($npcc ==851){//〖国庆充值100元消费礼包〗
include("./box/100gqbox.php");//调用使用代码
} elseif($npcc ==852){//〖国庆充值200元消费礼包〗
include("./box/200gqbox.php");//调用使用代码
} elseif($npcc ==853){//〖国庆充值500元消费礼包〗
include("./box/500gqbox.php");//调用使用代码
} elseif($npcc ==854){//〖国庆充值1000元消费礼包〗
include("./box/1000gqbox.php");//调用使用代码
} elseif($npcc ==855){//〖国庆充值2000元消费礼包〗
include("./box/2000gqbox.php");//调用使用代码

} elseif($npcc ==856){//〖至尊宝石〗1个
$bsid1=30;//宝石id
$jjmz="〖至尊宝石〗";
$bssl1=1;//宝石数量
$bszl1=1;//	需要扣物品的重量
$fzsl=$bssl1;//得到多个需更改负重变量
$fzzl=$bssl1;//得到多个需更改负重变量
include("./sql/mysql.php");//调用数据库连接 
//背包容量变更
include("./pz/ini_pzz05.php");
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid1;//宝石id
$bssl=$bssl1;//宝石数量
$wpzl=$bszl1;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！获得了".$jjmz."x".$bssl."</font>"."<br>";
$wpsy=2;//使用成功

} elseif ($npcc==857) {//〖挂售扩容卷〗
//---------------------------------------------------------//
$wwpmz="〖挂售扩容卷〗";//需要的到某个物品的名字    // 
$ckkr=500;
$wpzz1="玩家信息";
$wpzz2="挂售容量";
$ccc="gsrl";
  //
//---------------------------------------------------
include("./pz/ini_pz06.php");//调用ini缓存位置
$wpsy=2;//使用成功

} elseif ($npcc==858) {//〖尊享VIP〗月
$addtime=30;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置
} elseif ($npcc==859) {//〖尊享VIP〗季
$addtime=90;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置
} elseif ($npcc==860) {//〖尊享VIP〗半年
$addtime=180;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置
} elseif ($npcc==861) {//〖尊享VIP〗年
$addtime=366;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置
} elseif ($npcc==862) {//【尊享VIP】（月卡）
$addtime=30;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置

} elseif ($npcc==864) {//〖尊享VIP〗天
$addtime=1;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置

} elseif ($npcc==865) {//【尊享VIP】1天
$addtime=1;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置

} elseif ($npcc==866) {//【尊享VIP】3天
$addtime=3;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置

} elseif ($npcc==867) {//【尊享VIP】7天
$addtime=7;//〖尊享VIP〗天数
include("./pz/ini_pzz044.php");//调用ini缓存位置

} elseif($npcc >=868&&$npcc <=891){//丹药
include("./wj/dysx.php");
include("./pz/ini_pz08.php");//调用ini缓存位置


} elseif($npcc ==892){//〖麦乐堡甜品箱〗
include("./box/mlbtpbx.php");//调用箱子使用代码







} else{
$wpsy=1;//使用失败
include("wpsyts.php");

}











	

?>




