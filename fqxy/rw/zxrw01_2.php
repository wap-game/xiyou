<?php

//杨中顺
if ($npcc==54) {

$rwnpc=$npcc;
$npcname="杨中顺";
if ($rid==47) {
echo "<font color=black>【和长安药铺掌柜杨中顺说话】</font>"."<br>";
echo "<font color=black>杨中顺：解这毒，我也没有十分把握，只能试一个偏方了，不过这偏方药引不好找！我这里也没有现成的。</font>"."<br>";
//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=48;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==48) {

echo "<font color=black>【找5个动物碎齿给长安药店老板】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：什么药引？我去找！</font>"."<br>";
echo "<font color=black>杨中顺：需要5个动物碎齿(大老鼠掉落)！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=100;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=50;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==50) {




$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="动物碎齿";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=257;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值



if ($pd==2) {
echo "<font color=black>【和长安药铺掌柜杨中顺说话】</font>"."<br>";
echo "<font color=black>杨中顺：好～这两样齐了，就差仙露了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：仙露？</font>"."<br>";
//银两加
$yl1=5000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");
//银两加


//任务进程改变
$rwjc1=51;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} else{
//快速任务
$ydx=1;//移动坐标x
$ydy=100;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务	
echo "<font color=black>杨中顺：需要5个动物碎齿(大老鼠掉落)！</font>"."<br>";

}




} elseif ($rid==51) {
echo "<font color=black>【和长安药店老板杨中顺谈谈】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：啊？有这种宝贝？</font>"."<br>";
echo "<font color=black>杨中顺：只是这宝贝太难得，每个月月圆之时才可采得一滴仙露！可遇而不可求啊！</font>"."<br>";

//任务进程改变
$rwjc1=52;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==52) {
echo "<font color=black>【和长安药铺掌柜杨中顺说话】</font>"."<br>";
echo "<font color=black>杨中顺：听说仙泉中常有仙子出现，赐凡人仙露以解危难！你不妨去试试，能否求到仙露就看造化了！</font>"."<br>";
//银两加
$yl1=5000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");
//银两加

//任务进程改变
$rwjc1=53;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊






} elseif ($rid==53) {
echo "<font color=black>【去长安仙泉取得仙露】</font>"."<br>";
echo "<font color=black>杨中顺：仙泉就在望南街过去的曲江池边，你不妨去碰碰运气吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好！我这就去！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=88;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=55;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变





} elseif ($rid==55) {





$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="仙露";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=258;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值



if ($pd==2) {
echo "<font color=black>【和长安药铺掌柜杨中顺说话】</font>"."<br>";
echo "<font color=black>（你拿出清清给的仙露）杨中顺：造化～造化！这些人的性命有救了！我这就配药！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：嘿嘿～</font>"."<br>";
//银两加
$yl1=5000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");
//银两加

//任务进程改变
$rwjc1=56;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} else{
echo "<font color=black>【和长安药铺掌柜杨中顺说话】</font>"."<br>";
echo "<font color=black>杨中顺：仙泉就在望南街过去的曲江池边，你不妨去碰碰运气吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好！我这就去！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=88;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
echo "<font color=black>需要：仙露x1</font>"."<br>";

}




} elseif ($rid==56) {
echo "<font color=black>【和杨中顺对话】</font>"."<br>";
echo "<font color=black>杨中顺：拿好了这是给你的解药</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好～</font>"."<br>";


//物品加
$wpdz1[]="解药";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=259;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加






//任务进程改变
$rwjc1=57;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//继续聊
$npcc=$rwnpc;
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==57) {
echo "<font color=black>【把解药拿回长安南城客栈】</font>"."<br>";
echo "<font color=black>杨中顺：小兄弟！赶紧把解药拿过去～给众人用温水服下～再睡上几个时辰就没有大碍了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好～</font>"."<br>";




//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务





//任务进程改变
$rwjc1=58;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="灵药配方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==58) {
echo "<font color=black>【把解药拿回长安南城客栈】</font>"."<br>";
echo "<font color=black>杨中顺：小兄弟！赶紧把解药拿过去～给众人用温水服下～再睡上几个时辰就没有大碍了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好～</font>"."<br>";


//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//



} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}



} elseif ($npcc==32) {
$npcname="疥顶小僧";
$rwnpc=$npcc;

if ($rid==96) {
echo "<font color=black>【朱雀大街和疥顶小僧谈谈】</font>"."<br>";
echo "<font color=black>疥顶小僧∶不好了～不好了，</font>"."<font color=black>$name1</font>"."<font color=black>！有三个人拿着刀子，在到处找你呢！他们看起来很凶．．</font>"."<br>";


//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");
//银两加



//任务进程改变
$rwjc1=97;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==97) {


echo "<font color=black>【朱雀大街和疥顶小僧谈谈】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：一定是那些死不成的家伙．．正要找他们算帐呢～你不要担心，我现在武功高强，没人打得过我的．．</font>"."<br>";
//任务进程改变
$rwjc1=98;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==98) {


echo "<font color=black>【朱雀大街和疥顶小僧谈谈】</font>"."<br>";
echo "<font color=black>疥顶小僧∶你看．．要不要报官啊？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：不必～有我就行了，那些人不过是我的手下败将。</font>"."<br>";
echo "<font color=black>疥顶小僧∶可是．．对方人多．．就是打架也要准备些家伙吧？</font>"."<br>";
//银两加
$yl1=5000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=99;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$npcc=$rwnpc;
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==99) {


echo "<font color=black>【朱雀大街和疥顶小僧谈谈】</font>"."<br>";
echo "<font color=black>疥顶小僧∶．．或者先去药店里买些疗伤药回来？万一．．万一．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：啧．．你少触我霉头！</font>"."<br>";
echo "<font color=black>疥顶小僧∶这些金创药你拿着吧～</font>"."<br>";





//物品加
$wpdz1[]="云南白药";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=246;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="灵丹";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=244;//物品id
$wpdz4[]=15;//	量
$wpdz5[]=1;//	重量

include("./rwmap/rwget.php");
//物品加




//任务进程改变
$rwjc1=100;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==100) {


echo "<font color=black>【去南城客栈找黑衣人】</font>"."<br>";
echo "<font color=black>疥顶小僧∶阿米陀佛～我怕会闹出人命呢！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哈哈．．我这是替天行道，他们人在哪里？</font>"."<br>";
echo "<font color=black>疥顶小僧∶他们就在客栈里等着你呢～</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=101;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==101) {


echo "<font color=black>【去南城客栈找黑衣人】</font>"."<br>";
echo "<font color=black>疥顶小僧∶阿米陀佛～我怕会闹出人命呢！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哈哈．．我这是替天行道，他们人在哪里？</font>"."<br>";
echo "<font color=black>疥顶小僧∶他们就在客栈里等着你呢～</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//最小值
//

//

//




} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}

} elseif ($npcc==91) {
$npcname="小男孩";


if ($rid==123) {
echo "<font color=black>【和歪柳巷小男孩说话】</font>"."<br>";
echo "<font color=black>小男孩：哥哥～你喜不喜欢吃糖葫芦啊？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：喜欢啊</font>"."<br>";
echo "<font color=black>小男孩：哥哥，那我请你吃糖葫芦好不好？</font>"."<br>";


//任务进程改变
$rwjc1=124;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==124) {


echo "<font color=black>【和歪柳巷小男孩说话】</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：好啊～</font>"."<br>";
echo "<font color=black>小男孩：可是我没有钱耶！等我长大有钱了就可以请你吃咯～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：．．．</font>"."<br>";
echo "<font color=black>小男孩：清清：嘻嘻～这小家伙是想你买糖葫芦给他吃哦～</font>"."<br>";

//经验加
$jy=15000;	
include("./pz/ini_pzz023.php");





//任务进程改变
$rwjc1=125;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糖葫芦";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==125) {


echo "<font color=black>【和歪柳巷小男孩说话】</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：哈～好狡猾的小鬼啊～好，大哥哥买给你吃！</font>"."<br>";
echo "<font color=black>小男孩：谢谢哥哥～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：那你要几个糖葫芦啊？</font>"."<br>";



//任务进程改变
$rwjc1=126;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糖葫芦";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==126) {


echo "<font color=black>【和歪柳巷小男孩说话】</font>"."<br>";
echo "<font color=black>小男孩：四个！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哇～这么贪心？</font>"."<br>";
echo "<font color=black>小男孩：一个给哥哥你，一个给大姐姐～一个给妹妹～一个给我自己～</font>"."<br>";
echo "<font color=black>清清：真乖</font>"."<br>";
//经验加
$jy=15000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=127;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糖葫芦";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==127) {


echo "<font color=black>【买四个糖葫芦给歪柳巷小男孩】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哈哈，这小家伙～长大后一定相当了得！好吧～大哥哥今天心情好～就买给你～</font>"."<br>";

//任务进程改变
$rwjc1=128;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糖葫芦";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==128) {



$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="冰糖葫芦";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=193;//物品id
$wpdz4[]=4;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值




if ($pd==2) {


echo "<font color=black>【去城隍庙（遇到被打丫环）】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：拿去这是给你的糖葫芦</font>"."<br>";

//经验加
$jy=16000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=129;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糖葫芦";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} else{
echo "<font color=black>小男孩：哥哥我的冰糖葫芦呢？</font>"."<br>";
echo "<font color=black>需要：冰糖葫芦x4（卖糖人有卖）</font>"."<br>";
}




} elseif ($rid==129) {


echo "<font color=black>【去城隍庙（遇到被打丫环）】</font>"."<br>";
echo "<font color=black>（你将两个糖葫芦给小男孩小女孩）</font>";
echo "<font color=black>$name</font>"."<font color=black>：小心拿着～（你把剩下的两个糖葫芦一人一个分给了你和清清）</font>"."<br>";
echo "<font color=black>清清：嘻嘻～吃糖葫芦！我们也成小孩子咯～</font>"."<br>";
echo "<font color=black>经验+300000</font>"."<br>";
echo "<font color=black>银两+100000</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=53;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=130;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糖葫芦";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==130) {


echo "<font color=black>【去城隍庙（遇到被打丫环）】</font>"."<br>";
echo "<font color=black>（你将两个糖葫芦给小男孩小女孩）</font>";
echo "<font color=black>$name</font>"."<font color=black>：小心拿着～（你把剩下的两个糖葫芦一人一个分给了你和清清）</font>"."<br>";
echo "<font color=black>清清：嘻嘻～吃糖葫芦！我们也成小孩子咯～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=53;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//最小值
//

//

//



} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}


