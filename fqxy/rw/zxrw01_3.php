<?php

if ($npcc==163) {
$npcname="渔夫李定";
if ($rid==291) {
echo "<font color=black>【泾水滨和李定谈谈】</font>"."<br>";
echo "<font color=black>李定：正是在下～少侠有何指教？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶你就是李定？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶你这里有没有活鲤鱼卖啊？我有急用！</font>"."<br>";
//银两加
$yl1=5000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=292;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊





} elseif ($rid==292) {
echo "<font color=black>【泾水滨和李定说话】</font>"."<br>";
echo "<font color=black>李定：活鲤鱼？要是平时，或许还有个三尾～五尾的～今天全在城里卖完了！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊？那你能不能帮忙再钓两条上来？</font>"."<br>";
//任务进程改变
$rwjc1=293;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==293) {
echo "<font color=black>【泾水滨和李定说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶我出十倍的价钱买！你就帮个忙吧！</font>"."<br>";
echo "<font color=black>李定：不是我不帮忙！不瞒你说～我们这里钓鱼有个规矩！每天不能超过十尾，今天已经够数，不能再钓了！</font>"."<br>";
//银两加
$yl1=5000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=294;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
//

} elseif ($rid==294) {
echo "<font color=black>【泾水滨和李定说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶啊？钓鱼还有这么多规矩啊？</font>"."<br>";
echo "<font color=black>李定：这鱼虾蟹贝都是水族，捕的多了，只怕泾水龙王怪罪呢！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶这．．那我自己来好了！</font>"."<br>";
//任务进程改变
$rwjc1=295;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊






} elseif ($rid==295) {


echo "<font color=black>【泾水滨继续钓鱼】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶问李兄，可否借钓竿给在下一用呢？</font>"."<br>";
echo "<font color=black>李定：这．．好吧．．你就在附近钓吧！用完后记得还我！（得到钓鱼竿）</font>"."<br>";
//银两加
$yl1=5000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=296;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==296) {
echo "<font color=black>【泾水滨继续钓鱼】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶问李兄，可否借钓竿给在下一用呢？</font>"."<br>";
echo "<font color=black>李定：这．．好吧．．你就在附近钓吧！用完后记得还我！（得到钓鱼竿）</font>"."<br>";



//最小值
//

//

//




} elseif ($rid==299) {


echo "<font color=black>【回高家庄农舍】</font>"."<br>";
echo "<font color=black>多谢李兄～鲤鱼我已经钓到了！鱼竿还给你！后会有期～</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=115;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//任务进程改变
$rwjc1=300;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="恢复药方";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==300) {
echo "<font color=black>【回高家庄农舍】</font>"."<br>";
echo "<font color=black>多谢李兄～鲤鱼我已经钓到了！鱼竿还给你！后会有期～</font>"."<br>";

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




} elseif ($rid==316) {







} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}





//扫地道童
} elseif ($npcc==202) {
$npcname="扫地道童";
if ($rid==316) {
echo "<font color=black>【方寸山小院和晓风说话】</font>"."<br>";
echo "<font color=black>扫地小童∶知者不言．．言者不知．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶小道长～请问清风道长在吗？</font>"."<br>";
echo "<font color=black>扫地小童∶道可道．．非常道．． </font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶小道长，我们是．． </font>"."<br>";
echo "<font color=black>扫地小童∶名可名．．非常名 </font>"."<br>";
//银两加
$yl1=200000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");



//任务进程改变
$rwjc1=317;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="清风道长";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变







} elseif ($rid==317) {
echo "<font color=black>【方寸山小院和晓风说话】</font>"."<br>";
echo "<font color=black>扫地小童∶知者不言．．言者不知．．</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶小道长～请问清风道长在吗？</font>"."<br>";
echo "<font color=black>扫地小童∶道可道．．非常道．． </font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶小道长，我们是．． </font>"."<br>";
echo "<font color=black>扫地小童∶名可名．．非常名 </font>"."<br>";



//最小值
//

//

//







} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}








