<?php


if($npcc ==335){//杀螃蟹
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>螃蟹泛滥（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=0;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}


if($npcc ==336){//杀潮水螃蟹
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==5){
$rwbl=6;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：潮洞蟹成灾（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=0;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}


	
	

} else{

}



if($npcc ==445){//杀大螃蟹
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==15){
$rwbl=16;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：调查洞穴【大螃蟹】（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=0;//移动坐标x
$ydy=0;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}


	
	

} else{

}




if($npcc ==227){//杀转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==15){
$rwbl=16;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：159转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}


} else{

}


if($npcc ==229){//杀转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==17){
$rwbl=18;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：159转职任务〖关键〗烈炽灵狐（分身一）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
	$iniFile->updItem('已杀怪', [$str4 => '0']);
	$iniFile->updItem('要杀怪', [$str4 => '1']);
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}


} else{

}




if($npcc ==233){//杀转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==18){
$rwbl=19;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：159转职任务〖关键〗烈炽灵狐（分身二）</font>"."<br>";
if($rw3 >=$rw4&&$rw3!=""&&$rw4!=""){
	$iniFile->updItem('已杀怪', [$str4 => '0']);
	$iniFile->updItem('要杀怪', [$str4 => '1']);
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}


} else{

}


if($npcc ==234){//杀转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==19){
$rwbl=20;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：159转职任务〖关键〗烈炽灵狐（分身三）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
	$iniFile->updItem('已杀怪', [$str4 => '0']);
	$iniFile->updItem('要杀怪', [$str4 => '1']);
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}


} else{

}


if($npcc ==235){//杀转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==20){
$rwbl=21;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：159转职任务〖关键〗烈炽灵狐（真身）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){
$iniFile->updItem('已杀怪', [$str4 => '0']);
$iniFile->updItem('要杀怪', [$str4 => '1']);
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}


} else{

}


if($npcc ==767){//杀转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==9){
$rwbl=10;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：159转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}


} else{

}

if($npcc ==782){//杀转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==11){
$rwbl=12;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：159转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}


} else{

}




if($npcc ==1011){//杀大唐皇帝转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==26){
$rwbl=27;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：199转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);


$ydx=10;//移动坐标x
$ydy=3;//移动坐标y
$ydfy=10000;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";


} else{

}

} else{

}


} else{

}


if($npcc ==1012){//杀万年妖蛇转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==29){
$rwbl=30;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：199转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);



} else{

}

} else{

}


} else{

}


if($npcc ==1013){//杀万年妖蛇转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==38){
$rwbl=39;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：199转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);



} else{

}

} else{

}


} else{

}




if($npcc ==1015){//杀白转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==42){
$rwbl=43;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);

$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：199转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
$iniFile->updItem('已杀怪', [$str4 => '0']);
$iniFile->updItem('要杀怪', [$str4 => '1']);
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);



} else{

}

} else{

}


} else{

}




if($npcc ==1016){//杀黑转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==43){
$rwbl=44;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：199转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);



} else{

}

} else{

}


} else{

}










if($npcc ==860){//杀【阎罗王】转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==45){
$rwbl=46;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);

$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：199转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);


} else{

}

} else{

}


} else{

}







if($npcc ==920){//杀菩提转职任务
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==48){
$rwbl=49;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);

$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>任务：199转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);


} else{

}

} else{

}


} else{

}









if($npcc ==150){//杀大老鼠
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==40){
$rwbl=41;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【董老板的请求】老鼠（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=99;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";


} else{

}

} else{

}


	
	

} else{

}



if($npcc ==698){//杀黑衣大汉
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==81){
$rwbl=82;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【睡房打探】教训黑衣大汉（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}


	
	

} else{

}




if($npcc ==699){//杀黑衣头领
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==102){
$rwbl=103;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【黑衣客人】教训黑衣头领（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}










	
	

} else{

}


if($npcc ==700){//杀小流氓
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==155){
$rwbl=156;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【野蛮丫头】教训小流氓（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}

} else{

}


if($npcc ==701){//杀野蛮丫头
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==139){
$rwbl=140;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【野蛮丫头】教训野蛮丫头（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}










	
	

} else{

}



if($npcc ==702){//杀众酒客
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==175){
$rwbl=176;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【患难之交】教训众酒客（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}

if($npcc ==703){//杀项长老
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==379){
$rwbl=380;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【天法长老】打倒项长老（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}




if($npcc ==706){//杀飞贼
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==402){
$rwbl=403;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));





echo "<font color=black>【追踪飞贼】教训飞贼（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{
	

}




} else{
	
	
if($rw2 ==413){
$rwbl=414;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));
	
	echo "<font color=black>【追踪飞贼】教训飞贼（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{
	

}
	
	
	
	} else{
	
	} 
	
	
	

}
} else{

}






if($npcc ==704){//杀萧凌月
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==458){
$rwbl=459;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【调查真相】打败凌月（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}














if($npcc ==705){//杀绿衣女子
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==450){
$rwbl=451;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【调查真相】打败绿衣女子（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}



if($rw2 ==455){
$rwbl=456;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【调查真相】打败绿衣女子（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}



} else{

}












if($npcc ==707){//杀萧晓月
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==203){
$rwbl=204;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【比武招亲】打败萧晓月（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}



