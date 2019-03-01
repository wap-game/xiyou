<?php


$npcname="黑衣客人";
if ($rid==28) {
echo "<font color=black>【和南城客栈睡房黑衣客人说话】</font>"."<br>"; 		
echo "<font color=black>$name</font>"."<font color=black>：几位大爷！酒菜送来了！</font>"."<br>";
echo "<font color=black>黑衣客人：拿进来！嗯～这是什么酒呀？怎么一点味道也没有？</font>"."<br>";


//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=29;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="送菜到客房";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==29) {

echo "<font color=black>【和南城客栈睡房黑衣客人说话】</font>"."<br>"; 		
echo "<font color=black>$name</font>"."<font color=black>：哦！大爷您有所不知，此酒乃本地的名产－桂花酒，清香甘醇无比，连当朝的贵妃娘娘都爱喝的不得了呢！</font>"."<br>";
//任务进程改变
$rwjc1=30;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="送菜到客房";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==30) {

echo "<font color=black>【和南城客栈醉道士说话】</font>"."<br>"; 	
echo "<font color=black>黑衣客人：拿走！拿走！我们喝惯烈酒才不要娘们喝的酒。</font>"."<br>";
	
echo "<font color=black>$name</font>"."<font color=black>：那么．．小的再给您换一壶来？黑衣客人：不必了！咱们自己有酒。（你将桂花酒揣进怀里）
</font>"."<br>";

//经验加
$jy=1580;	
include("./pz/ini_pzz023.php");
//物品加
$wpdz1[]="桂花酒";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=253;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加


//任务进程改变
$rwjc1=31;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="送菜到客房";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif ($rid==31||$rid==32||$rid==33||$rid==34||$rid==35||$rid==36) {

echo "<font color=black>【和南城客栈醉道士说话】</font>"."<br>"; 	
echo "<font color=black>黑衣客人：拿走！拿走！我们喝惯烈酒才不要娘们喝的酒。</font>"."<br>";
	
echo "<font color=black>$name</font>"."<font color=black>：那么．．小的再给您换一壶来？黑衣客人：不必了！咱们自己有酒。（你将桂花酒揣进怀里）
</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//

} elseif ($rid==59) {


echo "<font color=black>（不知不觉已到了晚上）店小二：嘘～今天可把我累坏了！多亏有你帮忙！你也早点休息吧～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好～</font>"."<br>";




//任务进程改变
$rwjc1=60;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="黑衣客商";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==60) {


echo "<font color=black>黑衣客人：小二！求得仙露了吗？</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：咦？你怎么知道？</font>"."<br>";
echo "<font color=black>黑衣客人：呵呵～没有仙露，想必这些客人不会好的这么快啊！</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：那是～</font>"."<br>";

//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=61;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="黑衣客商";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==61) {


echo "<font color=black>黑衣客人：小二，我们现在有事要出去一趟，明天一早才会回来，你现在可以打烊，不必等我们了。</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：这么晚，三位要去哪里？</font>"."<br>";

//任务进程改变
$rwjc1=62;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="黑衣客商";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==62) {


echo "<font color=black>【（南城客栈）突然想起】</font>"."<br>";
echo "<font color=black>黑衣客人：小兄弟．．少知道一些事情可以活久一点！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：：（哼、装得神秘兮兮的．．一定不是去干啥好事！算了！客人的闲事少管．</font>"."<br>";
//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=63;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="黑衣客商";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==63) {


echo "<font color=black>【（南城客栈）突然想起】</font>"."<br>";
echo "<font color=black>黑衣客人：小兄弟．．少知道一些事情可以活久一点！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：：（哼、装得神秘兮兮的．．一定不是去干啥好事！算了！客人的闲事少管．</font>"."<br>";


//



} elseif ($rid==73) {

echo "<font color=black>【回南城客栈】</font>"."<br>"; 	
echo "<font color=black>你按醉道士所教，将法术演练了几遍～（忽然你觉得仿佛有一道清泉贯彻全身）</font>"."<br>"; 
echo "<font color=black>$name</font>"."<font color=black>：啥．．已经天亮了！呀，惨了～等会回去又要挨骂了！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=74;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="和店小二对话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==74) {

echo "<font color=black>【回南城客栈】</font>"."<br>"; 	
echo "<font color=black>你按醉道士所教，将法术演练了几遍～（忽然你觉得仿佛有一道清泉贯彻全身）</font>"."<br>"; 
echo "<font color=black>$name</font>"."<font color=black>：啥．．已经天亮了！呀，惨了～等会回去又要挨骂了！</font>"."<br>";

	


//

} elseif ($rid==77) {
echo "<font color=black>【长安南城客栈睡房和清清说话】</font>"."<br>";
echo "<font color=black>（你偷偷摸摸的溜进睡房，打开布袋）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哇！是位大姑娘．．．．．．啊～清清！？你怎么在这里？</font>"."<br>";


//任务进程改变
$rwjc1=78;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="睡房打探";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==78) {
echo "<font color=black>【长安南城客栈睡房和清清说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：清清～这是怎么一回事？那些人为什么把你抓来？</font>"."<br>";
echo "<font color=black>清清∶呜～师父．．我要回去救师父！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：嘘～小声点．．</font>"."<br>";
//经验加
$jy=1500;	
include("./pz/ini_pzz023.php");





//任务进程改变
$rwjc1=79;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="睡房打探";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==79) {
echo "<font color=black>【长安南城客栈睡房和清清说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：清清～这是怎么一回事？那些人为什么把你抓来？</font>"."<br>";
echo "<font color=black>清清∶呜～师父．．我要回去救师父！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：嘘～小声点．．</font>"."<br>";

//

} elseif ($rid==83) {

echo "<font color=black>【在长安南城客栈和清清谈谈】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这些黑衣人为什么要抓你？</font>"."<br>";
echo "<font color=black>清清∶师父．．师父受了重伤，我好担心呐，求求你带我回仙泉，师父就快死了．．</font>"."<br>";

//任务进程改变
$rwjc1=84;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="睡房打探";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==84) {

echo "<font color=black>【和南城客栈店小二说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好好好～你别慌，镇静点..我这就带你回去！我们赶紧走～估计那些黑脸鬼不会善罢甘休的！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=85;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="睡房打探";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==85) {

echo "<font color=black>【和南城客栈店小二说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好好好～你别慌，镇静点..我这就带你回去！我们赶紧走～估计那些黑脸鬼不会善罢甘休的！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//



} elseif ($rid==87) {
echo "<font color=black>【仙泉和婆婆说话】</font>"."<br>";
echo "<font color=black>婆婆：唉．．十年了．．终究躲不过，清清．．．师父．．不能再．．保护你了以后．．你自己一个人．．千万要坚强．．</font>"."<br>";
echo "<font color=black>清清：不要．．清清不要．．您要是死了，您叫清清怎么办？</font>"."<br>";
//经验加
$jy=3000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=88;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==88) {
echo "<font color=black>【仙泉和婆婆说话】</font>"."<br>";
echo "<font color=black>婆婆：小伙子．．！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：唔～我！？</font>"."<br>";
echo "<font color=black>婆婆：我已经．．活不成了以后～清清就托付给你了。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：给．．给我！？</font>"."<br>";


//任务进程改变
$rwjc1=89;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==89) {
echo "<font color=black>【仙泉和婆婆说话】</font>"."<br>";
echo "<font color=black>婆婆：西域天法国的人不可能就此罢休！十年来．．他们千方百计．．就是要找到清清。以后．．你可要好好保护她</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好好．．我明白．．您放心吧。</font>"."<br>";
//经验加
$jy=3000;	
include("./pz/ini_pzz023.php");




//任务进程改变
$rwjc1=90;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==90) {
echo "<font color=black>【仙泉和婆婆说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：惨啦．．这下子可惹个大麻烦上身了。</font>"."<br>";
echo "<font color=black>婆婆：还有．．你要带清清回故乡，找到她的娘亲的下落。</font>"."<br>";

echo "<font color=black>清清：娘还在人世！？</font>"."<br>";

//任务进程改变
$rwjc1=91;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==91) {
echo "<font color=black>【仙泉和婆婆说话】</font>"."<br>";
echo "<font color=black>婆婆：嗯．．．．我曾回西域打听过你娘的下落．．后来打听到．．天法国有你娘的衣冠坟和石像，但从没有人见过夫人的遗体也许．．可能只是也许．．不管夫人是生是死．．至少这是你为人子女应尽的孝道也是老身最后的一桩心愿．．</font>"."<br>";
//经验加
$jy=3000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=92;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==92) {
echo "<font color=black>【长安仙泉掩埋婆婆】</font>"."<br>";
echo "<font color=black>清清：是．．孩儿遵命．．（不等清清说完．．师父便断气了．．）</font>"."<br>";
echo "<font color=black>清清：师父～师父～呜．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：别．．别难过了．．先把你师父好好安葬了吧。</font>"."<br>";

//银两加
$yl1=50000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=5000;	
include("./pz/ini_pzz023.php");
//银两加




//任务进程改变
$rwjc1=93;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==93) {
echo "<font color=black>【长安仙泉掩埋婆婆】</font>"."<br>";
echo "<font color=black>清清：是．．孩儿遵命．．（不等清清说完．．师父便断气了．．）</font>"."<br>";
echo "<font color=black>清清：师父～师父～呜．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：别．．别难过了．．先把你师父好好安葬了吧。</font>"."<br>";


//

} elseif ($rid==94) {


echo "<font color=black>【长安仙泉和清清谈谈】</font>"."<br>";
echo "<font color=black>清清∶师父～您在天有灵，保佑孩儿早日找到娘亲．．清清．．就此拜别．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：你．．你以后有何打算？
清清：当然是．．跟着你．．</font>"."<br>";


//任务进程改变
$rwjc1=95;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==95) {


echo "<font color=black>【回南城客栈（在客栈外和疥顶小僧谈话）】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好吧！事到如今，走一步算一步啦～是福是祸到时候再说吧！反正．．你也没地方去了，先回客栈吧，客栈里空房间多的是。</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=6;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//银两加
$yl1=50000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=5000;	
include("./pz/ini_pzz023.php");
//银两加

//任务进程改变
$rwjc1=96;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="生离死别";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==96) {


echo "<font color=black>【回南城客栈（在客栈外和疥顶小僧谈话）】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好吧！事到如今，走一步算一步啦～是福是祸到时候再说吧！反正．．你也没地方去了，先回客栈吧，客栈里空房间多的是。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=6;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//


} elseif ($rid==114) {


echo "<font color=black>【南城客栈和清清说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：清清？你．．？</font>"."<br>";

echo "<font color=black>清清∶我．．我又梦见师父被．．我好怕．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：别怕．．这里很安全，我跟小二大哥都会保护你的～</font>"."<br>";

//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");
//银两加




//任务进程改变
$rwjc1=115;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==115) {


echo "<font color=black>【南城客栈和清清说话】</font>"."<br>";
echo "<font color=black>清清∶我要跟你一起睡．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：啥！？一起．．这．．这不太妥吧！？</font>"."<br>";
echo "<font color=black>清清∶为什么不行．．？以前都是和师父一起睡的～</font>"."<br>";

//任务进程改变
$rwjc1=116;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==116) {


echo "<font color=black>【南城客栈和清清说话】</font>"."<br>";
echo "<font color=black>清清∶我要跟你一起睡．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我～我我．．这男女授受不亲．．你懂吧？</font>"."<br>";
echo "<font color=black>清清∶你．．你是不是嫌弃我！</font>"."<br>";
echo "<font color=black>清清∶呜呜．．．连你也不要清清了吗？！</font>"."<br>";

//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");





//任务进程改变
$rwjc1=117;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==117||$rid==118||$rid==119) {


echo "<font color=black>【南城客栈和清清说话】</font>"."<br>";
echo "<font color=black>清清∶我要跟你一起睡．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我～我我．．这男女授受不亲．．你懂吧？</font>"."<br>";
echo "<font color=black>清清∶你．．你是不是嫌弃我！</font>"."<br>";
echo "<font color=black>清清∶呜呜．．．连你也不要清清了吗？！</font>"."<br>";




//

} elseif ($rid==121) {
echo "<font color=black>【南城客栈和清清说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哇～哈～我自由了！</font>"."<br>";
echo "<font color=black>清清：我～我想去烧香许愿，希望师父在天之灵能安息，保佑我早日找到娘亲！</font>"."<br>";



//经验加
$jy=12000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=122;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==122) {
echo "<font color=black>【去歪柳巷上的城隍庙（在歪柳巷遇见小男孩）】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好～这也是应该的，我们去城隍庙吧～那里许愿很灵的！顺便带你逛逛京城～</font>"."<br>";
echo "<font color=black>清清：我～我想去烧香许愿，希望师父在天之灵能安息，保佑我早日找到娘亲！</font>"."<br>";
echo "<font color=black>清清：恩！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=51;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//经验加
$jy=15000;	
include("./pz/ini_pzz023.php");







//任务进程改变
$rwjc1=123;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="客栈夜话";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==123) {
echo "<font color=black>【去歪柳巷上的城隍庙（在歪柳巷遇见小男孩）】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好～这也是应该的，我们去城隍庙吧～那里许愿很灵的！顺便带你逛逛京城～</font>"."<br>";
echo "<font color=black>清清：我～我想去烧香许愿，希望师父在天之灵能安息，保佑我早日找到娘亲！</font>"."<br>";
echo "<font color=black>清清：恩！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=51;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//



} elseif ($rid==131) {

echo "<font color=black>【城隍庙和打人的野蛮丫头说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>对清清说∶我最恨别人仗势欺人了！这事我要管管～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这位大姐，他们俩犯了什么错为什么要这样打他们？</font>"."<br>";
//经验加
$jy=20000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=132;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==132) {

echo "<font color=black>【歪柳巷和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>对清清说∶我最恨别人仗势欺人了！这事我要管管～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这位大姐，他们俩犯了什么错为什么要这样打他们？</font>"."<br>";
echo "<font color=black>萧晓月∶这两人是咱们家的丫环和长工也不知道暗通款曲多久了，居然想要私奔！现在让我撞见了就该受罚</font>"."<br>";
//经验加
$jy=20000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=133;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//

} elseif ($rid==133) {

echo "<font color=black>【歪柳巷和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>对清清说∶我最恨别人仗势欺人了！这事我要管管～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这位大姐，他们俩犯了什么错为什么要这样打他们？</font>"."<br>";
echo "<font color=black>萧晓月∶这两人是咱们家的丫环和长工也不知道暗通款曲多久了，居然想要私奔！现在让我撞见了就该受罚</font>"."<br>";


//

} elseif ($rid==142) {

echo "<font color=black>【歪柳巷和银花说话】</font>"."<br>";
echo "<font color=black>银花∶公子！您放了小姐吧！是奴婢对不起小姐，小姐只是在气头上，并不是真的要杀害我们～</font>"."<br>";
echo "<font color=black>萧晓月∶银花！还不替我松绑！回头看我怎么整治你这贱人</font>"."<br>";
//经验加
$jy=25000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=143;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==143) {

echo "<font color=black>【歪柳巷和银花说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶不成不成！你们若是真心想在一起，就趁这个机会赶快走吧逃的越远越好！等你们走远了我自然会放了你家小姐</font>"."<br>";
//任务进程改变
$rwjc1=144;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==144) {

echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";
echo "<font color=black>银花∶是．．多谢公子！长贵∶银花！我们快走吧．．</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>∶狗男女！给我滚回来！（银花和长贵离开了）</font>"."<br>";
//经验加
$jy=25000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=145;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==145) {

echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";
echo "<font color=black>银花∶是．．多谢公子！长贵∶银花！我们快走吧．．</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>∶狗男女！给我滚回来！（银花和长贵离开了）</font>"."<br>";


//

} elseif ($rid==147) {
echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";
echo "<font color=black>远远传来一声尖叫“救命啊．．．救命啊！”</font>"."<br>";
echo "<font color=black>清清：</font>"."<font color=black>$name</font>"."<font color=black>大哥！是刚才那位姑娘在喊救命！</font>"."<br>";
//任务进程改变
$rwjc1=148;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid==148) {

echo "<font color=black>【城隍庙和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：别理她！八成是她在装模作样骗我们回去。</font>"."<br>";
echo "<font color=black>清清∶可是．．我不放心呢～我们还是回去看看吧”</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好吧！既然你这么说．．</font>"."<br>";
//经验加
$jy=25000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=149;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==149) {

echo "<font color=black>【城隍庙和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：别理她！八成是她在装模作样骗我们回去。</font>"."<br>";
echo "<font color=black>清清∶可是．．我不放心呢～我们还是回去看看吧</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好吧！既然你这么说．．</font>"."<br>";


//
} elseif ($rid==151) {

echo "<font color=black>【城隍庙和清清说话】</font>"."<br>";

echo "<font color=black>远远又传来一阵尖叫声呀！！“不要哇！救命啊！救命啊..”</font>"."<br>";
//任务进程改变
$rwjc1=152;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==152) {

echo "<font color=black>【城隍庙和清清说话】</font>"."<br>";
echo "<font color=black>清清：</font>"."<font color=black>$name</font>"."<font color=black>大哥！她好像真的出事了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：啧！又来了．．真是受不了那野丫头</font>"."<br>";
//经验加
$jy=30000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=153;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==153) {

echo "<font color=black>【城隍庙赶走小流氓】</font>"."<br>";
echo "<font color=black>清清∶可是．．我觉得我们做得太过份了还是回去把她放了吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好啦！好啦！清清妹子听你的就是了</font>"."<br>";

//任务进程改变
$rwjc1=154;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==154) {

echo "<font color=black>【城隍庙赶走小流氓】</font>"."<br>";
echo "<font color=black>清清∶可是．．我觉得我们做得太过份了还是回去把她放了吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好啦！好啦！清清妹子听你的就是了</font>"."<br>";



//



} elseif ($rid==161) {

echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";
echo "<font color=black>清清∶啊！</font>"."<font color=black>$name</font>"."<font color=black>大哥，你不要死！怎么办．．怎么办？！这样下去</font>"."<font color=black>$name</font>"."<font color=black>大哥会死掉．．我．．只有赌赌看了（清清念起还魂咒）</font>"."<br>";
//经验加
$jy=35000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=162;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==162) {

echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";
echo "<font color=black>（清清真气消耗过度昏了过去～不知过了几个时辰，俩人才转醒过来）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶咦？我胸口的伤．．怎么不痛了？</font>"."<br>";

//任务进程改变
$rwjc1=163;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==163) {

echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";
echo "<font color=black>清清∶你刚才昏死过去，我担心死了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哈哈！我福大命大，这点小伤死不了的！</font>"."<br>";
//经验加
$jy=35000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=164;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==164) {

echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";
echo "<font color=black>清清∶你还笑的出来！刚才那一剑刺中你的心脉，差一点就没命了。我情急之下只好冒险用师父教我背过的还魂咒，幸好上苍保佑，侥幸生效。</font>"."<br>";


//任务进程改变
$rwjc1=165;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==165) {

echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：哎呀！我听说强行使用未练成的法术，很容易走火入魔的！这么说．．你是拼了命才救了我的罗？</font>"."<br>";

//经验加
$jy=35000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=166;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==166) {

echo "<font color=black>【歪柳巷和清清说话】</font>"."<br>";
echo "<font color=black>清清∶都怪我以前不好好学，要是我早一点练成这法术，师父．．师父就不会死了。现在要是你也死了．．我．．我怎么办？</font>"."<br>";
//任务进程改变
$rwjc1=167;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==167) {

echo "<font color=black>【去城隍庙烧香许愿】</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：好了～别哭了，现在我不是没事了吗？我们赶紧去城隍庙烧香许愿吧！</font>"."<br>";
echo "<font color=black>清清∶恩～</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=53;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//经验加
$jy=35000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=168;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==168) {

echo "<font color=black>【去城隍庙烧香许愿】</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：好了～别哭了，现在我不是没事了吗？我们赶紧去城隍庙烧香许愿吧！</font>"."<br>";
echo "<font color=black>清清∶恩～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=53;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



//

} elseif ($rid==169) {

echo "<font color=black>【城隍庙和清清说话】</font>"."<br>";


echo "<font color=black>（清清也点上一柱香默默许愿：菩萨保佑．．．．）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：唉～一个泥菩萨也能哄的天下百姓顶礼膜拜～难道这世界上真的有神仙吗？</font>"."<br>";

//任务进程改变
$rwjc1=170;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==170) {

echo "<font color=black>【城隍庙和清清说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哇～许愿要这么久？你跟菩萨许了很多愿？</font>"."<br>";
echo "<font color=black>清清：我希望菩萨保佑我和娘亲早日团圆，以了师父心愿．．还有．．</font>"."<br>";
//经验加
$jy=35000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=171;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
//

} elseif ($rid==171) {

echo "<font color=black>【城隍庙和清清说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：还有什么哦？</font>"."<br>";
echo "<font color=black>清清：嘻嘻！不告诉你！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：不说也罢～说出来就不灵了噢！哎呀～你肚子饿了吧！我带你去吃好吃的！</font>"."<br>";


//任务进程改变
$rwjc1=172;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="野蛮丫头";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
//
} elseif ($rid==172) {

echo "<font color=black>【去白虎街上的喜福会遇见被打书生】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：长安城里最有名的菜馆就是白虎街上的喜福会了！那里做的菜～哎呀～好吃的不得了！我们今天去好好吃一顿</font>"."<br>";
echo "<font color=black>清清：恩～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//经验加
$jy=35000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=173;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid==173) {

echo "<font color=black>【去白虎街上的喜福会遇见被打书生】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：长安城里最有名的菜馆就是白虎街上的喜福会了！那里做的菜～哎呀～好吃的不得了！我们今天去好好吃一顿</font>"."<br>";
echo "<font color=black>清清：恩～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//


} elseif ($rid==177) {

echo "<font color=black>【喜福会二楼和殷净年说话】</font>"."<br>";
echo "<font color=black>殷净年∶</font>"."<font color=black>$name</font>". "<font color=black>兄仗义相救，殷某不胜感激！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这也没什么啦！倒是殷兄特地准备这么一桌美酒佳肴我还觉得受之有愧呢～</font>"."<br>";

//任务进程改变
$rwjc1=178;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==178) {

echo "<font color=black>【喜福会二楼和殷净年说话】</font>"."<br>";
echo "<font color=black>殷净年∶</font>"."<font color=black>$name</font>". "<font color=black>公子你太客气了！在下想交您这朋友，不知公子意下如何？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：四海之内皆兄弟，有何不可？</font>"."<br>";
echo "<font color=black>殷净年∶好．．咱们干！</font>"."<br>";
//经验加
$jy=35000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=179;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==179) {

echo "<font color=black>【喜福会二楼和殷净年说话】</font>"."<br>";
echo "<font color=black>清清不胜酒力，睡着了～你和殷净年二人酒逢知己千杯少，继续喝酒聊天，就这样过了一夜．．</font>"."<br>";
//任务进程改变
$rwjc1=180;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==180) {

echo "<font color=black>【喜福会二楼和殷净年说话】</font>"."<br>";
echo "<font color=black>殷净年∶</font>"."<font color=black>$name</font>". "<font color=black>兄．．我有要事先行告辞了！</font>"."<br>";

echo "<font color=black>$name</font>". "<font color=black>后会有期．．</font>"."<br>";
echo "<font color=black>殷净年∶公子，不必送了．．</font>"."<br>";
//经验加
$jy=50000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=181;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==181) {

echo "<font color=black>【喜福会二楼和殷净年说话】</font>"."<br>";
echo "<font color=black>殷净年∶</font>"."<font color=black>$name</font>". "<font color=black>兄．．我有要事先行告辞了！</font>"."<br>";

echo "<font color=black>$name</font>". "<font color=black>:后会有期．．</font>"."<br>";
echo "<font color=black>殷净年∶公子，不必送了．．</font>"."<br>";



//


} elseif ($rid==183) {

echo "<font color=black>【喜福会门口和算命仙说话】</font>"."<br>";
echo "<font color=black>算命仙∶铁口直断．．不灵免钱！二位要算命吗？</font>"."<br>";

echo "<font color=black>$name</font>". "<font color=black>:不灵免钱！？好～帮我算算我最近的运气如何？</font>"."<br>";
//任务进程改变
$rwjc1=184;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==184) {

echo "<font color=black>【喜福会门口和算命仙说话】</font>"."<br>";
echo "<font color=black>算命仙∶．．．．．．嗯．．</font>"."<br>";
echo "<font color=black>算命仙∶公子气色泛红，面带桃花准是走桃花运了！</font>"."<br>";
echo "<font color=black>算命仙∶女子为水，水载舟亦覆舟，公子千万要谨慎～切记～切记</font>"."<br>";
//银两加
$yl1=110000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=200000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=185;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==185) {

echo "<font color=black>【喜福会门口和算命仙说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：嘿！我有桃花运？</font>"."<br>";
echo "<font color=black>算命仙∶这位姑娘要不要也算一算？</font>"."<br>";
echo "<font color=black>清清：好呀．．．！</font>"."<br>";
//任务进程改变
$rwjc1=186;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==186) {

echo "<font color=black>【喜福会门口和算命仙说话】</font>"."<br>";
echo "<font color=black>算命仙∶嗯．．我来看看．．哦！姑娘瑶光聚顶灵气逼人．．人世少见！在朝必为帝后，在野亦为人杰但．．眉宇间隐含煞气恐怕．．近日必有劫难！</font>"."<br>";
//银两加
$yl1=110000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=200000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=187;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==187) {

echo "<font color=black>【喜福会门口和算命仙说话】</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：呸呸呸．．．鬼话连篇！清清我们走人了！</font>"."<br>";
echo "<font color=black>算命仙∶公子．．您还没给钱呢？！</font>"."<br>";
//任务进程改变
$rwjc1=188;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==188) {

echo "<font color=black>【官府门口和李捕头说话】</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：你不是说不灵免钱吗？</font>"."<br>";
echo "<font color=black>算命仙∶唉～贫道说的都是真话～</font>"."<br>";



//银两加
$yl1=150000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=200000;	
include("./pz/ini_pzz023.php");


//快速任务
$ydx=1;//移动坐标x
$ydy=11;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=189;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="患难之交";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid==189) {

echo "<font color=black>【官府门口和李捕头说话】</font>"."<br>";

echo "<font color=black>$name</font>"."<font color=black>：你不是说不灵免钱吗？</font>"."<br>";
echo "<font color=black>算命仙∶唉～贫道说的都是真话～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=11;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务






} elseif ($rid==194) {

echo "<font color=black>【振远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我看看．．哗～打得不错嘛！</font>"."<br>";
echo "<font color=black>萧晓月三拳两脚把一个公子打下擂台∶哼！真没用～</font>"."<br>";
echo "<font color=black>萧晓月∶喂！还有哪个欠揍的上来呀？！</font>"."<br>";
echo "<font color=black>经验+80000</font>"."<br>";

//任务进程改变
$rwjc1=195;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==195) {

echo "<font color=black>【振远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我看看．．哗～打得不错嘛！</font>"."<br>";
echo "<font color=black>萧晓月三拳两脚把一个公子打下擂台∶哼！真没用～</font>"."<br>";
echo "<font color=black>萧晓月∶喂！还有哪个欠揍的上来呀？！</font>"."<br>";



//







} elseif ($rid==196) {

echo "<font color=black>【镇远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>殷净年∶你们认识？小铃铛∶不！只是先前有点小误会！</font>"."<br>";
echo "<font color=black>萧晓月∶爹！就是他，昨天欺负我的人就是他！你叫他上来，我要打他一顿。</font>"."<br>";
echo "<font color=black>萧升∶月儿，别耍性子！</font>"."<br>";

//经验加
$jy=80000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=197;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==197) {

echo "<font color=black>【镇远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>殷净年∶你们认识？小铃铛∶不！只是先前有点小误会！</font>"."<br>";
echo "<font color=black>萧晓月∶爹！就是他，昨天欺负我的人就是他！你叫他上来，我要打他一顿。</font>"."<br>";
echo "<font color=black>萧升∶月儿，别耍性子！</font>"."<br>";




//




} elseif ($rid==202) {

echo "<font color=black>【镇远镖局打败萧晓月】</font>"."<br>";
echo "<font color=black>萧晓月：呆瓜小贼～看招～ </font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=80000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=203;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid==203) {

echo "<font color=black>【镇远镖局打败萧晓月】</font>"."<br>";
echo "<font color=black>萧晓月：呆瓜小贼～看招～ </font>"."<br>";




//


} elseif ($rid==216) {


echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>清清∶我．．我拖累了你！</font>"."<br>";
echo "<font color=black>萧升∶你要离开！难道你想毁婚？入赘我萧家有哪一点不好？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我比武得胜，只想依照约定消除误会，并未想到婚姻一层！</font>"."<br>";

//任务进程改变
$rwjc1=217;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==217) {


echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>清清∶我．．我拖累了你！</font>"."<br>";
echo "<font color=black>萧升∶你要离开！难道你想毁婚？入赘我萧家有哪一点不好？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我比武得胜，只想依照约定消除误会，并未想到婚姻一层！</font>"."<br>";




//

} elseif ($rid==219) {

echo "<font color=black>【镇远镖局和清清说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶清清，你怎么了？看你脸色似乎不太好呢！</font>"."<br>";
echo "<font color=black>清清∶我．．胸口很闷，头有点疼不过．．不碍事的。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哎呀～病了可就不好早点睡．．别着凉了～明天我们想办法溜走！</font>"."<br>";

//经验加
$jy=80000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=220;//任务进程id
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

} elseif ($rid==220) {

echo "<font color=black>【镇远镖局和清清说话】</font>"."<br>";
echo "<font color=black>清清∶</font>"."<font color=black>$name</font>"."<font color=black>∶大哥～你还记不记得师父死的时候对你说的．．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我怎么会忘呢！你放心．．我会照顾你，直到找到你娘为止，我答应过的事，绝不反悔！</font>"."<br>";

//任务进程改变
$rwjc1=221;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊






} elseif ($rid==221) {

echo "<font color=black>【镇远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>清清∶可是．．．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶嗯～你想说什么？</font>"."<br>";
echo "<font color=black>清清∶如果．．我．．是．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶嗯？？别胡思乱想了傻丫头～不会有事的．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶早点睡吧，明天一早我再陪你去街上玩！我这就找那个野蛮丫头去问清楚！</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=222;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==222) {

echo "<font color=black>【镇远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>清清∶可是．．．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶嗯～你想说什么？</font>"."<br>";
echo "<font color=black>清清∶如果．．我．．是．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶嗯？？别胡思乱想了傻丫头～不会有事的．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶早点睡吧，明天一早我再陪你去街上玩！我这就找那个野蛮丫头去问清楚！</font>"."<br>";

//





} elseif ($rid==228) {

echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>秋香∶姑爷！老爷在前厅请您过去一趟～老爷请来了一位算命先生要替您跟小姐合八字呢！</font>"."<br>";


//任务进程改变
$rwjc1=229;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//



} elseif ($rid==229) {

echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>秋香∶姑爷！老爷在前厅请您过去一趟～老爷请来了一位算命先生要替您跟小姐合八字呢！</font>"."<br>";

//


} elseif ($rid==230) {

echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>算命先生∶嗯．．我算算．．恭喜老爷，</font>"."<font color=black>$name</font>"."<font color=black>少侠和令千金乃是人间双璧、佳偶天成呀！依八字看来，绝对是儿孙满堂、大富大贵！</font>"."<br>";


//任务进程改变
$rwjc1=231;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="比武招亲";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==231) {
echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>算命先生∶嗯．．我算算．．恭喜老爷，</font>"."<font color=black>$name</font>"."<font color=black>少侠和令千金乃是人间双璧、佳偶天成呀！依八字看来，绝对是儿孙满堂、大富大贵！</font>"."<br>";

//

} elseif ($rid==232) {

echo "<font color=black>【镇远镖局和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶究竟发生了什么事？</font>"."<br>";
echo "<font color=black>萧晓月∶狐妖，是只半人半狐的妖怪，刚才就在西厢房里面！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶清清！清清人呢？</font>"."<br>";
echo "<font color=black>萧晓月∶清姑娘不见了！</font>"."<br>";
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");




//任务进程改变
$rwjc1=233;//任务进程id
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




} elseif ($rid==236) {

echo "<font color=black>【镇远镖局和秋香说话】</font>"."<br>";
echo "<font color=black>秋香∶奴婢正在打扫小姐的房间时，突然听到清小姐的惨叫声，就急忙赶过来，就看到．．看到．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶你看到什么！</font>"."<br>";
echo "<font color=black>秋香∶那只狐妖．．好像是～清姑娘</font>"."<br>";


//任务进程改变
$rwjc1=237;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==237) {

echo "<font color=black>【镇远镖局和秋香说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶你．．胡说！！</font>"."<br>";
echo "<font color=black>萧晓月∶阿香！你怎么可以随便诬赖人～清姑娘明明是被妖怪抓走的！</font>"."<br>";
echo "<font color=black>秋香∶我．．我看到．．它的脸．．那个狐妖的上半身是人身，她的面貌很像就是清姑娘，然后突然一阵狂风．．．</font>"."<br>";
//银两加
$yl1=120000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");




//任务进程改变
$rwjc1=238;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==238) {
echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我不相信！！这件事我自会查清楚，没有找到清清我是不会回来的！</font>"."<br>";
echo "<font color=black>萧晓月∶阿香！你是不是吓昏头了怎么可以胡言乱语，诬赖清姑娘！？</font>"."<br>";
echo "<font color=black>秋香∶秋香就算有天大的胆子也不敢欺骗小姐．．</font>"."<br>";



//任务进程改变
$rwjc1=239;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//



//



} elseif ($rid==239) {
echo "<font color=black>【镇远镖局和萧升说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我不相信！！这件事我自会查清楚，没有找到清清我是不会回来的！</font>"."<br>";
echo "<font color=black>萧晓月∶阿香！你是不是吓昏头了怎么可以胡言乱语，诬赖清姑娘！？</font>"."<br>";
echo "<font color=black>秋香∶秋香就算有天大的胆子也不敢欺骗小姐．．</font>"."<br>";




//


} elseif ($rid==241) {

echo "<font color=black>【在镖局门口和萧晓月说话】</font>"."<br>";
echo "<font color=black>萧晓月∶喂～呆瓜小贼，三更半夜的你打算从何找起呀？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶萧姑娘！怎么你也来了？</font>"."<br>";
echo "<font color=black>萧晓月∶怎么？我不能来吗？好歹～清姑娘是在我家失踪，道义上我有责任帮你去寻找她的下落</font>"."<br>";


//任务进程改变
$rwjc1=242;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==242) {

echo "<font color=black>【在镖局门口和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶谢谢！萧姑娘．．我从不知道，你是这样一个热血心肠的女孩。</font>"."<br>";
echo "<font color=black>萧晓月∶你怎么还叫我萧姑娘呐～！！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶不然．．该怎么叫？</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=243;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==243) {

echo "<font color=black>【镖局门口和萧晓月说话】</font>"."<br>";
echo "<font color=black>萧晓月∶我们都已经．．已经是伙伴了～以后应该兄妹相称，我喊你一句小铃铛大哥，你就应该回我一声晓月妹子．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶好～晓月妹子．．这样可以了吧？</font>"."<br>";
echo "<font color=black>萧晓月：嘻．．</font>"."<br>";


//任务进程改变
$rwjc1=244;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==244) {

echo "<font color=black>【镖局门口和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶对了，说正事，这一带你熟，依你看～抓走清清的妖怪会往哪去了？</font>"."<br>";
echo "<font color=black>萧晓月∶嗯．．．</font>"."<br>";
echo "<font color=black>萧晓月∶前面不远处有座慈恩寺～听说寺内大雁塔上常有妖怪出没，有不少年轻的少女被掳到塔中下落不明！</font>"."<br>";

//任务进程改变
$rwjc1=245;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==245) {

echo "<font color=black>【去慈恩寺大雁塔（在大雁塔和萧晓月说话）】</font>"."<br>";
echo "<font color=black>萧晓月∶我爹曾多次招募志士进入塔内除妖，可是都没有成功，还死伤了不少人，因此我爹对那些妖怪恨之入骨，也才会说出那些误解清姑娘的话来．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶好～你带我到慈恩寺！等我找到清清，一切就明白了！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=129;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=246;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==246) {

echo "<font color=black>【去慈恩寺大雁塔（在大雁塔和萧晓月说话）】</font>"."<br>";
echo "<font color=black>萧晓月∶我爹曾多次招募志士进入塔内除妖，可是都没有成功，还死伤了不少人，因此我爹对那些妖怪恨之入骨，也才会说出那些误解清姑娘的话来．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶好～你带我到慈恩寺！等我找到清清，一切就明白了！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=129;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



} elseif ($rid==248) {

echo "<font color=black>【和大雁塔（2，2）蛇妖男说话】</font>"."<br>";
echo "<font color=black>蛇妖男∶你们闯进我的地盘来做什么？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶你就是那只蛇妖！？把清清还我！</font>"."<br>";
echo "<font color=black>蛇妖男∶谁是清清？</font>"."<br>";

//经验加
$jy=22000;	
include("./pz/ini_pzz023.php");





//任务进程改变
$rwjc1=249;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清清失踪";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==249) {

echo "<font color=black>【大雁塔（2，2）杀死蛇妖男】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶废话少说～再不交出人就吃我一剑！</font>"."<br>";
echo "<font color=black>蛇妖男∶黄毛小子！敢口出狂言～今天定叫你有来无回！</font>"."<br>";


//任务进程改变
$rwjc1=250;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="大雁塔除妖";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变




} elseif ($rid==250) {

echo "<font color=black>【大雁塔（2，2）杀死蛇妖男】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶废话少说～再不交出人就吃我一剑！</font>"."<br>";
echo "<font color=black>蛇妖男∶黄毛小子！敢口出狂言～今天定叫你有来无回！</font>"."<br>";




//


} elseif ($rid==251) {

echo "<font color=black>【大雁塔（2，2）和晓慧说话】</font>"."<br>";
echo "<font color=black>蛇妖男∶呃～这．．这怎么可能．．（蛇妖男死了）</font>"."<br>";
echo "<font color=black>萧晓月∶</font>"."<font color=black>$name</font>"."<font color=black>，这里果然有很多被抓来的女孩子！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哦？</font>"."<br>";
//银两加
$yl1=120000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=252;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="大雁塔除妖";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==252) {

echo "<font color=black>【大雁塔（2，2）和晓慧说话】</font>"."<br>";
echo "<font color=black>蛇妖男∶呃～这．．这怎么可能．．（蛇妖男死了）</font>"."<br>";
echo "<font color=black>萧晓月∶</font>"."<font color=black>$name</font>"."<font color=black>，这里果然有很多被抓来的女孩子！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哦？</font>"."<br>";




//





} elseif ($rid==254) {

echo "<font color=black>【大雁塔（4.1）和妖狐女说话】</font>"."<br>";
echo "<font color=black>妖狐女∶你们．．想干什么？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶清清呢？你们把她藏在哪里？</font>"."<br>";
echo "<font color=black>妖狐女∶老娘这儿是有不少丫环是从外头抓来的！有兰兰、珠珠、湘湘、慧慧，就是没有一个叫清清的～</font>"."<br>";


//任务进程改变
$rwjc1=255;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="大雁塔除妖";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==255) {

echo "<font color=black>【大雁塔（4.1）和妖狐女说话】</font>"."<br>";
echo "<font color=black>妖狐女∶你们．．想干什么？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶今天我可是豁出去了！不要以为你是女的我就不敢对你怎样！不交出人，我一样杀了你！</font>"."<br>";
echo "<font color=black>萧晓月∶</font>"."<font color=black>$name</font>"."<font color=black>大哥，冷静点．．问清楚再说！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶管不了那么多了！清清要是少了一根寒毛～我就要这里的妖怪全部陪葬！</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=256;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="大雁塔除妖";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==256) {

echo "<font color=black>【大雁塔（4.1）杀死妖狐女】</font>"."<br>";
echo "<font color=black>妖狐女∶好大的口气！老伴！快过来帮我把这两人撵出去～老伴？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶叫也没用！门口那只半人蛇妖已经死在我剑下了！</font>"."<br>";
echo "<font color=black>妖狐女∶什么！？你杀了我相公老娘跟你拼了！</font>"."<br>";



//任务进程改变
$rwjc1=257;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="大雁塔除妖";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==257) {

echo "<font color=black>【大雁塔（4.1）杀死妖狐女】</font>"."<br>";
echo "<font color=black>妖狐女∶好大的口气！老伴！快过来帮我把这两人撵出去～老伴？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶叫也没用！门口那只半人蛇妖已经死在我剑下了！</font>"."<br>";
echo "<font color=black>妖狐女∶什么！？你杀了我相公老娘跟你拼了！</font>"."<br>";



//


} elseif ($rid==258) {

echo "<font color=black>【大雁塔（4.1）和萧晓月说话】</font>"."<br>";
echo "<font color=black>（妖狐女已死）</font>"."<br>";
echo "<font color=black>萧晓月∶</font>"."<font color=black>$name</font>"."<font color=black>大哥．．刚才你的神情好骇人！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我．．．我．．</font>"."<br>";
echo "<font color=black>萧晓月∶可能．．清姑娘真的不在这里～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶那．．会是谁干的？</font>"."<br>";
//银两加
$yl1=220000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=180000;	
include("./pz/ini_pzz023.php");





//任务进程改变
$rwjc1=259;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="大雁塔除妖";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==259) {

echo "<font color=black>【大雁塔（4.1）和萧晓月说话】</font>"."<br>";
echo "<font color=black>（妖狐女已死）</font>"."<br>";
echo "<font color=black>萧晓月∶</font>"."<font color=black>$name</font>"."<font color=black>大哥．．刚才你的神情好骇人！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我．．．我．．</font>"."<br>";
echo "<font color=black>萧晓月∶可能．．清姑娘真的不在这里～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶那．．会是谁干的？</font>"."<br>";





//






} elseif ($rid==262) {


echo "<font color=black>【和高家庄街道酒鬼说话】</font>"."<br>";
echo "<font color=black>少女∶啊！原来是恩公！还没请教您尊姓大名！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶在下</font>"."<font color=black>$name</font>"."<font color=black>，这点小事，你就不必一直挂在心上了。</font>"."<br>";
echo "<font color=black>村姑∶啊．．恩公将奴家自狐妖手中救出来，奴家还没报答您呢！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶免了、免了！</font>"."<br>";

//快速任务
$ydx=21;//移动坐标x
$ydy=8;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");





//任务进程改变
$rwjc1=263;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="意外重逢";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==263) {

echo "<font color=black>【和高家庄街道酒鬼说话】</font>"."<br>";
echo "<font color=black>少女∶啊！原来是恩公！还没请教您尊姓大名！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶在下</font>"."<font color=black>$name</font>"."<font color=black>，这点小事，你就不必一直挂在心上了。</font>"."<br>";
echo "<font color=black>村姑∶啊．．恩公将奴家自狐妖手中救出来，奴家还没报答您呢！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶免了、免了！</font>"."<br>";


//快速任务
$ydx=21;//移动坐标x
$ydy=8;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//




} elseif ($rid==271) {


echo "<font color=black>【高家庄农舍和吴文说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶吴村长，谢谢您！是您救了清清吧？</font>"."<br>";
echo "<font color=black>吴文∶呵～小女出外采药时发现清姑娘昏倒在村外林子里，于是将她带回来！</font>"."<br>";





//任务进程改变
$rwjc1=272;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==272) {


echo "<font color=black>【高家庄农舍和吴文说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶清清病了吗？严不严重？</font>"."<br>";
echo "<font color=black>吴文∶这．．你放心，大夫已经看过，调理几日很快没事的～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我能帮的上忙吗？村长若有何差遣，我一定做到！</font>"."<br>";
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=273;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==273) {
echo "<font color=black>【高家庄农舍和霜儿说话】</font>"."<br>";
echo "<font color=black>吴文∶嗯．．这样吧！老夫有种祖传药方，应该对清姑娘有所帮助！但是因药材缺乏而作罢～既然二位有心，就麻烦二位去弄到这些药材来！</font>"."<br>";


//任务进程改变
$rwjc1=274;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==274) {
echo "<font color=black>【高家庄农舍和霜儿说话】</font>"."<br>";
echo "<font color=black>吴文∶嗯．．这样吧！老夫有种祖传药方，应该对清姑娘有所帮助！但是因药材缺乏而作罢～既然二位有心，就麻烦二位去弄到这些药材来！</font>"."<br>";




//


} elseif ($rid==277) {


echo "<font color=black>【高家庄农舍和清清说话】</font>"."<br>";
echo "<font color=black>（你和萧晓月走后～）</font>"."<br>";
echo "<font color=black>吴文∶清姑娘．．．恕老夫多言，他二人对你颇为关心～姑娘为何避不见面呢？</font>"."<br>";


//任务进程改变
$rwjc1=278;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==278) {

echo "<font color=black>【（你和萧晓月走后～高家庄吴村长家里）】</font>"."<br>";
echo "<font color=black>清清∶我．．不想让他们知道这件事！</font>"."<br>";
echo "<font color=black>吴文∶好吧．．你放心老夫会继续替你瞒着其他人！</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=279;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊





} elseif ($rid==279) {

echo "<font color=black>【高家庄农舍和清清说话】</font>"."<br>";
echo "<font color=black>吴文∶唉～但是．．你一个小姑娘家，就．．加上身子又很虚弱，若没有人照顾，往后的日子怎么过呢？</font>"."<br>";
echo "<font color=black>清清∶村长．．．．</font>"."<br>";

//任务进程改变
$rwjc1=280;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==280) {
echo "<font color=black>【高家庄村口和霜儿说话】</font>"."<br>";
echo "<font color=black>吴文∶你先在我这里养好身子，这些日子里再好好想想吧！</font>"."<br>";
echo "<font color=black>吴文∶老夫看人是不会错的～</font>"."<font color=black>$name</font>"."<font color=black>～不会是个薄情之人</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=114;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=281;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//


} elseif ($rid==281) {
echo "<font color=black>【高家庄村口和霜儿说话】</font>"."<br>";
echo "<font color=black>吴文∶你先在我这里养好身子，这些日子里再好好想想吧！</font>"."<br>";
echo "<font color=black>吴文∶老夫看人是不会错的～</font>"."<font color=black>$name</font>"."<font color=black>～不会是个薄情之人</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=114;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



//

} elseif ($rid==283) {
echo "<font color=black>【松树林找地方放捕兽夹】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶嘿嘿～先借猎人兄弟的捕兽夹用用～（你收起捕兽夹）这里不好～换个地方试试！(去2.2)</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=284;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==284) {
echo "<font color=black>【松树林找地方放捕兽夹】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶嘿嘿～先借猎人兄弟的捕兽夹用用～（你收起捕兽夹）这里不好～换个地方试试！(去2.2)</font>"."<br>";







//


} elseif ($rid==285) {
echo "<font color=black>【在方寸山下松树林里往下边追鹿】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哈～果然在这里！（雄鹿一看到你，就往下边林子里跑掉了）</font>"."<br>";

//任务进程改变
$rwjc1=286;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==286) {
echo "<font color=black>【在方寸山下松树林里往下边追鹿】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哈～果然在这里！（雄鹿一看到你，就往下边林子里跑掉了）</font>"."<br>";




//

} elseif ($rid==287) {
echo "<font color=black>【在方寸山下松树林里往上边追鹿】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶好～就差一步咯！看你往哪里跑！（雄鹿一看到你，就往上边林子里跑掉了） </font>"."<br>";

//任务进程改变
$rwjc1=288;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==288) {
echo "<font color=black>【在方寸山下松树林里往上边追鹿】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶好～就差一步咯！看你往哪里跑！（雄鹿一看到你，就往上边林子里跑掉了） </font>"."<br>";




//














} elseif ($rid==296) {

echo "<font color=black>【泾水滨继续钓鱼】</font>"."<br>";
echo "<font color=black>（你将钓饵丢进水里，开始钓鱼）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶鱼呀～鱼呀～快上钩吧！咦？好像有东西上钩了～哈哈～这么快啊！我真是天才～</font>"."<br>";
//任务进程改变
$rwjc1=297;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==297) {

echo "<font color=black>【在泾水滨钓鲤鱼】</font>"."<br>";
echo "<font color=black>（你将鱼钩拉起来～原来是双牛皮靴）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊！？空欢喜一场～（你重新将钓饵丢进水里，开始钓鱼）</font>"."<br>";

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=298;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊





} elseif ($rid==298) {

echo "<font color=black>【把鱼竿还给泾水滨李定】</font>"."<br>";
echo "<font color=black>（鱼标动了几下～又有鱼上钩了）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶这次要沉住气～菩萨保佑是只大鲤鱼～菩萨保佑．．哈哈～真是鲤鱼啊！</font>"."<br>";



//物品加
$wpdz1[]="活鲤鱼";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=262;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加

//任务进程改变
$rwjc1=299;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==299) {
echo "<font color=black>【把鱼竿还给泾水滨李定】</font>"."<br>";
echo "<font color=black>（鱼标动了几下～又有鱼上钩了）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶这次要沉住气～菩萨保佑是只大鲤鱼～菩萨保佑．．哈哈～真是鲤鱼啊！</font>"."<br>";






//






} elseif ($rid==300) {
echo "<font color=black>【高家庄农舍和萧晓月】</font>"."<br>";
echo "<font color=black>萧晓月∶看吧！我的动作还是比你快，三样药材我已弄到手了。问我哪弄来的？嘻．．我爹喜欢收藏天下名贵药材我只不过溜回家拿了一些！你找的呢！</font>"."<br>";
//任务进程改变
$rwjc1=301;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊






} elseif ($rid==301) {
	
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="活鲤鱼";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=262;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

//提供需要扣除的物品作为判读依据
$wpdz1[]="鹿茸（药引）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=260;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据




include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值










if ($pd==2) {

echo "<font color=black>【高家庄农舍和霜儿说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我找的也都全部找到了，给！</font>"."<br>";

//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=302;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} else{
echo "<font color=black>萧晓月：怎么没有活鲤鱼啊！</font>"."<br>";
echo "<font color=black>萧晓月：怎么没有鹿茸（药引）啊！</font>"."<br>";
}
	

} elseif ($rid==302) {
echo "<font color=black>【高家庄农舍和霜儿说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我找的也都全部找到了，给！</font>"."<br>";






//



} elseif ($rid==305) {

echo "<font color=black>【高家庄农舍和吴文说话】</font>"."<br>";
echo "<font color=black>清清∶</font>"."<font color=black>$name</font>"."<font color=black>大哥．．你们．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊～你还不要起来乖乖的躺着休息 </font>"."<br>";
echo "<font color=black>吴文∶呵．．没关系清姑娘已经可以下床走动了</font>"."<br>";

//任务进程改变
$rwjc1=306;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//

//


} elseif ($rid==306) {
echo "<font color=black>【高家庄农舍和吴文说话】</font>"."<br>";
echo "<font color=black>清清∶</font>"."<font color=black>$name</font>"."<font color=black>大哥．．你们．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊～你还不要起来乖乖的躺着休息 </font>"."<br>";
echo "<font color=black>吴文∶呵．．没关系清姑娘已经可以下床走动了</font>"."<br>";






//



} elseif ($rid==310) {
echo "<font color=black>【高家庄农舍和霜儿说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶您身为村长怎可说这般丧气话～天下一物降一物，妖怪也不例外。我不相信没人能治得了那些海妖</font>"."<br>";
echo "<font color=black>霜儿∶我知道有个人能对付海妖！</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=311;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==311) {
echo "<font color=black>【高家庄农舍和吴文说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶那好极了，我们这就去请方寸山的道士下山收妖！</font>"."<br>";
echo "<font color=black>霜儿∶不．．但是．．你．．还是打消这念头。因为．．</font>"."<br>";
echo "<font color=black>吴文∶霜儿～让爹来说吧．．</font>"."<br>";


//任务进程改变
$rwjc1=312;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==312) {
echo "<font color=black>【高家庄农舍和吴文说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶那好极了，我们这就去请方寸山的道士下山收妖！</font>"."<br>";
echo "<font color=black>霜儿∶不．．但是．．你．．还是打消这念头。因为．．</font>"."<br>";
echo "<font color=black>吴文∶霜儿～让爹来说吧．．</font>"."<br>";







//






} elseif ($rid==318) {
echo "<font color=black>【方寸山小院和清清说话】</font>"."<br>";
echo "<font color=black>萧晓月∶这个道士怎么一见我们神色如此慌张，正眼也不敢瞧一下？ </font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哈～道家清修之人突然看到两位美女驾到怎么可能面不改色呢？ </font>"."<br>";
echo "<font color=black>萧晓月∶哼～一脸不正经！ </font>"."<br>";


//任务进程改变
$rwjc1=319;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//


} elseif ($rid==319) {
echo "<font color=black>【方寸山小院和清清说话】</font>"."<br>";
echo "<font color=black>萧晓月∶这个道士怎么一见我们神色如此慌张，正眼也不敢瞧一下？ </font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哈～道家清修之人突然看到两位美女驾到怎么可能面不改色呢？ </font>"."<br>";
echo "<font color=black>萧晓月∶哼～一脸不正经！ </font>"."<br>";






//




} elseif ($rid==321) {
echo "<font color=black>【方寸山练功场和晓风说话】</font>"."<br>";
echo "<font color=black>萧晓月∶怎么这么久还不出来啊～这臭道士也太大架子了吧！ </font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶咦？练功场好像有人啊？去看看～</font>"."<br>";
//快速任务
$ydx=10;//移动坐标x
$ydy=9;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=322;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//


} elseif ($rid==322) {
echo "<font color=black>【方寸山练功场和晓风说话】</font>"."<br>";
echo "<font color=black>萧晓月∶怎么这么久还不出来啊～这臭道士也太大架子了吧！ </font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶咦？练功场好像有人啊？去看看～</font>"."<br>";


//快速任务
$ydx=10;//移动坐标x
$ydy=9;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



//


} elseif ($rid==323) {
echo "<font color=black>【方寸山练功场和大胡子道士说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶可否告诉在下怎么一回事？</font>"."<br>";
echo "<font color=black>大胡子道士∶这小王八蛋骗俺！俺本来是个杀猪的～每天至少要吃五斤肉！不然浑身都会不对劲！</font>"."<br>";

//任务进程改变
$rwjc1=324;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==324) {
echo "<font color=black>【方寸山练功场和晓风说话】</font>"."<br>";
echo "<font color=black>大胡子道士指着晓风：他骗俺说来这里当道士～可以每天有吃有喝的！结果俺一来才发现根本不是那么一回事～</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=325;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//

//


} elseif ($rid==325) {
echo "<font color=black>【方寸山练功场和晓风说话】</font>"."<br>";
echo "<font color=black>大胡子道士指着晓风：他骗俺说来这里当道士～可以每天有吃有喝的！结果俺一来才发现根本不是那么一回事～</font>"."<br>";







//




} elseif ($rid==326) {
echo "<font color=black>【方寸山练功场和大胡子道士说话】</font>"."<br>";
echo "<font color=black>大胡子道士∶老子不当道士了行不行？刚才俺好不容易抓到一头鹿，正想煮来解解馋，谁料居然被这小兔崽子把一锅子连肉带汤全给倒掉了</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶鹿．．．？</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=327;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==327) {

echo "<font color=black>【方寸山练功场和大胡子道士说话】</font>"."<br>";
echo "<font color=black>大胡子道士∶是啊～有只头上断了角，而且脚也受伤的雄鹿跑进观内来！我看它伤口都烂的透骨了，就让它早早解脱啦！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶你．．．．</font>"."<br>";
//任务进程改变
$rwjc1=328;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==328) {

echo "<font color=black>【方寸山练功场和大胡子道士说话】</font>"."<br>";
echo "<font color=black>萧晓月∶你不想继续出家，何不还俗归乡，这样实在太难看了～</font>"."<br>";
echo "<font color=black>大胡子道士∶俺能回去早就回去了！</font>"."<br>";
echo "<font color=black>萧晓月∶此话怎讲？</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=329;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==329) {
echo "<font color=black>【方寸山练功场和晓风说话】</font>"."<br>";
echo "<font color=black>大胡子道士∶自从吃了清风道长给俺的金丹后，出家以前的事俺就全记不起来了。俺只知道俺是杀猪的俺只想要吃肉！</font>"."<br>";
echo "<font color=black>萧晓月∶真可笑，有这种怪人！</font>"."<br>";


//任务进程改变
$rwjc1=330;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//

//


} elseif ($rid==330) {
echo "<font color=black>【方寸山练功场和晓风说话】</font>"."<br>";
echo "<font color=black>大胡子道士∶自从吃了清风道长给俺的金丹后，出家以前的事俺就全记不起来了。俺只知道俺是杀猪的俺只想要吃肉！</font>"."<br>";
echo "<font color=black>萧晓月∶真可笑，有这种怪人！</font>"."<br>";






//





} elseif ($rid==342) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>晓风∶呜．．．饶命啊．．下次不敢了．．</font>"."<br>";
echo "<font color=black>萧晓月∶怎么会是这个小道士！刚才那些人都是你变的？</font>"."<br>";
echo "<font color=black>晓风∶我乃菩提老祖所戴玉佩所化～已经修行九百九十九年了</font>"."<br>";




//任务进程改变
$rwjc1=343;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==343) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>清∶既然你已有千年的道行，就应该潜心修炼，求天师之道！为何自甘堕落，依仗法力逼人吃金丹出家当道士，迫害村民？</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=344;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==344) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>晓风∶我．．我只是让他们当道士！又不是逼他们做坏事～道家曰∶人法地，地法天，天法道～如果我能让很多很人成为道家弟子，祖师看到了一定会很感动，就会来接我到天界，成仙．．</font>"."<br>";


