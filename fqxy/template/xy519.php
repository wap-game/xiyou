<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
	
if($npcc ==1){
$ddfz="";//初始
//得到第一个物品
$bsid10=25;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=20;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖生命之源〗x5,银两1亿</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖生命之源〗x5,银两1亿</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}



} elseif($npcc ==2){


$ddfz="";//初始
//得到第一个物品
$bsid10=25;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=9;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖攻击之源〗x5,银两1亿</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖攻击之源〗x5,银两1亿</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}




} elseif($npcc ==3){


$ddfz="";//初始
//得到第一个物品
$bsid10=25;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=10;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖魔攻之源〗x5,银两1亿</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖魔攻之源〗x5,银两1亿</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}





} elseif($npcc ==4){


$ddfz="";//初始
//得到第一个物品
$bsid10=25;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=19;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖防御之源〗x5,银两1亿</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖防御之源〗x5,银两1亿</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}








} elseif($npcc ==5){


$ddfz="";//初始
//得到第一个物品
$bsid10=26;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=25;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量

include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖荣誉宝石〗x5,银两5亿,〖金豆〗x5</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖荣誉宝石〗x5,银两5亿,〖金豆〗x5</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}



} elseif($npcc ==6){


$ddfz="";//初始
//得到第一个物品
$bsid10=27;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=26;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=1500000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=15;//	需要扣除的量
$wpdz5[]=1;//	重量

//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖冠军宝石〗x5,银两15亿,〖金豆〗x15</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖冠军宝石〗x5,银两15亿,〖金豆〗x15</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}





} elseif($npcc ==7){


$ddfz="";//初始
//得到第一个物品
$bsid10=28;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=27;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=3000000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=30;//	需要扣除的量
$wpdz5[]=1;//	重量

//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖王者宝石〗x5,银两30亿,〖金豆〗x30</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖王者宝石〗x5,银两30亿,〖金豆〗x30</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}




} elseif($npcc ==8){


$ddfz="";//初始
//得到第一个物品
$bsid10=29;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=28;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=5000000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量

//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖皇者宝石〗x5,银两50亿,〖金豆〗x50</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖皇者宝石〗x5,银两50亿,〖金豆〗x50</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}




} elseif($npcc ==9){


$ddfz="";//初始
//得到第一个物品
$bsid10=30;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=29;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=6000000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=60;//	需要扣除的量
$wpdz5[]=1;//	重量

//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖圣贤宝石〗x5,银两60亿,〖金豆〗x60</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖圣贤宝石〗x5,银两60亿,〖金豆〗x60</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}


} elseif($npcc ==10){


$ddfz="";//初始
//得到第一个物品
$bsid10=31;//宝石id
$bssl10=1;//宝石数量
$bszl10=1;//	需要扣物品的重量
$fzsl=$bssl10;//得到多个需更改负重变量
$fzzl=$bssl10;//得到多个需更改负重变量
//得到一个物品
$ddfz=$fzsl*$fzzl+$ddfz;
include("./pz/ini_pzz010.php");//判断
//负重判断
if($pdfz==2){
$bsid1=30;//需要扣除的宝石ID
include("./ini/qt_ini.php");
$bssl=($iniFile->getItem('其他数量',$bsid1));
if($bssl>=5){
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=10000000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="〖帝王石〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=939;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量


//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if($bssl>=5&&$pd==2){
include("./pz/ini_pzz041.php");//扣除宝石
//这里是得到宝石代码
$kcrl="";
$bsid=$bsid10;//宝石id
$bssl=$bssl10;//宝石数量
$wpzl=$bszl10;//	需要扣物品的重量
include("./pz/ini_pzz08.php");//得到宝石
//背包容量变更加
$kcrl=$bssl*$wpzl+$kcrl;
//这里是得到宝石代码
include("./pz/ini_pzz09.php");
echo "<font color=black>恭喜你！！升级镶嵌宝石成功！！</font>"."<br>";
} else{
echo "<font color=black>对不起！！升级需要〖至尊宝石〗x5,银两100亿,〖金豆〗x100,〖帝王石〗x10</font>"."<br>";
}
} else{
echo "<font color=black>对不起！！升级需要〖至尊宝石〗x5,银两100亿,〖金豆〗x100,〖帝王石〗x10</font>"."<br>";
}
} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}







} else{

}



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=517;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>