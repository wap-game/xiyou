<?php





//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



$bsid=$npcc;

include("wp/zbbs.php");//调用宝石信息



echo "<font color=black>$bsmz</font>"."<br>";
echo "<font color=black>描述：$bsms</font>"."<br>"; 	


if($bsxl>0){
echo "<font color=black>镶嵌血量：".$bsxl."</font>"."<br>";

}
if($bsgj>0){
$wpp4 = ceil(($bsgj)/ 1.3);
echo "<font color=black>镶嵌攻击：".$wpp4."-".$bsgj."</font>"."<br>";

}
if($bsmg>0){
$wpp5 = ceil(($bsmg)/ 1.3);
echo "<font color=black>镶嵌魔攻：".$wpp5."-".$bsmg."</font>"."<br>";

}
if($bsfy>0){
$wpp6 = ceil(($bsfy)/ 1.3);

echo "<font color=black>镶嵌防御：".$wpp6."-".$bsfy."</font>"."<br>";
}


echo "<font color=black>价格：$bsjg</font>"."<br>";
echo "<font color=black>重量：$bszl</font>"."<br>";
echo "<font color=black>是否绑定：$bsbd</font>"."<br>"; 		











$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));


if($ymid==269){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=276;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>存入</font></a>"."<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=277;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>存入全部</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=269;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回其他</font></a>"."<br/>";





} elseif($ymid==286){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=292;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取出</font></a>"."<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=294;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取出全部</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=286;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回其他</font></a>"."<br/>";




} else{

}








echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br/>";






echo "----------------------"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=1;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏首页</font></a>"."<br/>";


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>