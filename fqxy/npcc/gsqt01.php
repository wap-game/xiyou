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
include("gsqt02.php");


}












}
if($dqwp==1){
exit();
}

echo "<font color=red>你最多可挂售".$wpmz."x".$wpsl."</font>"."<br>";







//echo "<font color=black>请输入你要挂售多少".$wpmz."呢？</font>"."<br>";
echo "<font color=black>请输入你要挂售".$wpmz."数量和单价</font>"."<br>";


//echo "<font color=blue>挂售全部（后续更新）</font>"."<br>";
?>
<form  action="" method="POST">
数量：<input type="tel" name="sl" placeholder="数量"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
单价：<input type="tel" name="gsjg" placeholder="单价"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="挂售" id="search1"><br>
</form>
<?php




echo "<br>";
echo "<br>";
?>


