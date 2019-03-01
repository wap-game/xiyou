<?php






$hff=1;
$dqwp=0;

if($hff==1){
if($_POST['submit']){
	

$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);
$dqwp=1;
include("mdx02.php");


}












}
if($dqwp==1){
exit();
}







echo "<font color=black>请输入你要购买多少".$wpmz."呢？</font>"."<br>";


?>
<form  action="" method="POST">
<input type="tel" name="sl" placeholder="请输入"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="购买" id="search1"><br>
</form>
<?php
echo "<br>";
echo "<br>";
?>


