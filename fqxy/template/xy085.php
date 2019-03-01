<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//副本激活事件


include("./wj/fbmz.php");//npc页面

if($fbmz!=1){
$inina1=$inina;
echo "<font color=black>你成功激活了".$fbmz."</font></a>"."<br>";
include("./sql/mysql.php");//调用数据库连接 


//写入日常
//获取最大值
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,rwid,rwbl,rwmz,ysg,yisg,rwfl)  values('$maxidd','$npcc','0','$fbmz','0','0','3')";

 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
$inina='yxrw.ini';
$path='./ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  







$nowtime=date('Y-m-d H:i:s');
$q2="fb".$wjid;
$strsql = "update $q2 set fb='$nowtime',wc=1,cs=0 where id=$npcc";//物品id号必改值
$result = mysql_query($strsql);

//路径
$path='./ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina1;
$iniFile = new iniFile($ininame);
$iniFile->updItem($npcc, ['激活时间' => $nowtime,'完成情况' => 1,'重置次数' => 0,'怪物1' => 1,'怪物2' => 1,'怪物3' => 1,'怪物4' => 1,'怪物5' => 1,'怪物6' => 1,'怪物7' => 1,'怪物8' => 1,'怪物9' => 1]);




} else{	

echo "<font color=black>激活失败了！请尝试联系小轩gm解决此问题</font>"."<br>";

}


echo "<br>";
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