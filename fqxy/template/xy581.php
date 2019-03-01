<?php


	
if($_POST['submit']){
	
	
$wjtake10= $_POST['wjtoke'];
$wjtakes2=iconv_strlen($wjtake10,"UTF-8");
$wjtake = iconv("utf-8","gbk",$wjtake10);  

if($wjtake10!=""){
if($wjtakes2>0&&$wjtakes2<=60||$wjtakes2>0&&$wjtakes2<=60){
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
	$zfzh=$wjtake;
include("./ini/bdwx_ini.php");	
$iniFile->updItem('微信', ['初始' => $zfzh]);
echo "<font color=red>恭喜你！！成功绑定到了【微信】（".$zfzh."）</font>"."<br>";


	
} else{
echo "<font color=red>你输入的账号包含敏感字符请重新输入</font>"."<br>";
}
} else{


echo "<font color=red>长度不能超过20个字符</font><br>";

}


} else{


echo "<font color=red>账号不能为空</font><br>";


}

}

?>


<form  action="" method="POST">
<font color=black>请输入你的【微信】进行绑定:</font><br>
<input  type="text" name="wjtoke" placeholder="微信账号"id='search'><br>
<input  type="submit" name="submit" value="绑定"id="search1" ><br>
</form>


<?php



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=579;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<font color=black></font>"."<br>";


?>















