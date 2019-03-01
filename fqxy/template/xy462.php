<?php

if($_POST['submit']){
$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);

if($sll!=0){

if($sl>=10000000&&$sl<=10000000000){


//阻塞代码防止出现脏数据
$ininalock="qtjc.txt";
$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/hdjc';
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


//添加进库

//获取个人信息
include("./ini/zt_ini.php");
$cqwjmz=($iniFile->getItem('玩家信息','玩家名字'));
$cqwjvip=($iniFile->getItem('玩家信息','vip等级'));



//获取个人信息
include("./ini/yl_ini.php");
$cqyl=($iniFile->getItem('背包仓库银两','背包银两'));
if($cqyl>=$sl){

//银两减少
$yl1=$sl;
$wwpsl=$yl1; 
include("./pz/ini_pz013.php");

include("./ini/qtjc_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="all_qtjc";
//获取最大值	
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$timex=time(true);
mysql_query("set names utf8");
$sql1 = "insert into $q2 (id,wjid,vip,wjmz,jcjg,cq,timex)  values('$maxidd','$wjid','$cqwjvip','$cqwjmz','$sl','1','$timex')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	
//更新缓存数据
$inina="qtjc.ini";
$path='acher/hdjc';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

//数字转汉字
$yl=$sl;
include("./pz/ylts.php");
$xtxx= "玩家".$cqwjmz."用".$ylxx."银两进行【开拳竞猜】，请有实力的玩家前去识破！！";
include("./msg/msgg02.php");

//添加进库


echo "<font color=red>恭喜你！使用花费了".$ylxx."银两进行【左开拳】猜拳请等待结果！！</font></a>"."<br>";




} else {
//数字转汉字
$yl=$sl;
include("./pz/ylts.php");
echo "<font color=black>对不起！你开拳价格不足".$ylxx."两</font>";
}










 flock($fp,LOCK_UN);
	} else{	

echo "服务器开小差了";





}






} else {
echo "<font color=red>开拳价格应该在1000万-100亿之间</font>"."<br>";
echo "<br>";
}

} else {

echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}










}
echo "<font color=balck>请输入你想左开拳的价格（银两）：</font>"."<br>";
?>
<form  action="" method="POST">
<input type="tel" name="sl" placeholder="银两"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="左开拳" id="search1"><br>
</form>
<?php



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=403;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回娱乐</font></a>"."<font color=black></font>"."<br>";
?>