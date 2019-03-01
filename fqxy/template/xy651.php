<?php












//阻塞代码防止出现脏数据
$ininalock="phb13.txt";
$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/phb';
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







  $sjcs=1;
	$sjcs1=1;
	$sjcs2=1;
	$sjcs3=1;
	$sjcs4=1;
	$sjcs5=1;
	$sjcs6=1;
    $sjcs7=1;
	$sjcs8=1;
	$sjcs9=1;
	$sjcs10=1;
	$sjcs11=1;
	$sjcs12=1;
	$sjcs13=1;
	$sjcs14=1;
	$sjcs15=1;
	$sjcs16=1;
    $sjcs17=1;
	$sjcs18=1;
	$sjcs19=1;
	$sjcs20=1;
	$sjcs21=1;
	$sjcs22=1;
	$sjcs23=1;
	$sjcs24=1;
	$sjcs25=1;
	$sjcs26=1;
    $sjcs27=1;
	$sjcs28=1;
	$sjcs29=1;
	$sjcs30=1;
	$sjcs31=1;
	$sjcs32=1;
	$sjcs33=1;
	$sjcs34=1;
	$sjcs35=1;
	$sjcs36=1;
    $sjcs37=1;
	$sjcs38=1;
	$sjcs39=1;
	$sjcs40=1;
	$sjcs41=1;
	$sjcs42=1;
	$sjcs43=1;
	$sjcs44=1;
	$sjcs45=1;
	
	
	$xyswxs=0;
	
	

	
	
include("./ini/rw_ini.php");
$wpsl1=($iniFile->getItem('任务数量','893'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖西游蛋糕〗";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=893;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1;

} else{	
}


	
	
	
	
	
	
	
	
	
if ($xysw1>0) {
	
echo "<font color=black>恭喜你！获得".$xysw1."积分</font><br>";	
	

	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hdph01";
$sql1=mysql_query("select ds01 from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$ds01=$info1[ds01];
if($ds01 ==""){
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$vip=($iniFile->getItem('玩家信息','vip等级'));
//获取最大值
$q2="all_hdph01";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
mysql_query("set names utf8");
$sql = "insert into $q2 (id,wjid,wjmz,vip,ds01)  values('$maxidd','$wjid','$wjmz','$vip','$xysw1')";
 if (!mysql_query($sql,$conn)){
 die('Error: ' . mysql_error());
 }
} else{	
$xysw1=$xysw1+$ds01;
$q2="all_hdph01";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$xysw1 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
} 	
//路径
$inina="phb13.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  	
	
	
	
	
	
	
	


} else{	












echo "<font color=black>对不起,你没有〖西游蛋糕〗</font><br>";
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