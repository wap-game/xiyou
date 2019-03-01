<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){



if($bpid>=1){
//调用zt.ini是否存在

include("./ini/bp_ini.php");
$gjmz=($iniFile->getItem('国家信息','国家名字'));
$cc01=($iniFile->getItem('国家信息','现任君主id'));
$cc02=($iniFile->getItem('国家信息','辅助大臣id'));
$cc03=($iniFile->getItem('国家信息','军机大臣id'));
$cc04=($iniFile->getItem('国家信息','财政大臣id'));
$cc05=($iniFile->getItem('国家信息','工部大臣id'));
$cc06=($iniFile->getItem('国家信息','外交大臣id'));
$cc07=($iniFile->getItem('国家信息','军团长id'));

$bprs=($iniFile->getItem('国家信息','国家人数'));
$bprspd=$bprs-1;


$iniFile->updItem('国家信息', ['国家人数'=> $bprspd]);






   
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));

$wjid1=$wjid;
$wjid=$npcc;


include("./ini/bpp_ini.php");



$xl=($iniFile->getItem('序列',$wjid));
$gjwjmz=($iniFile->getItem('名字',$xl));
$gjwjmzid=($iniFile->getItem('名字id',$xl));

if($gjwjmzid!=$cc01&&$gjwjmzid!=$cc02&&$gjwjmzid!=$cc03&&$gjwjmzid!=$cc04&&$gjwjmzid!=$cc05&&$gjwjmzid!=$cc06&&$gjwjmzid!=$cc07){
//修改对方
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
$strsql = "update $q2 set bpid=0,bpmz=0 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$q2="bp".$bpid;
$strsql = "delete from $q2 where userid=$wjid ";//物品id号必改值
$result = mysql_query($strsql);



include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['帮派id'=> 0]);
$iniFile->updItem('玩家信息', ['帮派名字'=> 0]);
$iniFile->updItem('玩家信息', ['帮派职务'=> 0]);









 
	//调用msg.ini是否存在
 $wjtake="将你赶出了（".$gjmz."）";
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
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 


include("./ini/bpp_ini.php");


$xl=($iniFile->getItem('序列',$wjid));

# 删除一个子项
$iniFile->delItem('名字', $xl);
# 删除一个子项
$iniFile->delItem('名字id', $xl);
# 删除一个子项
$iniFile->delItem('贡献', $xl);
# 删除一个子项
$iniFile->delItem('历史贡献', $xl);
# 删除一个子项
$iniFile->delItem('序列', $wjid);




$wjid=$wjid1;











echo "<font color=red>你成功将要将".$gjwjmz."踢出".$gjmz."</font><br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=175;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国家成员</font></a>"."<br>";


} else{


echo "<font color=black>该玩家在本国家还有官职在身不允许踢出！！</font><br>";
}





echo "<br>";

	$wjid=$wjid1;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国家</font></a>"."<br>";


} else{
	

echo "<font color=black>你还未加入任何国家！！</font><br>";
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









} else{	
}
//解锁当前使用的ini
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>