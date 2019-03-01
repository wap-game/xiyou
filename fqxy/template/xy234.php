<?php



//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckid=($iniFile->getItem('最后页面id','ckid'));
$wjid1=$wjid;
$wjid=$ckid;












$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];


include("./ini/gszb_ini.php");
$zbzz=($iniFile->getItem('装备id',$zbid));

if($zbzz !=""){









$wjid=$wjid1;//自己
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));

$wjid=$ckid;//对方
include("./ini/gszb_ini.php");
$wpjgg=($iniFile->getItem('挂售价格',$zbid));

if($yl>=$wpjgg){
	
$wjid=$wjid1;//自己
include("./ini/bbrl_ini.php");
# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量']));
$bbrlb=$wjxx[背包容量];

//调用物品信息
include("./wp/zbxx.php");
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wp25;
$wprl=$bbrlb+$rl;
if($wprl<=$ckbbrla){
	


///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


$wjid=$ckid;//对方

# 获取一个分类下某个子项的值
$xvjj=($iniFile->getItem('装备星级',$zbid));
$zbkk1=($iniFile->getItem('装备孔1',$zbid));
$zbkk2=($iniFile->getItem('装备孔2',$zbid));
$zbkk3=($iniFile->getItem('装备孔3',$zbid));
$zbkk4=($iniFile->getItem('装备孔4',$zbid));
$zbkk5=($iniFile->getItem('装备孔5',$zbid));
$zbxqq1=($iniFile->getItem('装备镶嵌1',$zbid));
$zbxqq2=($iniFile->getItem('装备镶嵌2',$zbid));
$zbxqq3=($iniFile->getItem('装备镶嵌3',$zbid));
$zbxqq4=($iniFile->getItem('装备镶嵌4',$zbid));
$zbxqq5=($iniFile->getItem('装备镶嵌5',$zbid));
$wpjg=($iniFile->getItem('挂售价格',$zbid));
	//背包减
include("./sql/mysql.php");//调用数据库连接 


$q2="gszb".$wjid;		
$strsql = "delete from $q2 where id=$npccid ";//物品id号必改值
$result = mysql_query($strsql);	




///////////////////////////////////////////银两修改////////////////////////////////////

$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl+$wpjg;
if($wjyll>=99999999999){
$wjyll=99999999999;
} else{

} 

$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);

///////////////////////////////////////////银两修改////////////////////////////////////










$wjid=$wjid1;//自己
//仓库加
//获取最大值
$q2="zb".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$q2="zb".$wjid;
$sql = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5)  values('$maxidd','$npcc','$xvjj','$zbkk1','$zbxqq1','$zbkk2','$zbxqq2','$zbkk3','$zbxqq3','$zbkk4','$zbxqq4','$zbkk5','$zbxqq5')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }


///////////////////////////////////////////银两修改////////////////////////////////////

$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl-$wpjg;

if($wjyll<=0){
$wjyll=0;
} else{

} 
$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);

///////////////////////////////////////////银两修改////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////

$wjid=$ckid;//对方
include("./ini/gszb_ini.php");
/////////////////////////////////缓存ini删除////////////////////////////
# 删除一个子项
$iniFile->delItem('序列', $zbid);
# 删除一个子项
$iniFile->delItem('装备id', $zbid);
# 删除一个子项
$iniFile->delItem('装备名字', $zbid);
# 删除一个子项
$iniFile->delItem('装备星级', $zbid);



# 删除一个子项
$iniFile->delItem('装备孔1', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔2', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔3',$zbid);

# 删除一个子项
$iniFile->delItem('装备孔4', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔5', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌1', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌2', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌3', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌4', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌5', $zbid);
# 删除一个子项
$iniFile->delItem('挂售价格', $zbid);
/////////////////////////////////缓存ini删除////////////////////////////

/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////
$wjid=$wjid1;//自己
//ini文件名字
$inina="zb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////

//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
include("wp/zbxj.php");
$zbxjj=$xjname;
//调用装备信息
include("./wp/zbxx.php");

$clname=$wp1;


//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

$wjid=$ckid;//对方
include("./ini/gsrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wp25;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);


$wjid=$wjid1;//自己
//ini文件名字
include("./ini/bbrl_ini.php");

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wp25;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);


//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



$wjid=$wjid1;//自己
$u_wjid=$wjid1;
include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));

	//调用msg.ini是否存在
 $wjtake="买走了你挂售的".$zbxjj.$xxxbs.$clname."，获得".$wpjg."银两";
 
 
 
 $wjid=$ckid;//对方
include("./ini/msg_ini.php");
$hkeyltpx1[]="";
$hltpx1="";
$arr3="";
# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($hltpx1) as $key){
$hkeyltpx1[]=$hltpx1[$key];
}
	
	
$tmp1="排序";
$arr3=$hkeyltpx1;
foreach( $arr3 as $k=>$v) {
    if($tmp1 == $v) unset($arr3[$k]);
}

$ltmax1=max($arr3);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $u_wjid]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 

///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////





	} else{


echo "<font color=red>对不起，你的背包已放不下任何装备了</font>"."<br>";
//echo "<br>";



}
	
	
	
} else {
echo "<font color=red>对不起！你银两不足！</font>"."<br>";
echo "<br>";
}
} else{
echo "<font color=red>该装备已被对方下架或者被买走了！！</font>"."<br>";

} 


$zsspd2=1;
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
$wjid=$wjid1;//自己
$npcc=$ckid;
include("template/xy232.php");

//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");







?>