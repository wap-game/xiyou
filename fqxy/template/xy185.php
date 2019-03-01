<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));
$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){
	
	if($bpid>=1){
	
	if($_POST['submit']){
$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);

include("wj/gjjx.php");


}
	
	
	
	
	
	
	
	
echo "<font color=black>为自己的国家尽自己的一份力，你考虑好了吗？</font><br>";


} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
}







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

<form  action="<?echo "xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1"?>" method="POST">
<input type="tel" name="sl" placeholder="请输入你需要捐献的银两"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="捐献" id="search1"><br>
</form>






<?php
echo "<font color=red>温馨提示：捐献银两时请注意国库银两上限以免造成浪费！！</font><br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国家</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");














