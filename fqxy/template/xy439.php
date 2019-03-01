<?php



//阻塞代码防止出现脏数据
$ininalock="hdjc.txt";
$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/hdjc';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){

$fp = fopen($gglockname, "w+");
if(flock($fp,LOCK_EX | LOCK_NB)){
  $zsspd=1;
 //usleep(800);
 
 
  flock($fp,LOCK_EX);

  break;
}else{
	//排队等待
	//延时200毫秒
	usleep(200000);
	$zspd=$zspd+1;//五秒内没获得锁则提示服务器繁忙
	if($zspd>=25){
	$zsspd=2;	
	  break;
	} else{	
	} 

}

}

if($zsspd==1){








if($npcc ==1){//免费摇点




$hdydtz=6;
include("./ini/yd01_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));
if($hdyd[免费次数]<$hdydtz){//判断是否超限制
$hdydcs=$hdyd[免费次数]+1;
//随机




$bz= rand(1, 6);

if($bz ==6){//免费摇点
echo "<font color=red>真是运气爆棚啊~~恭喜你！在疯狂摇一摇（黄金场）中摇到了".$bz."点</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在疯狂摇一摇（黄金场）中逆天的摇出了".$bz."点！！大奖究竟花落谁家呢？让我们拭目以待~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>恭喜你！在疯狂摇一摇（黄金场）中摇到了".$bz."点</font><br>";
} 
$ds01=$hdyd[今日点数]+$bz;
$ds02=$hdyd[活动点数]+$bz;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yd01";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$ds01,ds02=$ds02,yd01=$hdydcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yd01_ini.php");
$iniFile->updItem('摇点信息', ['今日点数' => $ds01,'活动点数' => $ds02,'免费次数' => $hdydcs]);



//路径
$inina="phb9.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  





} else{	
echo "<font color=red>对不起！您今日在疯狂摇一摇（黄金场）中已达到了最大限制，请于明日再来</font><br>";
} 

	echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=437;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回继续摇点</font></a>"."<font color=black></font>"."<br>";
	

} elseif($npcc ==2){
	

	
$hdydtz=4;
include("./ini/yd01_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));

	include("./ini/yd01_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));
if($hdyd[收费次数]<$hdydtz){//判断是否超限制
$hdydcs=$hdyd[收费次数]+1;





$jdsl=($hdyd[收费次数]+1)*10;
if($jdsl ==""){
$jdsl=999;	
} else{
}
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$jdsl;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
	
if ($pd==2) {

//随机
$bz= rand(1, 6);

if($bz ==6){//免费摇点
echo "<font color=red>真是运气爆棚啊~~恭喜你！在疯狂摇一摇（黄金场）中摇到了".$bz."点</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在疯狂摇一摇（黄金场）中逆天的摇出了".$bz."点！！大奖究竟花落谁家呢？让我们拭目以待~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>恭喜你！在疯狂摇一摇（黄金场）中摇到了".$bz."点</font><br>";
} 
$ds01=$hdyd[今日点数]+$bz;
$ds02=$hdyd[活动点数]+$bz;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yd01";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$ds01,ds02=$ds02,yd02=$hdydcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yd01_ini.php");
$iniFile->updItem('摇点信息', ['今日点数' => $ds01,'活动点数' => $ds02,'收费次数' => $hdydcs]);



//更新奖池
$jcfl=1;
include("./ini/hdjc_ini.php");
$hdjc=($iniFile->getItem('奖金池',$jcfl));
$hdjc=$jdsl+$hdjc;
$q2="all_jc";
mysql_query("set names utf8");
$strsql = "update $q2 set jc=$hdjc where xlid=$jcfl";//物品id号必改值
$result = mysql_query($strsql);

$iniFile->updItem('奖金池', [$jcfl => $hdjc]);





//更新奖池


//路径
$inina="phb9.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} else{
echo "<font color=black>对不起！需要〖金豆〗x".$jdsl."</font>"."<br>";
}
} else{	
echo "<font color=red>对不起！您今日在疯狂摇一摇（黄金场）中已达到了最大限制，请于明日再来</font><br>";
} 


	echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=437;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回继续摇点</font></a>"."<font color=black></font>"."<br>";
	



} elseif($npcc ==3){

$hdydtz=6;
include("./ini/yd02_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));
if($hdyd[免费次数]<$hdydtz){//判断是否超限制
$hdydcs=$hdyd[免费次数]+1;
//随机
$bz= rand(1, 6);

if($bz ==6){//免费摇点
echo "<font color=red>真是运气爆棚啊~~恭喜你！在疯狂摇一摇（铂金场）中摇到了".$bz."点</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在疯狂摇一摇（铂金场）中逆天的摇出了".$bz."点！！大奖究竟花落谁家呢？让我们拭目以待~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>恭喜你！在疯狂摇一摇（铂金场）中摇到了".$bz."点</font><br>";
} 
$ds01=$hdyd[今日点数]+$bz;
$ds02=$hdyd[活动点数]+$bz;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yd02";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$ds01,ds02=$ds02,yd01=$hdydcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yd02_ini.php");
$iniFile->updItem('摇点信息', ['今日点数' => $ds01,'活动点数' => $ds02,'免费次数' => $hdydcs]);
//路径
$inina="phb10.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} else{	
echo "<font color=red>对不起！您今日在疯狂摇一摇（铂金场）中已达到了最大限制，请于明日再来</font><br>";
} 
	echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=440;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回继续摇点</font></a>"."<font color=black></font>"."<br>";
	


} elseif($npcc ==4){
	

	
$hdydtz=4;
include("./ini/yd02_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));

	include("./ini/yd02_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));
if($hdyd[收费次数]<$hdydtz){//判断是否超限制
$hdydcs=$hdyd[收费次数]+1;





$jdsl=($hdyd[收费次数]+1)*20;
if($jdsl ==""){
$jdsl=999;	
} else{
}
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$jdsl;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
	
if ($pd==2) {

//随机
$bz= rand(1, 6);

if($bz ==6){//免费摇点
echo "<font color=red>真是运气爆棚啊~~恭喜你！在疯狂摇一摇（铂金场）中摇到了".$bz."点</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在疯狂摇一摇（铂金场）中逆天的摇出了".$bz."点！！大奖究竟花落谁家呢？让我们拭目以待~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>恭喜你！在疯狂摇一摇（铂金场）中摇到了".$bz."点</font><br>";
} 
$ds01=$hdyd[今日点数]+$bz;
$ds02=$hdyd[活动点数]+$bz;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yd02";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$ds01,ds02=$ds02,yd02=$hdydcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yd02_ini.php");
$iniFile->updItem('摇点信息', ['今日点数' => $ds01,'活动点数' => $ds02,'收费次数' => $hdydcs]);



//更新奖池
$jcfl=2;
include("./ini/hdjc_ini.php");
$hdjc=($iniFile->getItem('奖金池',$jcfl));
$hdjc=$jdsl+$hdjc;
$q2="all_jc";
mysql_query("set names utf8");
$strsql = "update $q2 set jc=$hdjc where xlid=$jcfl";//物品id号必改值
$result = mysql_query($strsql);

$iniFile->updItem('奖金池', [$jcfl => $hdjc]);





//更新奖池


//路径
$inina="phb10.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} else{
echo "<font color=black>对不起！需要〖金豆〗x".$jdsl."</font>"."<br>";
}
} else{	
echo "<font color=red>对不起！您今日在疯狂摇一摇（铂金场）中已达到了最大限制，请于明日再来</font><br>";
} 


	echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=440;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回继续摇点</font></a>"."<font color=black></font>"."<br>";
	


} elseif($npcc ==5){

$hdydtz=6;
include("./ini/yd03_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));
if($hdyd[免费次数]<$hdydtz){//判断是否超限制
$hdydcs=$hdyd[免费次数]+1;
//随机
$bz= rand(1, 6);

if($bz ==6){//免费摇点
echo "<font color=red>真是运气爆棚啊~~恭喜你！在疯狂摇一摇（黄金场）中摇到了".$bz."点</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在疯狂摇一摇（黄金场）中逆天的摇出了".$bz."点！！大奖究竟花落谁家呢？让我们拭目以待~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>恭喜你！在疯狂摇一摇（黄金场）中摇到了".$bz."点</font><br>";
} 
$ds01=$hdyd[今日点数]+$bz;
$ds02=$hdyd[活动点数]+$bz;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yd03";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$ds01,ds02=$ds02,yd01=$hdydcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yd03_ini.php");
$iniFile->updItem('摇点信息', ['今日点数' => $ds01,'活动点数' => $ds02,'免费次数' => $hdydcs]);
//路径
$inina="phb11.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} else{	
echo "<font color=red>对不起！您今日在疯狂摇一摇（黄金场）中已达到了最大限制，请于明日再来</font><br>";
} 

	echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=441;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回继续摇点</font></a>"."<font color=black></font>"."<br>";
	


} elseif($npcc ==6){
	

	
$hdydtz=4;
include("./ini/yd03_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));

	include("./ini/yd03_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));
if($hdyd[收费次数]<$hdydtz){//判断是否超限制
$hdydcs=$hdyd[收费次数]+1;





$jdsl=($hdyd[收费次数]+1)*10;
if($jdsl ==""){
$jdsl=999;	
} else{
}
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$jdsl;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
	
if ($pd==2) {

//随机
$bz= rand(1, 6);

if($bz ==6){//免费摇点
echo "<font color=red>真是运气爆棚啊~~恭喜你！在疯狂摇一摇（黄金场）中摇到了".$bz."点</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在疯狂摇一摇（黄金场）中逆天的摇出了".$bz."点！！大奖究竟花落谁家呢？让我们拭目以待~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>恭喜你！在疯狂摇一摇（黄金场）中摇到了".$bz."点</font><br>";
} 
$ds01=$hdyd[今日点数]+$bz;
$ds02=$hdyd[活动点数]+$bz;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yd03";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$ds01,ds02=$ds02,yd02=$hdydcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yd03_ini.php");
$iniFile->updItem('摇点信息', ['今日点数' => $ds01,'活动点数' => $ds02,'收费次数' => $hdydcs]);



//更新奖池
$jcfl=3;
include("./ini/hdjc_ini.php");
$hdjc=($iniFile->getItem('奖金池',$jcfl));
$hdjc=$jdsl*50000000+$hdjc;
$q2="all_jc";
mysql_query("set names utf8");
$strsql = "update $q2 set jc=$hdjc where xlid=$jcfl";//物品id号必改值
$result = mysql_query($strsql);

$iniFile->updItem('奖金池', [$jcfl => $hdjc]);





//更新奖池


//路径
$inina="phb11.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} else{
echo "<font color=black>对不起！需要〖金豆〗x".$jdsl."</font>"."<br>";
}
} else{	
echo "<font color=red>对不起！您今日在疯狂摇一摇（铂金场）中已达到了最大限制，请于明日再来</font><br>";
} 


	echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=441;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回继续摇点</font></a>"."<font color=black></font>"."<br>";
	




	
	} elseif($npcc ==7){

$hdydtz=6;
include("./ini/yd04_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));
if($hdyd[免费次数]<$hdydtz){//判断是否超限制
$hdydcs=$hdyd[免费次数]+1;
//随机
//随机
$bz= rand(1, 6);

if($bz ==6){//免费摇点
echo "<font color=red>真是运气爆棚啊~~恭喜你！在疯狂摇一摇（铂金场）中摇到了".$bz."点</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在疯狂摇一摇（铂金场）中逆天的摇出了".$bz."点！！大奖究竟花落谁家呢？让我们拭目以待~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>恭喜你！在疯狂摇一摇（铂金场）中摇到了".$bz."点</font><br>";
} 
$ds01=$hdyd[今日点数]+$bz;
$ds02=$hdyd[活动点数]+$bz;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yd04";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$ds01,ds02=$ds02,yd01=$hdydcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yd04_ini.php");
$iniFile->updItem('摇点信息', ['今日点数' => $ds01,'活动点数' => $ds02,'免费次数' => $hdydcs]);
//路径
$inina="phb12.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} else{	
echo "<font color=red>对不起！您今日在疯狂摇一摇（铂金场）中已达到了最大限制，请于明日再来</font><br>";
} 

	echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=442;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回继续摇点</font></a>"."<font color=black></font>"."<br>";
	


} elseif($npcc ==8){
	

	
$hdydtz=4;
include("./ini/yd04_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));

	include("./ini/yd04_ini.php");
$hdyd=($iniFile->getCategory('摇点信息'));
if($hdyd[收费次数]<$hdydtz){//判断是否超限制
$hdydcs=$hdyd[收费次数]+1;





$jdsl=($hdyd[收费次数]+1)*10;
if($jdsl ==""){
$jdsl=999;	
} else{
}
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$jdsl;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据

include("./pz/ini_pzz026.php");
	
if ($pd==2) {

//随机
//随机
$bz= rand(1, 6);

if($bz ==6){//免费摇点
echo "<font color=red>真是运气爆棚啊~~恭喜你！在疯狂摇一摇（铂金场）中摇到了".$bz."点</font><br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在疯狂摇一摇（铂金场）中逆天的摇出了".$bz."点！！大奖究竟花落谁家呢？让我们拭目以待~~";
include("./msg/msgg02.php");
} else{	
echo "<font color=red>恭喜你！在疯狂摇一摇（铂金场）中摇到了".$bz."点</font><br>";
} 
$ds01=$hdyd[今日点数]+$bz;
$ds02=$hdyd[活动点数]+$bz;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yd04";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$ds01,ds02=$ds02,yd02=$hdydcs where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yd04_ini.php");
$iniFile->updItem('摇点信息', ['今日点数' => $ds01,'活动点数' => $ds02,'收费次数' => $hdydcs]);



//更新奖池
$jcfl=4;
include("./ini/hdjc_ini.php");
$hdjc=($iniFile->getItem('奖金池',$jcfl));
$hdjc=$jdsl*50000000+$hdjc;
$q2="all_jc";
mysql_query("set names utf8");
$strsql = "update $q2 set jc=$hdjc where xlid=$jcfl";//物品id号必改值
$result = mysql_query($strsql);

$iniFile->updItem('奖金池', [$jcfl => $hdjc]);





//更新奖池


//路径
$inina="phb12.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} else{
echo "<font color=black>对不起！需要〖金豆〗x".$jdsl."</font>"."<br>";
}
} else{	
echo "<font color=red>对不起！您今日在疯狂摇一摇（铂金场）中已达到了最大限制，请于明日再来</font><br>";
} 


	echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=442;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回继续摇点</font></a>"."<font color=black></font>"."<br>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
} else{	
	echo "<font color=red>这个未进行添加</font><br>";
} 
	
	
	
	
	
	
	
	
	
	

		echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";
	 flock($fp,LOCK_UN);
	} else{	
echo "<font color=black>服务器睡着了</font><br>";

		echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";
}
	

?>