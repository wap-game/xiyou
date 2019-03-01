<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];







//调用物品信息
include("./wp/zbxx.php");

	
	
	
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
include("./ini/ckrl_ini.php");
	//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量','仓库容量']));
$bbrlb=$wjxx[背包容量];

$cbbrlb=$wjxx[仓库容量];
	
	
	
	
//ini文件名字
$inina="ckrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('仓库已用容量','容量'));
$rl=$wp25;
$wprl=$ckbbrla+$rl;



if($wprl<$cbbrlb){







	
//ini文件名字
$inina="zb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);



# 获取一个分类下某个子项的值
$zbzz=($iniFile->getItem('装备id',$zbid));

if($zbzz !=""){

///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////

# 获取一个分类下某个子项的值
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

	//背包减
include("./sql/mysql.php");//调用数据库连接 

$q2="zb".$wjid;		
$strsql = "delete from $q2 where id=$npccid ";//物品id号必改值
$result = mysql_query($strsql);	
//仓库加
//获取最大值
$q2="ckzb".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$q2="ckzb".$wjid;
$sql = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5)  values('$maxidd','$npcc','$xvjj','$zbkk1','$zbxqq1','$zbkk2','$zbxqq2','$zbkk3','$zbxqq3','$zbkk4','$zbxqq4','$zbkk5','$zbxqq5')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////





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
/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////
//ini文件名字
$inina="ckzb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////


//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
include("wp/zbxj.php");
$zbxjj=$xjname;
//调用装备信息
include("./wp/zbxx.php");

$clname=$wp1;


	
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

	
//ini文件名字
$inina="ckrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('仓库已用容量','容量'));
$rl=$wp25;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('仓库已用容量', ['容量' => $wprl]);

//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


	
	echo "<font color=black>你存入了".$zbxjj.$xxxbs.$clname."</font>"."<br>";
	
	


} else{
echo "<font color=black>你已存入过该装备了！！</font>"."<br>";

} 



} else{

	$dqwp=0;
echo "<font color=red>对不起，你的仓库已放不下任何东西了</font>"."<br>";
echo "<br>";



}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=263;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>