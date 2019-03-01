<?php



//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckid=($iniFile->getItem('最后页面id','ckid'));



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



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=239;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br/>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=226;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回挂售</font></a>"."<br>";
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



?>