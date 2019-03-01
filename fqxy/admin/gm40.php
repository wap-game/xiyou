<?php
echo "<font color=black>【全服补偿】</font>"."<br>";
echo "<font color=black>请输入你要全服发奖的物品id和数量</font>"."<br>";


?>




<form  action="<?echo "gm.php?wjid=$wjiddd&&pass=$password&&gid=41&&user=$wjid";?>" method="post">
物品&nbspI&nbsp&nbspD：<input type="tel" name="wp" placeholder="请输入物品ID"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
物品数量：<input type="tel" name="sl" placeholder="请输入物品数量"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="确认" id="search1"><br>
</form>

<?php

echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";
?>


