<?php






if($npcc ==1){//回城卷
	

$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);


# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));

$dty=($iniFile->getItem('地图坐标','y'));
//保存上次的地图值移动清除
$ydtx=$dtx;
$ydty=$dty;


$dtx=1;
$dty=0;

$wpsy=2;//使用成功





# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你使用了回城卷来到了长安城！</font>"."<br>"; 	




} elseif($npcc ==2){//挥砍
//调用jn.ini是否存在
 include("./ini/jn_ini.php");


//ini文件名字
$inina="jn.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

$jnid=2;
# 获取一个分类下某个子项的值
$ujnid=($iniFile->getItem('技能名字',$jnid));



if ($ujnid=="挥砍") {
	$wpsy=1;//使用失败
	echo "<font color=black>你已经掌握了挥砍技能,无需再学习！！</font>"."<br>"; 

	} else{
		
	   
include("./sql/mysql.php");//调用数据库连接 
   
   	
//获取最大值	
$q2="jnn".$wjid;
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$sql = "insert into $q2 (id,jnid,jndj)  values($maxidd,'2','1')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//强制更新jn-ini
 //ini文件名字
$inina="jn.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
 
 
		
$wpsy=2;//使用成功
echo "<font color=black>恭喜你掌握了挥砍技能！！</font>"."<br>"; 




} 



} elseif($npcc ==3){//捕捉
//调用jn.ini是否存在
 include("./ini/jn_ini.php");


//ini文件名字
$inina="jn.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

$jnid=3;
# 获取一个分类下某个子项的值
$ujnid=($iniFile->getItem('技能名字',$jnid));
if ($ujnid=="捕捉") {
	$wpsy=1;//使用失败
	echo "<font color=black>你已经学会了宠物捕捉技能无需再学习！！</font>"."<br>"; 

	} else{
		
	   
include("./sql/mysql.php");//调用数据库连接 
   
   	
//获取最大值	
$q2="jnn".$wjid;
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$sql = "insert into $q2 (id,jnid,jndj)  values($maxidd,'3','1')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//强制更新jn-ini
 //ini文件名字
$inina="jn.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
 
 
		
$wpsy=2;//使用成功
echo "<font color=black>恭喜你学会了宠物捕捉技能！！</font>"."<br>"; 




} 




} elseif($npcc ==4){//门派专属技能

//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$mpp1=($iniFile->getItem('玩家信息','门派'));



	if($mpp1==1){

$jjid1=4;
$jjid2=5;
$take1="排山倒海";
$take3="举火烧天";

} elseif($mpp1==2){
$jjid1=7;
$jjid2=8;
$take1="风波未宁";
$take3="风波十二叉";

} elseif($mpp1==3){

$jjid1=13;
$jjid2=14;
$take1="迷魂心法";
$take3="回梦心法";


} elseif($mpp1==4){
$jjid1=11;
$jjid2=12;
$take1="天师正道";
$take3="五雷咒";

} elseif($mpp1==5){
$jjid1=9;
$jjid2=10;
$take1="佛光普度";
$take3="如来神掌";


} else{
$jjid1=9;
$jjid2=10;


}
//调用jn.ini是否存在
 include("./ini/jn_ini.php");
//ini文件名字
$inina="jn.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ujnid1=($iniFile->getItem('技能名字',$jjid1));
# 获取一个分类下某个子项的值
$ujnid2=($iniFile->getItem('技能名字',$jjid2));
if ($take1==$ujnid1||$take3==$ujnid2) {




	$wpsy=1;//使用失败
	echo "<font color=black>你已经学会了门派专属技能无需再学习！！</font>"."<br>"; 

	} else{
		
	   
include("./sql/mysql.php");//调用数据库连接 
   
   	
//获取最大值	
$q2="jnn".$wjid;
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$sql = "insert into $q2 (id,jnid,jndj)  values($maxidd,$jjid1,'1')";


 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//include("./sql/mysql.php");//调用数据库连接 
   
   
$maxidd=$maxid+1;

$sql = "insert into $q2 (id,jnid,jndj)  values($maxidd,$jjid2,'1')";


 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//强制更新jn-ini
 //ini文件名字
$inina="jn.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
 
 
		
$wpsy=2;//使用成功
echo "<font color=black>恭喜你学会了门派专属技能：".$take1."和".$take3."！！</font>"."<br>"; 




} 







	
	
} elseif($npcc ==8){//腾云符
	

	  $wpsy=2;//使用成功

	  echo "<font color=black>【功能区域】</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>仓库</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>三联书店</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>回春药铺</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>镖局</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>活动大厅</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>装备锻造</font></a>"."<br>";

echo "<font color=black>【主城区域】</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>渔村</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>";

echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天宫</font></a>";

echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>地府</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>傲来国</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝象国</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>乌鸡国</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>车迟国</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>女儿国</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>祭赛国</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>朱紫国</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比丘国</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天法国</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>风仙郡</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>玉华郡</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>金平府</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=55;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天竺国</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=56;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>因果岛</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=57;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>止戈镇</font></a>"."<br>";

echo "<font color=black>【门派区域】</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>龙宫</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>月宫</font></a>";

echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>普陀</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>方寸</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>将军</font></a>"."<br>";
echo "<font color=black>【野外区域】</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>东海沙滩</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=29;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>东海海岸</font></a>";

echo "<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=30;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大雁塔</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=31;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>城南荒野</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=32;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小雁塔</font></a>";

echo "<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=33;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>冰风谷</font></a>"."<br>";

echo "<font color=black>【副本区域】</font></a>"."<br>";







//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=35;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>冰晶塔</font></a>";

echo "<font color=black>|</font></a>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=37;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>变异竹林</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=38;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>白骨陵墓</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=39;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死城</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=40;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>水帘洞天</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=41;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天宫瑶池</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=42;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>波月洞</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=43;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>老君炉</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=44;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>压龙洞</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=45;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>莲花洞</font></a>";

echo "<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=46;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>斩妖台</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=47;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>金兜洞</font></a>"."<br>";





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=58;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>通天水府</font></a>";
echo "<font color=black>|</font></a>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=59;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>芭蕉洞</font></a>";
echo "<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=50;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小雷音寺</font></a>"."<br>";






//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=60;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>盘丝洞</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=61;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>狮驼洞</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=62;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无底洞</font></a>"."<br>";








echo "<font color=black>=================</font></a>"."<br>";


echo "<font color=black>注：部分区域无法直接传送，请寻找NPC！</font></a>"."<br>";




	
	

} elseif($npcc ==9){//1000傲来国声望卷
//调用sw.ini是否存在
   $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[傲来国声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['傲来国声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=13";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."傲来国声望！！</font><br>";

} elseif($npcc ==10){//1000宝象国声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[宝象国声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['宝象国声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=9";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."宝象国声望！！</font><br>";



} elseif($npcc ==11){//1000将军府声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[将军府声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['将军府声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=2";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."将军府声望！！</font><br>";



} elseif($npcc ==12){//1000普陀山声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[普陀山声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['普陀山声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=5";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."普陀山声望！！</font><br>";

} elseif($npcc ==13){//1000龙宫声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[龙宫声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['龙宫声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=3";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."龙宫声望！！</font><br>";

} elseif($npcc ==14){//1000月宫声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[月宫声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['月宫声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=6";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."月宫声望！！</font><br>";





} elseif($npcc ==15){//1000方寸山声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[方寸山声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['方寸山声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=4";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."方寸山声望！！</font><br>";






} elseif($npcc ==16){//1000天宫声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[天宫声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['天宫声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=11";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."天宫声望！！</font><br>";

} elseif($npcc ==17){//1000地府声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[地府声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['地府声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=12";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."地府声望！！</font><br>";

} elseif($npcc ==18){//1000西游声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[西游声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['西游声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=8";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."西游声望！！</font><br>";


} elseif($npcc ==19){//1000乌鸡国声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[乌鸡国声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['乌鸡国声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=10";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."乌鸡国声望！！</font><br>";


} elseif($npcc ==20){//1000恶魔广场声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[恶魔广场声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['恶魔广场声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=7";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."恶魔广场声望！！</font><br>";


} elseif($npcc ==21){//1000夫妻声望
//调用sw.ini是否存在
     $wpsy=2;//使用成功
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
	
	
$wpzz=1000;//此wpid使用后所加的单个值
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw[夫妻声望]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', ['夫妻声望' => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=1";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz."夫妻声望！！</font><br>";






















} else{
	  $wpsy=1;//使用失败
include("wpsyts.php");
}















	

?>




