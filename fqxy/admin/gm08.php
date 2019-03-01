<?php





  





echo "<font color=red>【发布系统消息】</font>"."<br>";
if($_POST['submit']){
$xtxx= $_POST['sl'];


include("./msg/msgg02.php");

if($xtmsg==2){
echo"<font color=black>发布系统消息成功</font></a>";
echo"<font color=black>发布内容：".$xtxx."</font></a>";
}else{
}


}else{

}
?>
<form  action="" method="post">
信息：<input type="text" name="sl" placeholder="请输入你要发布的系统消息"id='search'><br>
<input  type="submit" name="submit"  value="发布" id="search1"><br>
</form>
<?

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";
?>





