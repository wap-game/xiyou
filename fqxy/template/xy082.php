<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//调用zt.ini是否存在
include("./ini/zt_ini.php");
$inina="zt.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$wjdj=($iniFile->getItem('玩家信息','等级'));
$mp1=($iniFile->getItem('玩家信息','门派'));
$npcc1=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$npcc=$npcc;
$snpcc=$npcc;
$xnpcc=$npccid;
$npcc10=$npcc;
//调用装备信息
include("./wp/zbxx.php");
$cwp=$wp30;

if($mp1==$wp29||$wp29==6){
if($wjdj>=$wp24){
	
if($npcc==337||$npcc==338){//婚饰
$poid=($iniFile->getItem('玩家信息','配偶id'));
$hs=1;
if($poid>=10000000){
$hs=1;
} else{
$hs=2;
} 
} else{
$hs=1;
} 



if($hs==1){


$zbid=$npcc1;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];


//调用zb.ini是否存在
   
include("./ini/zb_ini.php");


//ini文件名字
$inina="zb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);


# 获取一个分类下某个子项的值
$zbmz=($iniFile->getItem('装备名字',$zbid));
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






include("wp/zbxj.php");
$xvjk=$xjname;

$clname= $zbmz;
//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
$zbxjj=$xvjk;
$cwp1=$zbxjj.$xxxbs.$clname;












//调用zbb.ini是否存在
   
include("./ini/zbb_ini.php");

//ini文件名字
$inina="zbb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$zbflq=($iniFile->getCategory('装备分类'));

foreach(array_keys($zbflq) as $key){
$keyzbflq[]=$zbflq[$key];
}

if (in_array($cwp, $keyzbflq)) {
	

$szbid=($iniFile->getItem('装备分类id',$cwp));

$arr = explode("_",$szbid);
$snpcc=$arr[0];

//提取身上穿戴的装备属性
# 获取一个分类下某个子项的值
$szbmz=($iniFile->getItem('装备名字',$szbid));
$sxvjj=($iniFile->getItem('装备星级',$szbid));
$szbkk1=($iniFile->getItem('装备孔1',$szbid));
$szbkk2=($iniFile->getItem('装备孔2',$szbid));
$szbkk3=($iniFile->getItem('装备孔3',$szbid));
$szbkk4=($iniFile->getItem('装备孔4',$szbid));
$szbkk5=($iniFile->getItem('装备孔5',$szbid));
$szbxqq1=($iniFile->getItem('装备镶嵌1',$szbid));
$szbxqq2=($iniFile->getItem('装备镶嵌2',$szbid));
$szbxqq3=($iniFile->getItem('装备镶嵌3',$szbid));
$szbxqq4=($iniFile->getItem('装备镶嵌4',$szbid));
$szbxqq5=($iniFile->getItem('装备镶嵌5',$szbid));

if($szbmz !=""){






$q2="zbb".$wjid;
include("./sql/mysql.php");//调用数据库连接

//$sql1=mysql_query("select zbid from $q2 where zbfl=$wp30",$conn);
//$info1=@mysql_fetch_array($sql1);
$npcc=$snpcc;
$strsql = "delete from $q2 where zbfl=$cwp ";//物品id号必改值
$result = mysql_query($strsql);
 //调用装备信息
include("./wp/zbxx.php");


//获取最大值	
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

$sql1 = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5,zbfl)  values('$maxidd','$npcc10','$xvjj','$zbkk1','$zbxqq1','$zbkk2','$zbxqq2','$zbkk3','$zbxqq3','$zbkk4','$zbxqq4','$zbkk5','$zbxqq5',$cwp)";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	


 $q2="zb".$wjid;
include("./sql/mysql.php");//调用数据库连接
$strsql = "delete from $q2 where id=$xnpcc ";//物品id号必改值
$result = mysql_query($strsql);
//获取最大值	
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

$sql1 = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5,zbpd)  values('$maxidd','$snpcc','$sxvjj','$szbkk1','$szbxqq1','$szbkk2','$szbxqq2','$szbkk3','$szbxqq3','$szbkk4','$szbxqq4','$szbkk5','$szbxqq5','0')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	
//更新缓存数据
$inina="zb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
 //更新缓存数据
$inina="zbb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
 //更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据



//$npcc=$snpcc;

 //调用装备信息
//include("./wp/zbxx.php");


$xvjj=$sxvjj;
include("wp/zbxj.php");
$xvjk=$xjname;

$clname= $szbmz;

$zbkk1=$szbkk1;
$zbkk2=$szbkk2;
$zbkk3=$szbkk3;
$zbkk4=$szbkk4;
$zbkk5=$szbkk5;

$zbxqq1=$szbxqq1;
$zbxqq2=$szbxqq2;
$zbxqq3=$szbxqq3;
$zbxqq4=$szbxqq4;
$zbxqq5=$szbxqq5;

//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
$zbxjj=$xvjk;
$wp1=$zbxjj.$xxxbs.$clname;



 echo "<font color=black>你卸下了".$wp1."</font>"."<br>"; 
 } else{
} 
 
 } else{
if($cwp1 !=""){
	 $q2="zb".$wjid;
include("./sql/mysql.php");//调用数据库连接
$strsql = "delete from $q2 where id=$xnpcc ";//物品id号必改值
$result = mysql_query($strsql);
	 
	 
	 $q2="zbb".$wjid;
include("./sql/mysql.php");//调用数据库连接
	 //获取最大值	
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

	 
 $sql1 = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5,zbfl)  values('$maxidd','$snpcc','$xvjj','$zbkk1','$zbxqq1','$zbkk2','$zbxqq2','$zbkk3','$zbxqq3','$zbkk4','$zbxqq4','$zbkk5','$zbxqq5',$cwp)";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	
 
 
 //更新缓存数据
$inina="zb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
  //更新缓存数据
$inina="zbb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
  //更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
 } else{
 } 

}



echo "<font color=black>你穿戴上了".$cwp1."</font>"."<br>"; 



echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=29;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";


} else{
echo "<font color=black>对不起！你还没有结婚不适合穿戴".$wp1."</font>"."<br>"; 
echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=29;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";


} 



} else{
echo "<font color=black>对不起！你的目前的等级不适合穿戴".$wp1."</font>"."<br>"; 
	
echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=29;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";

} 

} else{
echo "<font color=black>对不起！".$wp1."职业不符合你穿戴</font>"."<br>"; 
	
echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=29;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";

} 

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>