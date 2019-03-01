<?php




$shuax= rand(1, 6);

if ($shuax==1) {
echo "<font color=black>你知道什么是当当当?当当当就是...不是我想提示你刷新过快,是你自己刷新过快,如果你不刷新过快,我也不会提示你刷新过快...</font>"."<br>";
} elseif ($shuax==2) {
echo "<font color=black>你知道你和刘翔的区别吗?那就是你刷新再快,也没人发给你金牌...</font>"."<br>";
} elseif ($shuax==3) {
echo "<font color=black>紫霞气息奄奄的说道:我只知道看贴不回后果很严重,没想到刷新过快后果更加严重...我猜的到这开头,却猜不中这结局...</font>"."<br>";
} elseif ($shuax==4) {
echo "<font color=black>你在马背上发现一张纸条:你于X年X月X日在XXX页面刷新过快,请收到本通知后15日内到梦轩西游交管局缴纳罚款并扣3分,谢谢配合</font>"."<br>";	
} elseif ($shuax==5) {
echo "<font color=black>刷新这么快？难道想和贫僧抢尼姑？</font>"."<br>";
} else{
echo "<font color=black>囧，太快了，伤不起o(╯□╰)o真的伤不起....</font>"."<br>";
}


echo "<br>";





//调用shuax.ini是否存在
   
include("./ini/shuax_ini.php");
$inina="shuax.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['刷新过快' => 2]);



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";






?>




