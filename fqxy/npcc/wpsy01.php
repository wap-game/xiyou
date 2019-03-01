<?php






$hff=1;
$dqwp=0;

if($hff==1){
if($_POST['submit']){
	

$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);
$dqwp=1;




include("wpsy02.php");


}












}
if($dqwp==1){
exit();
}





include("pz/pz03.php");//判断是否为批量药品使用id
if ($mmd2==2) {
$npcc=$npccfz;	
include("wpsy03.php");
}

include("pz/pz04.php");//判断是否为批量药品上限使用id
if ($mmd3==2) {
	$npcc=$npccfz;
include("wpsy04.php");
}

include("wp/wpxx.php");


	
	
echo "<font color=red>你最多可使用".$wpmz."x".$wpsl."</font>"."<br>";
echo "<font color=black>请输入你要使用多少".$wpmz."呢？</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=330;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用+1</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=331;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用+5</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=332;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用+10</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=333;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用全部</font></a>"."<br>";


?>
<form  action="" method="post">
<input type="tel" name="sl" placeholder="请输入"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="使用" id="search1"><br>
</form>
<?php
echo "<br>";
echo "<br>";
?>