//清风道长
} elseif ($npcc==204) {
$npcname="清风道长";
if ($rid==331) {

echo "<font color=black>【方寸山练功场和大胡子道士说话】</font>"."<br>";
echo "<font color=black>萧晓月∶你不想继续出家，何不还俗归乡，这样实在太难看了～</font>"."<br>";
echo "<font color=black>大胡子道士∶俺能回去早就回去了！</font>"."<br>";
echo "<font color=black>萧晓月∶此话怎讲？</font>"."<br>";
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");




//任务进程改变
$rwjc1=332;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="方寸奇遇";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊











} elseif ($rid==332) {
echo "<font color=black>【方寸练功室和清风道长谈谈】</font>"."<br>";
echo "<font color=black>清风道长∶贫道是道家清修之人，从不过问外界之俗事，三位请回吧！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶道长此言差矣，出家人降魔卫道本天经地义，何以是外界的俗事呢？</font>"."<br>";
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=333;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="方寸奇遇";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==333) {
echo "<font color=black>【方寸练功室和清风道长谈谈】</font>"."<br>";
echo "<font color=black>清风道长∶嗯．．．好～只要施主答应替贫道做一件事，贫道就答应你下山收妖！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶只要是不伤天害理的事我小铃铛一定办到！</font>"."<br>";

//任务进程改变
$rwjc1=334;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="方寸奇遇";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==334) {
echo "<font color=black>【方寸练功室和清风道长谈谈】</font>"."<br>";
echo "<font color=black>清风道长∶你放心～是做好事！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶那就好办～！</font>"."<br>";
echo "<font color=black>清风道长∶呵呵呵～好～太好了！晓风，去把金丹和道袍拿出来！</font>"."<br>";
echo "<font color=black>晓风∶是．．！</font>"."<br>";
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=335;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="方寸奇遇";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==335) {
echo "<font color=black>【方寸练功室和清风道长谈谈】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶道长～莫非您是要．．？</font>"."<br>";
echo "<font color=black>清风道长∶替你焚香更衣啊！你得在我这出家当道士！</font>"."<br>";
echo "<font color=black>三人齐声道∶那有这种事！？</font>"."<br>";

//任务进程改变
$rwjc1=336;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="方寸奇遇";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==336) {
echo "<font color=black>【方寸练功室和清风道长谈谈】</font>"."<br>";
echo "<font color=black>清风道长∶既然施主答应了，就由不得你不依！</font>"."<br>";
echo "<font color=black>清风道长∶哦！何必留恋凡尘呢？当道士只要把这颗金丹吃下去就行了，让你忘掉现在所有的烦恼！</font>"."<br>";
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=337;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="方寸奇遇";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==337) {
echo "<font color=black>【方寸练功室和清风道长谈谈】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶这是什么条件？我才不干我还没娶老婆咧！</font>"."<br>";
echo "<font color=black>清风道长∶愚蠢～愚蠢！清心悟道的人死后才不会下地狱，还可以到西方极乐世界，有何不好？</font>"."<br>";

//任务进程改变
$rwjc1=338;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="方寸奇遇";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊




} elseif ($rid==338) {


echo "<font color=black>【往方寸练功室方向离开】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶您的好意我心领了！这种好事就留给您自己吧～现在的生活我自己很满意！不必麻烦您了～再见！</font>"."<br>";

//快速任务
$ydx=10;//移动坐标x
$ydy=9;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=339;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="方寸奇遇";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==339) {

echo "<font color=black>【往方寸练功室方向离开】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶您的好意我心领了！这种好事就留给您自己吧～现在的生活我自己很满意！不必麻烦您了～再见！</font>"."<br>";



//快速任务
$ydx=10;//移动坐标x
$ydy=9;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


















} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}










