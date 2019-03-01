<?php



if ($npcc==1) {
$npcname="村长";
if ($rid==1) {
echo "<font color=black>村长：【</font>"."<font color=black>$name</font>"."<font color=black>】你来了，是这样的，村外沙滩上出现了很多具有攻击性的螃蟹，你去帮我除掉一些！
</font>"."<br>";
echo "<font color=red>欢迎来到番茄西游（温馨提示，使用新手礼包，戴上装备，用门派技能去杀螃蟹！）</font>"."<br>";

//快速任务
$ydx=0;//移动坐标x
$ydy=28;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//银两加
$yl1=50000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");


//经验加
$jy=500;	
include("./pz/ini_pzz023.php");
//银两加




//物品加
$wpdz1[]="【新手礼包】（1级）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=129;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加





//任务进程改变
$rwjc1=2;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=8;//任务要杀怪
$rwjc4="螃蟹泛滥";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=1;



} elseif ($rid==2) {

echo "<font color=black>$npcname</font>"."<font color=black>：【</font>"."<font color=black>$name</font>"."<font color=black>】你来了，是这样的，村外沙滩上出现了很多具有攻击性的螃蟹，你去帮我除掉一些！（温馨提示，使用新手礼包，戴上装备，用门派技能去杀螃蟹！）
</font>"."<br>";
echo "<font color=black>需要除掉8只螃蟹，快去吧！</font>"."<br>";
echo "<font color=black>螃蟹x$xysg,已完成x$ysg</font>"."<br>";

//快速任务
$ydx=0;//移动坐标x
$ydy=28;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务






} elseif ($rid==3) {

echo "<font color=black>村长：干的不错，这是你的奖励！</font>"."<br>";


//银两加
$yl1=2200;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=500;	
include("./pz/ini_pzz023.php");
//银两加

//任务进程改变
$rwjc1=4;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="螃蟹泛滥";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==4) {

echo "<font color=black>村长：哎！螃蟹解决，一大批潮洞蟹又不知从哪里冒出来的，而且攻击性更强！</font>"."<br>";

//任务进程改变
$rwjc1=5;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="潮洞蟹成灾";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==5) {

echo "<font color=black>我:村长，您别说了，我都懂的，保证不会让你失望！</font>"."<br>";

echo "<font color=black>需要除掉10只潮洞蟹，快去吧！</font>"."<br>";
echo "<font color=black>潮洞蟹x$xysg,已完成x$ysg</font>"."<br>";






//快速任务
$ydx=0;//移动坐标x
$ydy=25;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务





} elseif ($rid==6) {

echo "<font color=black>我果然没看错人，拿好，这是你的奖励！去找旁边渔舍的渔夫学点本事吧！</font>"."<br>";
//银两加
$yl1=3300;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=800;	
include("./pz/ini_pzz023.php");
//银两加


//任务进程改变
$rwjc1=7;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="潮洞蟹成灾";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//快速任务
$ydx=0;//移动坐标x
$ydy=3;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务




} elseif ($rid==7) {

echo "<font color=black>我果然没看错人，拿好，这是你的奖励！去找旁边渔舍的渔夫学点本事吧！</font>"."<br>";


//快速任务
$ydx=0;//移动坐标x
$ydy=3;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务




} elseif ($rid==9) {

echo "<font color=black>村长:你去潮水洞穴最里边的未知洞穴巡视一下！</font>"."<br>";


//任务进程改变
$rwjc1=10;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查洞穴";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//快速任务
$ydx=0;//移动坐标x
$ydy=26;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif ($rid==10) {

echo "<font color=black>村长:你去潮水洞穴最里边的未知洞穴巡视一下！</font>"."<br>";


//快速任务
$ydx=0;//移动坐标x
$ydy=26;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



} elseif ($rid==11) {
echo "<font color=black>我：村长，不好了，我在调查洞穴的时候发现里面一只大螃蟹已经成精了，再不除掉将后患无穷啊！</font>"."<br>";


//任务进程改变
$rwjc1=12;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查洞穴～";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==12) {
echo "<font color=black>村长：哎！这事有点棘手啊，村里人听到已经成精了，都没有人敢去啊，这该如何是好！</font>"."<br>";


//经验加
$jy=500;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=13;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查洞穴～";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊





} elseif ($rid==13) {
echo "<font color=black>我：村长，这事就交给我去办吧，我一定不负众望！</font>"."<br>";
//任务进程改变
$rwjc1=14;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查洞穴～";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==14) {

echo "<font color=black>村长：好吧，年轻人，你一定要小心啊，我们在村里摆好宴席等你归来！(未知巢穴灭掉蟹精！)</font>"."<br>";


//经验加
$jy=500;	
include("./pz/ini_pzz023.php");


//////////////////////////////增加代码后的提示信息/////////////////////////
include("wj/ts.php");
//////////////////////////////增加代码后的提示信息/////////////////////////

//任务进程改变
$rwjc1=15;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="调查洞穴～";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//快速任务
$ydx=0;//移动坐标x
$ydy=26;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务





} elseif ($rid==15) {

echo "<font color=black>村长：好吧，年轻人，你一定要小心啊，我们在村里摆好宴席等你归来！(未知巢穴灭掉蟹精！)</font>"."<br>";
echo "<font color=black>需要灭掉蟹精，快去吧！</font>"."<br>";
echo "<font color=black>蟹精x$xysg,已完成x$ysg</font>"."<br>";



//快速任务
$ydx=0;//移动坐标x
$ydy=26;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



} elseif ($rid==16) {

echo "<font color=black>村长：小伙子年轻有为，果然不负众望啊！来这里有些银两，带上这船票去码头找船夫，让他带你到外面的世界去历练历练，还有这信，你交给长安城的店小二，他看到信会帮你的！</font>"."<br>";
//银两加
$yl1=6000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=1000;	
include("./pz/ini_pzz023.php");
//银两加


//物品加
$wpdz1[]="云南白药";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=246;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加
//物品加
$wpdz1[]="灵丹";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=244;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量

//物品加

//物品加
$wpdz1[]="船票";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=252;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加


//物品加
$wpdz1[]="村长的信";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=256;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");





//任务进程改变
$rwjc1=17;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="新的征程";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变





//快速任务
$ydx=0;//移动坐标x
$ydy=6;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务




} elseif ($rid==17) {

echo "<font color=black>村长：小伙子年轻有为，果然不负众望啊！来这里有些银两，带上这船票去码头找船夫，让他带你到外面的世界去历练历练，还有这信，你交给长安城的店小二，他看到信会帮你的！</font>"."<br>";



//快速任务
$ydx=0;//移动坐标x
$ydy=6;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务




//


} else {

echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";


}



} elseif ($npcc==4) {
$npcname="渔夫";
$rwnpc=$npcc;
if ($rid==7) {


echo "<font color=black>渔夫:我也不会什么，这有本秘籍，你拿去看看！！</font>"."<br>";
//物品加
$wpdz1[]="打猎心得";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=2;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加



//任务进程改变
$rwjc1=8;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="潮洞蟹成灾";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
$npcc=$rwnpc;

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊






} elseif ($rid==8) {


echo "<font color=black>渔夫:刚才村长派人来找你，好像是有什么事，你快去看看吧！</font>"."<br>";

//快速任务
$ydx=0;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//银两加
$yl1=3300;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=800;	
include("./pz/ini_pzz023.php");
//银两加


//任务进程改变
$rwjc1=9;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="潮洞蟹成灾";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
} elseif ($rid==9) {


echo "<font color=black>渔夫:刚才村长派人来找你，好像是有什么事，你快去看看吧！</font>"."<br>";



//快速任务
$ydx=0;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务





} else {

echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";

//
}





} elseif ($npcc==695) {
$npcname="调查洞穴～";
if ($rid==10) {


echo "<font color=black>你在洞穴级巡视了一下，发现了一只大蟹精，赶快去向村长报告！</font>"."<br>";
//银两加
$yl1=1000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=600;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=11;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查洞穴～";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid==11) {
echo "<font color=black>你在洞穴级巡视了一下，发现了一只大蟹精，赶快去向村长报告！</font>"."<br>";
//快速任务
$ydx=0;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务








} else {

echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";

//
}








} elseif ($npcc==7) {


$npcname="船夫";
if ($rid==17) {


echo "<font color=black>船夫：要出村，你有船票？</font>"."<br>";



//任务进程改变
$rwjc1=18;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="新的征程";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==18) {



$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="船票";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=252;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值










if ($pd==2) {
echo "<font color=black>我：是这个？</font>"."<br>";
//银两加
$yl1=2000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=500;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=19;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="新的征程";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} else{
echo "<font color=black>船夫：你没有船票！</font>"."<br>";

}











} elseif ($rid==19) {
echo "<font color=black>船夫：对，就是这个，上船我们出发！</font>"."<br>";

//任务进程改变
$rwjc1=20;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="新的征程";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==20) {
echo "<font color=black>船夫：恭喜你！！开启传送</font>"."<br>";



//任务进程改变
$rwjc1=21;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="新的征程";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变









} else {

echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";

//
}






} elseif ($npcc==146) {


$npcname="店小二";
if ($rid==21) {


$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="村长的信";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=256;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值


if ($pd==2) {
echo "<font color=black>【在南城客栈招呼黑衣客人】</font>"."<br>";
echo "<font color=black>店小二：虽然是村长介绍你来的，不过也要自食其力，你就帮我招呼下客人～挣点零花钱吧！手脚麻利点！～别偷懒～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哦～</font>"."<br>";


//经验加
$jy=800;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=22;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="招呼黑衣人";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//银两加
$yl1=2000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=500;	
include("./pz/ini_pzz023.php");


} else{
echo "<font color=black>店小二：你没有村长介绍过来的信谁知你是不是奸细啊！</font>"."<br>";

}











} elseif ($rid==22||$rid==23||$rid==24) {

echo "<font color=black>【在南城客栈招呼黑衣客人】</font>"."<br>";
echo "<font color=black>店小二：虽然是村长介绍你来的，不过也要自食其力，你就帮我招呼下客人～挣点零花钱吧！手脚麻利点！～别偷懒～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哦～</font>"."<br>";


//

//
} elseif ($rid==25) {

echo "<font color=black>【赶走在南城客栈的醉道士】</font>"."<br>";
echo "<font color=black>店小二：来的正好，快把门口那个臭要饭的赶走，免得妨碍咱们做生意！等一下来帮忙端菜～</font>"."<br>";
echo "<font color=black>$name1</font>"."<font color=black>：好的～</font>"."<br>";



//任务进程改变
$rwjc1=26;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="赶走醉道士";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==26) {

echo "<font color=black>【赶走在南城客栈的醉道士】</font>"."<br>";
echo "<font color=black>店小二：来的正好，快把门口那个臭要饭的赶走，免得妨碍咱们做生意！等一下来帮忙端菜～</font>"."<br>";
echo "<font color=black>$name1</font>"."<font color=black>：好的～</font>"."<br>";

//
//

//

} elseif ($rid==27) {

echo "<font color=black>【把酒菜端到南城客栈的睡房】</font>"."<br>";
echo "<font color=black>店小二：干什么去了？还不快把酒菜给端到睡房去！几位大爷都等急了～麻利点～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=98;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=28;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="送菜到客房";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid==28||$rid==29||$rid==30) {

echo "<font color=black>【把酒菜端到南城客栈的睡房】</font>"."<br>";
echo "<font color=black>店小二：干什么去了？还不快把酒菜给端到睡房去！几位大爷都等急了～麻利点～</font>"."<br>";



//
//

//


} elseif ($rid==37||$rid==38||$rid==39) {

echo "<font color=black>【送酒菜到长安当铺】</font>"."<br>";
echo "<font color=black>店小二：快过来～事还没忙完呢～把这篮酒菜送到对面当铺～别忘了收20两银子！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=99;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=38;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="送酒菜到长安当铺";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==38) {

echo "<font color=black>【送酒菜到长安当铺】</font>"."<br>";
echo "<font color=black>店小二：快过来～事还没忙完呢～把这篮酒菜送到对面当铺～别忘了收20两银子！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=99;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//
//

//
} elseif ($rid==43) {

echo "<font color=black>【和长安南城客栈店小二说话】</font>"."<br>";
echo "<font color=black>店小二：唉呀！你死哪里去了！不知怎么回事，客栈里好多客人中毒了！快出人命了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：啊！？</font>"."<br>";
echo "<font color=black>经验+1500</font>"."<br>";

//任务进程改变
$rwjc1=44;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="食客中毒";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==44) {

echo "<font color=black>【和长安药店老板杨中顺谈谈】</font>"."<br>";
echo "<font color=black>店小二：这可如何是好啊！要是这些客人出事了，客栈就得关门了！杨老板～这些人还有没有救啊！</font>"."<br>";
echo "<font color=black>杨中顺：别急～让老夫看看</font>"."<br>";


//任务进程改变
$rwjc1=45;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="食客中毒";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==45) {

echo "<font color=black>【和长安南城客栈店小二说话】</font>"."<br>";
echo "<font color=black>药铺掌柜杨中顺：这些人中的毒很奇怪，老夫也从未见过，事不宜迟，老夫这就回去配药！</font>"."<br>";

//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=46;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="食客中毒";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==46) {

echo "<font color=black>【去长安药店找杨中顺拿解药】</font>"."<br>";
echo "<font color=black>店小二：你快去药店吧！赶紧把配好的解药拿过来！我还要在这里看着这些客人！～快去啊～这是配药用的200两银子！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=22;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//银两加
$yl1=200;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");



//任务进程改变
$rwjc1=47;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="食客中毒";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid==47||$rid==48) {

echo "<font color=black>【去长安药店找杨中顺拿解药】</font>"."<br>";
echo "<font color=black>店小二：你快去药店吧！赶紧把配好的解药拿过来！我还要在这里看着这些客人！～快去啊～这是配药用的200两银子！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=22;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//

//


} elseif ($rid==58) {




$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="解药";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=259;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值




if ($pd==2) {


echo "<font color=black>【（南城客栈）一阵忙碌后】</font>"."<br>";
echo "<font color=black>店小二：唉呀！怎么才回来？有解药了吗？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：解药在这里～（你和小二把解药冲好给众人服下）</font>"."<br>";
echo "<font color=black>经验+1500</font>"."<br>";


//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=59;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} else{
echo "<font color=black>店小二：唉呀！怎么才回来？有解药了吗？</font>"."<br>";

}





















} elseif ($rid==59) {
echo "<font color=black>【（南城客栈）一阵忙碌后】</font>"."<br>";
echo "<font color=black>店小二：唉呀！怎么才回来？有解药了吗？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：解药在这里～（你和小二把解药冲好给众人服下）</font>"."<br>";





//

//

//

} elseif ($rid==74) {
echo "<font color=black>【和南城客栈店小二说话】</font>"."<br>";
echo "<font color=black>店小二∶你昨晚又跑到哪玩了？居然到早上才回来，连店门也没拴！万一遭了小偷怎么办！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小二！我昨晚遇到一位仙人呢！</font>"."<br>";


//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=75;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="和店小二对话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==75) {
echo "<font color=black>【和南城客栈店小二说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：就是一大早躺在店门口要酒喝的那个道士，他还教了我一招法术，你要不要瞧瞧．</font>"."<br>";
//任务进程改变
$rwjc1=76;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="和店小二对话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//



//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
//


} elseif ($rid==76) {

echo "<font color=black>【去长安南城客栈睡房打探】</font>"."<br>";
echo "<font color=black>店小二∶也没住人，就只见抬了只鼓鼓的麻布袋进去，也不许任何人进那睡房。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哦？神神秘秘的，莫非是啥宝贝不成．．我得去看看</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=98;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=77;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="和店小二对话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==77) {

echo "<font color=black>【去长安南城客栈睡房打探】</font>"."<br>";
echo "<font color=black>店小二∶也没住人，就只见抬了只鼓鼓的麻布袋进去，也不许任何人进那睡房。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哦？神神秘秘的，莫非是啥宝贝不成．．我得去看看</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=98;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//

//

//
} elseif ($rid==85) {

echo "<font color=black>【在长安南城客栈和店小二谈谈】</font>"."<br>";
echo "<font color=black>店小二∶你疯了是不是！得罪了客官咱们生意还做不做？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小二～那些黑衣人根本是采花贼！这位姑娘差点就被抓去卖掉。</font>"."<br>";

//任务进程改变
$rwjc1=86;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="和店小二对话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==86) {

echo "<font color=black>【在长安南城客栈和店小二谈谈】</font>"."<br>";
echo "<font color=black>店小二∶哎呦～真是该打。咦？这是哪户人家的千金我怎么从没见过？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小二～你别尽盯着人家瞧呐！我得尽快将这位姑娘送回去。</font>"."<br>";
echo "<font color=black>店小二∶你可得快去快回啊！别又惹上麻烦了。(去长安仙泉打探一番)</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=88;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=87;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==87) {

echo "<font color=black>【在长安南城客栈和店小二谈谈】</font>"."<br>";
echo "<font color=black>店小二∶哎呦～真是该打。咦？这是哪户人家的千金我怎么从没见过？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小二～你别尽盯着人家瞧呐！我得尽快将这位姑娘送回去。</font>"."<br>";
echo "<font color=black>店小二∶你可得快去快回啊！别又惹上麻烦了。(去长安仙泉打探一番)</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=88;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务




} elseif  ($rid==104) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>";
echo "<font color=black>（小二突然一掌向后拍出，将黑衣人击倒在地上）</font>"."<br>";
echo "<font color=black>店小二∶谁是小伙计呀！你们这几个不长眼睛的混蛋先给我打听清楚我是何许人物？竟敢在我的店里撒野？要闹事就给我滚到别处去，小心我拆了你们的骨头拿去熬汤！
</font>"."<br>";



//任务进程改变
$rwjc1=105;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="黑衣客人";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变




//

} elseif ($rid==105) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>";
echo "<font color=black>（小二突然一掌向后拍出，将黑衣人击倒在地上）</font>"."<br>";
echo "<font color=black>店小二∶谁是小伙计呀！你们这几个不长眼睛的混蛋先给我打听清楚我是何许人物？竟敢在我的店里撒野？要闹事就给我滚到别处去，小心我拆了你们的骨头拿去熬汤！
</font>"."<br>";




//最小值
//

//




//
} elseif ($rid==106) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>"; 		
echo "<font color=black>店小二∶真是不自量力！想当年我也是普陀大弟子出生</font>"."<br>";


