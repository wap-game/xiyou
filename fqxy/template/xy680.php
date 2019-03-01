<?php
	//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
	//阻塞代码防止出现脏数据
	$ggmz="SDK";
$ininalock1=$ggmz."_lock".".txt";
include("./ini/zsggini.php");


if($zsspd==1&&$zsspd1==1){
	
if($_POST['submit']){
$wjtake10= $_POST['wjtoke'];
$wjtakes2=iconv_strlen($wjtake10,"UTF-8");
$wjtake = iconv("utf-8","gbk",$wjtake10);  	
if($wjtake10!=""){
	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_sdk";
mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where sdk='$wjtake10'",$conn);
$info1=@mysql_fetch_array($sql1);
$sdk1=$info1[sdkid];
$sdk2=$info1[sdktime];
$sdk3=$info1[sdkfl];
$sdk4=$info1[sdksy];
//验证是否存在	
if($sdk1!=""){
//验证是否使用		
if($sdk4!=""&&$sdk4!=2){
$nowtime=date('Y-m-d H:i:s');
//验证是否过期	
if($nowtime<=$sdk2){	
$q2="all_sdk";
$strsql = "update $q2 set sdksy=2 where sdk='$wjtake10'";//物品id号必改值
$result = mysql_query($strsql);		

if($sdk3==1){
$sdkmz="宣传SDK码";
} elseif($sdk3==2){ 
$sdkmz="拉人SDK码";
} elseif($sdk3==3){ 
$sdkmz="福利SDK码";
} elseif($sdk3==4){ 
$sdkmz="新区SDK码";
} else{
} 
echo "<font color=red>恭喜你！！兑换".$sdkmz."成功！！</font><br>";


if($sdk3==1){//宣传
$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]="【尊享VIP】（1天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=865;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");
} elseif($sdk3==2){ //拉人


$wpdz1[]="【10元充值卡】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=777;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖紫星币〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=944;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量
include("./rwmap/rwget.php");


} elseif($sdk3==3){ //福利
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖护身符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=941;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

include("./rwmap/rwget.php");
} elseif($sdk3==4){ //新区




$wpdz1[]="【50元充值卡】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=779;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【尊享VIP】（3天）";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=866;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【万能果】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=128;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【10亿修炼经验丹】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=788;//物品id
$wpdz4[]=10;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【1万法宝经验卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=565;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="【1万西游声望卷轴】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=564;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="〖圣灵白板套装〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=965;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="〖铜魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=309;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=500;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖铁星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=314;//物品id
$wpdz4[]=100;//	量
$wpdz5[]=1;//	重量
$wpdz1[]="〖铜星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=315;//物品id
$wpdz4[]=80;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖银星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=316;//物品id
$wpdz4[]=50;//	量
$wpdz5[]=1;//	重量

$wpdz1[]="〖金星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=317;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量


$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=20;//	量
$wpdz5[]=1;//	重量






include("./rwmap/rwget.php");





} else{
} 

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."兑换了".$sdkmz."获得了超值奖励（具体详情请查看SDK码兑换功能）！！";
include("./msg/msgg02.php");











} else{
echo "<font color=red>对不起！！此SDK码已过了最晚使用期限！！(有效期:".$sdk2.")</font><br>";
}
} else{
echo "<font color=red>对不起！！此SDK码已被使用过了！！</font><br>";
}
} else{
echo "<font color=red>对不起！！此SDK码不存在！！</font><br>";
}
} else{
echo "<font color=red>对不起！！SDK码不能为空！！</font><br>";
}

	
}	
} else{	
}
//解锁当前使用的ini
include("./ini/jsggini.php");
//解锁当前使用的ini


?>

<form  action="" method="POST">
<font color=black>请输入您的SDK兑换码:</font><br>
<input  type="text" name="wjtoke" placeholder="请输入您的SDK兑换码"id='search'><br>
<input  type="submit" name="submit" value="兑换"id="search1" ><br>
</form>

<?

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";


?>











