<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



//检测封号


include("./ini/alluser_ini.php");


$jy01=($iniFile->getItem('封号信息','永久'));
$jy02=($iniFile->getItem('封号信息','封号时间'));
$jy03=($iniFile->getItem('封号信息','解除变量'));



if($jy01!=2){

if($jy03 >= 1){	
$startdate=$jy02;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));	

if($minute <= $jy03){
$jybl=2;
$minute1=$jy03-$minute;


$minute=floor($minute1/60);
$second=$minute1%60;


//
if($minute > 0){	
$jyts1="由于该账号违反游戏规定已做封停处理，具体原因请咨询管理员";
$minute10=floor($minute/60);
if($minute10 > 0){	
$minute9=floor($minute10/24);
if($minute9 > 0){
$second=$minute10%24;
$jyts=$minute9."天".$second."小时";
$fhbl=2;
} else{
$second=$minute%60;
$jyts=$minute10."时".$second."分";
$fhbl=2;
}
} else{
$jyts=$minute."分".$second."秒";
$fhbl=2;
} 


} else{
$jyts1="由于该账号违反游戏规定已做封停处理，具体原因请咨询管理员";	
$jyts=$second."秒";
$fhbl=2;
} 
//

} else{
$jyts1="[否]";
}
} else{	
$jyts1="[否]";

} 
} else{	
$jyts1="由于该账号违反游戏规定已做封停处理，具体原因请咨询管理员";
$jyts="【永久封停】";
$fhbl=2;
}