//任务进程改变
$rwjc1=107;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==107) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>"; 		
echo "<font color=black>店小二∶这种三脚猫货色我才不放在眼里，想当年我．．算了．．不提了。喂～你高兴个什么劲！闹出人命啦！这下怎么收拾？</font>"."<br>";
//任务进程改变
$rwjc1=108;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==108) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>"; 	

echo "<font color=black>$name</font>"."<font color=black>：这班西域匪杀人越货、强掳弱女死有余辜！你这是替天行道！</font>"."<br>";
echo "<font color=black>店小二∶去你的．．就会说风凉话，日后官差问起来总是件麻烦事</font>"."<br>";

//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=109;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==109) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>"; 	

echo "<font color=black>$name</font>"."<font color=black>：那．．这位小姑娘怎么办？她师父遇难了，孤苦伶仃一个人～咱们总不能不管吧？</font>"."<br>";
echo "<font color=black>店小二∶唉～造孽．．．那就让她在这里住下来吧</font>"."<br>";


//任务进程改变
$rwjc1=110;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==110) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>"; 	

echo "<font color=black>店小二∶你去楼上挑一间比较安静的房间，让她好好休息一下。人家遇到这种惨事，心里一定很难过。你可要多多关照人家别让她想不开呀！</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：放心．．我知道。</font>"."<br>";

