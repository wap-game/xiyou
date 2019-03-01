<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

include("./ini/post_ini.php");
$ckname=($iniFile->getItem('赠送人','初始'));
$ckid=($iniFile->getItem('赠送人ID','初始'));






echo "<font color=black>请输入你要赠送给".$ckname."(".$ckid.")的银两:</font><br>";
if($ckid>10000000){
	
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$wjid=$ckid;


$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){	
	
	
if($_POST['submit']){
$zssl= $_POST['wjtoke'];
$sll=preg_match('/^\d+$/i', $zssl);
if($sll!=0){
if($zssl>=1000&&$zssl<=99999999999){



//扣除手续费用
$bfb=floor($zssl*0.02);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$ylmm=$zssl+$ylsxf;
$wjid=$wjid1;
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));
//判断银两是否够

if($yl>=$ylmm){


//增加对方银两
include("./sql/mysql.php");//调用数据库连接 
///////////////////////////////////////////银两修改////////////////////////////////////
$wjid=$ckid;//对方
$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl+$zssl;
if($wjyll>=99999999999){
$wjyll=99999999999;
} else{

} 
$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);

///////////////////////////////////////////银两修改////////////////////////////////////




///////////////////////////////////////////银两修改////////////////////////////////////
$wjid=$wjid1;//自己
$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl-($zssl+$ylsxf);
if($wjyll<=0){
$wjyll=0;
} else{

} 

$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);

///////////////////////////////////////////银两修改////////////////////////////////////













//数字转汉字
$yl=$zssl;
include("./pz/ylts.php");
echo "<font color=red>你成功赠送".$ylxx."给了".$ckname."(".$ckid.")</font><br>";

//数字转汉字
$yl=$ylsxf;
include("./pz/ylts.php");
echo "<font color=red>附带：（".$ylxx."两手续费用）</font><br>";




///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



$wjid=$wjid1;//自己
$u_wjid=$wjid1;
include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
//数字转汉字
$yl=$zssl;
include("./pz/ylts.php");
	//调用msg.ini是否存在
 $wjtake="打赏了你".$ylxx."银两，快去抱抱大佬大腿求包养吧！！";
 

 
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

$wjid=$wjid1;//自己









} else{	
//数字转汉字
$yl=$zssl;
include("./pz/ylts.php");
echo "<font color=red>对不起！！赠送".$ylxx."两不足~~</font><br>";

//数字转汉字
$yl=$ylsxf;
include("./pz/ylts.php");
echo "<font color=red>附带：（".$ylxx."两手续费用）</font><br>";


}

} else{	
echo "<font color=red>赠送银两必须大于1000两并且小于999亿9999万9999两~~</font><br>";
}
} else{	
echo "<font color=red>输入有误，或者不能为空</font><br>";
}	
} else{	
}

} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
$wjid=$wjid1;
} else{	
echo "<font color=red>对方ID有误~~请重新赠送</font><br>";

}
?>

<form  action="" method="POST">

<input  type="text" name="wjtoke" placeholder="请输入你要赠送的银两"id='search'><br>
<input  type="submit" name="submit" value="赠送"id="search1" ><br>
</form>






<?php


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>