<?php


if($npcc ==2||$npcc ==5||$npcc ==10||$npcc ==16||$npcc ==18){//正确答案
$zqda=2;
} else{
$zqda=1;
}







if($zqda ==2){//答对
$zqda=2;
$bz= rand(1, 100);

if($bz >=50 ){//答对

echo "<font color=red>我：So-esay太简单了，来真正有技术含量的（你识破了班主任的套路）</font>"."<br>";
$bz= rand(1, 100);	


if($bz >=1&&$bz <=11){
	
//物品加
$wpdz1[]="【比翼图纸】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=506;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
//物品加
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		
} elseif($bz >=11&&$bz <=30){ 
//物品加
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
} elseif($bz >=31&&$bz <=60){ 
//物品加
$wpdz1[]="【才子印记】（碎片）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=501;//物品id
$wpdz4[]=15;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
	
} else{
//物品加
$wpdz1[]="【才子印记】（碎片）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=501;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
//物品加	
	//物品加
include("./rwmap/rwget.php");	
//经验	
$jy=2000000;
include("./pz/ini_pzz023.php");
//经验加

	
} 






} else{
echo "<font color=red>班主任：平时都不认真上学居然答对了，我不信（被班主任套路了）</font>"."<br>";
$bz= rand(1, 100);	
if($bz >=1&&$bz <=11){
//物品加
$wpdz1[]="【才子印记】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=500;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		
} elseif($bz >=11&&$bz <=30){ 
//物品加
$wpdz1[]="【才子印记】（碎片）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=501;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
} elseif($bz >=31&&$bz <=60){ 
//物品加
$wpdz1[]="【才子印记】（碎片）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=501;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
	
} else{
//经验	
$jy=1000000;
include("./pz/ini_pzz023.php");
//经验加

	
} 
	
	
	
}


} else{	//打错
echo "<font color=red>班主任：还不认真上学，长大后，小狗会饿死，工作会没了（很遗憾你居然能答错）</font>"."<br>";
//经验	
$jy=50000;
include("./pz/ini_pzz023.php");
//经验加
$zqda=1;
}












echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");

?>