<?php
$weekarray=array("7","1","2","3","4","5","6");
$week=$weekarray[date("w")];
if($week==6){
echo "<font color=black>全体人员进行休整今天不开放国战哦！请于明天再来（周六停战）</font>"."<br>";
} else{
include("./wj/gztime.php");//调用国战时间


if($gztime==2){
echo "<font color=black>报名参与国战的时间已过或者国战已结束,请明天不要再迟到了哦（除周六每天00:00-20:55期间报名）</font>"."<br>";
} else{

//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));


if($bpid>=1){

include("./ini/bpp_ini.php");
$xl=($iniFile->getItem('序列',$wjid));
$gjgx1=($iniFile->getItem('贡献',$xl));
$gjgx2=($iniFile->getItem('历史贡献',$xl));
include("./ini/bp_ini.php");	
# 获取一个分类下所有数据$
$bp=($iniFile->getCategory('国家信息'));
$xbzmz=$bp[现任君主];
$xwjid=$bp[现任君主id];


	
	//判断攻城报名表是否合法	
include("./ini/xtbl_ini.php");
$m= date('m')*1;
$d= date('d')*1;

if($xtbl1==$m&&$xtbl2==$d){
} else{	
include("./sql/mysql.php");//调用数据库连接 
//清空报名表
$q2="gz02";
$strsql = "truncate table $q2";
$result = mysql_query($strsql);
//更新缓存数据
$inina="gz02.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
if($xtbl1==""){
//新增数据
$q2="xtbl";
$sql = "insert into $q2 (id,bl1,bl2)  values('1','$m','$d')";
if (!mysql_query($sql,$conn)){
die('Error: ' . mysql_error());
}

//更新缓存数据
$inina="xtbl.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
} else{
//修改数据
$q2="xtbl";
$strsql = "update $q2 set bl1=$m,bl2=$d where id=1";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/xtbl_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('国战判断时间', ['月' => $m]);
$iniFile->updItem('国战判断时间', ['日' => $d]);
//更新缓存数据
$inina="gz02.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
}	
}
//判断攻城报名表是否合法	

	

	

//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmzr=($iniFile->getItem('玩家信息','帮派名字'));

if($bpid>=1){
$bpzw=($iniFile->getItem('玩家信息','帮派职务'));
if($bpzw=="辅助大臣"){  
$bpzw=2;
} elseif($bpzw=="军机大臣"){  
$bpzw=3;
} elseif($bpzw=="财政大臣"){  
$bpzw=4;
} elseif($bpzw=="工部大臣"){  
$bpzw=5;
} elseif($bpzw=="外交大臣"){  
$bpzw=6;
} elseif($bpzw=="军团长"){  
$bpzw=7;
} elseif($bpzw=="君主"){  
$bpzw=8;
} else{
$bpzw=1;
}


if($bpzw>=2&&$bpzw<=8){
////////////////////更新排行榜国家和个人积分榜//////////////
include("./ini/gz05_ini.php");
$gztime=($iniFile->getItem('国战判断时间','1'));

if($gztime==""){	
	
include("./sql/mysql.php");//调用数据库连接 
$nowtime=date('Y-m-d H:i:s');	
$q2="gz05";
mysql_query("set names utf8");	
$sql = "insert  into $q2(id,gztime)  values('1','$nowtime')";
$query = mysql_query($sql);
//更新缓存数据
$inina="gz05.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/gz05_ini.php");
$gztime=($iniFile->getItem('国战判断时间','1'));
} else{	
include("./ini/gz05_ini.php");
$gztime=($iniFile->getItem('国战判断时间','1'));
} 

	
////////////////////更新排行榜国家和个人积分榜//////////////






	//判断是否清掉国战积分榜
$nowtime=date('Y-m-d H:i:s');
$gztime1 = substr($gztime,0,10); 
$nowtime1 = substr($nowtime,0,10); 


if($gztime1==$nowtime1&&$gztime1!=""){//今天不是今天数据验证

} else{
include("./sql/mysql.php");//调用数据库连接 	
$q2="gz03";
$strsql = "truncate table $q2";//物品id号必改值
$result = mysql_query($strsql);
$q2="gz05";
$strsql = "truncate table $q2";//物品id号必改值
$result = mysql_query($strsql);
//更新缓存数据
//重新写入排行榜计时
$nowtime=date('Y-m-d H:i:s');
//添加时间
$sql = "insert  into $q2(id,gztime)  values('1','$nowtime') ";
$query = mysql_query($sql);


//更新缓存数据
$inina="gz03.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
$inina="gz05.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} 
//判断是否清掉国战积分榜



//排行榜计时器

include("./ini/gz05_ini.php");
$gztime=($iniFile->getItem('国战判断时间','2'));
if($gztime==""){	
	
include("./sql/mysql.php");//调用数据库连接 
$nowtime=date('Y-m-d H:i:s');	
$q2="gz05";
mysql_query("set names utf8");	
$sql = "insert  into $q2(id,gztime)  values('2','$nowtime')";
$query = mysql_query($sql);
//更新缓存数据
$inina="gz05.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/gz05_ini.php");
$gztime=($iniFile->getItem('国战判断时间','2'));
} else{	
include("./ini/gz05_ini.php");
$gztime=($iniFile->getItem('国战判断时间','2'));
} 




//排行榜计时器


//判断是否清掉国战个人积分榜
$nowtime=date('Y-m-d H:i:s');
$gztime1 = substr($gztime,0,10); 
$nowtime1 = substr($nowtime,0,10); 
if($gztime1==$nowtime1&&$gztime1!=""){//今天不是今天数据验证

} else{
include("./sql/mysql.php");//调用数据库连接 	
$q2="gz04";
$strsql = "truncate table $q2";//物品id号必改值
$result = mysql_query($strsql);
$q2="gz05";
$strsql = "truncate table $q2";//物品id号必改值
$result = mysql_query($strsql);
//更新缓存数据
//重新写入排行榜计时
$nowtime=date('Y-m-d H:i:s');
//添加时间
$sql = "insert  into $q2(id,gztime)  values('2','$nowtime') ";
$query = mysql_query($sql);
//更新缓存数据
$inina="gz04.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
$inina="gz05.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} 
//判断是否清掉国战积分榜


include("./sql/mysql.php");//调用数据库连接 
$q2="gz02";	
mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where gjmz='$bpmzr'",$conn);
$info1=@mysql_fetch_array($sql1);
$gjmz=$info1[gjmz];


if($gjmz!=$bpmzr){
	

////////////////////将报名的国家写入国战2表内////////////////////////
$q2="gz02";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
mysql_query("set names utf8");
$maxid=0;
$maxidd=$maxid+1;
$sql = "insert into $q2 (id,gjmz,gjid,jzmz,jzid,gjjf)  values('$maxidd','$bpmzr','$bpid','$xbzmz','$xwjid','0')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }


} else{

mysql_query("set names utf8");

$maxidd=$maxid+1;
$sql = "insert into $q2 (id,gjmz,gjid,jzmz,jzid,gjjf)  values('$maxidd','$bpmzr','$bpid','$xbzmz','$xwjid','0')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }



}

//更新缓存数据
$inina="gz02.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

////////////////////将报名的国家写入国战2表内////////////////////////

	

//更新国家积分榜
include("./ini/gz03_ini.php");
$gjmz=($iniFile->getItem('已报名国家','国家名字'));
if($gjmz==""){

$q2="gz03";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){

mysql_query("set names utf8");
$maxid=0;
$maxidd=$maxid+1;

$sql = "insert into $q2 (id,gjmz,gjid,jzmz,jzid,gjjf,lq)  values('$maxidd','$bpmzr','$bpid','$xbzmz','$xwjid','0','0')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//更新缓存数据
$inina="gz03.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

} else{

mysql_query("set names utf8");

$maxidd=$maxid+1;
$sql = "insert into $q2 (id,gjmz,gjid,jzmz,jzid,gjjf,lq)  values('$maxidd','$bpmzr','$bpid','$xbzmz','$xwjid','0','0')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
}
//更新缓存数据
$inina="gz03.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

} else{
$q2="gz03";
$strsql = "update $q2 set gjjf=0,lq=0 where gjid=$bpid";//国家官员死亡次数
$result = mysql_query($strsql);




//================
} 

//更新国家积分榜

////////////////////更新国战个人死亡次数////////////////////////


////////////////////更新国战个人死亡次数////////////////////////


////////////////////更新国战防守方////////////////////////


////////////////////更新国战防守方////////////////////////

////////////////////更新国战地图神兽大门血量//////////////



////////城池大门//////////
$bossid=1;//世界boss-ID号
$npcc=$bossid;
//更新缓存数据
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/boss_ini.php");
////////城池大门//////////


////////中门//////////
$bossid=2;//世界boss-ID号
$npcc=$bossid;
//更新缓存数据
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/boss_ini.php");
////////中门//////////

////////守卫//////////
$bossid=3;//世界boss-ID号
$npcc=$bossid;
//更新缓存数据
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/boss_ini.php");
////////守卫//////////


////////守卫//////////
$bossid=4;//世界boss-ID号
$npcc=$bossid;
//更新缓存数据
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/boss_ini.php");
////////守卫//////////

////////守卫//////////
$bossid=5;//世界boss-ID号
$npcc=$bossid;
//更新缓存数据
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/boss_ini.php");
////////守卫//////////

////////守卫//////////
$bossid=6;//世界boss-ID号
$npcc=$bossid;
//更新缓存数据
$inina="boss_".$bossid.".ini";
$path='acher/all_boss';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
include("./ini/boss_ini.php");
////////守卫//////////


//更新缓存数据
$inina="gz06.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据




////////////////////更新国战地图神兽大门血量//////////////
echo "<font color=black>恭喜你报名成功！请于21:00整前来参加国战</font>"."<br>";

} else{
echo "<font color=black>对不起！你的国家".$bpmzr."已经报名参与了今天的攻城战无需重复报名</font>"."<br>";
}







} else{
echo "<font color=black>对不起！报名参加国战需要国家官员或者君主来报名</font>"."<br>";
}	
} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
}		

		
	
	
	
	
	
	
	
	
	
	
	
} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
}		


} 
} 


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");







?>