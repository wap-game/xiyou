<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$npcc11=$npcc;
	
$hdid=223;
$npcc=$hdid;
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数',$hdid));


if($hdcs <=10){










$npcc=$npcc11;










if($npcc ==1){
//随机
$bz= rand(1, 100);
if($bz <=50){
	

$bz= rand(1, 100);	


if($bz >=1&&$bz <=11){
	
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
//物品加
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		
} elseif($bz >=11&&$bz <=30){ 
//物品加
$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
} elseif($bz >=31&&$bz <=60){ 
//物品加
$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
	
} else{
//物品加
$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
//经验	
$jy=2000000;
include("./pz/ini_pzz023.php");
//经验加

	
} 	
	
	
	
	
	
echo "<font color=black>〖活动〗紫霞仙子：你是我要找的至尊宝吗？</font>"."<br>";
echo "<br>";	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=481;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我没有好好珍惜</font></a>"."<br>";
} else{	
echo "<font color=red>〖活动〗紫霞仙子：(ˇˍˇ) 什么狗屁爱情故事，都是骗人的（紫霞仙子识破了你）</font>"."<br>";	
}
} elseif ($npcc==2) {
	//随机
$bz= rand(1, 100);
if($bz <=50){
	

$bz= rand(1, 100);	


if($bz >=1&&$bz <=11){
	
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量	
//物品加
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		
} elseif($bz >=11&&$bz <=30){ 
//物品加
$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
} elseif($bz >=31&&$bz <=60){ 
//物品加
$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
	
} else{

//经验	
$jy=2000000;
include("./pz/ini_pzz023.php");
//经验加

	
} 		
	
	
	
echo "<font color=black>〖活动〗紫霞仙子：当年下嫁牛魔王时为何不来找我？</font>"."<br>";
echo "<br>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=481;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>等到失去时，才感到后悔</font></a>"."<br>";
} else{	
echo "<font color=red>〖活动〗紫霞仙子：(ˇˍˇ) 什么狗屁爱情故事，都是骗人的（紫霞仙子识破了你）</font>"."<br>";	
}
	
	
} elseif ($npcc==3) {
	//随机
$bz= rand(1, 100);
if($bz <=50){
	
$bz= rand(1, 100);	


if($bz >=1&&$bz <=11){
	
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量	
//物品加
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		
} elseif($bz >=11&&$bz <=30){ 
//物品加
$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
} elseif($bz >=31&&$bz <=60){ 
//物品加
$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
	
} else{

//经验	
$jy=2000000;
include("./pz/ini_pzz023.php");
//经验加

	
} 		
	
		
	
	
	
echo "<font color=black>〖活动〗紫霞仙子：你认为老天还会给我们机会吗？</font>"."<br>";
echo "<br>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=481;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>如果老天能够再给我一次机会</font></a>"."<br>";
} else{	
echo "<font color=red>〖活动〗紫霞仙子：(ˇˍˇ) 什么狗屁爱情故事，都是骗人的（紫霞仙子识破了你）</font>"."<br>";	
}

} elseif ($npcc==4) {
echo "<font color=black>〖活动〗紫霞仙子：那你会对她说什么呢？</font>"."<br>";	
	
	//随机
$bz= rand(1, 100);
if($bz <=50){
	
$bz= rand(1, 100);	


if($bz >=1&&$bz <=11){
	
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量	
//物品加
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		
} elseif($bz >=11&&$bz <=30){ 
//物品加
$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
} elseif($bz >=31&&$bz <=60){ 
//物品加
$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
	
} else{

//经验	
$jy=2000000;
include("./pz/ini_pzz023.php");
//经验加

	
} 		
	
		
	
	
	
	
	
echo "<br>";		
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=481;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我回对那个女孩说，我爱你</font></a>"."<br>";
} else{	
echo "<font color=red>〖活动〗紫霞仙子：(ˇˍˇ) 什么狗屁爱情故事，都是骗人的（紫霞仙子识破了你）</font>"."<br>";	
}

} elseif ($npcc==5) {
echo "<font color=black>〖活动〗紫霞仙子：爱我？是多久呢？</font>"."<br>";		
	//随机
$bz= rand(1, 100);
if($bz <=50){
	
	$bz= rand(1, 100);	


if($bz >=1&&$bz <=11){
	
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量	
//物品加
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		
} elseif($bz >=11&&$bz <=30){ 
//物品加
$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
} elseif($bz >=31&&$bz <=60){ 
//物品加
$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
	
} else{

//经验	
$jy=2000000;
include("./pz/ini_pzz023.php");
//经验加

	
} 		
	
	
	
	
	
	
	
	
	
echo "<br>";		
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=481;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>如果非要在这个爱上加个期限的话</font></a>"."<br>";
} else{	
echo "<font color=red>〖活动〗紫霞仙子：(ˇˍˇ) 什么狗屁爱情故事，都是骗人的（紫霞仙子识破了你）</font>"."<br>";	
}

} elseif ($npcc==6) {
echo "<font color=black>〖活动〗紫霞仙子：期限是多久呢？</font>"."<br>";			
	//随机
$bz= rand(1, 100);
if($bz <=50){
	
	
$bz= rand(1, 100);	


if($bz >=1&&$bz <=11){
	
//物品加
$wpdz1[]="〖紫霞眼泪〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=611;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量	
//物品加
$wpdz1[]="〖金甲圣衣〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=609;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		
} elseif($bz >=11&&$bz <=30){ 
//物品加
$wpdz1[]="〖七彩祥云〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=610;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
} elseif($bz >=31&&$bz <=60){ 
//物品加
$wpdz1[]="〖紧箍咒〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=612;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");	
	
} else{


//经验	
$jy=2000000;
include("./pz/ini_pzz023.php");
//经验加

	
} 		
	
		
	
	
	
	
	
echo "<br>";		
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=481;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我希望是。一万年。。。</font></a>"."<br>";
} else{	
echo "<font color=red>〖活动〗紫霞仙子：(ˇˍˇ) 什么狗屁爱情故事，都是骗人的（紫霞仙子识破了你）</font>"."<br>";	
}
	
} elseif ($npcc==7) {
	
	



//物品加
$wpdz1[]="〖至尊宝密令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=613;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量	
//物品加
$wpdz1[]="〖月光宝盒〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=607;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");		

	
	
	
	
	
echo "<font color=red>〖活动〗紫霞仙子：原来你是我苦苦寻找已久的那位盖世英雄啊~~~呜呜~~（你捕获到了紫霞仙子芳心）</font>"."<br>";		
	
	
	
	
} else{	

}



































	
//随机出题


} else{	


echo "<font color=red>〖活动〗紫霞仙子：你今日已假扮至尊宝骗我很多次了！！</font>"."<br>";	
	
	








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





} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini















?>