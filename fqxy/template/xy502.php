<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='pm_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁



if($zsspd==1&&$all_lock2==1){
echo "<font color=red>温馨提示：请尽快取出您未拍卖物满7天后将自动删除</font>"."<br>";
echo "<font color=black>正在进行的拍卖品：</font>"."<br>";


//保存页面id方便分页使用
if($cmdd==502){
//调用yl.ini是否存在
include("./ini/yl_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包页面', ['页面id' => $cmdd]);




} else{

}





//调用wp.ini是否存在
include("./ini/mypm_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('拍卖数量', ['初始' => 502]);




# 获取一个分类下所有数据
$pmxl=($iniFile->getCategory('排序'));
$pmtime=($iniFile->getCategory('拍卖时间'));
$pmwpid=($iniFile->getCategory('拍卖物品id'));
$pmwpsl=($iniFile->getCategory('拍卖数量'));
$pmwpmz=($iniFile->getCategory('拍卖名字'));
$pmwpjg=($iniFile->getCategory('拍卖价格'));
$pmsjc=($iniFile->getCategory('拍卖时间搓'));

$cb01=count($pmxl,0); 
$cb02=count($pmtime,0); 
$cb03=count($pmwpid,0); 
$cb04=count($pmwpsl,0); 
$cb05=count($pmwpmz,0); 
$cb06=count($pmwpjg,0); 
$cb07=count($pmsjc,0); 

$i=0;

$ym=$pmwpid[初始];

$km=0;


if($cb01==$cb02&&$cb01==$cb03&&$cb01==$cb04&&$cb01==$cb05&&$cb01==$cb06&&$cb01==$cb07){

if($cb01>1){




//将ini值存入数组方便使用
foreach(array_keys($pmwpmz) as $key){
$keywpmz[]=$pmwpmz[$key];
}
foreach(array_keys($pmwpsl) as $key){
$keywpsl[]=$pmwpsl[$key];
}
foreach(array_keys($pmwpid) as $key){
$keywpid[]=$pmwpid[$key];
}
foreach(array_keys($pmwpjg) as $key){
$keypmwpjg[]=$pmwpjg[$key];
}

foreach(array_keys($pmtime) as $key){
$keypmtime[]=$pmtime[$key];
}


foreach(array_keys($pmxl) as $key){
$keypmxl[]=$pmxl[$key];
}








$m=count($pmwpid,0)-1; 

for($d=0;$d<$m;$d++){
$i=$i+1;

$ivd=$keywpid[$i];
$mvz=$keywpmz[$i];
$svl=$keywpsl[$i];
$pmprea=$keypmwpjg[$i];
$pmtime1=$keypmtime[$i];
$keypmxx1=$keypmxl[$i];



$mmz[]=$mvz;
$ssl[]=$svl;
$iid[]=$ivd;
$km=$km+1;
$mz[]=$mvz;

$pmprea1[]=$pmprea;
$pmtime2[]=$pmtime1;
$pmxx2[]=$keypmxx1;


}





$i=-2;
$mcc=$km/10;

$nowtime=date('Y-m-d H:i:s');
if($mcc>=$ym){


for($x=0;$x<=9;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];

$pmprea2=$pmprea1[$ym*10-9+$i];

$pmtime3=$pmtime2[$ym*10-9+$i];
$pmxx3=$pmxx2[$ym*10-9+$i];

$t=floor((strtotime($nowtime)-strtotime($pmtime3))/86400);




//数字转汉字
$yl=$pmprea2;
include("./pz/ylts.php");



if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=503;
$npc[]=$xxid;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."(".$ylxx."两)</font></a>"."<font color=blue>x$cl|</font>";


$str=$xxid."_".$pmxx3;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=504;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取回</font></a>";
if($t>=3){
$tm=$t-2;
echo "<font color=red>（过期".$tm."天）</font>"."<br>";
}
echo "<br>";





}

}


} else{
if($ym>1){
$mcc=$km%10-1;

for($x=0;$x<=$mcc;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];
$pmprea2=$pmprea1[$ym*10-9+$i];
$pmtime3=$pmtime2[$ym*10-9+$i];
$pmxx3=$pmxx2[$ym*10-9+$i];
$t=floor((strtotime($nowtime)-strtotime($pmtime3))/86400);


//数字转汉字
$yl=$pmprea2;
include("./pz/ylts.php");


if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=503;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."(".$ylxx."两)</font></a>"."<font color=blue>x$cl|</font>";

$str=$xxid."_".$pmxx3;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=504;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取回</font></a>";
if($t>=3){
$tm=$t-2;
echo "<font color=red>（过期".$tm."天）</font>"."<br>";
}
echo "<br>";
}
}
} else{
	

$i=-2;
for($x=0;$x<=$km-1;$x++){
$i=$i+1;

$clname= $mz[$ym*10-9+$i];


$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];
$pmprea2=$pmprea1[$ym*10-9+$i];
$pmtime3=$pmtime2[$ym*10-9+$i];
$pmxx3=$pmxx2[$ym*10-9+$i];
$t=floor((strtotime($nowtime)-strtotime($pmtime3))/86400);
//数字转汉字
$yl=$pmprea2;
include("./pz/ylts.php");

if($cl>=1){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=503;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."(".$ylxx."两)</font></a>"."<font color=blue>x$cl|</font>";

$str=$xxid."_".$pmxx3;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=504;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取回</font></a>";

if($t>=3){
$tm=$t-2;
echo "<font color=red>（过期".$tm."天）</font>"."<br>";
}
echo "<br>";
}

}


}





}





$f=0;

if($ym!=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=40;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>首页</font></a>";
echo  "<font color=blue>|</font></a>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=39;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>上页</font></a>";

$f=1;

}
$mcc=$km/10;
if($f>0&&$mcc>$ym){
echo  "<font color=blue>|</font></a>";
}



$mcc=$km/10;
if($mcc>$ym){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=38;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下页</font></a>";
echo  "<font color=blue>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=41;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>末页</font></a>";
$f=1;
}

if($f>0){
echo "<br>";
}




} else{
echo "<font color=red>空空如也</font>"."<br>";
} 
} else{
echo "<font color=red>物品错位（联系GM修复）</font>"."<br>";
} 








echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=489;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回拍卖场</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




} else{	
}
//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini

//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini

























?>