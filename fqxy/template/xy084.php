<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$szbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$npcc=$npcc;

//调用装备信息
include("./wp/zbxx.php");
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
$sszbmz=($iniFile->getItem('装备名字',$szbid));
$ssxvjj=($iniFile->getItem('装备星级',$szbid));
$sszbkk1=($iniFile->getItem('装备孔1',$szbid));
$sszbkk2=($iniFile->getItem('装备孔2',$szbid));
$sszbkk3=($iniFile->getItem('装备孔3',$szbid));
$sszbkk4=($iniFile->getItem('装备孔4',$szbid));
$sszbkk5=($iniFile->getItem('装备孔5',$szbid));
$sszbxqq1=($iniFile->getItem('装备镶嵌1',$szbid));
$sszbxqq2=($iniFile->getItem('装备镶嵌2',$szbid));
$sszbxqq3=($iniFile->getItem('装备镶嵌3',$szbid));
$sszbxqq4=($iniFile->getItem('装备镶嵌4',$szbid));
$sszbxqq5=($iniFile->getItem('装备镶嵌5',$szbid));


	 $q2="zbb".$wjid;
include("./sql/mysql.php");//调用数据库连接
$strsql = "delete from $q2 where zbid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);
 $q2="zb".$wjid; 
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

$sql1 = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5,zbpd)  values('$maxidd','$npcc','$ssxvjj','$sszbkk1','$sszbxqq1','$sszbkk2','$sszbxqq2','$sszbkk3','$sszbxqq3','$sszbkk4','$sszbxqq4','$sszbkk5','$sszbxqq5','0')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	


 //调用装备信息
//include("./wp/zbxx.php");





//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
$zbxjj=$xvjk;
$wp1=$zbxjj.$xxxbs.$clname;


$xvjj=$ssxvjj;
include("wp/zbxj.php");
$xvjk=$xjname;

$clname= $sszbmz;

$zbkk1=$sszbkk1;
$zbkk2=$sszbkk2;
$zbkk3=$sszbkk3;
$zbkk4=$sszbkk4;
$zbkk5=$sszbkk5;

$zbxqq1=$sszbxqq1;
$zbxqq2=$sszbxqq2;
$zbxqq3=$sszbxqq3;
$zbxqq4=$sszbxqq4;
$zbxqq5=$sszbxqq5;

//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
$zbxjj=$xvjk;
$wp1=$zbxjj.$xxxbs.$clname;

 
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



echo "<font color=black>你卸下了".$wp1."</font>"."<br>"; 







include("./ini/user_ini.php");

# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('最后页面id','页面id'));

if ($ymid==615) {
include("template/xy615.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
}else{
include("template/xy081.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
}	












} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>