//
} elseif ($npcc==143) {
$npcname="兵马俑";
if ($rid==373) {
echo "<font color=black>【兵马俑阵和兵马俑说话】</font>"."<br>";
echo "<font color=black>兵马俑∶来者何人？报上名来！</font>"."<br>";
echo "<font color=black>清清∶我就是清清！你们快将霜儿姐姐放了！</font>"."<br>";
echo "<font color=black>兵马俑∶是～清小姐请随我们来，长老已恭候多时了</font>"."<br>";


//任务进程改变
$rwjc1=374;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==374) {



echo "<font color=black>【兵马俑阵和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶岂有此理，通通给我让开！本少爷要过去，谁也别想拦住我！</font>"."<br>";
echo "<font color=black>兵马俑∶～擅闯者、杀无赦！</font>"."<br>";
//经验加
$jy=150000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=375;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="天法长老";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==375) {

echo "<font color=black>【兵马俑阵和萧晓月说话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>∶岂有此理，通通给我让开！本少爷要过去，谁也别想拦住我！</font>"."<br>";
echo "<font color=black>兵马俑∶～擅闯者、杀无赦！</font>"."<br>";



//最小值
//

//

//



} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}




//
} elseif ($npcc==20) {
$npcname="李白(活动传送)";
if ($rid==392) {

echo "<font color=black>【十字街头和萧晓月说话】</font>"."<br>";
echo "<font color=black>李白：小仙卿～看你两眼无神，神情恍惚～想必是又遇到烦心事了！</font>"."<br>";
echo "<font color=black>萧晓月：唉～～说来话长！</font>"."<font color=black>$name</font>"."<font color=black>大哥～</font>"."<font color=black>$name</font>"."<font color=black>大哥～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：恩？怎么了？</font>"."<br>";
echo "<font color=black>萧晓月：</font>"."<font color=black>$name</font>"."<font color=black>大哥～～你在想什么呢，诗仙老人家问你话呢？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哎呀～失礼了！惭愧！（萧晓月低声道：如果被带走的是我，你也会如此担心吗？）</font>"."<br>";
echo "<font color=black>李白：小仙卿不必如此着急，所谓守得云开见月明～一切自有定数！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：定数？多谢老人家指点！</font>"."<br>";

//任务进程改变
$rwjc1=393;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="寻找清清";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==393) {

echo "<font color=black>【十字街头和萧晓月说话】</font>"."<br>";
echo "<font color=black>李白：小仙卿～看你两眼无神，神情恍惚～想必是又遇到烦心事了！</font>"."<br>";
echo "<font color=black>萧晓月：唉～～说来话长！</font>"."<font color=black>$name</font>"."<font color=black>大哥～</font>"."<font color=black>$name</font>"."<font color=black>大哥～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：恩？怎么了？</font>"."<br>";
echo "<font color=black>萧晓月：</font>"."<font color=black>$name</font>"."<font color=black>大哥～～你在想什么呢，诗仙老人家问你话呢？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哎呀～失礼了！惭愧！（萧晓月低声道：如果被带走的是我，你也会如此担心吗？）</font>"."<br>";
echo "<font color=black>李白：小仙卿不必如此着急，所谓守得云开见月明～一切自有定数！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：定数？多谢老人家指点！</font>"."<br>";

//最小值
//

//

//




} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}



