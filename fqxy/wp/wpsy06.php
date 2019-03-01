<?php


if($npcc ==999){




} elseif($npcc ==507){//〖武文双全〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==508){//〖文状元〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==509){//〖三好学生〗
include("./pz/ini_pz10.php");//调用ini缓存位置


} elseif($npcc ==514){//〖黄金贵族宝箱〗
include("./box/hjbox.php");//调用使用代码
} elseif($npcc ==515){//〖铂金贵族宝箱〗
include("./box/bjbox.php");//调用使用代码
} elseif($npcc ==516){//〖钻石皇族宝箱〗
include("./box/zsbox.php");//调用使用代码
} elseif($npcc ==517){//〖至尊皇族宝箱〗
include("./box/zzbox.php");//调用使用代码








} elseif($npcc ==518){//〖黄金贵族卡〗
$gzcardid=62;
include("./pz/ini_pzz036.php");//调用ini缓存位置
$wpsy=2;//使用成功
echo "<font color=black>恭喜你！获得黄金贵族特权（月卡每日领取福利一次）</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."开通了黄金贵族。从此西游路上横着走~~~~";
include("./msg/msgg02.php");

} elseif($npcc ==519){//〖铂金贵族卡〗
$gzcardid=63;
include("./pz/ini_pzz036.php");//调用ini缓存位置
$wpsy=2;//使用成功
echo "<font color=black>恭喜你！获得铂金贵族特权（月卡每日领取福利一次）</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."开通了铂金贵族。从此西游路上横着走~~~~";
include("./msg/msgg02.php");


} elseif($npcc ==520){//〖钻石皇族卡〗
$gzcardid=64;
include("./pz/ini_pzz036.php");//调用ini缓存位置
$wpsy=2;//使用成功
echo "<font color=black>恭喜你！获得钻石皇族特权（月卡每日领取福利一次）</font><br>";

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."开通了钻石皇族。从此西游路上横着走~~~~";
include("./msg/msgg02.php");
} elseif($npcc ==521){//〖至尊皇族卡〗
$gzcardid=65;
include("./pz/ini_pzz036.php");//调用ini缓存位置
$wpsy=2;//使用成功
echo "<font color=black>恭喜你！获得至尊皇族特权（月卡每日领取福利一次）</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."开通了至尊皇族。从此西游路上横着走~~~~";
include("./msg/msgg02.php");

} elseif($npcc ==522){//【保命丸】
include("./wj/dyxx.php");
include("./pz/ini_pz07.php");//调用ini缓存位置



} elseif($npcc >=532&&$npcc <=549){//
include("./wj/dysx.php");
include("./pz/ini_pz08.php");//调用ini缓存位置



} elseif($npcc ==551){//〖女神之恋〗
include("./pz/ini_pz10.php");//调用ini缓存位置


} elseif($npcc ==552){//〖全服公敌〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==553){//〖至尊红颜〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==554){//〖一掷千金〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==555){//〖至尊红颜〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==556){//〖望门贵族〗
include("./pz/ini_pz10.php");//调用ini缓存位置


} elseif($npcc ==557){//〖倾城伊人〗
include("./pz/ini_pz10.php");//调用ini缓存位置


} elseif($npcc ==562){//【清凉宝箱】
include("./box/qlbox.php");//调用使用代码


} elseif($npcc ==564){//西游声望
//调用sw.ini是否存在
   $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));