//任务进程改变
$rwjc1=345;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==345) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我的天哪．．这是哪门子的修炼道法！小道士．．是谁教你的？</font>"."<br>";
echo "<font color=black>晓风∶我我．．我读道德经时想到的．．</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=346;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==346) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>清清∶修行之本在于舍己助人，道家曰：人法地，地法天，天法道，意思是说道大，天大，地大，人亦大～</font>"."<br>";


//任务进程改变
$rwjc1=347;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==347) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>清清∶而你所作所为却背道而驰，自毁功德。枉费你有千年道行，竟只有孩童般的智慧。如此下去只怕向道未果，反而先堕魔道！</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=348;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==348) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>晓风∶啊？．菩萨！你是菩萨！</font>"."<br>";
echo "<font color=black>清清∶你、你别这样，我不是菩萨！晓风∶呜．．我太感动了．．从来都没有人教过我这些道理，求求菩萨收我当弟子</font>"."<br>";


//任务进程改变
$rwjc1=349;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==349) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>清清∶这些道理是我师父平时教我的．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶让他将功折罪好了，我们正要去降伏海妖，这小不点也许派得上用场</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=350;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==350) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>晓风∶好好好．．．！让我跟着您，我知道是谁在背后操纵海妖，我可以帮您们找到他</font>"."<br>";
//任务进程改变
$rwjc1=351;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==351) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>晓风∶山下那些海妖大多是从东海的海底莽林来的，那里有一个赤血龙王的巢穴，赤血龙王就躲在那水底下的血池中，他用邪法操纵海妖吸食人血，供他修炼魔功。</font>"."<br>";
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=352;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==352) {
echo "<font color=black>【方寸练功场和晓风说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶乖乖．．这么邪恶的妖魔！</font>"."<br>";
echo "<font color=black>清清∶好吧．．既然你有心．．从今以后，你就以原形面貌跟着我吧。以后你就叫做小丸吧！我唤你的名字时你再出来！</font>"."<br>";
//任务进程改变
$rwjc1=353;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==353) {
echo "<font color=black>【方寸练功场和众道士说话】</font>"."<br>";
echo "<font color=black>晓风∶是．．．主人．．请将我带在身上我可以补充您的血量，还可以替你抵挡血池内的寒气呢。
</font>"."<br>";

//任务进程改变
$rwjc1=354;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="小玉奇缘";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//


} elseif ($rid==354) {
echo "<font color=black>【方寸练功场和众道士说话】</font>"."<br>";
echo "<font color=black>晓风∶是．．．主人．．请将我带在身上我可以补充您的血量，还可以替你抵挡血池内的寒气呢。
</font>"."<br>";




//










} elseif ($rid==355) {
echo "<font color=black>【在东海海底莽林（4，4）内找到化血池】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶呵～吴家小姐很思念你呢，赶快回去看她吧！</font>"."<br>";
echo "<font color=black>江少云∶再造之恩．．江某永铭于心。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哈！功德圆满。</font>"."<br>";

//快速任务
$ydx=3;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//任务进程改变
$rwjc1=356;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="赤血龙王";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//

//


} elseif ($rid==356) {
echo "<font color=black>【在东海海底莽林（4，4）内找到化血池】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶呵～吴家小姐很思念你呢，赶快回去看她吧！</font>"."<br>";
echo "<font color=black>江少云∶再造之恩．．江某永铭于心。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哈！功德圆满。</font>"."<br>";


//快速任务
$ydx=3;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//




} elseif ($rid==358) {
echo "<font color=black>【海底莽林（4，4）和赤血龙王说话】</font>"."<br>";
echo "<font color=black>赤血龙王∶是～谁～吵～醒～本～龙～王！</font>"."<br>";
echo "<font color=black>小玉∶主人～他就是赤血龙王！</font>"."<br>";
echo "<font color=black>赤血龙王：刚才我还在纳闷．．凡人怎么可能到的了这里！？原来～是菩提玉在帮你们～</font>"."<br>";

//任务进程改变
$rwjc1=359;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="赤血龙王";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==359) {
echo "<font color=black>【海底莽林（4，4）和赤血龙王说话】</font>"."<br>";
echo "<font color=black>赤血龙王：哼！小道士．．你修你的道，我炼我的魔，咱们井水不犯河水。今日你竟带凡人来砸我的地盘！？</font>"."<br>";

//经验加
$jy=110000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=360;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="赤血龙王";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==360) {

echo "<font color=black>【海底莽林（4，4）杀死赤血龙王和他的喽罗】</font>"."<br>";
echo "<font color=black>萧晓月：谁理你，看这血池就知道你这妖魔残害了多少人命。今日我等便要为世间除害！</font>"."<br>";
echo "<font color=black>赤血龙王：笑话．．！</font>"."<br>";



//任务进程改变
$rwjc1=361;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="赤血龙王";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==361) {

echo "<font color=black>【海底莽林（4，4）杀死赤血龙王和他的喽罗】</font>"."<br>";
echo "<font color=black>萧晓月：谁理你，看这血池就知道你这妖魔残害了多少人命。今日我等便要为世间除害！</font>"."<br>";
echo "<font color=black>赤血龙王：笑话．．！</font>"."<br>";




//

} elseif ($rid==362) {

echo "<font color=black>【海底莽林（4，4）杀死赤血龙王和他的喽罗】</font>"."<br>";
echo "<font color=black>赤血龙王：你们这些愚蠢的人类会付出代价的！</font>"."<br>";



//任务进程改变
$rwjc1=363;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="赤血龙王";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==363) {

echo "<font color=black>【海底莽林（4，4）杀死赤血龙王和他的喽罗】</font>"."<br>";
echo "<font color=black>赤血龙王：你们这些愚蠢的人类会付出代价的！</font>"."<br>";




//


} elseif ($rid==364) {
echo "<font color=black>【海底莽林（4，4）和清清说话】</font>"."<br>";
echo "<font color=black>清清：原来．．．土灵珠在这妖怪身上！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶土灵珠．．这又是啥玩意？</font>"."<br>";
echo "<font color=black>清清：我听师父说过．．自古相传女娲大神聚天地灵气～风、雷、水、火、土，炼成五珠以镇伏群魔。</font>"."<br>";

//银两加
$yl1=220000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=500000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=365;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="赤血龙王";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==365) {

echo "<font color=black>【海底莽林（4，4）和清清说话】</font>"."<br>";
echo "<font color=black>清清：原来．．．土灵珠在这妖怪身上！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶土灵珠．．这又是啥玩意？</font>"."<br>";
echo "<font color=black>清清：我听师父说过．．自古相传女娲大神聚天地灵气～风、雷、水、火、土，炼成五珠以镇伏群魔。</font>"."<br>";





//


} elseif ($rid==366) {

echo "<font color=black>【海底莽林（4，4）和清清说话】</font>"."<br>";
echo "<font color=black>萧晓月：就只会想到钱！我们逃脱这洞窟就靠这灵珠了。清清：灵珠于此时此地现世，或许意味着．．我．．不该再躲藏了。</font>"."<br>";

//经验加
$jy=500000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=367;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="赤血龙王";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==367) {

echo "<font color=black>【海底莽林（4，4）和清清说话】</font>"."<br>";
echo "<font color=black>萧晓月：就只会想到钱！我们逃脱这洞窟就靠这灵珠了。清清：灵珠于此时此地现世，或许意味着．．我．．不该再躲藏了。</font>"."<br>";




//


} elseif ($rid==377) {
echo "<font color=black>【在兵马俑阵（4.4）找到霜儿】</font>"."<br>";
echo "<font color=black>清清：我们快进入救霜儿姐姐吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哼～不管是石头人还是傀儡人！我们一路杀进去！</font>"."<br>";
echo "<font color=black>萧晓月：恩！</font>"."<br>";

//快速任务
$ydx=19;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//银两加
$yl1=50000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=120000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=378;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==378) {

echo "<font color=black>【在兵马俑阵（4.4）找到霜儿】</font>"."<br>";
echo "<font color=black>清清：我们快进入救霜儿姐姐吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶哼～不管是石头人还是傀儡人！我们一路杀进去！</font>"."<br>";
echo "<font color=black>萧晓月：恩！</font>"."<br>";
//快速任务
$ydx=19;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



//



} elseif ($rid==380) {
echo "<font color=black>【兵马俑阵（4.4）和项长老说话】</font>"."<br>";
echo "<font color=black>清清∶如果你们敢伤害他，我．．我就立刻自尽！</font>"."<br>";
echo "<font color=black>项长老∶这万万不可～大王可是一直盼着能见到失散十年的亲生女儿最后一面啊。</font>"."<br>";
echo "<font color=black>清清∶最后一面．．？。</font>"."<br>";
//银两加
$yl1=800000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=660000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=381;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==381) {
echo "<font color=black>【兵马俑阵（4.4）和项长老说话】</font>"."<br>";
echo "<font color=black>项长老∶巫王陛下得了重病，已经没有多少日子了。</font>"."<br>";
echo "<font color=black>大王说∶不论当前什么误会，也不论当初巫后娘娘是为何而带您离开西域的，毕竟～骨肉亲情．．希望您念在父女情份上回到他身边。</font>"."<br>";

//经验加
$jy=200000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=382;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==382) {
echo "<font color=black>【兵马俑阵（4.4）和项长老说话】</font>"."<br>";
echo "<font color=black>清清∶．．我要先找到我娘！</font>"."<br>";
echo "<font color=black>项长老∶这．．．巫后娘娘．．已失踪十年之久，恐怕早已不在人世了，何况．．</font>"."<br>";
//任务进程改变
$rwjc1=383;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==383) {
echo "<font color=black>【兵马俑阵（4.4）和项长老说话】</font>"."<br>";
echo "<font color=black>清清∶何况什么？说啊！</font>"."<br>";
echo "<font color=black>项长老∶容老臣直言～殿下若知道巫后娘娘的．．身份，应该就能体会当初大王为何会那样对待娘娘了．．</font>"."<br>";

//经验加
$jy=200000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=384;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==384) {
echo "<font color=black>【兵马俑阵（4.4）和项长老说话】</font>"."<br>";
echo "<font color=black>清清∶如果我也和娘一样呢？你们是不是也会像对我娘那样来对待我？</font>"."<br>";
echo "<font color=black>项长老∶自然不同</font>"."<br>";
//任务进程改变
$rwjc1=385;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==385) {
echo "<font color=black>【兵马俑阵（4.4）和项长老说话】</font>"."<br>";
echo "<font color=black>项长老∶您是大王唯一的亲骨肉，也是我黑苗族中唯一有资格继承王位的身份的人，无论发生什么事，老臣也要把您带回大王身边。无论是谁来阻挠，老臣绝对不惜一切代价，排除到底！</font>"."<br>";

//经验加
$jy=200000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=386;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==386) {
echo "<font color=black>【兵马俑阵（4.4）和项长老说话】</font>"."<br>";
echo "<font color=black>清清∶．．．．．．．你们要答应我．．．以后决不许对他们出手。</font>"."<br>";
echo "<font color=black>项长老∶老臣愿以人格担保。</font>"."<br>";
//任务进程改变
$rwjc1=387;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==387) {


echo "<font color=black>【兵马俑阵（4.4）和吴文说话】</font>"."<br>";
echo "<font color=black>清清∶好．．．放了他们，我就跟你们走．．</font>"."<br>";
echo "<font color=black>项长老∶公主殿下睿智！</font>"."<br>";
echo "<font color=black>菩提玉∶主人！等等我啊～（菩提玉随清清离去）</font>"."<br>";

//经验加
$jy=500000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=388;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==388) {


echo "<font color=black>【兵马俑阵（4.4）和吴文说话】</font>"."<br>";
echo "<font color=black>清清∶好．．．放了他们，我就跟你们走．．</font>"."<br>";
echo "<font color=black>项长老∶公主殿下睿智！</font>"."<br>";
echo "<font color=black>菩提玉∶主人！等等我啊～（菩提玉随清清离去）</font>"."<br>";
//


} elseif ($rid==394) {

echo "<font color=black>【到青龙街寻找清清的下落】</font>"."<br>";
echo "<font color=black>萧晓月：</font>"."<font color=black>$name</font>"."<font color=black>大哥，先休息一下吧。我们今天来来回回找了好几次，快把整条望南街的每一块砖都磨光滑了。我想清姑娘他们并没在这条街落脚。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：对不起，让你受累了。你先在此歇息一会，我到青龙街继续找。(说完便快步往青龙街走去，晓月马上站起来朝你追去)</font>"."<br>";
echo "<font color=black>萧晓月：等等我嘛～～</font>"."<br>";


//快速任务
$ydx=1;//移动坐标x
$ydy=17;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=395;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="寻找清清";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==395) {

echo "<font color=black>【到青龙街寻找清清的下落】</font>"."<br>";
echo "<font color=black>萧晓月：</font>"."<font color=black>$name</font>"."<font color=black>大哥，先休息一下吧。我们今天来来回回找了好几次，快把整条望南街的每一块砖都磨光滑了。我想清姑娘他们并没在这条街落脚。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：对不起，让你受累了。你先在此歇息一会，我到青龙街继续找。(说完便快步往青龙街走去，晓月马上站起来朝你追去)</font>"."<br>";
echo "<font color=black>萧晓月：等等我嘛～～</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=17;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//

} elseif ($rid==396) {

echo "<font color=black>【到南城客栈投宿】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：清清～我可找到你了～(待你看清楚，才发现那个姑娘并不是清清)～不好意思我认错人了。</font>"."<br>";
echo "<font color=black>少女：神经病！</font>"."<br>";
echo "<font color=black>萧晓月：你跑那么快干嘛～我都跟不上你了。那个是～～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我看错了，我以为她是清清。</font>"."<br>";
echo "<font color=black>萧晓月：今天我们跑了一天了，你也累了吧～不如我们先回客栈休息一宿，然后再继续找。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好吧。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=397;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="寻找清清";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==397) {

echo "<font color=black>【到南城客栈投宿】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：清清～我可找到你了～(待你看清楚，才发现那个姑娘并不是清清)～不好意思我认错人了。</font>"."<br>";
echo "<font color=black>少女：神经病！</font>"."<br>";
echo "<font color=black>萧晓月：你跑那么快干嘛～我都跟不上你了。那个是～～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我看错了，我以为她是清清。</font>"."<br>";
echo "<font color=black>萧晓月：今天我们跑了一天了，你也累了吧～不如我们先回客栈休息一宿，然后再继续找。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好吧。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//

} elseif ($rid==399) {

echo "<font color=black>【到客栈外抓贼】</font>"."<br>";
echo "<font color=black>(抓贼拉～～响亮的声音划破了宁静的夜空)</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：怎么了？</font>"."<br>";
echo "<font color=black>萧晓月：有贼～嘻嘻～我正嫌无聊呢～这下可好，乐子自己找上门来了，我出去看个究竟。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//任务进程改变
$rwjc1=400;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="寻找清清";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==400) {
echo "<font color=black>【到客栈外抓贼】</font>"."<br>";
echo "<font color=black>(抓贼拉～～响亮的声音划破了宁静的夜空)</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：怎么了？</font>"."<br>";
echo "<font color=black>萧晓月：有贼～嘻嘻～我正嫌无聊呢～这下可好，乐子自己找上门来了，我出去看个究竟。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//

} elseif ($rid==401) {

echo "<font color=black>【南城客栈教训飞贼】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：毛头小贼，竟敢在你小铃铛大爷的地盘上撒野～～我看你是活得不耐烦了。快把包袱交出来，否则今天我定会好好收拾你一番。</font>"."<br>";
echo "<font color=black>飞贼：我好怕哦～～就凭你们？逞英雄也要先掂量一下自己有几两重！恐怕～～我一出手你们就得满地找牙了。</font>"."<br>";
echo "<font color=black>萧晓月：好大的口气！我今天就要取你狗命～～</font>"."<br>";

//任务进程改变
$rwjc1=402;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变




} elseif ($rid==402) {
echo "<font color=black>【南城客栈教训飞贼】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：毛头小贼，竟敢在你小铃铛大爷的地盘上撒野～～我看你是活得不耐烦了。快把包袱交出来，否则今天我定会好好收拾你一番。</font>"."<br>";
echo "<font color=black>飞贼：我好怕哦～～就凭你们？逞英雄也要先掂量一下自己有几两重！恐怕～～我一出手你们就得满地找牙了。</font>"."<br>";
echo "<font color=black>萧晓月：好大的口气！我今天就要取你狗命～～</font>"."<br>";


//

} elseif ($rid==403) {

echo "<font color=black>【往下边追踪飞贼】</font>"."<br>";
echo "<font color=black>飞贼：看不出来，你这小子的功夫还不错嘛。天快亮了，我该回去休息了，下次再和你们好好玩上一场。先告辞拉～～～</font>"."<br>";
echo "<font color=black>萧晓月：小贼～休想逃！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=7;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//银两加
$yl1=1200000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=660000;	
include("./pz/ini_pzz023.php");
//银两加



//任务进程改变
$rwjc1=404;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==404) {
echo "<font color=black>【往下边追踪飞贼】</font>"."<br>";
echo "<font color=black>飞贼：看不出来，你这小子的功夫还不错嘛。天快亮了，我该回去休息了，下次再和你们好好玩上一场。先告辞拉～～～</font>"."<br>";
echo "<font color=black>萧晓月：小贼～休想逃！</font>"."<br>";

//
//快速任务
$ydx=1;//移动坐标x
$ydy=7;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务




} elseif ($rid==405) {

echo "<font color=black>【往下边追踪飞贼】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这毛贼的轻功还挺不赖。</font>"."<br>";
echo "<font color=black>萧晓月：哼，就凭这点三脚猫功夫就想摆脱我萧晓月，没门～(飞贼往下方逃去)</font>"."<br>";

//经验加
$jy=150000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=406;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==406) {
echo "<font color=black>【往下边追踪飞贼】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这毛贼的轻功还挺不赖。</font>"."<br>";
echo "<font color=black>萧晓月：哼，就凭这点三脚猫功夫就想摆脱我萧晓月，没门～(飞贼往下方逃去)</font>"."<br>";


//


} elseif ($rid==407) {


echo "<font color=black>【往上方追捕飞贼】</font>"."<br>";
echo "<font color=black>萧晓月：嘻嘻～想和本姑娘玩抓迷藏～～你还没够格，我们继续追。(飞贼向上方逃去)</font>"."<br>";
//经验加
$jy=150000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=408;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==408) {
echo "<font color=black>【往上方追捕飞贼】</font>"."<br>";
echo "<font color=black>萧晓月：嘻嘻～想和本姑娘玩抓迷藏～～你还没够格，我们继续追。(飞贼向上方逃去)</font>"."<br>";


//


} elseif ($rid==409) {


echo "<font color=black>【往上方追捕飞贼】</font>"."<br>";
echo "<font color=black>萧晓月：</font>"."<font color=black>$name</font>"."<font color=black>：大哥，你这么快就跟上来了～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：那还用说～看，他往上方逃去了～(飞贼向上方逃去)</font>"."<br>";
//经验加
$jy=150000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=410;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==410) {
echo "<font color=black>【往上方追捕飞贼】</font>"."<br>";
echo "<font color=black>萧晓月：</font>"."<font color=black>$name</font>"."<font color=black>：大哥，你这么快就跟上来了～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：那还用说～看，他往上方逃去了～(飞贼向上方逃去)</font>"."<br>";



//


} elseif ($rid==411) {



echo "<font color=black>【往鼓楼追捕逃犯】</font>"."<br>";
echo "<font color=black>(飞贼停了下来，四处望了望)</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小心，过来这里。</font>"."<br>";
echo "<font color=black>萧晓月：我们为什么要躲起来？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：他似乎有所察觉，我们先躲一躲。</font>"."<br>";
echo "<font color=black>萧晓月：好吧。(飞贼往鼓楼逃去)</font>"."<br>";
echo "<font color=black>萧晓月：毛贼逃了，快追～～～</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=57;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//经验加
$jy=150000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=412;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==412) {

echo "<font color=black>【往鼓楼追捕逃犯】</font>"."<br>";
echo "<font color=black>(飞贼停了下来，四处望了望)</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小心，过来这里。</font>"."<br>";
echo "<font color=black>萧晓月：我们为什么要躲起来？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：他似乎有所察觉，我们先躲一躲。</font>"."<br>";
echo "<font color=black>萧晓月：好吧。(飞贼往鼓楼逃去)</font>"."<br>";
echo "<font color=black>萧晓月：毛贼逃了，快追～～～</font>"."<br>";


//快速任务
$ydx=1;//移动坐标x
$ydy=57;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//



} elseif ($rid==415) {



echo "<font color=black>【把包袱交给南城客栈古董商】</font>"."<br>";
echo "<font color=black>飞萧晓月：又逃？没用的家伙，打不过我们就逃，</font>"."<font color=black>$name</font>"."<font color=black>大哥，我们追～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：晓月妹子，别追了，我们先把包袱带回去，其他事情容后再说。</font>"."<br>";



//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//任务进程改变
$rwjc1=416;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==416) {

echo "<font color=black>【把包袱交给南城客栈古董商】</font>"."<br>";
echo "<font color=black>飞萧晓月：又逃？没用的家伙，打不过我们就逃，</font>"."<font color=black>$name</font>"."<font color=black>大哥，我们追～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：晓月妹子，别追了，我们先把包袱带回去，其他事情容后再说。</font>"."<br>";


//快速任务
$ydx=1;//移动坐标x
$ydy=96;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//

} elseif ($rid==421) {


echo "<font color=black>【和鼓楼萧晓月对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：你生什么气？</font>"."<br>";
echo "<font color=black>萧晓月：哼，你自己明白～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我又做错什么了？</font>"."<br>";
echo "<font color=black>萧晓月：你还不去陪那个国色天香，温婉柔顺的老板娘喝两杯。到这里管我干吗？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：原来是为了这个生气。你想想，如果我不这样说，她会把知道的东西告诉我吗？我还没来得及套出情报，你倒好～就生气走了。</font>"."<br>";
echo "<font color=black>萧晓月：是这样啊？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：真拿你没办法～～大小姐脾气！</font>"."<br>";



//任务进程改变
$rwjc1=422;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
//
} elseif ($rid==422) {


echo "<font color=black>【开启机关进入大鼓之内】</font>"."<br>";
echo "<font color=black>萧晓月：哼～咦？快躲起来！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：怎么了？</font>"."<br>";
echo "<font color=black>萧晓月：嘘！你看～(只见老板娘背着一个包袱，在鼓楼下四处张望一番，然后在大鼓的边缘轻敲了一下，咔一声，大鼓的鼓面渐渐移开，老板娘跳进鼓内，鼓面马上恢复了原样。片刻之后老板娘空手而出。)</font>"."<br>";
echo "<font color=black>萧晓月：你说那个包袱里藏的是什么呢？会不会就是我们找的炼妖壶呢？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：如果是的话，那就真是踏破铁鞋无觅处，得来全不费功夫了。</font>"."<br>";
//经验加
$jy=660000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=423;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==423) {

echo "<font color=black>【进秘道找寻包袱】</font>"."<br>";
echo "<font color=black>（等老板娘走后～你和晓月来到大鼓前面）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我来看看～刚才好像是这么弄的！(你按了按大鼓边缘的突起，咔一声，鼓面渐渐移开，一条秘道展现在你们面前)</font>"."<br>";
echo "<font color=black>萧晓月：哈！你看～秘道，我们赶快进去探探～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：别着急，我先进去，你跟着我，出了什么事情都有我先帮你挡着。不要乱碰任何东西，以免触发了机关，一找到包袱我们就离开。</font>"."<br>";
echo "<font color=black>萧晓月：好～都听你的！</font>"."<br>";

//任务进程改变
$rwjc1=424;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//


} elseif ($rid==424) {
echo "<font color=black>【进秘道找寻包袱】</font>"."<br>";
echo "<font color=black>（等老板娘走后～你和晓月来到大鼓前面）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我来看看～刚才好像是这么弄的！(你按了按大鼓边缘的突起，咔一声，鼓面渐渐移开，一条秘道展现在你们面前)</font>"."<br>";
echo "<font color=black>萧晓月：哈！你看～秘道，我们赶快进去探探～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：别着急，我先进去，你跟着我，出了什么事情都有我先帮你挡着。不要乱碰任何东西，以免触发了机关，一找到包袱我们就离开。</font>"."<br>";
echo "<font color=black>萧晓月：好～都听你的！</font>"."<br>";
//


} elseif ($rid==425) {

echo "<font color=black>【你们被带到官府大厅受审】</font>"."<br>";

echo "<font color=black>你正准备跃出秘道，蓦地被一只大手拽出秘道。）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哎，你就不能轻点，骨头都被你扯散了！哟，这不是衙役大哥吗，这么巧！</font>"."<br>";
echo "<font color=black>衙役：还真巧！小仙卿真有兴致，四更天不歇息，反倒来这施展遁地之术！背上还背着个大包袱！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这个～～</font>"."<br>";
echo "<font color=black>衙役：我接到线报～有飞贼在鼓楼藏赃物，想不到这飞贼竟然是你！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：衙役大哥，你听我解释嘛～(衙役乘你辩解之际，把你和萧晓
</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=57;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//任务进程改变
$rwjc1=426;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==426) {
echo "<font color=black>【你们被带到官府大厅受审】</font>"."<br>";

echo "<font color=black>你正准备跃出秘道，蓦地被一只大手拽出秘道。）</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哎，你就不能轻点，骨头都被你扯散了！哟，这不是衙役大哥吗，这么巧！</font>"."<br>";
echo "<font color=black>衙役：还真巧！小仙卿真有兴致，四更天不歇息，反倒来这施展遁地之术！背上还背着个大包袱！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这个～～</font>"."<br>";
echo "<font color=black>衙役：我接到线报～有飞贼在鼓楼藏赃物，想不到这飞贼竟然是你！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：衙役大哥，你听我解释嘛～(衙役乘你辩解之际，把你和萧晓
</font>"."<br>";
//
//快速任务
$ydx=1;//移动坐标x
$ydy=45;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif ($rid==439) {







$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="闪光磷粉";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=265;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值






if ($pd==2) {
echo "<font color=black>【和喜福会二楼的舞娘对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：你趁戴耳环之际，将少许磷粉抹在小五发稍上</font>"."<br>";

//任务进程改变
$rwjc1=440;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} else{
echo "<font color=black>舞娘：此任务需要闪光磷粉x1！</font>"."<br>";

}
















} elseif ($rid==440) {

echo "<font color=black>【和喜福会二楼的舞娘对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：你趁戴耳环之际，将少许磷粉抹在小五发稍上</font>"."<br>";


//
} elseif ($rid==441) {


echo "<font color=black>【向下追踪舞娘】</font>"."<br>";
echo "<font color=black>(你蹲在屋顶看着，忽然一点蓝光闪过)</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我猜想的果然没错，这次我可不会放过你了！(蓝光向下移动了)</font>"."<br>";

//任务进程改变
$rwjc1=442;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//

//


} elseif ($rid==442) {

echo "<font color=black>【向下追踪舞娘】</font>"."<br>";
echo "<font color=black>(你蹲在屋顶看着，忽然一点蓝光闪过)</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我猜想的果然没错，这次我可不会放过你了！(蓝光向下移动了)</font>"."<br>";

//

} elseif ($rid==443) {


echo "<font color=black>【向上追踪舞娘】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：咦～这个方向～难道～～(蓝光向上移动了)</font>"."<br>";

//任务进程改变
$rwjc1=444;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==444) {

echo "<font color=black>【向上追踪舞娘】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：咦～这个方向～难道～～(蓝光向上移动了)</font>"."<br>";

//

} elseif ($rid==445) {


echo "<font color=black>【到秘道找寻舞娘的踪迹】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这次我要把你们全都抓起来～～(蓝光向秘道移动了)</font>"."<br>";

//任务进程改变
$rwjc1=446;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==446) {

echo "<font color=black>【到秘道找寻舞娘的踪迹】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：这次我要把你们全都抓起来～～(蓝光向秘道移动了)</font>"."<br>";


//




} elseif ($rid==447) {


echo "<font color=black>【继续偷听舞娘的对话】</font>"."<br>";
echo "<font color=black>舞娘：属下参见教主。</font>"."<br>";
echo "<font color=black>凌月：起来吧。我交代你的事情办得如何了？</font>"."<br>";
echo "<font color=black>舞娘：教主交代的事情，属下已经办好了。</font>"."<br>";
echo "<font color=black>凌月：这次事情能这么顺利还要多得老板娘你的相助啊～</font>"."<br>";
echo "<font color=black>老板娘献媚道：那里那里，要不是教主的关照，我喜福会怎会挣到那么多钱呢！(凌月突然望了你藏匿的地方一眼)</font>"."<br>";
echo "<font color=black>凌月：小五～你是我最欣赏的一个，但是这次你令我很失望～</font>"."<br>";

//任务进程改变
$rwjc1=448;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==448) {

echo "<font color=black>【秘道和绿衣女子对话】</font>"."<br>";
echo "<font color=black>舞娘：教主何出此言？</font>"."<br>";
echo "<font color=black>凌月：你好好看看你的发丝，上面附的是什么？(舞娘摸了摸头发，摊开手心一看～惊呆了)</font>"."<br>";
echo "<font color=black>舞娘：这～～教主～</font>"."<br>";
echo "<font color=black>凌月：出来吧，鬼鬼祟祟可不是大丈夫所为。你从暗处站出来：妖妇，还算你聪明，今日如想留住一条小命，就速速跟我回官府投案。(老板娘与舞娘看情况不妙，便灰溜溜跑了。凌月身后的绿衣女子迅速把你围了起来。)
</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=449;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==449) {

echo "<font color=black>【秘道和绿衣女子对话】</font>"."<br>";
echo "<font color=black>舞娘：教主何出此言？</font>"."<br>";
echo "<font color=black>凌月：你好好看看你的发丝，上面附的是什么？(舞娘摸了摸头发，摊开手心一看～惊呆了)</font>"."<br>";
echo "<font color=black>舞娘：这～～教主～</font>"."<br>";
echo "<font color=black>凌月：出来吧，鬼鬼祟祟可不是大丈夫所为。你从暗处站出来：妖妇，还算你聪明，今日如想留住一条小命，就速速跟我回官府投案。(老板娘与舞娘看情况不妙，便灰溜溜跑了。凌月身后的绿衣女子迅速把你围了起来。)
</font>"."<br>";


//


} elseif ($rid==452) {


echo "<font color=black>【秘道和绿衣女子对话】</font>"."<br>";
echo "<font color=black>绿衣女子：送死？今天你到这里就是送死！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：冥顽不灵对你们一点好处都没有，何不乖乖跟我去投案自首呢？</font>"."<br>";

//任务进程改变
$rwjc1=453;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==453) {

echo "<font color=black>【秘道和绿衣女子对话】</font>"."<br>";
echo "<font color=black>绿衣女子：我们一点伤天害理的事情都没有做过，为什么要跟你去投案呢？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：你们打家劫舍也不算犯罪？今天就让大爷我好好教教你们这些不懂事的人～～</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=454;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==454) {

echo "<font color=black>【秘道杀死绿衣女子】</font>"."<br>";
echo "<font color=black>绿衣女子：口气是蛮大的！那我就让你竖着进来，横着出去～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：还不知道是谁要横着出去呢！出招吧！</font>"."<br>";

//任务进程改变
$rwjc1=455;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==455) {

echo "<font color=black>【秘道杀死绿衣女子】</font>"."<br>";
echo "<font color=black>绿衣女子：口气是蛮大的！那我就让你竖着进来，横着出去～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：还不知道是谁要横着出去呢！出招吧！</font>"."<br>";



//

} elseif ($rid==457) {

echo "<font color=black>【秘道教训凌月】</font>"."<br>";
echo "<font color=black>凌月：话不投机半句多。知道了本教如此多秘密只有两种人，一就是为本教教徒，二就是死人。你不是本教教徒，那只可能是死人了。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哦？那可要看看你的能耐是否比我的能耐大咯～</font>"."<br>";



//任务进程改变
$rwjc1=458;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==458) {

echo "<font color=black>【秘道教训凌月】</font>"."<br>";
echo "<font color=black>凌月：话不投机半句多。知道了本教如此多秘密只有两种人，一就是为本教教徒，二就是死人。你不是本教教徒，那只可能是死人了。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哦？那可要看看你的能耐是否比我的能耐大咯～</font>"."<br>";



//

} elseif ($rid==459) {

echo "<font color=black>【把凌月押到官府受审】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：唉～真没趣，就那么几招就把你打败了～</font>"."<br>";
echo "<font color=black>凌月：胜者为王，败者为寇。我技不如人，既然败于你，就任凭处置。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我对你的性命一点兴趣都没有。你跟我到官府一趟，说出事情的真相，让那个糊涂太守放了晓月便可。(你押起凌月往外走去)</font>"."<br>";


//快速任务
$ydx=1;//移动坐标x
$ydy=45;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


//银两加
$yl1=3600000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=1200000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=460;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==460) {

echo "<font color=black>【把凌月押到官府受审】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：唉～真没趣，就那么几招就把你打败了～</font>"."<br>";
echo "<font color=black>凌月：胜者为王，败者为寇。我技不如人，既然败于你，就任凭处置。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我对你的性命一点兴趣都没有。你跟我到官府一趟，说出事情的真相，让那个糊涂太守放了晓月便可。(你押起凌月往外走去)</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=45;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif ($rid==471) {
echo "<font color=black>【到国子监找袁守诚】</font>"."<br>";
echo "<font color=black>萧晓月：</font>"."<font color=black>$name</font>"."<font color=black>大哥，我们现在应该到那里去呢？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：被飞贼事件拖延了我们不少时间，清清他们也许已经离开了长安城。袁守诚先生能知天地理，善晓鬼神情，未来事，过去事，观如月镜；知凶定吉，断死言生。我想到袁氏草堂一趟，或许袁先生会知道清清他们的下落。</font>"."<br>";
echo "<font color=black>萧晓月：那还等什么，我们出发吧。</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=24;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=472;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==472) {

echo "<font color=black>【到国子监找袁守诚】</font>"."<br>";
echo "<font color=black>萧晓月：</font>"."<font color=black>$name</font>"."<font color=black>大哥，我们现在应该到那里去呢？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：被飞贼事件拖延了我们不少时间，清清他们也许已经离开了长安城。袁守诚先生能知天地理，善晓鬼神情，未来事，过去事，观如月镜；知凶定吉，断死言生。我想到袁氏草堂一趟，或许袁先生会知道清清他们的下落。</font>"."<br>";
echo "<font color=black>萧晓月：那还等什么，我们出发吧。</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=24;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid==478) {
echo "<font color=black>【和金城郡南书生对话】</font>"."<br>";
echo "<font color=black>摊贩：小仙卿你们一行人是到那里去啊？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我们准备到嘉峪关。</font>"."<br>";
echo "<font color=black>摊贩：看在小仙卿常关照我生意的份上，我不得不提醒小仙卿，在饮马峪有马贼，小仙卿要多加小心。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：多谢提醒了，区区那么几个马贼，我还不放在眼里。</font>"."<br>";


//任务进程改变
$rwjc1=479;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="胆小书生";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==479) {

echo "<font color=black>【和金城郡南书生对话】</font>"."<br>";
echo "<font color=black>摊贩：小仙卿你们一行人是到那里去啊？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我们准备到嘉峪关。</font>"."<br>";
echo "<font color=black>摊贩：看在小仙卿常关照我生意的份上，我不得不提醒小仙卿，在饮马峪有马贼，小仙卿要多加小心。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：多谢提醒了，区区那么几个马贼，我还不放在眼里。</font>"."<br>";
//任务进程改变
$rwjc1=480;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="胆小书生";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//
} elseif ($rid==480) {

echo "<font color=black>【主线任务，暂到此处，后续敬请期待！！！】</font>"."<br>";
//银两加
$yl1=100000000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=6666666;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=481;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="胆小书生";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==481) {

echo "<font color=black>【主线任务，暂到此处，后续敬请期待！！！】</font>"."<br>";
//





} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}




?>