//
} elseif ($npcc==84) {
$npcname="老板娘";
if ($rid==418) {
echo "<font color=black>【和喜福会的老板娘对话】</font>"."<br>";
echo "<font color=black>老板娘：多俊俏的小哥哥，不知来此有何贵干？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：昨夜我们追一个飞贼，到了喜福会，却让飞贼逃走了，不知老板娘昨夜是否听到一些声响或者看到可疑人物经过呢？</font>"."<br>";
echo "<font color=black>老板娘：呜～～看这小哥哥说得～～难不成你怀疑奴家就是那个飞贼～呜～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：老板娘国色天香，温婉柔顺，怎会是那无耻的飞贼呢～～</font>"."<br>";
echo "<font color=black>呵呵，小哥哥真会说话～</font>"."<br>";
//经验加
$jy=150000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=419;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==419) {

echo "<font color=black>【往白虎大街追萧晓月】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：那夫人昨夜是否听到什么不同寻常声响？</font>"."<br>";
echo "<font color=black>老板娘：奴家想不起来了，如果俊俏的小哥哥陪我喝上两杯，或许奴家会记起来。</font>"."<br>";
echo "<font color=black>萧晓月：不要脸，一把年纪还卖弄风骚～</font>"."<br>";
echo "<font color=black>老板娘：哟～奴家还是很要面子的。不象有些人，孤男寡女共处一室，还老缠着别人。</font>"."<br>";
echo "<font color=black>萧晓月：你～～哼！(萧晓月怒气冲冲跑到街上去了)</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=420;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="追踪飞贼";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==420) {
echo "<font color=black>【往白虎大街追萧晓月】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：那夫人昨夜是否听到什么不同寻常声响？</font>"."<br>";
echo "<font color=black>老板娘：奴家想不起来了，如果俊俏的小哥哥陪我喝上两杯，或许奴家会记起来。</font>"."<br>";
echo "<font color=black>萧晓月：不要脸，一把年纪还卖弄风骚～</font>"."<br>";
echo "<font color=black>老板娘：哟～奴家还是很要面子的。不象有些人，孤男寡女共处一室，还老缠着别人。</font>"."<br>";
echo "<font color=black>萧晓月：你～～哼！(萧晓月怒气冲冲跑到街上去了)</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务


} elseif ($rid==436) {


echo "<font color=black>【和喜福会的老板娘对话】</font>"."<br>";
echo "<font color=black>老板娘：哟～是小仙卿啊～今天一个人过来了，是不是特地来陪奴家喝上两杯的啊～你决心将计就计，笑道：空有美酒佳肴，却无丝竹歌舞，再美味的东西都无法下咽啊！</font>"."<br>";
echo "<font color=black>老板娘：想不到小仙卿还是一个文雅之士。来来来～～姑娘们都出来吧，为我们的贵客舞上一曲～～！</font>"."<br>";

//任务进程改变
$rwjc1=437;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==437) {


echo "<font color=black>【和喜福会二楼的舞娘对话】</font>"."<br>";
echo "<font color=black>板娘：来来来，陪奴家喝多一杯嘛～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好好好～喝～(你一边敷衍老板娘一边仔细看着舞娘。好一会过去了，你发现排最左边的舞娘少了一个耳坠珠子。你乘大家不留意，把耳坠珠子丢到那个舞娘的脚边，然后喊了起来)</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小心～(舞娘们一惊，全都停了下来)</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=438;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==438) {


echo "<font color=black>【和喜福会二楼的舞娘对话】</font>"."<br>";
echo "<font color=black>板娘：来来来，陪奴家喝多一杯嘛～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：好好好～喝～(你一边敷衍老板娘一边仔细看着舞娘。好一会过去了，你发现排最左边的舞娘少了一个耳坠珠子。你乘大家不留意，把耳坠珠子丢到那个舞娘的脚边，然后喊了起来)</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小心～(舞娘们一惊，全都停了下来)</font>"."<br>";

//最小值
//

//

//















} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}



} elseif ($npcc==463) {
$npcname="太守";
if ($rid==427) {
echo "<font color=black>【衙门公堂和官府太守对话】</font>"."<br>";
echo "<font color=black>衙役：大人，快醒醒～升堂啦～</font>"."<br>";
echo "<font color=black>太守：这么晚了还升什么堂，老子要睡觉！</font>"."<br>";
echo "<font color=black>衙役：大人～～我已经把困扰大人已久的飞贼抓回来了！</font>"."<br>";
echo "<font color=black>太守：啊？那可太好了！那班混蛋，害的老子整整三个月不得安宁，今天我要好好教训他们！</font>"."<br>";


//任务进程改变
$rwjc1=428;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==428) {

echo "<font color=black>【衙门公堂和官府太守对话】</font>"."<br>";
echo "<font color=black>太守：大胆飞贼，还不快快从实招来，偷来的东西都藏在那里了？是否还有党羽？</font>"."<br>";
echo "<font color=black>萧晓月：交代什么？我没什么好交代的。</font>"."<br>";
echo "<font color=black>太守：女飞贼，死到临头还这么嘴硬～来人啊～给我用刑～</font>"."<br>";
echo "<font color=black>萧晓月：你敢？你不看看我是谁？</font>"."<br>";
echo "<font color=black>太守：本官当然清楚，你是女飞贼～</font>"."<br>";
//经验加
$jy=180000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=429;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==429) {


echo "<font color=black>【衙门公堂和官府太守对话】</font>"."<br>";
echo "<font color=black>萧晓月：本小姐乃振远镖局萧总镖头的千金，朝廷总管殷开山是我叔叔～～你敢动我一条毫毛，我马上让你的脑袋搬家！</font>"."<br>";
echo "<font color=black>太守：……大胆！</font>"."<br>";
echo "<font color=black>衙役：大人，那泼妇所说的如果是真的，我们可惹不起，不如先审那个呆头呆脑的家伙。(衙役用眼瞄了你一眼)</font>"."<br>";
echo "<font color=black>太守转向你：告诉本官，你是何方人士，家中还有何人？</font>"."<br>";

//任务进程改变
$rwjc1=430;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==430) {

echo "<font color=black>【衙门公堂和官府太守对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：小人</font>"."<font color=black>$name</font>"."<font color=black>乃东海村人士，从小便无父母，也无兄弟。</font>"."<br>";
echo "<font color=black>太守：那好极了，来人啊，给我打二十大板！</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：啊！大人，在打草民之前可否先听草民一言，否则这事情说出去大人难以服众。</font>"."<br>";
echo "<font color=black>太守：好吧，给你一个辩解的机会～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我们看到喜福会老板娘鬼鬼祟祟地把一个包袱藏进了秘道，我们刚把包袱从秘道拿出来就被衙役带到这里了</font>"."<br>";
//经验加
$jy=180000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=431;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==431) {

echo "<font color=black>【和白虎大街李捕头对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：大人，你想想，如果我们是飞贼，还会毫无反抗给衙役带回来吗？请大人放了我们，作为交换条件，我可以为你抓回真正的飞贼。</font>"."<br>";
echo "<font color=black>太守：哪知道你是不是随便说说，欺骗本官以此来脱身呢？除非～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：除非什么～</font>"."<br>";
echo "<font color=black>太守：把那个刁蛮的小妞留下来，如果两天内你没有把飞贼抓回来，我就唯她是问！</font>"."<br>";
echo "<font color=black>萧晓月：好，我留下！</font>"."<font color=black>$name</font>"."<font color=black>大哥你把飞贼抓回来，还我们清白！去门口找李捕头</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=11;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//任务进程改变
$rwjc1=432;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==432) {

echo "<font color=black>【和白虎大街李捕头对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：大人，你想想，如果我们是飞贼，还会毫无反抗给衙役带回来吗？请大人放了我们，作为交换条件，我可以为你抓回真正的飞贼。</font>"."<br>";
echo "<font color=black>太守：哪知道你是不是随便说说，欺骗本官以此来脱身呢？除非～～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：除非什么～</font>"."<br>";
echo "<font color=black>太守：把那个刁蛮的小妞留下来，如果两天内你没有把飞贼抓回来，我就唯她是问！</font>"."<br>";
echo "<font color=black>萧晓月：好，我留下！</font>"."<font color=black>$name</font>"."<font color=black>大哥你把飞贼抓回来，还我们清白！去门口找李捕头</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=11;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务
//最小值
//

//

//




} elseif ($rid==460) {

echo "<font color=black>【衙门公堂和官府太守对话】</font>"."<br>";
echo "<font color=black>太守：哦？还真的抓了个人回来，速度还不错嘛～你是不是随便从街边抓个人回来顶罪的？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：压低声音无奈说：我又不是你，怎么会做如此糊涂的事情。</font>"."<br>";
echo "<font color=black>太守：你说什么呢？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我是说，大人英明神武，我怎么敢随便抓个人来唬弄大人呢</font>"."<br>";
echo "<font color=black>太守：算你聪明～各衙役～升堂～～(萧晓月被押解到公堂之上)</font>"."<br>";

//任务进程改变
$rwjc1=461;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==461) {
echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>太守：堂下所跪何人，还不快快报上名来～</font>"."<br>";
echo "<font color=black>凌月：……（太守见凌月毫无想搭理的样子，一怒，抓起惊堂木往案上重重敲下去）</font>"."<br>";
echo "<font color=black>太守：刁妇，本官问你问题呢？</font>"."<br>";
echo "<font color=black>凌月：大人在问我话？我还以为大人得了失心疯，在自言自语呢！</font>"."<br>";
echo "<font color=black>太守：大～胆！竟敢无视本官的存在，我看你是活得不耐烦了</font>"."<br>";
echo "<font color=black>凌月：唉～奴家自小眼睛就不好，只能看到人，一些没心没肺的动物就是看不到啊～</font>"."<br>";
echo "<font color=black>太守：你～你你你～～</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");


//任务进程改变
$rwjc1=462;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==462) {
echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>凌月：你～你～你~你什么你，朝廷还真腐败，只要出得起钱，连大舌头也可以做官。</font>"."<br>";
echo "<font color=black>太守：你这刁妇，竟敢公然侮辱本官！</font>"."<br>";
echo "<font color=black>衙役：大人……不要和她一般见识，开始审案吧。</font>"."<br>";
echo "<font color=black>太守：本官问你，上个月初五你做了什么？</font>"."<br>";
echo "<font color=black>凌月：上个月初五，那么远的事情，谁还记得。</font>"."<br>";
echo "<font color=black>太守：让本官提提你，上个月初五城郊陈员外家的银子被盗～</font>"."<br>";
//任务进程改变
$rwjc1=463;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==463) {
echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>凌月：吓？那是银子啊，我还以为是石头呢，这下亏大了，我把那些石头全送人了！我就说嘛，那有人会三更半夜起来埋石头，又不是有病。再说，你看他年纪这么大了，还要每隔半个月就拉这么重的东西到后院埋，多辛苦啊。贱妾的父亲自小就教导贱妾，要帮助老弱病残，所以贱妾就大发善心，帮他减轻一下负担。</font>"."<br>";
echo "<font color=black>太守：这样说来，你还真是善良的人呢～～</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=464;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
//

} elseif ($rid==464) {
echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>太守：那城北李员外家十石大米被窃也是你们所为？</font>"."<br>";
echo "<font color=black>凌月：冤枉啊，大人!那天小的到茶楼喝茶，听到李员外对友人说起灾民，还说家里备有很多大米。想必这些大米是准备捐献给灾民的，做好事刻不容缓，所以我就帮李员外把大米运到灾区，现在灾民可把李员外当成再生父母了，我这是为李员外积福啊！难不成李员外是准备囤积大米，以谋暴利，那可是杀头的大罪啊～～</font>"."<br>";
//任务进程改变
$rwjc1=465;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==465) {

echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>太守：你还真能辩～本官再问你，张员外家一万两黄金被盗也是你做的好事？</font>"."<br>";
echo "<font color=black>凌月：盗？我可不喜欢这个词，我只是没问过他，私自到他家借了点钱而已。谁叫张员外逢人便说他家财产吃几辈子都吃不完，我就问他借那么一点点，就这般没完没了，真怀疑他家的财产是不是真的可以吃上几辈子。</font>"."<br>";
echo "<font color=black>太守∶住口！寡廉鲜耻之徒，你们当真没救了！</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=466;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==466) {
echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>凌月：哎哟，我们就做了那么几件无关痛痒的事情就成了寡廉鲜耻之徒。大人买官卖官，压榨百姓钱财，强占民女，那大人又算是什么呢？</font>"."<br>";
echo "<font color=black>太守：你～～你～～</font>"."<br>";
echo "<font color=black>衙役：大人…别和这些人呕气，来～喝口茶，顺顺气。</font>"."<br>";
echo "<font color=black>太守：前日南城客栈古董商的古董被盗也是你干的吧……</font>"."<br>";
echo "<font color=black>凌月：别乱扣罪名，这我可没干过～～～</font>"."<br>";
//任务进程改变
$rwjc1=467;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
//

} elseif ($rid==467) {
echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>太守：不得你不承认，来人啊～传证人～</font>"."<br>";
echo "<font color=black>路人：就是她～我那天看到她偷包袱时也是穿这身衣服，一定没错。</font>"."<br>";
echo "<font color=black>古董商：我的包袱是被一黑衣人盗的，包袱里面少了个炼妖壶。</font>"."<br>";
echo "<font color=black>太守：现在人证物证都齐全了，你还不快快认罪。</font>"."<br>";
echo "<font color=black>凌月：我还以为是什么，就那破壶子。我出道以来干的票子不少，今日竟然栽在破壶子上，还真是不甘～～太守：既然你都认罪了，来人啊，把这女子押到大牢去。</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=468;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==468) {
echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>太守：如今真相大白，也就证明你们是清白的，现在就还你们自由～你们可以离去了。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：晓月你还好吧，在牢里没受委屈吧？</font>"."<br>";
echo "<font color=black>萧晓月：那个欺软怕硬的狗官听了我的身世，那敢动我一条毫毛。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：没事就好，我们走吧。</font>"."<br>";
echo "<font color=black>萧晓月：稍等～狗官，我们的赏银呢？我们帮你抓到飞贼，应该有赏银吧？</font>"."<br>";
echo "<font color=black>太守：有的，有的，给那刁妇胡搞蛮缠一番，本官都忘记有这东西了。</font>"."<br>";
//任务进程改变
$rwjc1=469;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==469) {
echo "<font color=black>【在衙门听审】</font>"."<br>";
echo "<font color=black>太守：你们等等，我算算应该给你们多少？官府出了五千两悬赏，再加上各个员外出的钱…合计有一万两银子～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：哇，白花花的银子，你们赶快投入我温暖的怀抱吧～</font>"."<br>";
echo "<font color=black>太守：扣除各项税收七百两，还有在此次案件受伤衙役的抚恤金两千两～定做牌匾花了五十两银子～还有……</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：你直说我可以拿到多少两就好～</font>"."<br>";
echo "<font color=black>太守：扣除了所有费用，你还欠本官五十两银子。</font>"."<br>";
//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");
//任务进程改变
$rwjc1=470;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==470) {

echo "<font color=black>【衙门公堂和萧晓月对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：啊？怎么会～我还要给你钱啊？</font>"."<br>";
echo "<font color=black>太守：晓月姑娘这两天，吃得是山珍海味，不仅这样，晓月姑娘还烧了官衙部分的牢房，打伤了7个衙役……</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>很无奈望着萧晓月：晓月……</font>"."<br>";
echo "<font color=black>太守：你们交出五十两就可以走了～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：你刚刚说那个牌匾值五十两银子对不，我们把牌匾卖给你，这样我们就没欠你钱了～晓月，我们走～</font>"."<br>";
//任务进程改变
$rwjc1=471;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==471) {

echo "<font color=black>【衙门公堂和萧晓月对话】</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：啊？怎么会～我还要给你钱啊？</font>"."<br>";
echo "<font color=black>太守：晓月姑娘这两天，吃得是山珍海味，不仅这样，晓月姑娘还烧了官衙部分的牢房，打伤了7个衙役……</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>很无奈望着萧晓月：晓月……</font>"."<br>";
echo "<font color=black>太守：你们交出五十两就可以走了～</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：你刚刚说那个牌匾值五十两银子对不，我们把牌匾卖给你，这样我们就没欠你钱了～晓月，我们走～</font>"."<br>";

//最小值
//

//

//












} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}




