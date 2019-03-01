<?php






$arr1 = explode("_",$npcc);
$ckid=$arr1[1];
$wjid1=$wjid;
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($ckid!=""){
$wjid=$ckid;
} else{
$wjid=$npcc;
} 
$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){
include("./ini/user_ini.php");
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
$sw=1;	
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

$wjid=$wjid1;
if($sw==1){
		

$wjid=$wjid1;
include("./ini/user_ini.php");
$yymid=($iniFile->getItem('最后页面id','页面id'));
if($yymid==93){
	
//验证是否在同一地点	
include("./ini/user_ini.php");
$dtxm=($iniFile->getItem('地图坐标','x'));
$dtym=($iniFile->getItem('地图坐标','y'));
if($dtxm==$dtx&&$dtym==$dty){
$pkqy=1;	
} else{
$pkqy=2;	
} 

if($wjid==10000001){
$pkqy=1;
} else{
	
}


//验证是否在同一地点	
if($pkqy==1){	



	
include("./ini/zt_ini.php");
$username=($iniFile->getItem('玩家信息','玩家名字'));

$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;

include("./ini/pkbl_ini.php");
$iniFile->addItem('玩家id',[$wjid1 => $wjid1]); 
$iniFile->addItem('玩家pk',[$wjid1 => '2']); 
$iniFile->addItem('玩家名字',[$wjid1 => $username]); 
$iniFile->addItem('玩家伤害',[$wjid1 => '0']); 
$iniFile->addItem('玩家攻击语',[$wjid1 => '0']); 
$iniFile->addItem('被打死',[$wjid1 => '1']); 
include("./ini/pksw_ini.php");

$pkk003=($iniFile->getItem('pk验证','初始'));







function str_rand($length = 32, $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
if(!is_int($length) || $length < 0) {
return false;
}
$string = '';
for($i = $length; $i > 0; $i--) {
$string .= $char[mt_rand(0, strlen($char) - 1)];
}
return $string;
}



$aa = md5(uniqid(microtime(true),true));

if($pkk003==123){
$iniFile->updItem('pk验证', ['初始' => $aa]);
} else{

} 
} else{
} 

} elseif($yymid==522){  

$arr = explode("_",$npcc);
$jnid=$arr[0];
$ckid=$arr[1];
$wjid1=$wjid;
$wjid=$ckid;
include("./ini/pksw_ini.php");
$pkk003=($iniFile->getItem('pk验证','初始'));
} else{
	
	


	
} 


//验证是否在同一地点	
if($pkqy!=2){







if($pkk003==123){
//写入自己pk验证
$wjid=$wjid1;
include("./ini/pkyz_ini.php");
$iniFile->updItem('pk验证', ['初始' => $aa]);
} else{
	
if($yymid==93){
//写入自己pk验证
$wjid=$wjid1;
include("./ini/pkyz_ini.php");
$iniFile->updItem('pk验证', ['初始' => $pkk003]);
} else{
}
	
} 





//判断对手是否已死亡或者在死亡时间内
$wjid=$ckid;
include("./ini/pksw_ini.php");
$pkk002=($iniFile->getItem('玩家名字','初始'));
$pkk003=($iniFile->getItem('pk验证','初始'));



$wjid=$wjid1;
include("./ini/pkyz_ini.php");
$pkk004=($iniFile->getItem('pk验证','初始'));



if($pkk003==$pkk004){  
//获取对方玩家的属性
$wjxx="";//初始防止冲突
$wjxx1="";//初始防止冲突
$wjid=$ckid;

include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("./wj/ztt.php");
include("./wj/zfzt.php");
$nmz=$wjxx[玩家名字];
$nhp=$wjxx[红];
$nmp=$wjxx[蓝];
$nmaxhp=$wjxx1[血];
$nmaxmp=$wjxx1[蓝];


if($yymid==522){
$nmaxgj=$wjxx1[max攻击];
$nmaxmg=$wjxx1[max魔攻];
$nmaxfy=$wjxx1[max防御];
$nbg=$wjxx1[冰攻];
$nhg=$wjxx1[火攻];
$nlg=$wjxx1[雷攻];
$nbf=$wjxx1[冰防];
$nhf=$wjxx1[火防];
$nlf=$wjxx1[雷防];
} else{
} 

//获取对方玩家的属性


//获取自己的属性
$wjxx="";//初始防止冲突
$wjxx1="";//初始防止冲突
$wjid=$wjid1;
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("./wj/ztt.php");
include("./wj/zfzt.php");
$omz=$wjxx[玩家名字];
$ohp=$wjxx[红];
$omp=$wjxx[蓝];
$omaxhp=$wjxx1[血];
$omaxmp=$wjxx1[蓝];

if($yymid==522){
$omaxgj=$wjxx1[max攻击];
$omaxmg=$wjxx1[max魔攻];
$omaxfy=$wjxx1[max防御];
$obg=$wjxx1[冰攻];
$ohg=$wjxx1[火攻];
$olg=$wjxx1[雷攻];
$obf=$wjxx1[冰防];
$ohf=$wjxx1[火防];
$olf=$wjxx1[雷防];
} else{
} 

//获取自己的属性




$wjid=$wjid1;
//运算伤害
if($yymid==522){
include("./wj/pk01.php");
} else{
} 





//获取对方玩家的属性
$wjxx="";//初始防止冲突
$wjxx1="";//初始防止冲突
$wjid=$ckid;
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("./wj/ztt.php");
include("./wj/zfzt.php");
$nmz=$wjxx[玩家名字];
$nhp=$wjxx[红];
$nmp=$wjxx[蓝];
$nmaxhp=$wjxx1[血];
$nmaxmp=$wjxx1[蓝];



//获取对方玩家的属性


//获取自己的属性
$wjxx="";//初始防止冲突
$wjxx1="";//初始防止冲突
$wjid=$wjid1;
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("./wj/ztt.php");
include("./wj/zfzt.php");
$omz=$wjxx[玩家名字];
$ohp=$wjxx[红];
$omp=$wjxx[蓝];
$omaxhp=$wjxx1[血];
$omaxmp=$wjxx1[蓝];



//获取自己的属性


//判断对手或者自己死亡

if($nhp<=1){


$wjid=$ckid;	
echo "<font color=red>".$nmz."被你打死了</font>"."<br>";
//死亡
include("./ini/pksw_ini.php");

$nowtime=date('Y-m-d H:i:s');
$iniFile->updItem('死亡时间', ['初始' => $nowtime]);
$iniFile->updItem('玩家名字', ['初始' => $omz]);
$iniFile->updItem('玩家id', ['初始' => $wjid1]);
$iniFile->updItem('pk验证', ['初始' => '123']);

include("./ini/pkbl_ini.php");
$iniFile->updItem('被打死', [$wjid1 => '2']);




//恢复对手满血

include("./ini/zt_ini.php");
$npkzzz=($iniFile->getItem('玩家信息','恶名值'));
$iniFile->updItem('玩家信息', ['红' => $nmaxhp]);


if($npkzzz>=10){
//更改位置
include("./ini/user_ini.php");
$iniFile->updItem('地图坐标', ['x' => '1']);
$iniFile->updItem('地图坐标', ['y' => '46']);
//更新缓存数据
$xtxx=$nmz."杀人如麻~~必遭天谴！！（已被".$omz."抓进天牢）";
include("./msg/msgg02.php");
} else{
//更改位置
include("./ini/user_ini.php");
$iniFile->updItem('地图坐标', ['x' => '22']);
$iniFile->updItem('地图坐标', ['y' => '22']);


if($npkzzz<=998){
$wjid=$wjid1;	
//加pk值
include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
$pkzzz=$pkzzz+1;
$iniFile->updItem('玩家信息', ['恶名值' => $pkzzz]);
echo "<font color=red>由于你主动发起恶名值+1（当前恶名:".$pkzzz."）</font>"."<br>";
//加pk值
} else{
} 

} 





$wjid=$wjid1;
//清除附近位置
include("./ini/user_ini.php");
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
//路径
$ydtx=$dtx;
$ydty=$dty;
include("./wj/mapid.php");
$path='acher/map';
$ininame = $path."/".$inina;
$iniFile = new iniFile($ininame);
# 删除一个子项
$iniFile->delItem('玩家时间值'.$dtx.'x'.$dty, $ckid);
# 删除一个子项
$iniFile->delItem('玩家vip值'.$dtx.'x'.$dty, $ckid);
# 删除一个子项
$iniFile->delItem('玩家id值'.$dtx.'x'.$dty, $ckid);
# 删除一个子项
$iniFile->delItem('玩家名字值'.$dtx.'x'.$dty, $ckid);
# 删除一个子项
$iniFile->delItem('国家名字值'.$dtx.'x'.$dty, $ckid);
# 删除一个子项
$iniFile->delItem('国家职务名字值'.$dtx.'x'.$dty, $ckid);
//清除附近位置



include("template/xy523.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


//解锁


//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

exit;


} else{
} 

if($ohp<=1){



$wjid=$wjid1;	
echo "<font color=red>很遗憾！！你被".$nmz."打死掉了</font>"."<br>";
//死亡
include("./ini/pksw_ini.php");

$nowtime=date('Y-m-d H:i:s');
$iniFile->updItem('死亡时间', ['初始' => $nowtime]);
$iniFile->updItem('玩家名字', ['初始' => $nmz]);
$iniFile->updItem('玩家id', ['初始' => $ckid]);
$iniFile->updItem('pk验证', ['初始' => '123']);

include("./ini/pkbl_ini.php");
$iniFile->updItem('被打死', [$ckid => '2']);

//恢复自己满血
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['红' => $omaxhp]);

$wjid=$wjid1;



//清除附近位置

include("./ini/user_ini.php");
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));







include("./ini/zt_ini.php");
$npkzzz=($iniFile->getItem('玩家信息','恶名值'));

if($npkzzz>=10){
//更改位置
include("./ini/user_ini.php");
$iniFile->updItem('地图坐标', ['x' => '1']);
$iniFile->updItem('地图坐标', ['y' => '46']);
//更新缓存数据
$xtxx=$omz."杀人如麻~~必遭天谴！！（已被".$nmz."抓进天牢）";
include("./msg/msgg02.php");
} else{
//更改位置
include("./ini/user_ini.php");
$iniFile->updItem('地图坐标', ['x' => '22']);
$iniFile->updItem('地图坐标', ['y' => '22']);
$wjid=$ckid;	
include("./ini/zt_ini.php");
$npkzzzq=($iniFile->getItem('玩家信息','恶名值'));
if($npkzzzq==0){
$wjid=$wjid1;	
//加pk值
include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
$pkzzz=$pkzzz+1;
$iniFile->updItem('玩家信息', ['恶名值' => $pkzzz]);
echo "<font color=red>由于你主动发起恶名值+1（当前恶名:".$pkzzz."）</font>"."<br>";
//加pk值
} else{
} 



} 


$wjid=$wjid1;



//路径
$ydtx=$dtx;
$ydty=$dty;
include("./wj/mapid.php");
$path='acher/map';
$ininame = $path."/".$inina;

$iniFile = new iniFile($ininame);
# 删除一个子项
$iniFile->delItem('玩家时间值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('玩家vip值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('玩家id值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('玩家名字值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('国家名字值'.$dtx.'x'.$dty, $wjid);
# 删除一个子项
$iniFile->delItem('国家职务名字值'.$dtx.'x'.$dty, $wjid);
//清除附近位置

	
include("template/xy395.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


//解锁

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
exit;











} else{
} 













//提取玩家伤害语
include("./ini/pkblxx_ini.php");
$pk001=($iniFile->getItem('玩家名字',$ckid));
$pk002=($iniFile->getItem('玩家攻击语',$ckid));
$pk003=($iniFile->getItem('玩家伤害',$ckid));
$pk004=$pk001.$pk002;
$iniFile->delItem('玩家名字', $ckid);
$iniFile->delItem('玩家攻击语', $ckid);
$iniFile->delItem('玩家伤害', $ckid);
//提取玩家伤害语
if($pk004!=""){
echo "<font color=red>".$pk004."造成了".$pk003."点伤害</font>"."<br>";
} else{
} 


include("./ini/zd_ini.php");
# 获取一个分类下所有数据
$jnnid=($iniFile->getCategory('快捷技能id'));
$jnnfl=($iniFile->getCategory('快捷分类'));
$jnnmz=($iniFile->getCategory('快捷名字'));
//将ini值存入数组方便使用
foreach(array_keys($jnnid) as $key){
$keyjnnid[]=$jnnid[$key];
}
foreach(array_keys($jnnfl) as $key){
$keyjnnfl[]=$jnnfl[$key];
}
foreach(array_keys($jnnmz) as $key){
$keyjnnmz[]=$jnnmz[$key];
}

$jnid1=$keyjnnid[1];
$jnid2=$keyjnnid[2];
$jnid3=$keyjnnid[3];
$jnid4=$keyjnnid[4];
$jnid5=$keyjnnid[5];
$jnid6=$keyjnnid[6];
$jnid7=$keyjnnid[7];
$jnid8=$keyjnnid[8];
$jnid9=$keyjnnid[9];


$jnfl1=$keyjnnfl[1];
$jnfl2=$keyjnnfl[2];
$jnfl3=$keyjnnfl[3];
$jnfl4=$keyjnnfl[4];
$jnfl5=$keyjnnfl[5];
$jnfl6=$keyjnnfl[6];
$jnfl7=$keyjnnfl[7];
$jnfl8=$keyjnnfl[8];
$jnfl9=$keyjnnfl[9];


$jnmz1=$keyjnnmz[1];
$jnmz2=$keyjnnmz[2];
$jnmz3=$keyjnnmz[3];
$jnmz4=$keyjnnmz[4];
$jnmz5=$keyjnnmz[5];
$jnmz6=$keyjnnmz[6];
$jnmz7=$keyjnnmz[7];
$jnmz8=$keyjnnmz[8];
$jnmz9=$keyjnnmz[9];

$jnfl=$jnfl1;
$jnid=$jnid1;
$jnnamex=$jnmz1;
$jn=1;
include("./wj/pkxx.php");

$jnfl=$jnfl2;
$jnid=$jnid2;
$jnnamex=$jnmz2;
$jn=2;
include("./wj/pkxx.php");

$jnfl=$jnfl3;
$jnid=$jnid3;
$jnnamex=$jnmz3;
$jn=3;
include("./wj/pkxx.php");

if($dxsh>=1){
$dxsh="-".$dxsh;
} elseif($dxsh==0&&$dxsh!=""){  
$dxsh="-".$dxsh;
} else{
$dxsh="";	
} 


if($pk003>=1){
$wjsh=$pk003;
if($wjsh>=1){
$wjsh="-".$wjsh;
} elseif($wjsh==0&&$wjsh!=""){  
$wjsh="-".$wjsh;
} else{
$wjsh="";	
} 	
} else{	
if($wjsh>=1){

$wjsh="-".$wjsh;
} elseif($wjsh==0&&$wjsh!=""){  
$wjsh="-".$wjsh;
} else{
$wjsh="";	
} 
} 

//显示对方
echo "<font color=black>".$nmz.":</font>"."<br>";
echo "<font color=black>HP:(".$nhp."/".$nmaxhp.")".$dxsh."</font>"."<br>";
echo "<font color=black>MP:(".$nmp."/".$nmaxmp.")</font>"."<br>";
//显示对方

echo "<font color=black>----------</font>"."<br>";
echo "<font color=red>自己:</font>"."<br>";
//显示自己
echo "<font color=black>HP:(".$ohp."/".$omaxhp.")".$wjsh."</font>"."<br>";
echo "<font color=black>MP:(".$omp."/".$omaxmp.")</font>"."<br>";

//显示自己




echo "<font color=black>----------</font>"."<br>";




$jnfl=$jnfl4;
$jnid=$jnid4;
$jnnamex=$jnmz4;
$jn=4;
include("./wj/pkxx.php");

$jnfl=$jnfl5;
$jnid=$jnid5;
$jnnamex=$jnmz5;
$jn=5;
include("./wj/pkxx.php");

$jnfl=$jnfl6;
$jnid=$jnid6;
$jnnamex=$jnmz6;
$jn=6;
include("./wj/pkxx.php");

$jnfl=$jnfl7;
$jnid=$jnid7;
$jnnamex=$jnmz7;
$jn=7;
include("./wj/pkxx.php");

$jnfl=$jnfl8;
$jnid=$jnid8;
$jnnamex=$jnmz8;
$jn=8;
include("./wj/pkxx.php");

$jnfl=$jnfl9;
$jnid=$jnid9;
$jnnamex=$jnmz9;
$jn=9;
include("./wj/pkxx.php");

echo "<font color=black>===================</font>"."<br>";



echo "<br>";





echo "<font color=black>----------------------</font>"."<br>";







$wjid=$wjid1;	
//cmd及超链接值
include("fhgame.php");




} else{
$wjid=$wjid1;	
include("./ini/zt_ini.php");
$username=($iniFile->getItem('玩家信息','玩家名字'));
	
if($pkk002==$username){
echo "<font color=black>对手已被你打死掉了！！</font>"."<br>";
} else{
echo "<font color=black>已被".$pkk002."打死掉了！！</font>"."<br>";	
} 
	$wjid=$wjid1;	

	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

	
	
	
	
} 



} else{
echo "<font color=black>对手已离开(不在同一地点)</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
	
} 


} else{
include("./ini/pkbl_ini.php");
$iniFile->delItem('玩家id', $npcc);
$iniFile->delItem('玩家pk', $npcc);
$iniFile->delItem('玩家名字', $npcc);
$iniFile->delItem('玩家伤害', $npcc);
$iniFile->delItem('玩家攻击语', $npcc);
$iniFile->delItem('被打死', $npcc);
	echo "<font color=black>对手还在投胎中（死亡状态）</font>"."<br>";
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
	
} 




} else{	
}

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini























?>