$wpzz=10000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[西游声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['西游声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=8";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."西游声望！！</font><br>";

} elseif($npcc ==565){//1万法宝经验

$wpzz=10000;//此wpid使用后所加的单个值 
include("./pz/ini_pzz027.php");





} elseif($npcc ==566){//〖冠军宝石〗1个
$bsid1=26;//宝石id
$jjmz="〖冠军宝石包〗";
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

} elseif($npcc ==567){//〖冠军宝石〗3个
$bsid1=26;//宝石id
$jjmz="〖冠军宝石包〗";
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



} elseif($npcc ==568){//〖冠军宝石〗8个
$bsid1=26;//宝石id
$jjmz="〖冠军宝石包〗";
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


} elseif($npcc ==569){//〖冠军宝石〗30个
$bsid1=26;//宝石id
$jjmz="〖冠军宝石包〗";
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





} elseif($npcc ==570){//〖齐天大圣〗（宠物蛋）
$npcccz=$npcc;
$boxcwid=799;//宠物id
include("./pz/ini_pzz034.php");//调用ini缓存位置




} elseif($npcc ==572){//〖百年魔珠〗（小袋）

//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖百年魔珠〗";//需要的到某个物品的名字    // 
$wwpid=331;                   //需要的到某个物品的id      //
$wwpsl=1000;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////



} elseif($npcc ==573){//〖百年魔珠〗（中袋）

//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖百年魔珠〗";//需要的到某个物品的名字    // 
$wwpid=331;                   //需要的到某个物品的id      //
$wwpsl=5000;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////


} elseif($npcc ==574){//〖百年魔珠〗（大袋）

//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖百年魔珠〗";//需要的到某个物品的名字    // 
$wwpid=331;                   //需要的到某个物品的id      //
$wwpsl=10000;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////





} elseif($npcc ==578){//【昊天神丹】
$wpsy=2;//使用成功
$wpjfdj=179;//解封到多少级
include("./pz/ini_pzz038.php");//调用ini缓存位置


} elseif($npcc ==580){//〖天下至尊〗
include("./pz/ini_pz10.php");//调用ini缓存位置


} elseif($npcc ==581){//〖蓬莱至尊〗
include("./pz/ini_pz10.php");//调用ini缓存位置
} elseif($npcc ==582){//〖昆仑至尊〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==583){//〖名动天下〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==584){//〖万法不侵〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==585){//〖乾坤唯仙〗
include("./pz/ini_pz10.php");//调用ini缓存位置

} elseif($npcc ==586){//〖舞星仙姬〗
include("./pz/ini_pz10.php");//调用ini缓存位置


} elseif($npcc ==587){//〖王者宝石〗1个
$bsid1=27;//宝石id
$jjmz="〖王者宝石礼包〗";
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



} elseif($npcc ==588){//〖王者宝石〗3个
$bsid1=27;//宝石id
$jjmz="〖王者宝石〗";
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




} elseif($npcc ==589){//〖王者宝石〗8个
$bsid1=27;//宝石id
$jjmz="〖王者宝石〗";
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


} elseif($npcc ==590){//〖王者宝石〗30个
$bsid1=27;//宝石id
$jjmz="〖王者宝石〗";
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





} elseif($npcc ==593){//〖诛仙令〗
$wpsy=2;//使用成功




//随机
$bz= rand(1, 6);
if($bz==1){
//////////////////////////////////////////////////〖诛仙武器令〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖诛仙武器令〗";//需要的到某个物品的名字    // 
$wwpid=594;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖诛仙武器令〗/////////////////////////////////////////

} elseif($bz ==2){

//////////////////////////////////////////////////〖诛仙盔甲令〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖诛仙盔甲令〗";//需要的到某个物品的名字    // 
$wwpid=595;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖诛仙盔甲令〗/////////////////////////////////////////

} elseif($bz ==3){

//////////////////////////////////////////////////〖诛仙头盔令〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖诛仙头盔令〗";//需要的到某个物品的名字    // 
$wwpid=596;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖诛仙头盔令〗/////////////////////////////////////////

} elseif($bz ==4){

//////////////////////////////////////////////////〖诛仙鞋子令〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖诛仙鞋子令〗";//需要的到某个物品的名字    // 
$wwpid=597;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖诛仙鞋子令〗/////////////////////////////////////////


} elseif($bz ==5){

//////////////////////////////////////////////////〖诛仙项链令〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖诛仙项链令〗";//需要的到某个物品的名字    // 
$wwpid=598;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖诛仙项链令〗/////////////////////////////////////////

} elseif($bz ==6){

//////////////////////////////////////////////////〖诛仙手镯令〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖诛仙手镯令〗";//需要的到某个物品的名字    // 
$wwpid=599;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖诛仙手镯令〗/////////////////////////////////////////


} else{


}









} elseif($npcc ==594){//〖诛仙武器令〗
$wpsy=2;//使用成功



//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));


	if($mpp1==1){
//---------------------------------------------------
$zbid=453;//得到装备的id//【诛仙枪】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==2){
//---------------------------------------------------
$zbid=454;//得到装备的id//【诛仙叉】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==3){

//---------------------------------------------------
$zbid=457;//得到装备的id//【诛仙剑】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------

} elseif($mpp1==4){
//---------------------------------------------------
$zbid=455;//得到装备的id//【诛仙仗】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} elseif($mpp1==5){


//---------------------------------------------------
$zbid=456;//得到装备的id//【诛仙棍】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------



} else{
//---------------------------------------------------
$zbid=454;//得到装备的id//【诛仙叉】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


}









} elseif($npcc ==595){//〖诛仙盔甲令〗
$wpsy=2;//使用成功

//---------------------------------------------------
$zbid=448;//得到装备的id//【诛仙战甲】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} elseif($npcc ==596){//〖诛仙头盔令〗
$wpsy=2;//使用成功

//---------------------------------------------------
$zbid=449;//得到装备的id//【诛仙战盔】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------



} elseif($npcc ==597){//〖诛仙鞋子令〗
$wpsy=2;//使用成功

//---------------------------------------------------
$zbid=450;//得到装备的id//【诛仙战靴】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} elseif($npcc ==598){//〖诛仙项链令〗
$wpsy=2;//使用成功

//---------------------------------------------------
$zbid=451;//得到装备的id//【诛仙项链】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------


} elseif($npcc ==599){//〖诛仙手镯令〗
$wpsy=2;//使用成功

//---------------------------------------------------
$zbid=452;//得到装备的id//【诛仙手镯】
include("./pz/ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------













} else{
$wpsy=1;//使用失败
include("wpsyts.php");

}











	

?>