//
} elseif ($npcc==120) {
$npcname="雾渊道长";
if ($rid==435) {

echo "<font color=black>【到喜福会二楼调查】</font>"."<br>";
echo "<font color=black>雾渊道长：小仙卿前来，不知所为何事？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我听说道长有一神奇之物可在黑暗中发出蓝光，我想问道长要一些</font>"."<br>";
echo "<font color=black>雾渊道长：小仙卿所说的神奇之物，只是不过是一些普通的磷粉罢了。不知小仙卿要此物有何用</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：不瞒道长，我遭人诬陷，现唯一解救的方法就是找到真正的犯人，如有了道长的磷粉，我相信可以很快追捕到犯人。</font>"."<br>";
echo "<font color=black>雾渊道长：原来如此这里有一些磷粉，就赠予小仙卿。去喜福会二楼</font>"."<br>";


//快速任务
$ydx=1;//移动坐标x
$ydy=49;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");

//物品加
$wpdz1[]="闪光磷粉";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=265;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加



//任务进程改变
$rwjc1=436;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="调查真相";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==436) {
echo "<font color=black>【到喜福会二楼调查】</font>"."<br>";
echo "<font color=black>雾渊道长：小仙卿前来，不知所为何事？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：我听说道长有一神奇之物可在黑暗中发出蓝光，我想问道长要一些</font>"."<br>";
echo "<font color=black>雾渊道长：小仙卿所说的神奇之物，只是不过是一些普通的磷粉罢了。不知小仙卿要此物有何用</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：不瞒道长，我遭人诬陷，现唯一解救的方法就是找到真正的犯人，如有了道长的磷粉，我相信可以很快追捕到犯人。</font>"."<br>";
echo "<font color=black>雾渊道长：原来如此这里有一些磷粉，就赠予小仙卿。去喜福会二楼</font>"."<br>";


//快速任务
$ydx=1;//移动坐标x
$ydy=49;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务




} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}




