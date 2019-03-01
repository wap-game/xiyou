<?php

/////////公共锁
$path='acher/lock';//路径
$lockmz='ltbw_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁

if($all_lock2==1){

$hdid=298;
$npcc=$hdid;	
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
$hdlq=2;
} else{	
}

//如果跨天则重置次数和时间
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
$inina="ltmb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=5 where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => '5']);	
$hdcs=5;

} else{	

} 
/*
include("./ini/ltmb_ini.php");	
$ltgx=($iniFile->getItem('擂台更新','初始'));
*/
include("./ini/ltmb_ini.php");	
$ltbw=($iniFile->getItem('擂台比武','初始'));



include("./ini/ltbw_ini.php");
# 获取一个分类下某个子项的值
$ltmz1=($iniFile->getItem('占领玩家','1'));
$ltmz2=($iniFile->getItem('占领玩家','2'));
$ltmz3=($iniFile->getItem('占领玩家','3'));
$ltmz4=($iniFile->getItem('占领玩家','4'));
$ltmz5=($iniFile->getItem('占领玩家','5'));
$ltmz6=($iniFile->getItem('占领玩家','6'));
$ltmz7=($iniFile->getItem('占领玩家','7'));
$ltmz8=($iniFile->getItem('占领玩家','8'));
$ltmz9=($iniFile->getItem('占领玩家','9'));
$ltmz10=($iniFile->getItem('占领玩家','10'));

$ltpmid1=($iniFile->getItem('玩家擂台排名','1'));
$ltpmid2=($iniFile->getItem('玩家擂台排名','2'));
$ltpmid3=($iniFile->getItem('玩家擂台排名','3'));
$ltpmid4=($iniFile->getItem('玩家擂台排名','4'));
$ltpmid5=($iniFile->getItem('玩家擂台排名','5'));
$ltpmid6=($iniFile->getItem('玩家擂台排名','6'));
$ltpmid7=($iniFile->getItem('玩家擂台排名','7'));
$ltpmid8=($iniFile->getItem('玩家擂台排名','8'));
$ltpmid9=($iniFile->getItem('玩家擂台排名','9'));
$ltpmid10=($iniFile->getItem('玩家擂台排名','10'));




if($ltpmid1==$wjid){
$ltpmzl1=($iniFile->getItem('占领膜拜','1'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第一名】";
} elseif($ltpmid1==$wjid){  
 $ltpmzl1=($iniFile->getItem('占领膜拜','2'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第二名】";
} elseif($ltpmid3==$wjid){  
 $ltpmzl1=($iniFile->getItem('占领膜拜','3'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第三名】";
} elseif($ltpmid4==$wjid){  
 $ltpmzl1=($iniFile->getItem('占领膜拜','4'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第四名】";
} elseif($ltpmid5==$wjid){  
 $ltpmzl1=($iniFile->getItem('占领膜拜','5'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第五名】";
} elseif($ltpmid6==$wjid){   
$ltpmzl1=($iniFile->getItem('占领膜拜','6'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第六名】";
} elseif($ltpmid7==$wjid){
	$ltpmzl1=($iniFile->getItem('占领膜拜','7'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第七名】";
} elseif($ltpmid8==$wjid){  
 $ltpmzl1=($iniFile->getItem('占领膜拜','8'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第八名】";
} elseif($ltpmid9==$wjid){ 
  $ltpmzl1=($iniFile->getItem('占领膜拜','9'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第九名】";
} elseif($ltpmid10==$wjid){  
 $ltpmzl1=($iniFile->getItem('占领膜拜','10'));	
$ltpmidx="【".$ltpmzl1."次】";
$ltpmid="【第十名】";
} else{	

$ltpmidx="【0次】";
$ltpmid="【暂无排名】";

}



if($ltmz1==123){
$ltmz1="【暂无】";	
} else{	
}
if($ltmz2==123){
$ltmz2="【暂无】";	
} else{	
}
if($ltmz3==123){
$ltmz3="【暂无】";	
} else{	
}
if($ltmz4==123){
$ltmz4="【暂无】";	
} else{	
}
if($ltmz5==123){
$ltmz5="【暂无】";	
} else{	
}
if($ltmz6==123){
$ltmz6="【暂无】";	
} else{	
}
if($ltmz7==123){
$ltmz7="【暂无】";	
} else{	
}
if($ltmz8==123){
$ltmz8="【暂无】";	
} else{	
}
if($ltmz9==123){
$ltmz9="【暂无】";	
} else{	
}
if($ltmz10==123){
$ltmz10="【暂无】";	
} else{	
}





echo "<font color=red>【天下第一武道大会】</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=623;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>武道会玩法说明</font></a>"."<font color=black></font>"."<br>";
	
echo "<font color=black>我的排名：</font>"."<font color=red>".$ltpmid."</font>"."<br>";
echo "<font color=black>被人膜拜：</font>"."<font color=red>".$ltpmidx."</font>"."<br>";
echo "<font color=black>可膜拜数：</font>"."<font color=red>【".$hdcs."次】</font>"."<br>";
echo "<font color=black>今日比武：</font>"."<font color=red>【".$ltbw."次】</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=622;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【更新武道会属性】</font></a>"."<font color=black></font>"."<br>";
	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=624;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取武道大会奖励</font></a>"."<font color=black></font>"."<br>";
	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=625;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取万人膜拜奖励</font></a>"."<font color=black></font>"."<br>";
		
	
	
	
$img='pic/lt/1.png';
echo '<img src="'.$img.' "alt="图片"/>';


echo "<font color=black>".$ltmz1."</font>";



echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	
	
$img='pic/lt/2.png';
echo '<img src="'.$img.' "alt="图片"/>';
echo "<font color=black>".$ltmz2."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
		
$img='pic/lt/3.png';
echo '<img src="'.$img.' "alt="图片"/>';
echo "<font color=black>".$ltmz3."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	

echo "<font color=black>4.</font>";
echo "<font color=black>".$ltmz4."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	
	
	
echo "<font color=black>5.</font>";
echo "<font color=black>".$ltmz5."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	
	
echo "<font color=black>6.</font>";
echo "<font color=black>".$ltmz6."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	
	
echo "<font color=black>7.</font>";
echo "<font color=black>".$ltmz7."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	
	
echo "<font color=black>8.</font>";
echo "<font color=black>".$ltmz8."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	
	
echo "<font color=black>9.</font>";
echo "<font color=black>".$ltmz9."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	
echo "<font color=black>10.</font>";
echo "<font color=black>".$ltmz10."</font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=616;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看</font></a>"."<font color=black></font>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=617;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比武</font></a>"."<font color=black></font>"."<br>";
	
	
echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";
echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
} else{	
}

//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini

?>