if($fhbl!=2){


//游戏开局

include("./ini/zt_ini.php");

$jcmz=($iniFile->getItem('玩家信息','玩家名字'));
$jcmp=($iniFile->getItem('玩家信息','门派'));
$jcxb=($iniFile->getItem('玩家信息','性别'));

if($jcmz==""||$jcmp==0||$jcxb==0){




if($jcxb==0){
include("template/xy297.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($jcmz==""){ 	
include("template/xy298.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($jcmp==0){ 
include("template/xy295.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");



} else{

} 

exit;

	} else{

	} 







	//调用slt.ini是否存在
   
include("./ini/slt_ini.php");


# 获取一个分类下所有数据
$ltpx1=($iniFile->getCategory('玩家排序'));
$m=0;
$m=count($ltpx1,0)-1; 	

if($m>=1){

	foreach(array_keys($ltpx1) as $key){
$keyltpx1[]=$ltpx1[$key];
}



	
$tmp1="排序";
$arr1=$keyltpx1;
foreach( $arr1 as $k=>$v) {
    if($tmp1 == $v) unset($arr1[$k]);
}

$ltmax1=max($arr1);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
//$ltmax1=$ltmax1+1;

# 获取一个分类下某个子项的值
$wjfy=($iniFile->getItem('玩家发言',$ltmax1));
# 获取一个分类下某个子项的值
$wjfymz=($iniFile->getItem('玩家名字',$ltmax1));
# 获取一个分类下某个子项的值
$wjfyid=($iniFile->getItem('玩家id',$ltmax1));
$wjfyvip=($iniFile->getItem('玩家vip',$ltmax1));


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=108;
$npc[]=$wjfyid;
echo "<font color=black>[私聊]</font>";
$img='pic/vip/'."vip".$wjfyvip.'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$wjfymz."</font></a>";
echo "<font color=black>对你说：".$wjfy."</font><br>";


$zbidd2=$wjfyid."_".$ltmax1;

# 删除一个子项
$iniFile->delItem('玩家排序', $zbidd2);
# 删除一个子项
$iniFile->delItem('玩家id', $ltmax1);

# 删除一个子项
$iniFile->delItem('玩家vip', $ltmax1);
# 删除一个子项
$iniFile->delItem('玩家名字', $ltmax1);
	# 删除一个子项
$iniFile->delItem('玩家发言', $ltmax1);		




	} else{

	} 



//系统动态msg
include("./msg/msgg01.php");
	
//系统静态msg
include("./msg/msgg03.php");







///玩家操作造成的msg

	//调用msg.ini是否存在
   
include("./ini/msg_ini.php");
$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下所有数据
$msg1=($iniFile->getCategory('玩家排序'));
$m=0;
$m=count($msg1,0)-1; 	

if($m>=1){

	foreach(array_keys($msg1) as $key){
$keymsg1[]=$msg1[$key];
}



	
$tmp1="排序";
$arr3=$keymsg1;
foreach( $arr3 as $k=>$v) {
    if($tmp1 == $v) unset($arr3[$k]);
}

$ltmax1=max($arr3);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
//$ltmax1=$ltmax1+1;

# 获取一个分类下某个子项的值
$wjfy=($iniFile->getItem('玩家发言',$ltmax1));
# 获取一个分类下某个子项的值
$wjfymz=($iniFile->getItem('玩家名字',$ltmax1));
# 获取一个分类下某个子项的值
$wjfyid=($iniFile->getItem('玩家id',$ltmax1));
$wjfyvip=($iniFile->getItem('玩家vip',$ltmax1));


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=108;
$npc[]=$wjfyid;
echo "<font color=black>[系统]</font>";
if($wjfyvip>=0&&$wjfyvip<=998){


$img='pic/vip/'."vip".$wjfyvip.'.png';
echo '<img src="'.$img.' "alt="图片"/>';
echo "<font color=black>".$wjfymz.$wjfy."</font><br>";
	} else{	
if($wjfyvip==999){
$img='pic/vip/'."vip".$wjfyvip.'.png';
echo '<img src="'.$img.' "alt="图片"/>';		
} else{
} 
		echo "<font color=red>".$wjfymz.$wjfy."</font><br>";
			
			
			
			} 





$zbidd2=$wjfyid."_".$ltmax1;

# 删除一个子项
$iniFile->delItem('玩家排序', $zbidd2);
# 删除一个子项
$iniFile->delItem('玩家id', $ltmax1);

# 删除一个子项
$iniFile->delItem('玩家vip', $ltmax1);
# 删除一个子项
$iniFile->delItem('玩家名字', $ltmax1);
	# 删除一个子项
$iniFile->delItem('玩家发言', $ltmax1);		




	} else{

	} 


	
	
	
	
	
	
	
	
	
	
	
//////////组队邀请
include("./yq/yq1.php");
//////////国家邀请
include("./yq/yq2.php");	
//////////住宅邀请
include("./yq/yq3.php");	
	
	//////////结婚邀请
include("./yq/yq4.php");	

		//////////pk和死亡
include("./yq/yq5.php");	
	


//邀请变量
if($blzd1==1&&$blzd2==1&&$blzd3==1&&$blzd4==1){

//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
if($bpid>=1){
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));
$bpzw=($iniFile->getItem('玩家信息','帮派职务'));
} else{

	} 

//游戏首页页面模板
include("./map/mapid.php");
//查询当前地图玩家


if($dtx==78&&$ydtx==78||$dtx==79&&$ydtx==79){//通天塔不需要附近玩家
$fjwjpd=2;

} else{
} 

if($dtx==1&&$ydtx==78||$dtx==1&&$ydtx==79){//通天塔不需要附近玩家
$fjwjpd=2;
} else{
} 
if($dtx==78||$dtx==79){//通天塔不需要附近玩家
$fjwjpd=2;
} else{
} 

if($fjwjpd!=2){

if($dtx==71||$dtx==72||$dtx==73||$ydtx==71||$ydtx==72||$ydtx==73){

	//查询是否是其他人得住宅
		//调用zt.ini是否存在  
include("./ini/fz_ini.php");
$fzpd=($iniFile->getItem('所处房间人id','初始'));










if($fzpd==123){
if($dtx==71){
$inina=$wjid."-"."mz".$dtx."x".$dty.".ini";
$ininalock=$wjid."-"."mz".$dtx."x".$dty.".txt";
} elseif ($dtx==72) {	
$inina=$wjid."-"."hz".$dtx."x".$dty.".ini";
$ininalock=$wjid."-"."hz".$dtx."x".$dty.".txt";
} elseif ($dtx==73) {	
$inina=$wjid."-"."gzai".$dtx."x".$dty.".ini";
$ininalock=$wjid."-"."gzai".$dtx."x".$dty.".txt";
} else{		
} 
	
	//echo $inina;

} else{
if($dtx==71){
$inina=$fzpd."-"."mz".$dtx."x".$dty.".ini";
$ininalock=$fzpd."-"."mz".$dtx."x".$dty.".txt";
} elseif ($dtx==72) {	
$inina=$fzpd."-"."hz".$dtx."x".$dty.".ini";
$ininalock=$fzpd."-"."hz".$dtx."x".$dty.".txt";
} elseif ($dtx==73) {	
$inina=$fzpd."-"."gzai".$dtx."x".$dty.".ini";
$ininalock=$fzpd."-"."gzai".$dtx."x".$dty.".txt";
} else{		
} 
	//echo $inina;

	} 
	
	
include("./wj/zzwj.php");
	
	
} else{

	} 




	
if($dtx!=71&&$dtx!=72&&$dtx!=73&&$ydtx!=71&&$ydtx!=72&&$ydtx!=73){


if($dtx==74){
	
	
include("./wj/gzwj.php");
	
} else{
include("./wj/fjwj.php");
} 



	
} else{

	if($dtx==1&&$ydtx==71||$dtx==1&&$ydtx==72||$dtx==1&&$ydtx==73){

$inina="cac".$dtx."x".$dty.".ini";
$ininalock="cac".$dtx."x".$dty.".txt";
	include("./wj/fjwj.php");
	} else{
	
	} 
	
	
	
	
	} 

} else{
} 



//玩法

echo "<font color=black>----------------------</font>"."<br>";
echo "<font color=black>火热玩法</font>"."<br>";



if($dty==22||$dty==23){
if($dtx==22){
$sw=2;	
} else{
} 
} else{
} 

if($dty==46||$dty==47){
if($dtx==1){
$sw=2;	
} else{
} 
} else{
} 





if($sw!=2){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=450;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>挑战</font></a>";
} else{
echo "<font color=red>挑战</font>";
} 


echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>擂台</font></a>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=403;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>娱乐</font></a>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=404;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻略</font></a>"."<br>";

















echo "<font color=black>----------------------</font>"."<br>";



//基础功能
echo "<font color=black>基础功能</font>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=301;
$npc[]=0;
echo "<a href='cz/index.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【充值】</font></a>";

/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=533;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【充值】</font></a>";
*/
/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=489;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【拍卖】</font></a>";
*/
echo "<font color=black>◎</font>";


if($sw!=2){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=668;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【指引】</font></a>";
} else{
echo "<font color=red>【指引】</font>";
	
} 

echo "<font color=black>◎</font>";
if($sw!=2){



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=476;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【腾云】</font></a>"."<br>";
} else{
echo "<font color=red>【腾云】</font>"."<br>";
	
} 



echo "<font color=black>☆☆☆☆☆☆☆☆☆☆☆</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>状态</font></a>";
echo "<font color=black>◎</font>";




if($sw!=2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=27;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>物品</font></a>";
} else{
echo "<font color=red>物品</font>";
} 




echo "<font color=black>◎</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=114;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>好友</font></a>";

echo "<font color=black>◎</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=44;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>任务</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>国家</font></a>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=21;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>聊天</font></a>";

echo "<font color=black>◎</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=362;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宠物</font></a>";
//cmd及超链接值

echo "<font color=black>◎</font>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=53;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>商城</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=111;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>队伍</font></a>";
echo "<font color=black>◎</font>";

if($sw!=2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=155;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>住宅</font></a>";
} else{
echo "<font color=red>住宅</font>";
} 

echo "<font color=black>◎</font>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=225;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>挂售</font></a>";
echo "<font color=black>◎</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=57;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>排行</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=301;
$npc[]=0;
echo "<a href='cz/index.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>充值</font></a>";

/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=533;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>充值</font></a>";
*/





echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=306;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>特权</font></a>";
echo "<font color=black>◎</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=307;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>福利</font></a>";


echo "<font color=black>◎</font>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=203;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>系统</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=675;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【SDK码兑换】</font></a>"."<br>";






echo "<font color=black>----------------------</font>"."<br>";
	

include("fhgame.php");

/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=559;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天天领红包】</font></a>"."<br>";
*/
	} else{
//组队
	} 
	
	
	
	
	} else{	
	
echo "<font color=black>【封号提示】</font>"."<br>";
echo "<font color=red>[自动解封]：".$jyts."</font>"."<br>";
echo "<font color=red>[封号描述]：".$jyts1."</font>"."<br>";
echo "<font color=blue>最终解释权归小轩GM所有，请您务必遵守游戏的规则，祝您生活愉快！！</font>"."<br>";
echo "<font color=black>----------------------</font>"."<br>";

//cmd及超链接值
include("fhgame.php");
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>