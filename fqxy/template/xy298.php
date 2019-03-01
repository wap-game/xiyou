<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){








if($_POST['submit']){
	
	
	
	

	
	
	
$wjtake10= $_POST['wjtoke'];
$wjtakes2=iconv_strlen($wjtake10,"UTF-8");
$wjtake = iconv("utf-8","gbk",$wjtake10);  

if($wjtake10!=""){
if($wjtakes2>0&&$wjtakes2<=7||$wjtakes2>0&&$wjtakes2<=7){
if($wjtakes2>0){
$wjtake=$wjtake10;
} else{
}
	
	
	
	
if(preg_match("/[ ';~`@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$wjtake)){ 



$tszf=2;
} else{
$tszf=1;

}

if($tszf==1){


include("./sql/mysql.php");//调用数据库连接 

$q2="all_zt";
mysql_query("set names utf8");
$sql1=mysql_query("select username from $q2 where username='$wjtake'",$conn);
$info1=@mysql_fetch_array($sql1);
$pdbp2=$info1[username];
if($pdbp2==""){




$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set username='$wjtake' where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['玩家名字' => $wjtake]);
	include("./ini/user_ini.php");
	$cmdd=295;
	# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $cmdd]);	
$npcc=0;
include("template/xy295.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
	
	exit;
	
		} else{
			
			
	
echo "<font color=red>这个名字太火爆了换一个吧！！</font>"."<br>";		
			
			
			
	
	}
	
	} else{



echo "<font color=red>你输入的名字包含敏感字符请重新输入</font>"."<br>";
}
} else{


echo "<font color=red>名字长度不能超过限制</font><br>";


}


} else{


echo "<font color=red>名字不能为空</font><br>";


}

	
	


}









if($npcc ==1){
echo "<font color=black>你取个霸气威武的名字吧</font><br>";
echo "<font color=black>你选择了男性</font><br>";
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
$strsql = "update $q2 set sex=1 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['性别' => '1']);

} elseif($npcc ==2){
echo "<font color=black>你取个霸气威武的名字吧</font><br>";	
echo "<font color=black>你选择了女性</font><br>";
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
$strsql = "update $q2 set sex=1 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['性别' => '2']);





} else{
	
if($jcxb ==1){
echo "<font color=black>请取个霸气威武的名字吧</font><br>";
echo "<font color=black>你选择了男性</font><br>";
	} else{
echo "<font color=black>请取个霸气威武的名字吧</font><br>";	
echo "<font color=black>你选择了女性</font><br>";
} 




} 






} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>


<form  action="<?echo "xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1"?>" method="POST">
<input  type="text" name="wjtoke" placeholder="请输入你威武的名字"id='search'><br>
<input  type="submit" name="submit" value="确认"id="search1" ><br>
</form>




<?


echo "<br>";
echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");









?>