if($npcc ==708){//杀清风道长
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==340){
$rwbl=341;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【方寸奇遇】教训清风道长（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}


if($npcc ==709){//杀狐妖女
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==257){
$rwbl=258;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【大雁塔除妖】杀死狐妖女（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}







if($npcc ==710){//杀蛇妖男
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==250){
$rwbl=251;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【大雁塔除妖】杀死蛇妖男（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}





if($npcc ==711){//杀死喽罗
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==361){
$rwbl=362;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【赤血龙王】杀死喽罗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}





if($npcc ==712){//杀赤血龙王
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==363){
$rwbl=364;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【赤血龙王】杀死赤血龙王（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}








if($npcc ==713){//杀酒鬼
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==264){
$rwbl=265;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【意外重逢】教训酒鬼（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}



if($npcc ==714){//杀守门兵俑
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=1;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==376){
$rwbl=377;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【天法长老】打倒守门兵俑（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}


if($npcc ==335){//杀螃蟹（每日任务）
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】大唐国师的请求（1-20）（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}



if($npcc ==337){//杀海贼（每日任务）
include("./ini/zxrw_ini.php");
$rwid=2;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】大唐国师的请求（20-40）（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}


if($npcc ==370){//蜡烛怪 （每日任务）
include("./ini/zxrw_ini.php");
$rwid=3;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】大唐国师的请求（40-60）（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}




if($npcc ==387){//蟠龙  （每日任务）
include("./ini/zxrw_ini.php");
$rwid=4;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】大唐国师的请求（60-80）（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}


if($npcc ==386){//蟠璃 （每日任务）
include("./ini/zxrw_ini.php");
$rwid=5;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】大唐国师的请求（80-100）（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}








if($npcc ==414){//雪莲精 （每日任务）
include("./ini/zxrw_ini.php");
$rwid=6;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】大唐国师的请求（100-120）（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}




if($npcc ==413){//雪妖 （每日任务）
include("./ini/zxrw_ini.php");
$rwid=7;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】大唐国师的请求（120-140）（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}




if($npcc ==356){//【西瓜精】(每日材料)
include("./ini/zxrw_ini.php");
$rwid=15;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】宝象国国师的请求（10-20）【西瓜精】（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}






if($npcc ==368){//【扫帚怪】(每日材料)
include("./ini/zxrw_ini.php");
$rwid=16;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】宝象国国师的请求（20-40）【扫帚怪】（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}





if($npcc ==371){//【蜡烛怪】(每日材料)
include("./ini/zxrw_ini.php");
$rwid=17;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】宝象国国师的请求（40-60）【蜡烛怪】（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}





if($npcc ==359){//【青蛇怪】(每日材料)
include("./ini/zxrw_ini.php");
$rwid=18;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】宝象国国师的请求（60-80）【青蛇怪】（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}



if($npcc ==400){//【僵尸怪】(每日材料)
include("./ini/zxrw_ini.php");
$rwid=19;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));
if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】宝象国国师的请求（80-100）【僵尸怪】（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}




if($npcc ==397){//【骷髅怪】(每日材料)
include("./ini/zxrw_ini.php");
$rwid=20;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));
if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】宝象国国师的请求（100-120）【骷髅怪】（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}









if($npcc ==408){//【野獾精】(每日材料)
include("./ini/zxrw_ini.php");
$rwid=21;//任务id
$rwfl=5;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));
if($rw2 ==2){
$rwbl=3;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>【每日】宝象国国师的请求（120-140）【野獾精】（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);
$ydx=1;//移动坐标x
$ydy=10;//移动坐标y
$ydfy=100;//传送费用
//数字转汉字
$yl=$ydfy;
include("./pz/ylts.php");
$ydzb=$ydx."_".$ydy."_".$ydfy;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=313;
$npc[]=$ydzb;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快速进行任务（".$ylxx."两）</font></a>"."<br>";
} else{

}

} else{

}
} else{
}


if($npcc ==1317){//杀蟠桃
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==57){
$rwbl=58;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>仙20转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}

if($npcc ==890){//杀玉皇大帝
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==60){
$rwbl=61;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>仙20转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}



if($npcc ==1313){//杀如来佛祖
include("./ini/zxrw_ini.php");
$rwid=1;//任务id
$rwfl=2;//任务分类
$str4=$rwid."_".$rwfl;
$rw2=($iniFile->getItem('任务变量',$str4));

if($rw2 ==63){
$rwbl=64;//任务变量
$rw3=($iniFile->getItem('已杀怪',$str4));
$rw4=($iniFile->getItem('要杀怪',$str4));
$rw3=$rw3+1;
$iniFile->updItem('已杀怪', [$str4 => $rw3]);
$rw3=($iniFile->getItem('已杀怪',$str4));

echo "<font color=black>仙20转职任务〖关键〗（".$rw3."/".$rw4."）</font>"."<br>";
if($rw3 ==$rw4&&$rw3!=""&&$rw4!=""){	
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set rwbl=$rwbl where rwid=$rwid and rwfl=$rwfl";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zxrw_ini.php");
$rwcurl=$rwid."_".$rwfl;
$iniFile->updItem('任务变量', [$rwcurl => $rwbl]);

} else{

}

} else{

}
} else{

}
















?>