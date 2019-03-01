<?php

echo "<font color=red>【发放成功通知】（全服）</font>"."<br>";
$czid=$wpid;
$ppwpsl=$wpsl;

include("./sql/mysql.php");//调用数据库连接 
$q2="o_user_list";
$sql1=mysql_query("select MAX(uid) from $q2");
$abc=mysql_fetch_array($sql1);
$maxuid=$abc[0];

$i=0;	
for($d=0;$d<$maxuid;$d++){
$wjid="";	
$bbrlb="";
$i=$i+1;	
$wjid=$i+10000000;
//查询如果没有则添加
$q2="zzck".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$czid",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];
	
	
if($ckwpid==""){

//获取最大值
$q2="zzck".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ppwpsl;
//$npcc=$czid;
//调用物品信息
//include("./wp/wpxx.php");

$q2="zzck".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$czid','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="zzck".$wjid;	
$ckwpsl=$ckwpsl+$ppwpsl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 




$dir = 'ache/'.$wjid;

if(is_dir($dir))
{

	
}
else
{
	mkdir ($dir,0777,true);
  
}




 //调用msg.ini是否存在
 $wjtake="恭喜你！！GM向全区发放了小小礼物，请到游戏首页增值仓库领取！！感谢您对小轩西游的大力支持，小轩必将竭尽全力将小轩西游做好！";

 
 //更新缓存数据
$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

 include("./ini/msg_ini.php");

$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$hkeyltpx1[]="";
$hltpx1="";
$arr3="";






# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($hltpx1) as $key){
$hkeyltpx1[]=$hltpx1[$key];
}
	
	
$tmp1="排序";
$arr3=$hkeyltpx1;
foreach( $arr3 as $k=>$v) {
    if($tmp1 == $v) unset($arr3[$k]);
}

$ltmax1=max($arr3);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
	$ltbl2=-1;
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 

 
 
 
 
 
 




}




echo "<font color=red>【发放完毕】（全服）</font>"."<br>";






echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=40&&user=$wjid'><font color=blue>返回继续发放</font></a>"."<br>";










echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";





?>
