<?php
if($jnid>0){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=15;
$npc[]=$jn;
echo "<font color=black>快捷键".$jn.":</font><a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jnnamex."</font></a>"."<br>";
}else{
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=15;
$npc[]=$jn;
echo "<font color=black>快捷键".$jn.":</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>选择</font></a>"."<br>";
}
?>


