<?	

include("./ini/zxrw_ini.php");
//首次接取任务	
////////////////////任务属性//////////////
$rwidd=14;//任务的id
$rwfl=5;//任务的分类1主线2支线5日常4活动
$rwmz="女儿国国师（120-140）";
include("./rwmap/rwpd.php");
////////////////////任务属性//////////////
//首次接取任务	
$rwstr=$rwidd."_".$rwfl;
$rcrwbl=($iniFile->getItem('任务变量',$rwstr));
$rw5=$rwfl;
$rw1=$rwidd;
if ($rcrwbl==1) {
echo "<font color=black>是这样的我们女儿国需要一大批材料需要用于国家建设！你去找一些来吧！！拜托了</font>"."<br>";

echo "<font color=black>独角牛精（掉落：牛角）</font>"."<br>";

//任务进程改变
$rwjc1=2;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="女儿国国师的请求（120-140）";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=54;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务	
} elseif ($rcrwbl==2) {
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="牛角";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=387;//物品id
$wpdz4[]=30;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
echo "<font color=black>年纪轻轻既然如此了得，果然不负众望啊！</font>"."<br>";
//银两加
$yl1=3000000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//任务进程改变
$rwjc1=4;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=20;//任务要杀怪
$rwjc4="女儿国国师的请求（120-140）";//任务名字
include("./pz/ini_pzz025.php");
//删除任务
include("./sql/mysql.php");//调用数据库连接 
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
echo "<font color=black>是这样的我们女儿国需要一大批材料需要用于国家建设！你去找一些来吧！！拜托了</font>"."<br>";
//快速任务
$ydx=54;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");	
echo "<font color=black>需要牛角x30，快去吧！</font>"."<br>";
}





} else{	
echo "<font color=red>对不起！请联系小轩GM处理</font></br>"; 	

}


?>