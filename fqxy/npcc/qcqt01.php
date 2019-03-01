<?php





$hff=1;
$dqwp=0;

if($hff==1){
if($_POST['submit']){
	

$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);
$dqwp=1;
include("qcqt02.php");


}












}
if($dqwp==1){
exit();
}

echo "<font color=red>你最多可取出".$wpmz."x".$wpsl."</font>"."<br>";
echo "<font color=black>请输入你要取出多少".$wpmz."呢？</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=294;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取出全部</font></a>"."<br>";


?>
<form  action="" method="POST">
<input type="tel" name="sl" placeholder="请输入"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="取出" id="search1"><br>
</form>

<?php
echo "<br>";
echo "<br>";
?>