//
} elseif ($npcc==466) {
$npcname="算命先生袁守诚";
if ($rid==472) {
echo "<font color=black>【和袁氏草堂袁守诚对话】</font>"."<br>";
echo "<font color=black>袁守诚：小仙卿今日前来，不知所为何事？</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：不久之前，清清姑娘被天法国的项长老带走，我十分担心她现在的情况。不知道先生是否有办法可以助我寻得她的行踪呢？</font>"."<br>";


//任务进程改变
$rwjc1=473;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==473) {
echo "<font color=black>【到长安城西寻找清清的下落】</font>"."<br>";
echo "<font color=black>袁守诚：此事不难，老夫开坛为作法，片刻便可知道清清姑娘的下落。(袁守诚在法案上摆了一盘清水，燃起黄符)</font>"."<br>";
echo "<font color=black>袁守诚大叱一声：现～～嗯～老夫已经知道清清姑娘的行踪了，你们只要往长安城西去寻找，必有所获。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：多谢先生。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=14;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务

//经验加
$jy=220000;	
include("./pz/ini_pzz023.php");

//任务进程改变
$rwjc1=474;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="糊涂太守";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==474) {
echo "<font color=black>【到长安城西寻找清清的下落】</font>"."<br>";
echo "<font color=black>袁守诚：此事不难，老夫开坛为作法，片刻便可知道清清姑娘的下落。(袁守诚在法案上摆了一盘清水，燃起黄符)</font>"."<br>";
echo "<font color=black>袁守诚大叱一声：现～～嗯～老夫已经知道清清姑娘的行踪了，你们只要往长安城西去寻找，必有所获。</font>"."<br>";
echo "<font color=black>$name</font>"."<font color=black>：多谢先生。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=14;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务



} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}


} elseif ($npcc==697) {
$npcname="采集仙露";

if ($rid==55) {
//快速任务
$ydx=1;//移动坐标x
$ydy=22;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务	
	
//物品加
$wpdz1[]="仙露";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=258;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加


} else {
echo "<font color=black>纳尼？？<(￣3￣)> 居然找不到页面了请重试</font>"."<br>";
//
}














} else {


} 






?>