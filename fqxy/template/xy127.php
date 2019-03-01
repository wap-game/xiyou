<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];







//调用装备信息
include("./wp/zbxx.php");


	
//ini文件名字
$inina="zb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

$iniFile->updItem('装备星级', ['初始' => $zbid]);



# 获取一个分类下某个子项的值



$zbidd=($iniFile->getItem('装备id',$zbid));

$xvjj=($iniFile->getItem('装备星级',$zbid));
$zbkk1=($iniFile->getItem('装备孔1',$zbid));
$zbkk2=($iniFile->getItem('装备孔2',$zbid));
$zbkk3=($iniFile->getItem('装备孔3',$zbid));
$zbkk4=($iniFile->getItem('装备孔4',$zbid));
$zbkk5=($iniFile->getItem('装备孔5',$zbid));
$zbxqq1=($iniFile->getItem('装备镶嵌1',$zbid));
$zbxqq2=($iniFile->getItem('装备镶嵌2',$zbid));
$zbxqq3=($iniFile->getItem('装备镶嵌3',$zbid));
$zbxqq4=($iniFile->getItem('装备镶嵌4',$zbid));
$zbxqq5=($iniFile->getItem('装备镶嵌5',$zbid));

//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
include("wp/zbxj.php");
$zbxjj=$xjname;
$clname=$wp1;




/////////////////////////////////缓存ini删除////////////////////////////
# 删除一个子项
$iniFile->delItem('序列', $zbid);
# 删除一个子项
$iniFile->delItem('装备id', $zbid);
# 删除一个子项
$iniFile->delItem('装备名字', $zbid);
# 删除一个子项
$iniFile->delItem('装备星级', $zbid);



# 删除一个子项
$iniFile->delItem('装备孔1', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔2', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔3',$zbid);

# 删除一个子项
$iniFile->delItem('装备孔4', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔5', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌1', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌2', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌3', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌4', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌5', $zbid);


/////////////////////////////////缓存ini删除////////////////////////////

/////////////////////////////////数据库删除////////////////////////////


include("./sql/mysql.php");//调用数据库连接 
$q2="zb".$wjid;
$strsql = "delete from $q2 where id=$npccid;";//物品id号必改值
$result = mysql_query($strsql);

/////////////////////////////////数据库删除////////////////////////////

//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wp25;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);
//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


echo "<font color=black>你丢弃了".$zbxjj.$xxxbs.$clname."</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=29;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";






echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>





