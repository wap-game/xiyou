<?php

//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$ckid=$npcck;
$wjid=$ckid;
$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){
	


	

echo "<font color=black>玩家PK信息（战胜）：</font><br>";
echo "<font color=black>------------------------------</font><br>";

$wjid=$wjid1;
include("./ini/zt_ini.php");
$username1=($iniFile->getItem('玩家信息','玩家名字'));
include("./ini/user_ini.php");
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));

$wjid=$ckid;
include("./ini/zt_ini.php");
$username=($iniFile->getItem('玩家信息','玩家名字'));
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$iniFile->updItem('玩家信息', ['红' => $nwjxx[hp]]);	




//清除掉附近玩家信息
//路径
$path='acher/map';
//$inina="gczc".$dtx."x".$dty.".ini";
$ydtx=$dtx;
$ydty=$dty;
include("./wj/mapid.php");

$ininame = $path."/".$inina;
$filename = $ininame;
if(!file_exists($filename)){
$counter_file=$ininame;//文件名及路径,在当前目录下新建aa.txt文件 
$fopen=fopen($counter_file,   'wb ');//新建文件命令 
fputs($fopen,   '[地图信息]');//向文件中写入内容; 
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
fclose($fopen); 
} else {
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
}
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

//清除掉附近玩家信息






if($dtx==74){
//送对方战场回墓地，其它区域回十字
include("./ini/user_ini.php");
include("./acher/guoz/zlbp.php");


//扣除死亡次数
include("./ini/bpp_ini.php");
$xl=($iniFile->getItem('序列',$wjid));
//$gj06=($iniFile->getItem('国战积分',$xl));
$gj05=($iniFile->getItem('国战死亡次数',$xl));
$gj05=$gj05-1;
$iniFile->updItem('国战死亡次数', [$xl => $gj05]);

include("./ini/user_ini.php");
//扣除死亡次数
if($zlbp==$bpid){
if($gj05>=0){
$iniFile->updItem('地图坐标', ['y' => '22']);	
} else{	
echo "<font color=blue>恭喜你！已成功淘汰掉对方（对方国战死亡次数已用完）</font>"."<br>";
$iniFile->updItem('地图坐标', ['x' => '1']);	
$iniFile->updItem('地图坐标', ['y' => '0']);	
} 

} else{	
if($gj05>=0){
$iniFile->updItem('地图坐标', ['y' => '16']);	
} else{	
echo "<font color=blue>恭喜你！已成功淘汰掉对方（对方国战死亡次数已用完）</font>"."<br>";
$iniFile->updItem('地图坐标', ['x' => '1']);	
$iniFile->updItem('地图坐标', ['y' => '0']);	
} 

}






//送对方战场回墓地，其它区域回十字
$wjid=$wjid1;
include("./ini/zt_ini.php");
$uname=($iniFile->getItem('玩家信息','玩家名字'));
$bpid=($iniFile->getItem('玩家信息','帮派id'));
//增加国战积分
include("./ini/gz03_ini.php");
$gjjf=($iniFile->getItem('国家积分',$bpid));
$gjjf=$gjjf+1;
include("./ini/bpp_ini.php");
$xl=($iniFile->getItem('序列',$wjid));
$gj06=($iniFile->getItem('国战积分',$xl));

	if($xl >=1){	


$bpjf=$gj06+1;
include("./ini/gz03_ini.php");
$iniFile->updItem('国家积分', [$bpid => $gjjf]);
include("./ini/gz02_ini.php");
$xl=($iniFile->getItem('idd',$bpid));


	if($xl >=1){	

$iniFile->updItem('国家积分', [$xl => $gjjf]);
include("./ini/bpp_ini.php");
$xl=($iniFile->getItem('序列',$wjid));
$iniFile->updItem('国战积分', [$xl => $bpjf]);
//将积分写入排行榜

include("./ini/gz04_ini.php");
$jfpd=($iniFile->getItem($wjid,'玩家id'));
if($jfpd!=""){
include("./ini/gz04_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('个人积分', [$wjid => $gjjf]);
} else{
include("./sql/mysql.php");//调用数据库连接 
$q2="gz04";	
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
} else{
}
include("./ini/zt_ini.php");
$uname=($iniFile->getItem('玩家信息','玩家名字'));
$q2="gz04";	
mysql_query("set names utf8");
$maxidd=$maxid+1;
$sql = "insert into $q2 (id,wjid,wjname,wjgzjf,wjlq)  values('$maxidd','$wjid','$uname','$gjjf','1')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
 //更新缓存数据
$inina="gz04.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
} 

echo "<font color=blue>击杀敌对国家玩家获得国家积分+1，个人积分+1</font>"."<br>";
} else{	
echo "<font color=blue>不会获得任何积分（造成这种情况因为之前参加国战后没有出去过，请自行解决否则不会获得任何积分）</font>"."<br>";


}
} else{	
echo "<font color=blue>不会获得任何积分（造成这种情况因为之前参加国战后没有出去过，请自行解决否则不会获得任何积分）</font>"."<br>";


}

//增加国战积分



} else{	

include("./ini/user_ini.php");
$iniFile->updItem('地图坐标', ['x' => '1']);	
$iniFile->updItem('地图坐标', ['y' => '0']);	


}



$wjid=$ckid;

echo "<font color=red>".$username."被你打死了，并且狠狠被鞭尸一万次</font>"."<br>";

include("./ini/pk_ini.php");
$iniFile->updItem('玩家pk', [$wjid1 => '1']);	
$iniFile->updItem('被打死', [$wjid1 => '2']);	
$iniFile->updItem('被打死', ['初始' => '999']);	
$iniFile->updItem('玩家名字', ['初始' => $username1]);	
$wjid=$wjid1;
include("./ini/pk_ini.php");
$iniFile->updItem('玩家pk', [$ckid => '1']);	







$wjid=$wjid1;
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续走</font></a>"."<br>";
echo "<br>";
echo "<font color=black>----------------------</font>"."<br>";


//cmd及超链接值
include("fhgame.php");
	
	
	
	
	
	
	
	
	
	
	
	$wjid1=$wjid;

} else{	
}

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini





?>