//
} elseif ($npcc==451) {
$npcname="李捕头";
$rwnpc=$npcc;
if ($rid==189) {

echo "<font color=black>【官府门口和李捕头说话】</font>"."<br>";
echo "<font color=black>李捕头：嘿～小仙卿怎么没去振远镖局参加比武招亲啊？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：比武招亲？哈哈～有这种好玩的事情？</font>"."<br>";


//任务进程改变
$rwjc1=190;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==190) {
echo "<font color=black>【去振远镖局看比武招亲】</font>"."<br>";
echo "<font color=black>李捕头：这已经不是头一次了～镖局大小姐自幼便承袭家传，剑指双绝，十六岁起全京城就没一个男孩子打得过她了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：呦？这么厉害？清清我们也去瞧热闹吧！</font>"."<br>";
echo "<font color=black>清清：恩！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=91;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=191;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid==191) {
echo "<font color=black>【去振远镖局看比武招亲】</font>"."<br>";
echo "<font color=black>李捕头：这已经不是头一次了～镖局大小姐自幼便承袭家传，剑指双绝，十六岁起全京城就没一个男孩子打得过她了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：呦？这么厉害？清清我们也去瞧热闹吧！</font>"."<br>";
echo "<font color=black>清清：恩！</font>"."<br>";;
//快速任务
$ydx=1;//移动坐标x
$ydy=91;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//最小值
//

//

//



} elseif ($rid==432) {

echo "<font color=black>【和白虎大街李捕头对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：李捕头，看你上气不接下气的，是不是发生了什么事情？</font>"."<br>";
echo "<font color=black>李捕头：我觉得昨晚的事情很可疑，所以又回鼓楼搜查了一番，结果给我发现了一个耳坠。你看～这耳坠珠子的样式十分花俏，一般为歌女或者舞女所有。我准备先向太守大人报告，然后到喜福会去调查一下。</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=433;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==433) {

echo "<font color=black>【和白虎大街李捕头对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：不知李捕头是否可以把这个耳坠珠子交给我，让我去彻查此事呢？</font>"."<br>";
echo "<font color=black>李捕头：小仙卿的情况，老夫有所听闻。既然这东西可以帮到小仙卿，就请小仙卿拿去吧。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：李捕头的大恩大德，我</font>"."<font color=black>$name</font>"."<font color=black>没齿难忘～</font>"."<br>";


//物品加
$wpdz1[]="耳坠珠子";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=264;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加



//任务进程改变
$rwjc1=434;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$npcc=$rwnpc;
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==434) {

echo "<font color=black>【到清虚观找雾渊道长】</font>"."<br>";
echo "<font color=black>李捕头：从昨晚的事情来看，似乎是有人专门嫁祸于你，你可得多加留心啊！老夫知道清虚观的雾渊道长有样神奇宝物，黑夜之中可以发出淡淡蓝光。我曾用此物跟踪逃犯，每次都事半功倍，你最好去雾渊道长那里要点！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：多谢捕头指点，我这就去清虚观！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=71;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=435;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==435) {

echo "<font color=black>【到清虚观找雾渊道长】</font>"."<br>";
echo "<font color=black>李捕头：从昨晚的事情来看，似乎是有人专门嫁祸于你，你可得多加留心啊！老夫知道清虚观的雾渊道长有样神奇宝物，黑夜之中可以发出淡淡蓝光。我曾用此物跟踪逃犯，每次都事半功倍，你最好去雾渊道长那里要点！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：多谢捕头指点，我这就去清虚观！</font>"."<br>";

//最小值
//

//

//


//快速任务
$ydx=1;//移动坐标x
$ydy=71;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务






} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}









