<?	

include("./ini/zxrw_ini.php");
//首次接取任务	
////////////////////任务属性//////////////
$rwidd=15;//任务的id
$rwfl=5;//任务的分类1主线2支线5日常4活动
$rwmz="宝象国国师的请求（10-20）";
include("./rwmap/rwpd.php");
////////////////////任务属性//////////////
//首次接取任务	
$rwstr=$rwidd."_".$rwfl;
$rcrwbl=($iniFile->getItem('任务变量',$rwstr));
$rw5=$rwfl;
$rw1=$rwidd;
if ($rcrwbl==1) {
echo "<font color=black>野外来了一些修炼成精了的家伙！快去击杀它们吧（能不能碰到就要看你的机缘了）</font>"."<br>";

echo "<font color=black>击杀【西瓜精】x1</font>"."<br>";
//任务进程改变
$rwjc1=2;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=1;//任务要杀怪
$rwjc4="宝象国国师的请求（10-20）";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=12;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务	

} elseif ($rcrwbl==2) {
echo "<font color=black>野外来了一些修炼成精了的家伙！快去击杀它们吧（能不能碰到就要看你的机缘了）</font>"."<br>";
echo "<font color=black>击杀【西瓜精】x1</font>"."<br>";
//快速任务
$ydx=12;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务	
} elseif ($rcrwbl==3) {
	
echo "<font color=black>这是给你的奖励！拿好吧！</font>"."<br>";
//任务进程改变
$rwjc1=4;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=20;//任务要杀怪
$rwjc4="宝象国国师的请求（10-20）";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变





include("./sql/mysql.php");//调用数据库连接 

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){

//得到物品代码
$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=11&&$bz <=20){ 
//得到物品代码
$wpdz1[]="红宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=22;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=21&&$bz <=30){ 
//得到物品代码
$wpdz1[]="红水晶一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=23;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=31&&$bz <=40){ 
//得到物品代码
$wpdz1[]="蓝宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=24;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=41&&$bz <=50){ 
//得到物品代码
$wpdz1[]="蓝水晶一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=25;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

} elseif($bz >=51&&$bz <=60){ 
//得到物品代码
$wpdz1[]="黄宝石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=26;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=61&&$bz <=70){ 
//得到物品代码
$wpdz1[]="黄水晶一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=27;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

} elseif($bz >=71&&$bz <=80){ 
//得到物品代码
$wpdz1[]="金刚石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=28;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

} elseif($bz >=81&&$bz <=90){ 
//得到物品代码
$wpdz1[]="佛印石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=29;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=91&&$bz <=100){ 
//得到物品代码
$wpdz1[]="玄武石一";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=30;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} else{
//得到物品代码
$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
}
	

include("./rwmap/rwget.php");


















//删除任务

$q2="yxrw".$wjid;
$strsql = "delete from $q2 where rwid=$rwidd and rwfl=$rwfl ";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwstr=$rwidd."_".$rwfl;
# 删除一个子项
$iniFile->delItem('任务id', $rwstr);
# 删除一个子项
$iniFile->delItem('任务变量', $rwstr);
# 删除一个子项
$iniFile->delItem('已杀怪', $rwstr);
# 删除一个子项
$iniFile->delItem('要杀怪', $rwstr);
# 删除一个子项
$iniFile->delItem('任务分类', $rwstr);
# 删除一个子项
$iniFile->delItem('任务名字', $rwstr);
//删除任务

	$hdcs=$hdcs+1;
$q2="hd".$wjid;
$strsql = "update $q2 set hdcs=$hdcs where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	


} else{	
echo "<font color=red>对不起！请联系小轩GM处理</font></br>"; 	

}




?>