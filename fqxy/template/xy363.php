<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
if($npccid!=""){
	
include("./ini/cw_ini.php");
	
$cwcz2=($iniFile->getCategory('宠物出战状态'));
$czcw=count($cwcz2,0)-1; 
$czcw1=0;

foreach(array_keys($cwcz2) as $key){
$keycwcz1[]=$cwcz2[$key];
}	
$i=-1;
for($x=0;$x<=$czcw;$x++){
$i=$i+1;
if($keycwcz1[$i]==2){
$czcw1=$czcw1+1;
break;
}
	
}

if($czcw1==0){
	
//修改为出战状态
include("./sql/mysql.php");//调用数据库连接 
$q2="cw".$wjid;
$strsql = "update $q2 set cwcz=2 where id=$npccid";//物品id号必改值
$result = mysql_query($strsql);
//调用cw.ini是否存在

$iniFile->updItem('宠物出战状态', [$zbid => '2']);
$cwmz1=($iniFile->getItem('宠物原始名字',$zbid));
$cwmz2=($iniFile->getItem('宠物名字',$zbid));
if($cwmz2!=""){
echo "<font color=red>".$cwmz1."（".$cwmz2."）加入了战斗！！</font>"."<br>";
} else{	
echo "<font color=red>".$cwmz1."加入了战斗！！</font>"."<br>";
}

} else{	

echo "<font color=red>对不起！！你已有出战宠物了！！</font>"."<br>";

}




} else{	
echo "<font color=red>出战宠物有误！！请联系GM解决此问题</font>"."<br>";
}






include("template/xy362.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");




} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>