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




echo "<font color=red>〖全区拍卖场〗</font>"."<br>"; 



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=502;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我的拍卖</font></a>"."<br>"; 


//调用wp.ini是否存在
include("./ini/pm_wp_ini.php");



echo "<font color=black>☆☆☆☆☆☆☆☆</font>"."<br>";

echo "<font color=black>书卷</font>";
echo "<font color=black>◎</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=490;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>材料</font></a>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=491;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>装备</font></a>"."<br>"; 


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=492;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>商城</font></a>";
echo "<font color=black>◎</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=493;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>丹药</font></a>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=494;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>任务</font></a>"."<br>"; 



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=495;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>农场</font></a>";
echo "<font color=black>◎</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=496;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝箱</font></a>";
echo "<font color=black>◎</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=497;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝石</font></a>"."<br>"; 
echo "<font color=black>☆☆☆☆☆☆☆☆</font>"."<br>";






# 获取一个分类下所有数据
$pmxxl=($iniFile->getCategory('排序'));
$pmwjid=($iniFile->getCategory('玩家id'));
$pmwjmz=($iniFile->getCategory('玩家名字'));
$pmtime=($iniFile->getCategory('拍卖时间'));
$pmwpid=($iniFile->getCategory('拍卖物品id'));
$pmwpsl=($iniFile->getCategory('拍卖数量'));
$pmwpmz=($iniFile->getCategory('拍卖名字'));
$pmwpjg=($iniFile->getCategory('拍卖价格'));
$pmsjc=($iniFile->getCategory('拍卖时间搓'));



$cb01=count($pmxxl,0); 
$cb02=count($pmwjid,0); 
$cb03=count($pmwjmz,0); 
$cb04=count($pmtime,0); 
$cb05=count($pmwpid,0); 
$cb06=count($pmwpsl,0); 
$cb07=count($pmwpmz,0); 
$cb08=count($pmwpjg,0); 
$cb09=count($pmsjc,0); 










if($cb01==$cb02&&$cb01==$cb03&&$cb01==$cb04&&$cb01==$cb05&&$cb01==$cb06&&$cb01==$cb07&&$cb01==$cb08&&$cb01==$cb09){








//删除过期物品

foreach(array_keys($pmxxl) as $key){
$keypmxxl[]=$pmxxl[$key];
}
foreach(array_keys($pmtime) as $key){
$keypmtime[]=$pmtime[$key];
}
foreach(array_keys($pmwjid) as $key){
$keypmwjidps[]=$pmwjid[$key];
}
$imbb=count($keypmxxl,0)-1; 
$imb=0;
$nowtime=date('Y-m-d H:i:s');
for($d=0;$d<$imbb;$d++){
$imb=$imb+1;


$t=floor((strtotime($nowtime)-strtotime($keypmtime[$imb]))/86400);
if($t>=10){
include("./sql/mysql.php");//调用数据库连接 
$q2="all_pm";
$strsql = "delete from $q2 where id=$keypmxxl[$imb]";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/pm_wp_ini.php");
# 删除一个子项
$iniFile->delItem('排序', $keypmxxl[$imb]);
# 删除一个子项
$iniFile->delItem('玩家id', $keypmxxl[$imb]);
# 删除一个子项
$iniFile->delItem('玩家名字', $keypmxxl[$imb]);
# 删除一个子项
$iniFile->delItem('拍卖时间', $keypmxxl[$imb]);
# 删除一个子项
$iniFile->delItem('拍卖物品id', $keypmxxl[$imb]);
# 删除一个子项
$iniFile->delItem('拍卖数量', $keypmxxl[$imb]);
# 删除一个子项
$iniFile->delItem('拍卖名字', $keypmxxl[$imb]);
# 删除一个子项
$iniFile->delItem('拍卖价格', $keypmxxl[$imb]);
# 删除一个子项
$iniFile->delItem('拍卖时间搓', $keypmxxl[$imb]);
//ini文件名字
$inina="mypm.ini";
//路径
$path='ache/'.$keypmwjidps[$imb];
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
}




}







//删除过期物品


















$m=count($pmwjid,0)-1; 


if($m>=1){
	
	
	
foreach(array_keys($pmwpmz) as $key){
$keypmwpmz[]=$pmwpmz[$key];
}
foreach(array_keys($pmwpid) as $key){
$keypmwpid[]=$pmwpid[$key];
}

$keypmwpidd = array_unique($keypmwpid);
$keypmwpmzz = array_unique($keypmwpmz);
$m=count($keypmwpidd,0)-1; 
foreach($keypmwpmzz as $k=>$v){
$pmmz[]= $v;
}
foreach($keypmwpidd as $k=>$v){
$pmid[]= $v;
}

echo "<font color=black>全区玩家拍卖如下：</font>"."<br>";


$km=0;
$i=0;
for($x=0;$x<$m;$x++){

$i=$i+1;
$km=$km+1;	
echo "<font color=black>".$km.".</font>";	


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=499;
$npc[]=$pmid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$pmmz[$i]."</font></a></br>";



}




} else{
echo "<font color=black>暂无任何拍卖信息</font>"."<br>";

} 

} else{
echo "<font color=red>物品错位（联系GM修复）</font>"."<br>";
} 


echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>"; 
echo "<br>"; 






include("fhgame.php");



} else{	
}
//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini






?>