//总镖头萧升
} elseif ($npcc==142) {
$npcname="总镖头萧升";
if ($rid==200) {
echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>萧晓月∶爹～你别管嘛！今天我要是不在众人面前讨回这面子，岂不让人家看轻咱们萧家！</font>"."<br>";


//任务进程改变
$rwjc1=201;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变




//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==201) {


echo "<font color=black>【镇远镖局上擂台比武】</font>"."<br>";
echo "<font color=black>萧升∶好好好．．爱怎么样都随你！不过～只许点到为止，你知道吗？</font>"."<br>";
echo "<font color=black>萧晓月∶嘻．．亮招吧！</font>"."<br>";
//经验加
$jy=80000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=202;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==202) {


echo "<font color=black>【镇远镖局上擂台比武】</font>"."<br>";
echo "<font color=black>萧升∶好好好．．爱怎么样都随你！不过～只许点到为止，你知道吗？</font>"."<br>";
echo "<font color=black>萧晓月∶嘻．．亮招吧！</font>"."<br>";

//最小值
//
//
//




} elseif ($rid==205) {


echo "<font color=black>【镇远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>萧升∶呵呵呵．．太好了！太好了！诸位乡亲～今日小女的比武招亲终于有了结果，多谢诸位乡亲共襄盛举。明日起我萧某人于萧家堡席开三日，诸位乡亲父老务必赏光！ </font>"."<br>";

//任务进程改变
$rwjc1=206;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==206) {

echo "<font color=black>【镇远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>萧升∶呵呵呵．．太好了！太好了！诸位乡亲～今日小女的比武招亲终于有了结果，多谢诸位乡亲共襄盛举。明日起我萧某人于萧家堡席开三日，诸位乡亲父老务必赏光！ </font>"."<br>";


//最小值
//
//
//



} elseif ($rid==207) {


echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶怎．．怎么？</font>"."<br>";
echo "<font color=black>萧升∶呵呵呵．．小伙子，还愣在那干什么？跟着月儿去呀！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我！？．．为什么？</font>"."<br>";
echo "<font color=black>萧升∶还装傻！？比武招亲擂台之上你既胜了月儿，自然就是我萧家的女婿了。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊～！！！</font>"."<br>";
//任务进程改变
$rwjc1=208;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==208) {



echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>萧升∶少侠年纪轻轻就有如此身手，相貌也是出类拔萃，能得少侠为婿实在是小女的福气呀～呵呵！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶晚辈只是侥幸．．</font>"."<br>";
echo "<font color=black>萧升∶对了～适才见你的剑法．．可是天剑派的御剑术？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶实不相瞒，晚辈因缘得一醉道人传授剑法，晚辈想向他拜师但未能如愿～</font>"."<br>";
//经验加
$jy=80000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=209;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==209) {




echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>萧升∶哦．．没有师承吗？没关系，老夫关心的是你跟月儿的婚事啊！我萧家三代单传，而老夫又只有月儿这么一个女儿，所以老夫希望你能入赘到我们萧家，好继承我萧家的产业</font>"."<br>";

//任务进程改变
$rwjc1=210;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==210) {




echo "<font color=black>【镇远镖局和殷净年说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊？！晚辈万万承担不起！</font>"."<br>";
echo "<font color=black>殷净年∶世伯且慢！晓月怎能嫁给他？</font>"."<br>";
echo "<font color=black>萧升∶有何不能？</font>"."<br>";
//银两加
$yl1=200000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//银两加



//任务进程改变
$rwjc1=211;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==211) {



echo "<font color=black>【镇远镖局和殷净年说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊？！晚辈万万承担不起！</font>"."<br>";
echo "<font color=black>殷净年∶世伯且慢！晓月怎能嫁给他？</font>"."<br>";
echo "<font color=black>萧升∶有何不能？</font>"."<br>";






} elseif ($rid==212) {

echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>萧升∶住口！晓月是我女儿，这件事你有何资格反对？</font>"."<br>";
echo "<font color=black>殷净年∶我．．请您把晓月许配给我！改明儿我叫我爹派人上门提亲！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶是啊！是啊！我觉得殷兄和晓月姑娘才是郎才女貌的一对．．</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=213;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==213) {

echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>殷净年∶</font>"."<font color=black>$name</font>"."<font color=black>∶兄～我祝福你跟晓月．．</font>"."<br>";
echo "<font color=black>殷净年∶世伯，请代我向晓月告别．．我决定离开京城一段时间！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶殷兄．．！</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//银两加



//任务进程改变
$rwjc1=214;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==214) {

echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>萧升∶就这么决定了！呵呵呵．．能得少侠为婿，实乃小女福气！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我与令嫒略有误会，才上擂台比试，招亲这．．这事还请前辈三思！</font>"."<br>";
echo "<font color=black>萧升∶难道少侠嫌弃小女？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶不敢！不敢！只是婚姻大事并非儿戏，晚辈不敢轻言承诺，只怕辜负了小姐。</font>"."<br>";

//任务进程改变
$rwjc1=215;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==215) {

echo "<font color=black>【镇远镖局和清清说话】</font>"."<br>";
echo "<font color=black>萧升∶还有甚么事比娶妻重要？</font>"."<br>";
echo "<font color=black>清清∶</font>"."<font color=black>$name</font>"."<font color=black>∶大哥．．如果你．．我．．可以自己去找娘亲～你不必顾虑我．．没关系！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶这怎么行！说好的要带你去西域找妈妈，怎能轻食诺言！</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//银两加


//任务进程改变
$rwjc1=216;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==216) {

echo "<font color=black>【镇远镖局和清清说话】</font>"."<br>";
echo "<font color=black>萧升∶还有甚么事比娶妻重要？</font>"."<br>";
echo "<font color=black>清清∶</font>"."<font color=black>$name</font>"."<font color=black>大哥．．如果你．．我．．可以自己去找娘亲～你不必顾虑我．．没关系！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶这怎么行！说好的要带你去西域找妈妈，怎能轻食诺言！</font>"."<br>";

//最小值
//

//

//




} elseif ($rid==217) {

echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>萧升∶谁不知我萧家乃京城名门，我女儿亦是花容月貌的闺秀！多少名门公子想娶都娶不到～谅你也没理由嫌弃她！</font>"."<br>";
echo "<font color=black>萧升∶是为了她吗？她是你什么人？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶她．．跟我．．这．．这件事来的太过突然～请容在下考虑！</font>"."<br>";
echo "<font color=black>萧升∶也好！你们就先在这里住下～到时再谈成亲的事！</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");




//任务进程改变
$rwjc1=218;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==218) {

echo "<font color=black>【镇远镖局和清清说话】</font>"."<br>";
echo "<font color=black>萧升∶春兰！替清姑娘在西厢房准备一间客房，秋菊！带姑爷到东厢房下去歇息！</font>"."<br>";
echo "<font color=black>春兰∶是．．老爷！</font>"."<br>";


//任务进程改变
$rwjc1=219;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==219) {
echo "<font color=black>【镇远镖局和清清说话】</font>"."<br>";
echo "<font color=black>萧升∶春兰！替清姑娘在西厢房准备一间客房，秋菊！带姑爷到东厢房下去歇息！</font>"."<br>";
echo "<font color=black>春兰∶是．．老爷！</font>"."<br>";



//最小值
//

//

//




} elseif ($rid==229) {

echo "<font color=black>【镇远镖局和算命先生说话】</font>"."<br>";
echo "<font color=black>萧升∶贤婿，你来的正好～告诉我你的生辰、年月，让这位算命先生为你和晓月合合八字！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哦．．我是乙丑年腊月十九辰时出生的</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=230;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==230) {
echo "<font color=black>【镇远镖局和算命先生说话】</font>"."<br>";
echo "<font color=black>萧升∶贤婿，你来的正好～告诉我你的生辰、年月，让这位算命先生为你和晓月合合八字！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哦．．我是乙丑年腊月十九辰时出生的</font>"."<br>";







} elseif ($rid==231) {

echo "<font color=black>【振远镖局和秋香说话】</font>"."<br>";
echo "<font color=black>萧升∶呵呵．．真是太好了！</font>"."<br>";
echo "<font color=black>萧升∶我太高兴了～这真是我萧家的福气啊！</font>"."<br>";
echo "<font color=black>萧升∶贤婿，我们萧家人丁单薄！往后就要靠你和月儿多多替我们萧家添壮丁啦～哈哈哈！</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=232;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==232) {

echo "<font color=black>【振远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>萧升∶妖怪？竟敢在萧家堡作乱！萧忠！快去召集家丁切记多带些火把！</font>"."<br>";
echo "<font color=black>萧忠∶是．．老爷！丫环∶妖怪呀！有妖怪啊！</font>"."<br>";

//任务进程改变
$rwjc1=233;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==233) {
echo "<font color=black>【振远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>萧升∶妖怪？竟敢在萧家堡作乱！萧忠！快去召集家丁切记多带些火把！</font>"."<br>";
echo "<font color=black>萧忠∶是．．老爷！丫环∶妖怪呀！有妖怪啊！</font>"."<br>";


//最小值
//

//

//


} elseif ($rid==235) {

echo "<font color=black>【振远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>萧升∶不必了！由她去吧！</font>"."<br>";
echo "<font color=black>萧晓月∶爹！为什么！</font>"."<br>";
echo "<font color=black>萧升∶你们自己问问秋香吧！是她最先发现妖怪的～</font>"."<br>";
echo "<font color=black>萧晓月∶阿香，妖怪从哪跑进来的？清姑娘又到哪里去了？</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");