//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=111;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==111) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>"; 	

echo "<font color=black>（你将清清领到楼上安顿好，清清很快就睡着了．．）</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：唉．．看来她真的是累坏了．</font>"."<br>";

//任务进程改变
$rwjc1=112;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==112) {

echo "<font color=black>【去南城客栈睡房休息】</font>"."<br>"; 	

echo "<font color=black>店小二∶小姑娘还好吧？</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：倒头便睡着了。看来．．她一夜都未曾合过眼。</font>"."<br>";
echo "<font color=black>店小二∶好吧．．这里没你的事了，回睡房休息去吧．．</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=98;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");




//任务进程改变
$rwjc1=113;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==113) {

echo "<font color=black>【去南城客栈睡房休息】</font>"."<br>"; 	

echo "<font color=black>店小二∶小姑娘还好吧？</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：倒头便睡着了。看来．．她一夜都未曾合过眼。</font>"."<br>";
echo "<font color=black>店小二∶好吧．．这里没你的事了，回睡房休息去吧．．</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=98;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//最小值
//

//

//
} elseif ($rid==117) {

echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>";
echo "<font color=black>店小二∶你欺负人家啦？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我哪敢啊！？</font>"."<br>";
echo "<font color=black>店小二∶你这浑小子！半夜三更让人家一个女孩子在外面哭鼻子～还说不是欺负人家？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我～我～</font>"."<br>";

//任务进程改变
$rwjc1=118;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==118) {
echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>";
echo "<font color=black>（这晚你只好和清清一起睡，一夜过去）次日．．店小二∶呵～呵～你这小子！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小二．．干嘛笑得那么诡异？</font>"."<br>";
echo "<font color=black>店小二∶少跟我装傻！你小子艳福不浅呀！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：．．．．．．</font>"."<br>";

//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=119;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==119) {
echo "<font color=black>【南城客栈和店小二说话】</font>"."<br>";
echo "<font color=black>店小二∶我决定了！！就让你带清清去西域找妈妈～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：她都告诉你啦？</font>"."<br>";
echo "<font color=black>店小二∶嘿～从小到大．．你有哪件事瞒得过你小二哥的？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：到西域可是数千里之远喔！我要是去了，这一趟可不只是十天半个月的哦！</font>"."<br>";
//任务进程改变
$rwjc1=120;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==120) {
echo "<font color=black>【南城客栈和清清说话】</font>"."<br>";
echo "<font color=black>店小二∶你这么大了。再说．．你这个性．．也不可能在这客栈待得下去。年青人出去见见世面也未尝不好。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小二大哥～您终于了解我了！</font>"."<br>";

//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=121;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//最小值
//

//

//

} elseif ($rid==121) {
echo "<font color=black>【南城客栈和清清说话】</font>"."<br>";
echo "<font color=black>店小二∶你这么大了。再说．．你这个性．．也不可能在这客栈待得下去。年青人出去见见世面也未尝不好。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小二大哥～您终于了解我了！</font>"."<br>";


//最小值
//

//

//

} elseif ($rid==397) {
echo "<font color=black>【和南城客栈店小二对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小二哥，客人要一间上房。</font>"."<br>";
echo "<font color=black>店小二：没问题，我马上去准备准备。(店小二跑过去把客人领上客房。片刻之后，小二回来了)</font>"."<br>";
echo "<font color=black>店小二：你和晓月姑娘今天晚上要在客栈休息吗？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：是的，请小二哥为我们打点打点。</font>"."<br>";

//任务进程改变
$rwjc1=398;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="寻找清清";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==398) {
echo "<font color=black>【到南城客栈客房休息】</font>"."<br>";
echo "<font color=black>店小二：如果要住下来的话也没问题，店里还有一间空房。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：一间房～～这恐怕有点问题？</font>"."<br>";
echo "<font color=black>店小二：有什么问题？最近是观音诞，京城所有客栈都客满了，连我这间小店也只剩一间客房，你不在我这里睡就要睡街了。</font>"."<br>";
echo "<font color=black>萧晓月：我才不要睡街呢～～呆瓜小贼！先住下来～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：……那只好将就一个晚上了。</font>"."<br>";

//经验加
$jy=250000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=399;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="寻找清清";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==399) {
echo "<font color=black>【到南城客栈客房休息】</font>"."<br>";
echo "<font color=black>店小二：如果要住下来的话也没问题，店里还有一间空房。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：一间房～～这恐怕有点问题？</font>"."<br>";
echo "<font color=black>店小二：有什么问题？最近是观音诞，京城所有客栈都客满了，连我这间小店也只剩一间客房，你不在我这里睡就要睡街了。</font>"."<br>";
echo "<font color=black>萧晓月：我才不要睡街呢～～呆瓜小贼！先住下来～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：……那只好将就一个晚上了。</font>"."<br>";


//最小值
//

//

//


} else {

echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";

//
}



} elseif ($npcc==696) {
	
	
$npcname="店小二";
if ($rid==22) {
echo "<font color=black>【和南城客栈黑衣人说话】</font>"."<br>"; 		
echo "<font color=black>黑衣客商：小二！给我们两间上好客房！没有我们的吩咐，不许有人打扰，知道了吗？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：是．．这容易，小的一定照办！</font>"."<br>";



//任务进程改变
$rwjc1=23;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="招呼黑衣人";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊





} elseif ($rid==23) {

echo "<font color=black>【和南城客栈黑衣人说话】</font>"."<br>"; 		
echo "<font color=black>黑衣客人：很好！往后这几天，只要你乖乖听我们的话办事，赏银不会少你的。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：是．．</font>"."<br>";


//任务进程改变
$rwjc1=24;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="招呼黑衣人";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==24) {
echo "<font color=black>【和南城客栈店小二说话】</font>"."<br>"; 		
echo "<font color=black>黑衣客商：这些银子你拿去花！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：谢大爷的赏～几位大爷先去睡房休息吧！（哇哈！真是遇到财神爷了）</font>"."<br>";
//银两加
$yl1=15000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=200;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=25;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="招呼黑衣人";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
} elseif ($rid==25) {
echo "<font color=black>【和南城客栈店小二说话】</font>"."<br>"; 		
echo "<font color=black>黑衣客商：这些银子你拿去花！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：谢大爷的赏～几位大爷先去睡房休息吧！（哇哈！真是遇到财神爷了）</font>"."<br>";

//


} else {

echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";

//
}


	
} elseif ($npcc==5196) {
include("5196.php");
} elseif ($npcc==5197) {
include("5197.php");
	
	} elseif ($npcc==149) {
	
	
	$npcname="董朴升";
if ($rid==38) {
echo "<font color=black>【到长安当铺和当铺掌柜董朴升说话】</font>"."<br>";
echo "<font color=black>董朴升：酒菜拿来了？好～20两银子收好了！$name？怎么你成客栈的小伙计了？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：．．我看他们忙不过来就帮帮忙～嘿嘿</font>"."<br>";
echo "<font color=black>董朴升:对了我还有事情要找你</font>"."<br>";

//银两加
$yl1=20;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=39;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="招呼黑衣人";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==39) {

echo "<font color=black>【去长安当铺货场杀5只老鼠】</font>"."<br>";
echo "<font color=black>董朴升：我看你手脚麻利，不妨帮我个小忙，去后面【货场】帮我赶走那些老鼠！挣点零花钱～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：行啊～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=100;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//任务进程改变
$rwjc1=40;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="董老板的请求";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//


} elseif ($rid==40) {

echo "<font color=black>【去长安当铺货场杀5只老鼠】</font>"."<br>";
echo "<font color=black>董朴升：我看你手脚麻利，不妨帮我个小忙，去后面【货场】帮我赶走那些老鼠！挣点零花钱～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：行啊～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=100;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

echo "<font color=black>需要除掉5只老鼠，快去吧！</font>"."<br>";
echo "<font color=black>老鼠x$xysg,已完成x$ysg</font>"."<br>";
//

//

//

} elseif ($rid==41) {

echo "<font color=black>【和长安当铺掌柜董朴升说话】</font>"."<br>";
echo "<font color=black>董朴升：不错，不错，手脚果然利索！这下我可放心了！这50两银子是赏你的～</font>"."<br>";

//银两加
$yl1=8000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=2000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=42;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="董老板的请求";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==42) {

echo "<font color=black>【去长安南城客栈找店小二】</font>"."<br>";
echo "<font color=black>董朴升：客栈的店小二正在找你！客栈里好像出了乱子了？快回去看看吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哦？</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//银两加
$yl1=8000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=2000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=43;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="董老板的请求";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变





} elseif ($rid==43||$rid==44||$rid==45||$rid==46||$rid==47) {

echo "<font color=black>【去长安南城客栈找店小二】</font>"."<br>";
echo "<font color=black>董朴升：客栈的店小二正在找你！客栈里好像出了乱子了？快回去看看吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哦？</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务






} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	



} else {
}



?>