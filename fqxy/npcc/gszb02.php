<?php


		if($gsjgl!=0){
			
		if($gsjg>=1000){	
				if($gsjg>=1000&&$gsjg<=99999999999){
		
		
		//扣除手续费用
$bfb=floor($gsjg*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$ylmm=$ylsxf;
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));


if($yl>=$ylmm){




//扣除手续费	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl-$ylsxf;
$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);
//数字转汉字
$yl=$ylmm;
include("./pz/ylts.php");
echo  "<font color=red>手续费：".$ylxx."银两</font></a></br>";
//扣除手续费	

	
		
		
		
		
		
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
include("./ini/gsrl_ini.php");
	//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量','挂售容量']));
$bbrlb=$wjxx[背包容量];

$cbbrlb=$wjxx[挂售容量];
	
	
	
	
//ini文件名字
$inina="gsrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('挂售已用容量','容量'));
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
$q2="gszb".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$q2="gszb".$wjid;
$sql = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5,gsjg)  values('$maxidd','$npcc','$xvjj','$zbkk1','$zbxqq1','$zbkk2','$zbxqq2','$zbkk3','$zbxqq3','$zbkk4','$zbxqq4','$zbkk5','$zbxqq5','$gsjg')";


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
$inina="gszb.ini";
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
$inina="gsrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wp25;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);

//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


	
	echo "<font color=red>你以".$gsjg."银两的价格挂售了".$zbxjj.$xxxbs.$clname."</font>"."<br>";
	
	include("template/xy029.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


} else{
	$dqwp=0;
echo "<font color=black>你已挂售过该装备了！！</font>"."<br>";

} 



} else{

	$dqwp=0;
echo "<font color=red>对不起，你的挂售已不下任何东西了</font>"."<br>";
echo "<br>";



}

} else {
$dqwp=0;
echo "<font color=red>挂售价格超过最大银两限制</font>"."<br>";
echo "<br>";
}



} else {
$dqwp=0;
echo "<font color=red>挂售手续费不足</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>挂售价格必须在1000银两上</font>"."<br>";
echo "<br>";
}




} else {
$dqwp=0;
echo "<font color=red>挂售价格输入有误请重新输入</font>"."<br>";
echo "<br>";
}









?>