//任务进程改变
$rwjc1=236;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==236) {
echo "<font color=black>【振远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>萧升∶不必了！由她去吧！</font>"."<br>";
echo "<font color=black>萧晓月∶爹！为什么！</font>"."<br>";
echo "<font color=black>萧升∶你们自己问问秋香吧！是她最先发现妖怪的～</font>"."<br>";
echo "<font color=black>萧晓月∶阿香，妖怪从哪跑进来的？清姑娘又到哪里去了？</font>"."<br>";


//最小值
//

//

//

} elseif ($rid==239) {

echo "<font color=black>【振远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我不相信！！这件事我自会查清楚，没有找到清清我是不会回来的！</font>"."<br>";
echo "<font color=black>萧升∶哼～真是看走了眼。想不到那</font>"."<font color=black>$name</font>"."<font color=black>竟然跟狐妖是一伙的，这件事要是传了出去，叫我们萧家的脸往哪摆？月儿！这件婚事就此取消！萧家不屑与邪魔歪道来往！</font>"."<br>";




//任务进程改变
$rwjc1=240;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==240) {
echo "<font color=black>【振远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我不相信！！这件事我自会查清楚，没有找到清清我是不会回来的！</font>"."<br>";
echo "<font color=black>萧升∶哼～真是看走了眼。想不到那</font>"."<font color=black>$name</font>"."<font color=black>竟然跟狐妖是一伙的，这件事要是传了出去，叫我们萧家的脸往哪摆？月儿！这件婚事就此取消！萧家不屑与邪魔歪道来往！</font>"."<br>";


//最小值
//

//

//







} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}












} elseif ($npcc==220) {
$npcname="看门大爷老余头";
if ($rid==261) {
echo "<font color=black>【高家庄大门和被救少女说话】</font>"."<br>";
echo "<font color=black>余老头∶谢谢公子的大恩大德，小女尚有三分姿色，不知恩公会不会嫌弃小女？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊！老丈，别开这种玩笑，在下还有要事在身，只是路见不平、拔刀相助，要是没有别的事情，在下就此告辞～</font>"."<br>";


//任务进程改变
$rwjc1=262;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="意外重逢";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==262) {

echo "<font color=black>【高家庄大门和被救少女说话】</font>"."<br>";
echo "<font color=black>余老头∶谢谢公子的大恩大德，小女尚有三分姿色，不知恩公会不会嫌弃小女？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊！老丈，别开这种玩笑，在下还有要事在身，只是路见不平、拔刀相助，要是没有别的事情，在下就此告辞～</font>"."<br>";


//最小值
//

//

//



















} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}







} elseif ($npcc==221) {
$npcname="酒鬼";
if ($rid==263) {
echo "<font color=black>【高家庄街道教训酒鬼】</font>"."<br>";
echo "<font color=black>酒鬼：你这小乞丐～敢挡大爷路！看大爷怎么收拾你！</font>"."<br>";
echo "<font color=black>小乞丐：哎呀！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶住手！我看应该被收拾的是你！</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=264;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="意外重逢";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==264) {

echo "<font color=black>【高家庄街道教训酒鬼】</font>"."<br>";
echo "<font color=black>酒鬼：你这小乞丐～敢挡大爷路！看大爷怎么收拾你！</font>"."<br>";
echo "<font color=black>小乞丐：哎呀！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶住手！我看应该被收拾的是你！</font>"."<br>";



//最小值
//

//

//



















} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}




} elseif ($npcc==222) {
$npcname="小乞丐";
if ($rid==265) {
echo "<font color=black>【和高家庄街道小乞丐说话】</font>"."<br>";
echo "<font color=black>小乞丐：多谢两位贵人相救～小乞丐感激不尽！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶小乞丐～我问你～这两天有没有见过一个漂亮女子？</font>"."<br>";

//任务进程改变
$rwjc1=266;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="意外重逢";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==266) {

echo "<font color=black>【和高家庄街道小乞丐说话】</font>"."<br>";
echo "<font color=black>小乞丐：漂亮女子？我可没有见过！哦！我想起来了～吴村长的女儿昨天救了一个外地女子！不过不知道漂不漂亮！</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=267;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="意外重逢";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==267) {
echo "<font color=black>【去高家庄村口找村长吴文说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶是嘛？她现在哪里？</font>"."<br>";
echo "<font color=black>小乞丐：我只是听人家说的，我没见过啊！你去前面村口找村长问问吧！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=114;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=268;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="意外重逢";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==268) {
echo "<font color=black>【去高家庄村口找村长吴文说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶是嘛？她现在哪里？</font>"."<br>";
echo "<font color=black>小乞丐：我只是听人家说的，我没见过啊！你去前面村口找村长问问吧！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=114;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//最小值
//

//

//







} elseif ($rid==289) {

echo "<font color=black>【高家庄街道和小乞丐说话】</font>"."<br>";
echo "<font color=black>小乞丐：大侠～找到你朋友了吗？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶说来还得谢谢你呢～不过我朋友生病了，需要活鲤鱼入药～我正发愁呢！</font>"."<br>";



//任务进程改变
$rwjc1=290;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==290) {
echo "<font color=black>【去泾水滨找渔夫李定】</font>"."<br>";
echo "<font color=black>小乞丐：村里有个渔夫叫李定～常在泾水河钓鱼～你可以去问问他！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶好！等我朋友病好了～我再好好谢你！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=116;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=291;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==291) {
echo "<font color=black>【去泾水滨找渔夫李定】</font>"."<br>";
echo "<font color=black>小乞丐：村里有个渔夫叫李定～常在泾水河钓鱼～你可以去问问他！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶好！等我朋友病好了～我再好好谢你！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=116;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



} elseif ($rid==369) {
echo "<font color=black>【高家庄村口和村长吴文谈谈】</font>"."<br>";
echo "<font color=black>乞丐∶你们真的消灭海妖了？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶是的～</font>"."<br>";;
echo "<font color=black>小乞丐∶哗～真厉害！大家知道这个好消息一定很高兴！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我想～也该向吴村长辞行了</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=114;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=370;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==370) {
echo "<font color=black>【高家庄村口和村长吴文谈谈】</font>"."<br>";
echo "<font color=black>乞丐∶你们真的消灭海妖了？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶是的～</font>"."<br>";;
echo "<font color=black>小乞丐∶哗～真厉害！大家知道这个好消息一定很高兴！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我想～也该向吴村长辞行了</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=114;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务







} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}


















} elseif ($npcc==456) {
$npcname="村长吴文";
if ($rid==268) {


echo "<font color=black>【高家庄村口找村长吴文说话】</font>"."<br>";
echo "<font color=black>村长吴文：二位有礼～来此有何贵干？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶请问村长，你女儿是不是救了一个外地女子？</font>"."<br>";
echo "<font color=black>吴文：是啊？二位如何得知的？</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=269;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="意外重逢";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊









} elseif ($rid==269) {
echo "<font color=black>【去高家庄农舍找清清】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶她现在哪里？</font>"."<br>";
echo "<font color=black>吴文：就在寒舍内，已请大夫来看过～不过那位姑娘现在还没有醒过来～</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=115;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=270;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="意外重逢";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==270) {
echo "<font color=black>【去高家庄农舍找清清】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶她现在哪里？</font>"."<br>";
echo "<font color=black>吴文：就在寒舍内，已请大夫来看过～不过那位姑娘现在还没有醒过来～</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=115;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//最小值
//

//

//










} elseif ($rid==370) {

echo "<font color=black>【高家庄村口和村长吴文谈谈】</font>"."<br>";
echo "<font color=black>吴文∶不好了～霜儿被抓走了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶是谁干的？</font>"."<br>";
echo "<font color=black>吴文∶那带头的人自称是天法国的长老，他说～如果要我霜儿平安，就要清姑娘自己一个人到长安城内的兵马俑阵～</font>"."<br>";

//经验加
$jy=1500000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=371;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==371) {
echo "<font color=black>【高家庄村口和清清谈谈】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶可恶．．又是那些阴魂不散的西域贼！</font>"."<br>";
echo "<font color=black>吴文∶求求你们，救救霜儿啊！</font>"."<br>";
echo "<font color=black>清清∶吴伯父～您放心，他们的目的是我，不会对霜儿姐姐不利的！</font>"."<br>";

//任务进程改变
$rwjc1=372;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==372) {
echo "<font color=black>【高家庄村口和清清谈谈】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶可恶．．又是那些阴魂不散的西域贼！</font>"."<br>";
echo "<font color=black>吴文∶求求你们，救救霜儿啊！</font>"."<br>";
echo "<font color=black>清清∶吴伯父～您放心，他们的目的是我，不会对霜儿姐姐不利的！</font>"."<br>";


//最小值
//

//

//














} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}




} elseif ($npcc==210) {
$npcname="猎户";
if ($rid==282) {

echo "<font color=black>【去方寸山下松树林里捡起捕兽夹】</font>"."<br>";
echo "<font color=black>猎户∶这位兄弟，我在前面的林子里放了捕兽夹，你走这条路可要留神点，别踩着了。这次我一定要逮到那头雄鹿～捕兽夹位置松林(4,1)</font>"."<br>";
//快速任务
$ydx=11;//移动坐标x
$ydy=15;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=283;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==283) {
echo "<font color=black>【去方寸山下松树林里捡起捕兽夹】</font>"."<br>";
echo "<font color=black>猎户∶这位兄弟，我在前面的林子里放了捕兽夹，你走这条路可要留神点，别踩着了。这次我一定要逮到那头雄鹿～捕兽夹位置松林(4,1)</font>"."<br>";

//快速任务
$ydx=11;//移动坐标x
$ydy=15;//移动坐标y
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