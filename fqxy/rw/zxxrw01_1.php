<?php
if ($npcc==20) {
	
$nname="李白";	
	
if($rid==1){	
echo "<font color=black>".$nname."：小仙卿，老夫看你仙风道骨，背后有一道淡淡的仙气，理应在天上处理天庭杂务，莫非是天仙下凡，体察民间疾苦？</font>"."<br>";

echo "<font color=black>".$name."：啊？李白老夫子，我只是一介武夫，并不是神仙啊！</font>"."<br>";

//任务进程改变
$rwjc1=2;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif($rid==2){
echo "<font color=black>".$nname."：不应该不应该，你快去师门祖师面前问问，是不是忘了把你列入仙班了！</font>"."<br>";
//任务进程改变
$rwjc1=3;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=1;//移动坐标x
$ydy=71;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif($rid==3){
echo "<font color=black>".$nname."：不应该不应该，你快去师门祖师面前问问，是不是忘了把你列入仙班了！</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=71;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif($rid==4){
	
} elseif($rid==5){





} else{

echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}


} elseif ($npcc==800) {
$nname="师门祖师";	
if($rid==3){	

echo "<font color=black>".$name."：弟子拜见祖师爷！</font>"."<br>";
echo "<font color=black>".$nname."：噢？".$name."你来了，所为何事？</font>"."<br>";

//任务进程改变
$rwjc1=4;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif($rid==4){
echo "<font color=black>".$name."：弟子初到长安之时，幸得师门收留，传授除魔斩妖的道理。弟子谨记师门教诲，外出历劫四方，拯救无数黎明百姓，论修行，弟子是否应该……应该……位列仙班？</font>"."<br>";
echo "<font color=black>".$nname."：呵呵，原来为的此事。实不相瞒，如今阐教和截教再为封神之事的而纷争不绝，封神一事迟迟未决。你去天宫一躺了解下情况，看能不能调停封神之争，帮助能人异士顺利成仙。</font>"."<br>";

//任务进程改变
$rwjc1=5;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=23;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif($rid==5){
echo "<font color=black>".$name."：弟子初到长安之时，幸得师门收留，传授除魔斩妖的道理。弟子谨记师门教诲，外出历劫四方，拯救无数黎明百姓，论修行，弟子是否应该……应该……位列仙班？</font>"."<br>";
echo "<font color=black>".$nname."：呵呵，原来为的此事。实不相瞒，如今阐教和截教再为封神之事的而纷争不绝，封神一事迟迟未决。你去天宫一躺了解下情况，看能不能调停封神之争，帮助能人异士顺利成仙。</font>"."<br>";

//快速任务
$ydx=23;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif($rid==4){
	
} elseif($rid==5){





} else{

echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}





} elseif ($npcc==249) {
$nname="接引仙子";	
if($rid==5){	

echo "<font color=black>".$nname."：小仙卿前来天宫，可是为封神一事？</font>"."<br>";

echo "<font color=black>".$name."：仙人果然神机妙算。不知仙人可否详尽道来封神大战一事？</font>"."<br>";

//任务进程改变
$rwjc1=6;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif($rid==6){
echo "<font color=black>".$nname."：（介绍阐教，截教）。阐教李天王在天王殿，截教李公明在通明宫，小仙卿可以加入其中一教，便可得道成仙。</font>"."<br>";


//任务进程改变
$rwjc1=7;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif($rid==7){
echo "<font color=black>".$nname."：小仙卿骨骼精奇，可否愿意助我教完成封神大业，到时定会为小仙卿留一仙席。</font>"."<br>";
echo "<font color=black>".$name."：愿为效劳！</font>"."<br>";


//任务进程改变
$rwjc1=8;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif($rid==8){
echo "<font color=black>".$nname."：如今凡间群妖四起，小仙卿去平定各方妖怪（击杀通天塔10层终极BOSS）</font>"."<br>";
//任务进程改变
$rwjc1=9;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

	
} elseif($rid==9){

echo "<font color=black>".$nname."：如今凡间群妖四起，小仙卿去平定各方妖怪（击杀通天塔10层终极BOSS）</font>"."<br>";

} elseif($rid==10){
echo "<font color=black>".$nname."：不错不错。开封广场内通天塔内妖气冲天，其中有一妖怪幻化成【圣婴大王】，更是到处诋毁我教，小仙卿去教训一下它。（击败通天塔15层【圣婴大王】×1）</font>"."<br>";
//任务进程改变
$rwjc1=11;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif($rid==11){
echo "<font color=black>".$nname."：不错不错。开封广场内通天塔内妖气冲天，其中有一妖怪幻化成【圣婴大王】，更是到处诋毁我教，小仙卿去教训一下它。（击败通天塔15层【圣婴大王】×1）</font>"."<br>";



} elseif($rid==12){
echo "<font color=black>".$nname."：你回来的正是时候，《封神榜》自上次阐截大战后便化成碎片，刚才有消息传来其中一块碎片落入了昆仑山区烈炽灵狐手中，你速速前去取回。</font>"."<br>";
//任务进程改变
$rwjc1=13;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=1;//移动坐标x
$ydy=104;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif($rid==13){
echo "<font color=black>".$nname."：你回来的正是时候，《封神榜》自上次阐截大战后便化成碎片，刚才有消息传来其中一块碎片落入了昆仑山区烈炽灵狐手中，你速速前去取回。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=104;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务






} elseif($rid==22){
echo "<font color=black>".$nname."：小仙卿果然功夫了得。但是接下来的任务可不是考功夫那么简单哦！方寸山瑶台的老子是鸿钧老祖大弟子的化身，他手中也有一块封神榜碎片，只赠与有缘人。</font>"."<br>";

//任务进程改变
$rwjc1=23;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=10;//移动坐标x
$ydy=4;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif($rid==23){
echo "<font color=black>".$nname."：小仙卿果然功夫了得。但是接下来的任务可不是考功夫那么简单哦！方寸山瑶台的老子是鸿钧老祖大弟子的化身，他手中也有一块封神榜碎片，只赠与有缘人。</font>"."<br>";

//快速任务
$ydx=10;//移动坐标x
$ydy=4;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务


} elseif($rid==59){
echo "<font color=black>".$nname."：完了完了，瑶池圣母重现，欺骗玉帝吃下了有毒的蟠桃，并扬言要灭世。现在玉帝被邪灵入侵，仙灵被带到了【通天塔】30层，你快去救他。（击败【通天塔】30层怪物）</font>"."<br>";
//任务进程改变
$rwjc1=60;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=78;//移动坐标x
$ydy=59;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif($rid==60){
echo "<font color=black>".$nname."：完了完了，瑶池圣母重现，欺骗玉帝吃下了有毒的蟠桃，并扬言要灭世。现在玉帝被邪灵入侵，仙灵被带到了【通天塔】30层，你快去救他。（击败【通天塔】30层怪物）</font>"."<br>";

//快速任务
$ydx=78;//移动坐标x
$ydy=59;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif($rid==61){
echo "<font color=black>".$nname."：玉帝告诉了你盘古封印的秘密，并命你去“伏羲阵”处击败【如来佛祖】x10。（玩家击败【如来佛祖】x10）</font>"."<br>";
//任务进程改变
$rwjc1=62;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=23;//移动坐标x
$ydy=3;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif($rid==62){
echo "<font color=black>".$nname."：玉帝告诉了你盘古封印的秘密，并命你去“伏羲阵”处击败【如来佛祖】x10。（玩家击败【如来佛祖】x10）</font>"."<br>";
//任务进程改变
$rwjc1=63;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif($rid==63){
echo "<font color=black>".$nname."：玉帝告诉了你盘古封印的秘密，并命你去“伏羲阵”处击败【如来佛祖】x10。（玩家击败【如来佛祖】x10）</font>"."<br>";

//快速任务
$ydx=23;//移动坐标x
$ydy=3;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif($rid==64){
echo "<font color=black>".$nname."：修补成功：只见立刻风气云涌，大地间响起了【盘古族咒】，瑶池圣母痛不欲生，请立即前往菩提师祖处领取仙20解封丹</font>"."<br>";
//任务进程改变
$rwjc1=65;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=10;//移动坐标x
$ydy=4;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif($rid==65){
echo "<font color=black>".$nname."：修补成功：只见立刻风气云涌，大地间响起了【盘古族咒】，瑶池圣母痛不欲生，请立即前往菩提师祖处领取仙20解封丹</font>"."<br>";


//快速任务
$ydx=10;//移动坐标x
$ydy=4;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务









} else{

echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}


} elseif ($npcc==225) {
$npcname="烈炽灵狐";
if ($rid==13) {
echo "<font color=black>烈炽灵狐：大胆凡人竟敢闯入我火焰山！</font>"."<br>"; 		
echo "<font color=black>$name</font>"."<font color=black>：我是奉？教之命前来取回封神榜碎片，快快交出方可饶你一命！</font>"."<br>";

//任务进程改变
$rwjc1=14;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==14) {

echo "<font color=black>烈炽灵狐：少废话，看我九味真火！（击败烈炽灵狐）</font>"."<br>";	

//任务进程改变
$rwjc1=15;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==15) {

echo "<font color=black>烈炽灵狐：少废话，看我九味真火！（击败烈炽灵狐）</font>"."<br>";	


} elseif ($rid==16) {


echo "<font color=black>烈炽灵狐：果然是仙界中人！我妖界亦非等闲之辈！看我分身术！（击败烈炽灵狐分身）</font>"."<br>";	

//任务进程改变
$rwjc1=17;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==17) {

echo "<font color=black>烈炽灵狐：少废话，看我九味真火！（击败烈炽灵狐分身）</font>"."<br>";	



} elseif ($rid==21) {


echo "<font color=black>烈炽灵狐：只见烈炽灵狐在地上奄奄一息，趁你不注意的时候在一溜青烟中消失了。</font>"."<br>";	

//任务进程改变
$rwjc1=22;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="159转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=23;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务


} elseif ($rid==22) {

echo "<font color=black>烈炽灵狐：只见烈炽灵狐在地上奄奄一息，趁你不注意的时候在一溜青烟中消失了。</font>"."<br>";	
//快速任务
$ydx=23;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务






















} else {
}


} elseif ($npcc==205) {

$npcname="菩提祖师(转职)";
if ($rid==23) {
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=85){	
echo "<font color=black>菩提祖师(转职):大胆想趁老夫睡着了偷我的锦囊是吧？（（百分之80失败）你吵醒了菩提祖师被送回了长安）</font>"."<br>"; 		

//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$ininame1=$ininame;
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} else {
echo "<font color=black>菩提祖师(转职):这里赠与你一颗【昊天神丹】祝你以后西游路上劈荆斩刺</font>"."<br>";	

//物品加
$wpdz1[]="【昊天神丹】（1级）";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=578;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加


//任务进程改变
$rwjc1=25;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变	
	
	
} 




} elseif ($rid==25) {


//调用zt.ini是否存在
include("./ini/zt_ini.php");
$wjdj=($iniFile->getItem('玩家信息','等级'));
if ($wjdj>=199) {
echo "<font color=black>菩提祖师(转职):$name</font>"."<font color=black>你可总算回来了！你西游的这段时间，大唐皇帝李世民竟不念我门曾经为大唐除尽妖魔，公然与我门为敌，大肆剿杀我门弟子。从现在起我门与大唐势不两立，你快去取下大唐皇帝李世民的首级！</font>"."<br>";

//任务进程改变
$rwjc1=26;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");

//快速任务
$ydx=1;//移动坐标x
$ydy=32;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务



} else {
echo "<font color=red>菩提祖师(转职):恭喜你！！你已完成了159转职任务(等级达到199后可来我这进行转职)</font>"."<br>";	

} 


} elseif ($rid==26) {



echo "<font color=black>菩提祖师(转职):$name</font>"."<font color=black>你可总算回来了！你西游的这段时间，大唐皇帝李世民竟不念我门曾经为大唐除尽妖魔，公然与我门为敌，大肆剿杀我门弟子。从现在起我门与大唐势不两立，你快去取下大唐皇帝李世民的首级！</font>"."<br>";
//快速任务
$ydx=1;//移动坐标x
$ydy=32;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务


} elseif ($rid==27) {
echo "<font color=black>".$npcname."：哈~哈~哈~干得不错！（只见师门祖师将李世民的灵窍吸入口中，慈祥的面孔瞬间变得狰狞。）天子自有灵气护体，果然只有凡人才能接近李世民。李世民，我夫君有救了。该死的还有".$name."你！</font>"."<br>";
echo "<font color=black>".$name."：师门祖师，你……</font>"."<br>";
//任务进程改变
$rwjc1=28;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊


} elseif ($rid==28) {
echo "<font color=black>".$nname."：你睁大眼睛看看我是谁！（师门祖师变成了一只人首蛇身的女妖怪）。</font>"."<br>";
echo "<font color=black>".$name."：原来是万年蛇妖！你竟敢冒充我祖师爷，骗我杀掉大唐圣君，今天我可饶不了你！</font>"."<br>";
//任务进程改变
$rwjc1=29;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==29) {
echo "<font color=black>".$nname."：你睁大眼睛看看我是谁！（师门祖师变成了一只人首蛇身的女妖怪）。</font>"."<br>";
echo "<font color=black>".$name."：原来是万年蛇妖！你竟敢冒充我祖师爷，骗我杀掉大唐圣君，今天我可饶不了你！</font>"."<br>";




} elseif ($rid==50) {
echo "<font color=black>".$name."：祖师你回来的正好，弟子我……</font>"."<br>";
echo "<font color=black>".$nname."：嘘~为师已经了解一切。家丑不可外扬，这里有颗【九转仙丹】，你吃下便可还阳。</font>"."<br>";
//任务进程改变
$rwjc1=51;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//物品加
$wpdz1[]="【九转仙丹】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=693;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加




} elseif ($rid==51) {

echo "<font color=black>".$nname."：大事不妙了大仙！</font>"."<br>";
echo "<font color=black>".$name."：又怎么了？</font>"."<br>";
echo "<font color=black>".$nname."：最近长安出现了一个叫“伏羲阵”的妖阵，很多百姓进去以后就疯疯癫癫，有的突发大病，久治不愈，他们就在回春药铺，大仙你法力高强，你快去救救他们吧。</font>"."<br>";
//任务进程改变
$rwjc1=52;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//快速任务
$ydx=1;//移动坐标x
$ydy=22;//移动坐标y
$ydfy=5000000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif ($rid==52) {
echo "<font color=black>".$nname."：大事不妙了大仙！</font>"."<br>";
echo "<font color=black>".$name."：又怎么了？</font>"."<br>";
echo "<font color=black>".$nname."：最近长安出现了一个叫“伏羲阵”的妖阵，很多百姓进去以后就疯疯癫癫，有的突发大病，久治不愈，他们就在回春药铺，大仙你法力高强，你快去救救他们吧。</font>"."<br>";

//快速任务
$ydx=1;//移动坐标x
$ydy=22;//移动坐标y
$ydfy=5000000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif ($rid==65) {

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=90){	
echo "<font color=black>菩提祖师(转职):大胆想趁老夫睡着了偷我的仙丹是吧？（（百分之80会被送往长安）</font>"."<br>"; 		

//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$ininame1=$ininame;
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} else {
echo "<font color=black>菩提祖师(转职):这里赠与你一颗【伏羲仙丹】祝你以后西游路上劈荆斩刺</font>"."<br>";	

//物品加
$wpdz1[]="【伏羲仙丹】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=973;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");
//物品加


//任务进程改变
$rwjc1=66;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变	
	
	
} 















} else {
echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}





} elseif ($npcc==1012) {

$npcname="万年蛇妖飞走消失";
if ($rid==30) {

echo "<font color=black>可恶，居然让万年蛇妖给逃跑了，我去天宫问个究竟。</font>"."<br>";
echo "<font color=black>".$name."：看来得去天宫太上老君处查明情况</font>"."<br>";
//任务进程改变
$rwjc1=31;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=23;//移动坐标x
$ydy=24;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务


} elseif ($rid==31) {
echo "<font color=black>可恶，居然让万年蛇妖给逃跑了，我去天宫问个究竟。</font>"."<br>";
echo "<font color=black>".$name."：看来得去天宫太上老君处查明情况</font>"."<br>";
//快速任务
$ydx=23;//移动坐标x
$ydy=24;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务


} elseif ($rid==50) {
echo "<font color=black>可恶，居然让万年蛇妖给逃跑了，我去天宫问个究竟。</font>"."<br>";
echo "<font color=black>".$name."：看来得去天宫太上老君处查明情况</font>"."<br>";
//快速任务
$ydx=23;//移动坐标x
$ydy=24;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务


















} else {
echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}





} elseif ($npcc==276) {

$npcname="太上老君";
if ($rid==31) {

echo "<font color=black>".$npcname."：你这个小顽童又来了，最近我没炼丹药，不要问我拿丹药了……</font>"."<br>";
echo "<font color=black>".$name."：太上老君，我这次不是为了丹药而来，而是……（你向太上老君道出了事情的经过）。</font>"."<br>";
//任务进程改变
$rwjc1=32;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==31) {
echo "<font color=black>".$npcname."：大胆妖蛇，居然趁你祖师爷外出云游来捣乱！幸好，万年蛇妖要七七四十九日才能完全吸收李世民的灵窍，只要取回灵窍，我也自有办法让李世民起死回生。万年蛇妖就藏匿在通天塔20层，你去天监台袁天罡处借来照妖镜，便可在通天塔让那万年蛇妖现形。</font>"."<br>";
//任务进程改变
$rwjc1=32;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//快速任务
$ydx=1;//移动坐标x
$ydy=23;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif ($rid==32) {
echo "<font color=black>".$nname."：大胆妖蛇，居然趁你祖师爷外出云游来捣乱！幸好，万年蛇妖要七七四十九日才能完全吸收李世民的灵窍，只要取回灵窍，我也自有办法让李世民起死回生。万年蛇妖就藏匿在通天塔20层，你去天监台袁天罡处借来照妖镜，便可在通天塔让那万年蛇妖现形。</font>"."<br>";


//快速任务
$ydx=1;//移动坐标x
$ydy=23;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务


} elseif ($rid==47) {
echo "<font color=black>".$name."：李世民的灵魂在阴曹地府 【菩提老祖】三十层BOSS手中，你去把他的灵魂带回来。</font>"."<br>";
echo "<font color=black>提示：（击败阴曹地府 【菩提老祖】三十层BOSS）</font>"."<br>";


//任务进程改变
$rwjc1=48;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==48) {
echo "<font color=black>".$nname."：李世民的灵魂在阴曹地府 【菩提老祖】三十层BOSS手中，你去把他的灵魂带回来。</font>"."<br>";
echo "<font color=black>提示：（击败阴曹地府 【菩提老祖】三十层BOSS）</font>"."<br>";



} elseif ($rid==49) {
echo "<font color=black>".$nname."：好，我这就开坛做法。（只见太上老君口中念着咒语，李世民的灵窍和灵魂消失了）小仙卿，如今李世民已还阳，你可以放心离去了。</font>"."<br>";
echo "<font color=black>".$name."：那……那……那我还没还阳啊！</font>"."<br>";
echo "<font color=black>".$nname."：太上老君：还阳术乃仙家禁书，为李世民还阳已消耗我大半法力，暂时无力为你还魂。你的师门祖师已云游归来，你去看看有什么办法吧。</font>"."<br>";



//任务进程改变
$rwjc1=50;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//快速任务
$ydx=10;//移动坐标x
$ydy=4;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif ($rid==50) {
echo "<font color=black>".$nname."：好，我这就开坛做法。（只见太上老君口中念着咒语，李世民的灵窍和灵魂消失了）小仙卿，如今李世民已还阳，你可以放心离去了。</font>"."<br>";
echo "<font color=black>".$name."：那……那……那我还没还阳啊！</font>"."<br>";
echo "<font color=black>".$nname."：太上老君：还阳术乃仙家禁书，为李世民还阳已消耗我大半法力，暂时无力为你还魂。你的师门祖师已云游归来，你去看看有什么办法吧。</font>"."<br>";



//快速任务
$ydx=10;//移动坐标x
$ydy=4;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务






} else {
echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}






} elseif ($npcc==58) {

$npcname="袁天罡";
if ($rid==32) {

echo "<font color=black>".$nname."：别来无恙啊！来，我们去喝杯酒叙叙旧……</font>"."<br>";
echo "<font color=black>".$name."：天罡兄且慢，叙旧之事可以他日再谈，如今有一急事想求得照妖镜。</font>"."<br>";
//任务进程改变
$rwjc1=33;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊

} elseif ($rid==33) {
echo "<font color=black>".$nname."：哎呀，照妖镜不巧被我打碎了，你去收集1000个〖百年魔珠〗，我帮你马上炼制一个。</font>"."<br>";


//任务进程改变
$rwjc1=34;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


} elseif ($rid==34) {



$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖百年魔珠〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=331;//物品id
$wpdz4[]=1000;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {
echo "<font color=black>我：材料收集完了，这次万年蛇妖一定无所遁形！</font>"."<br>";
//任务进程改变
$rwjc1=35;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} else{
echo "<font color=black>".$nname."：哎呀，照妖镜不巧被我打碎了，你去手机1000个〖百年魔珠〗，我帮你马上炼制一个。</font>"."<br>";

}
} elseif ($rid==35) {
echo "<font color=black>".$nname."：啊？要让万年蛇妖现形，这普通的照妖镜还不够法力，你再去收集100个〖陨魂〗给我吧。</font>"."<br>";

//任务进程改变
$rwjc1=36;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif ($rid==36) {



$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖陨魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=313;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {
echo "<font color=black>".$nname."：稍等一下，马上完成。来，拿好这块宝镜。</font>"."<br>";
//任务进程改变
$rwjc1=37;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} else{
echo "<font color=black>".$nname."：啊？要让万年蛇妖现形，这普通的照妖镜还不够法力，你再去收集100个〖陨魂〗给我吧。</font>"."<br>";

}

} elseif ($rid==37) {
echo "<font color=black>".$name."：你放下了照妖镜，不一会儿，万年蛇妖显出了真身。</font>"."<br>";
echo "<font color=black>万年蛇妖：噢？你自己找上门来了！那正好让你尝尝死亡的滋味，也好为我夫君报仇！（击败万年蛇妖）</font>"."<br>";


//任务进程改变
$rwjc1=38;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

} elseif ($rid==38) {
echo "<font color=black>".$name."：你放下了照妖镜，不一会儿，万年蛇妖显出了真身。</font>"."<br>";
echo "<font color=black>万年蛇妖：噢？你自己找上门来了！那正好让你尝尝死亡的滋味，也好为我夫君报仇！（击败万年蛇妖）</font>"."<br>";



} elseif($rid==53){

echo "<font color=black>".$nname."：你又来了，这次又遇到什么麻烦事了？（你向袁天罡描述了事情的经过）</font>"."<br>";
echo "<font color=black>".$nname."：伏羲阵？仙桃印？莫非…莫非是……莫非是瑶池圣母冲破了盘古封印，要用“伏羲阵”来毁灭人间？</font>"."<br>";
echo "<font color=black>".$name."：瑶池圣母？</font>"."<br>";
//任务进程改变
$rwjc1=55;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} elseif($rid==54){
echo "<font color=black>".$nname."：对。相传盘古初开，女娲造人，人王伏羲作为人中之王，他十分疼爱自己的子民。有一天，人王伏羲遇上了掌管人间刑罚、散布瘟疫的瑶池圣母，两人一见钟情。岂料人王伏羲最后还是知道了瑶池圣母是上天派下来惩罚人类的女神，两人最终反目成仇，大打出手。在筋疲力尽之际，人王伏羲用最后的力量使出盘古封印将瑶池圣母封印起来，而他自己也自愿堕入轮回，以洗脱罪孽……这样，你去收集100个【黑晶】、100个【灵晶】给我制作幻灵咒，看看【瑶池】（副本）内是否有异样。</font>"."<br>";
//任务进程改变
$rwjc1=56;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif($rid==55){
echo "<font color=black>".$nname."：对。相传盘古初开，女娲造人，人王伏羲作为人中之王，他十分疼爱自己的子民。有一天，人王伏羲遇上了掌管人间刑罚、散布瘟疫的瑶池圣母，两人一见钟情。岂料人王伏羲最后还是知道了瑶池圣母是上天派下来惩罚人类的女神，两人最终反目成仇，大打出手。在筋疲力尽之际，人王伏羲用最后的力量使出盘古封印将瑶池圣母封印起来，而他自己也自愿堕入轮回，以洗脱罪孽……这样，你去收集100个【黑晶】、100个【灵晶】给我制作幻灵咒，看看【瑶池】（副本）内是否有异样。</font>"."<br>";




$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【黑晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=99;//物品id
$wpdz4[]=100;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="【灵晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=107;//物品id
$wpdz4[]=100;//	需要扣除的量
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
$rwjc1=56;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
echo "<font color=black>".$nname."：只见袁天罡将材料研磨成分，化于露水中，口中念念有词，手蘸露水向天一划，眼前出现了【瑶池】（副本）内的情景。只见一棵苍老的蟠桃树屹立在【瑶池】（副本）中央，突然一颗仙桃掉落地上，流出了暗红的血水…</font>"."<br>";


//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊
} else{
echo "<font color=black>你去收集100个【黑晶】、100个【灵晶】</font>"."<br>";

}
} elseif($rid==56){
echo "<font color=black>".$nname."：盘古封印果然被冲破，大仙你立刻去【瑶池】（副本）铲除这棵蟠桃树！（传送至【瑶池】（副本），击败蟠桃树）</font>"."<br>";
//任务进程改变
$rwjc1=57;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="仙20转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变

//快速任务
$ydx=23;//移动坐标x
$ydy=23;//移动坐标y
$ydfy=5000000;//传送费用	
include("./rw/ksrw.php");
//快速任务
} elseif($rid==57){
echo "<font color=black>".$nname."：盘古封印果然被冲破，大仙你立刻去【瑶池】（副本）铲除这棵蟠桃树！（传送至【瑶池】（副本），击败蟠桃树）</font>"."<br>";

//快速任务
$ydx=23;//移动坐标x
$ydy=23;//移动坐标y
$ydfy=5000000;//传送费用	
include("./rw/ksrw.php");
//快速任务









} else {
echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}




} elseif ($npcc==1014) {

if ($rid==39) {




echo "<font color=black>万年蛇妖：倒在地上的蛇妖瞬间复活，张开大口两只大毒牙向你咬去，你被咬死了！（传送至阴曹地府）</font>"."<br>";
echo "<font color=black>你被蛇妖咬死了~~~~~</font>"."<br>";

//任务进程改变
$rwjc1=40;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变


//快速任务
$ydx=22;//移动坐标x
$ydy=4;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务



} elseif ($rid==40) {

echo "<font color=black>万年蛇妖：倒在地上的蛇妖瞬间复活，张开大口两只大毒牙向你咬去，你被咬死了！（传送至阴曹地府）</font>"."<br>";
echo "<font color=black>你被蛇妖咬死了~~~~~</font>"."<br>";




//快速任务
$ydx=22;//移动坐标x
$ydy=4;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务


} else {
echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}


} elseif ($npcc==238) {
$nname="阎罗王";	
if ($rid==40) {




echo "<font color=black>".$nname."：丁酉年甲午月乙卯日被万年蛇妖所杀，下世轮回投胎为猪……</font>"."<br>";
echo "<font color=black>".$name."：等等……我还有要务在身，不能那么早死……</font>"."<br>";

//任务进程改变
$rwjc1=41;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



//继续聊
$rw10=$npcc;//npc号
include("./rw/jxl.php");
//继续聊



} elseif ($rid==41) {

echo "<font color=black>".$nname."：阎王要你三更死，岂可留你到五更，黑白无常，上！</font>"."<br>";
echo "<font color=black>".$name."：岂有此理，是非不分，今天我非大闹阎罗殿不可！（击败黑无常、白无常）</font>"."<br>";
//任务进程改变
$rwjc1=42;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变



} elseif ($rid==42) {

echo "<font color=black>".$nname."：阎王要你三更死，岂可留你到五更，黑白无常，上！</font>"."<br>";
echo "<font color=black>".$name."：岂有此理，是非不分，今天我非大闹阎罗殿不可！（击败黑无常、白无常）</font>"."<br>";







} elseif ($rid==44) {

echo "<font color=black>".$nname."：小子本王饶你一命（跑去阴曹地府了）（阴曹地府20层）</font>"."<br>";
echo "<font color=black>".$name."：哪里跑~~~快给我还阳啊</font>"."<br>";
//任务进程改变
$rwjc1=45;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变




} elseif ($rid==45) {

echo "<font color=black>阴曹地府20层击败【阎罗王】</font>"."<br>";




} elseif ($rid==46) {

echo "<font color=black>".$nname."：好啦~~本王也是明事理的人，我这就帮你还阳</font>"."<br>";
echo "<font color=black>".$name."：算你识相</font>"."<br>";
//任务进程改变
$rwjc1=47;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="199转职任务〖关键〗";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=23;//移动坐标x
$ydy=24;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务

} elseif ($rid==47) {

echo "<font color=black>去天宫找天上老君帮忙</font>"."<br>";
//快速任务
$ydx=23;//移动坐标x
$ydy=24;//移动坐标y
$ydfy=100000;//传送费用	
include("./rw/ksrw.php");
//快速任务



} else {
echo "<font color=black>没有这个任务id编号".$rw2."请尝试联系gm解决此问题！！</font><br>";

}






} else {


}
?>