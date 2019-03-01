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
	
	
	
	include("wj/jlbp.php");
	
	
	
	
	
	
	
	
	
	
	
		
	} else{



echo "<font color=red>你输入的国家名包含敏感字符请重新输入</font>"."<br>";
}
} else{


echo "<font color=red>国家名长度不能超过限制</font><br>";


}


} else{


echo "<font color=red>国家名不能为空</font><br>";


}

	
	


}
	
	
	
	
	
	
echo "<font color=black>请输入你要建立的国家名字</font>"."<br>";
	

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>

<form  action="" method="POST">
<input  type="text" name="wjtoke" placeholder="请输入要建立的国家名字"id='search'><br>
<input  type="submit" name="submit" value="确认"id="search1" ><br>
</form>

<?


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");









?>
