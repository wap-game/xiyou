<?php






$hff=1;
$dqwp=0;

if($hff==1){
if($_POST['submit']){
$sl= $_POST['sl'];
$gsjg= $_POST['gsjg'];
$sll=preg_match('/^\d+$/i', $sl);
$gsjgl=preg_match('/^\d+$/i', $gsjg);
$dqwp=1;
include("gszb02.php");


}












}

if($dqwp==1){
exit();
}


echo "<font color=black>请输入你要挂售".$wp1."价格</font>"."<br>";

?>
<form  action="" method="POST">
价格：<input type="tel" name="gsjg" placeholder="价格"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="挂售" id="search1"><br>
</form>
<?php

include("./ini/yl_ini.php");
$ymid=($iniFile->getItem('背包页面','页面id'));


/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=274;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>挂售全部</font></a>"."<br>";
*/
//echo "<font color=blue>挂售全部（后续更新）</font>"."<br>";





echo "<br>";
echo "<br>";
?>



