<?php

include("./ini/jcyx_ini.php");
//获取正确数字
$jcsz1=($iniFile->getItem('竞猜答案','初始'));
$jcsz2=($iniFile->getItem('竞猜答案1','初始'));
$jcidmin=($iniFile->getItem('竞猜答案2','初始'));
$jcgk=($iniFile->getItem('竞猜关卡','初始'));
$jccs=($iniFile->getItem('竞猜次数','初始'));
$jcgm=($iniFile->getItem('竞猜购买','初始'));
echo "<font color=black>竞猜关卡【第".$jcgk."关】</font>"."<br>";
echo "<font color=black>剩余竞猜【".$jccs."次】</font>"."<br>";	
if($jcgm==1){
$zxb=10;
} elseif($jcgm==2){   
$zxb=20;
} elseif($jcgm==3){   
$zxb=30;
} elseif($jcgm==4){   
$zxb=40;
} elseif($jcgm==5){   
$zxb=50;
} elseif($jcgm==6){   
$zxb=60;
} elseif($jcgm==7){   
$zxb=70;
} elseif($jcgm==8){   
$zxb=80;
} elseif($jcgm==9){   
$zxb=90;
} elseif($jcgm==10){   
$zxb=100;
} else {
$zxb=9999999999;	
} 

if($jccs>=1){
if($jcgk<=10){
if($jcgm<=10){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=684;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买10次竞猜=【紫星币】x".$zxb."</font></a>"."<br>";
} else {
} 




$jcidmax=$jcsz2;



$hff=1;
$dqwp=0;

if($hff==1){
if($_POST['submit']){
include("./ini/jcyx_ini.php");
//获取正确数字


$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);
if($sll!=0){
	
if($sl>=$jcidmin&&$sl<=$jcsz2){



if($jcsz1==$sl){//猜中


echo "<font color=red>恭喜你！你猜数字【".$sl."】，识破了竞猜大使的秘密</font>"."<br>";


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在竞猜关卡【第".$jcgk."关】使用数字【".$sl."】识破了竞猜大使的秘密，获得逆天奖励！！";
include("./msg/msgg02.php");




//猜中奖励
include("./ini/jcyx_ini.php");
$jcgk=($iniFile->getItem('竞猜关卡','初始'));
$jccs=$jccs-1;
$iniFile->updItem('竞猜次数', ['初始' => $jccs]);	
if($jcgk==1){
$xysw1=1;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=660;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==2){   
$xysw1=2;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=660;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==3){   
$xysw1=4;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=660;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量


//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==4){   
$xysw1=8;

$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=6;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖银块〗";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=660;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==5){   
$xysw1=16;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=12;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银块〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=660;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==6){   
$xysw1=32;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始 
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=24;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=663;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==7){   
$xysw1=64;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=48;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=16;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=663;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==8){   
$xysw1=128;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=96;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=32;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=663;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==9){   
$xysw1=256;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=192;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=64;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=16;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=8;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=663;//物品id
$wpdz4[]=4;//	量
$wpdz5[]=1;//	重量
//物品加
include("./rwmap/rwget.php");
} elseif($jcgk==10){   
$xysw1=666;
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=400;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=128;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=32;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=16;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金锭〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=663;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

//物品加
include("./rwmap/rwget.php");
} else {
$xysw1=0;
} 





echo "<font color=red>恭喜你！获得感恩节节日".$xysw1."积分</font><br>";	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hdph01";
$sql1=mysql_query("select ds01 from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$ds01=$info1[ds01];
if($ds01 ==""){
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$vip=($iniFile->getItem('玩家信息','vip等级'));
//获取最大值
$q2="all_hdph01";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
mysql_query("set names utf8");
$sql = "insert into $q2 (id,wjid,wjmz,vip,ds01)  values('$maxidd','$wjid','$wjmz','$vip','$xysw1')";
 if (!mysql_query($sql,$conn)){
 die('Error: ' . mysql_error());
 }
} else{	
$xysw1=$xysw1+$ds01;
$q2="all_hdph01";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$xysw1 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
} 	
//路径
$inina="phb13.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  	

//猜中奖励













include("template/xy683.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
exit;


} else {//未猜中重新出


echo "<font color=red>〖活动〗竞猜使者:哈哈~~猜不中我吧，我就是这么强大！！你猜的数字【".$sl."】不正确哦~~~</font>"."<br>";
echo "<br>";

	
if($jcsz1>$sl){
include("./ini/jcyx_ini.php");
$sz=$sl+1;	
$iniFile->updItem('竞猜答案2', ['初始' => $sz]);	
$jcidmin=($iniFile->getItem('竞猜答案2','初始'));
} else {
include("./ini/jcyx_ini.php");
$jcidmin=($iniFile->getItem('竞猜答案2','初始'));
}
if($jcsz1<$sl){
include("./ini/jcyx_ini.php");
$sz=$sl-1;	
$iniFile->updItem('竞猜答案1', ['初始' => $sz]);	
$jcidmax=($iniFile->getItem('竞猜答案1','初始'));
} else {
include("./ini/jcyx_ini.php");
$jcidmax=($iniFile->getItem('竞猜答案1','初始'));
}
$dqwp=1;


} 


$jccs=$jccs-1;
include("./ini/jcyx_ini.php");	
$iniFile->updItem('竞猜次数', ['初始' => $jccs]);	




} else {
echo "<font color=red>对不起！！不在此范围</font>"."<br>";
echo "<br>";
} 





} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}
}
}




if($sl!=""){//猜中
echo "<font color=red>提示：竞猜数字【".$jcidmin."-".$jcidmax."】之间</font>"."<br>";
} else {//未猜中重新出
echo "<font color=red>提示：竞猜数字【1-".$jcidmax."】之间</font>"."<br>";

} 







echo "<font color=black>请输入你要竞猜的数字</font>"."<br>";
?>
<form  action="" method="POST">
<input type="tel" name="sl" placeholder="请输入"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="竞猜" id="search1"><br>
</form>
<?php


} else {
echo "<font color=red>对不起！！您的已完成通关！！</font>"."<br>";
} 

} else {
echo "<font color=red>对不起！！您的竞猜次数不足！！</font>"."<br>";
} 


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
?>
