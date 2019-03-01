<?php





$hff=1;
$dqwp=0;

if($hff==1){

	
if($_POST['submit']){
	

$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);
$dqwp=1;
include("xgsqt02.php");


}












}
if($dqwp==1){
exit();
}

echo "<font color=red>你最多可下架".$wpmz."x".$wpsl."</font>"."<br>";
echo "<font color=black>请输入你要下架多少".$wpmz."呢？</font>"."<br>";
echo "<font color=blue>下架全部（后续更新）</font>"."<br>";

?>
<form  action="" method="POST">
<input type="tel" name="sl" placeholder="请输入"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="下架" id="search1"><br>
</form>

<?php
echo "<br>";
echo "<br>";
?>

