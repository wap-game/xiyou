<?php

$zcxx1="小轩娱乐社区与游戏平台对接成功，重新登录下即可！！";







include("./sql/mysql.php");//调用数据库连接 


//获取最大值
$q2="o_user_list";
$sql1=mysql_query("select MAX(uid) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}


//现在的时间
$y= date('Y')*1;
$m= date('m')*1;
$d= date('d')*1;
$h= date('H')*1;
$i= date('i')*1;
$s= date('s')*1;


$sqid=$wjid."_".$xxjy_qy;

//社区id接入游戏平台id
$q2="o_user_list";
$sql = "insert into $q2 (uid,sqid,m_id,password,n,y,r,s,f,m)  values('$maxidd','$sqid','0','$xxjy_pass','$y','$m','$d','$h','$i','$s')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

$mysql002=$maxidd+10000000;


//状态数据初始化
$q2="all_zt";
$sql = "insert into $q2 (wjid,username,sex,tx,peiou,zzmz,zzid,zzfl,dj,mpp,bpmz,bpid,vip,vipjy,gsrl,bbrl,ckrl,emz)  values('$mysql002','','','','','','','','1','','','','0','0','500','1000','2000','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

//银两数据初始化
$q2="all_yl";
$sql = "insert into $q2 (wjid,bbyl,ckyl)  values('$mysql002','88888','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

 
 //仓库其他
$mysql003="ckqt".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库其他ID',
`wpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库其他数量')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);
 //仓库物品
$mysql003="ckwp".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库物品ID',
`wpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库物品数量',
`wpfl` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库物品分类')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //仓库装备
$mysql003="ckzb".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`zbid` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库装备ID',
`zbxj` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库装备星级',
`zbk1` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库装备孔1',
`zbxq1` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库镶嵌1',
`zbk2` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库装备孔2',
`zbxq2` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库镶嵌2',
`zbk3` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库装备孔3',
`zbxq3` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库镶嵌3',
`zbk4` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库装备孔4',
`zbxq4` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库镶嵌4',
`zbk5` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库装备孔5',
`zbxq5` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库镶嵌5',
`zbpd` int( 11  )  NOT  NULL default  '0' COMMENT  '仓库装备佩戴')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //丹药使用限制表
$mysql003="dyxx".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '丹药ID',
`sycs` int( 11  )  NOT  NULL default  '0' COMMENT  '丹药使用次数')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //挂售其他
$mysql003="gsqt".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售其他id',
`wpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售其他数量',
 `gsjg` text NOT  NULL  COMMENT  '挂售价格')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //挂售物品
$mysql003="gswp".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售物品id',
`wpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售物品数量',
 `gsjg` text NOT  NULL  COMMENT  '挂售价格')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //挂售装备
$mysql003="gszb".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`zbid` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售装备ID',
`zbxj` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售装备星级',
`zbk1` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售装备孔1',
`zbxq1` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售镶嵌1',
`zbk2` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售装备孔2',
`zbxq2` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售镶嵌2',
`zbk3` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售装备孔3',
`zbxq3` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售镶嵌3',
`zbk4` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售装备孔4',
`zbxq4` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售镶嵌4',
`zbk5` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售装备孔5',
`zbxq5` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售镶嵌5',
`zbpd` int( 11  )  NOT  NULL default  '0' COMMENT  '挂售装备佩戴',
 `gsjg` text NOT  NULL  COMMENT  '挂售价格')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);



 //好友
$mysql003="hy".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`hyid` int( 11  )  NOT  NULL default  '0' COMMENT  '好友id',
 `hymz` text NOT  NULL  COMMENT  '好友名字',
`hyfl` int( 11  )  NOT  NULL default  '0' COMMENT  '好友分类')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //技能
$mysql003="jnn".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`jnid` int( 11  )  NOT  NULL default  '0' COMMENT  '技能id',
`jndj` int( 11  )  NOT  NULL default  '0' COMMENT  '技能等级')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);
$sql = "insert into $mysql003 (id,jnid,jndj)  values('1','15','1')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (id,jnid,jndj)  values('2','1','1')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

 
   //技能

  
  
 
 
 
 
 
 
 

 //其他
$mysql003="qt".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '其他ID',
`wpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '其他数量')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //声望
$mysql003="sw".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `swid` int( 11  )  NOT  NULL default  '0' COMMENT  '声望ID',
`swzz` int( 11  )  NOT  NULL default  '0' COMMENT  '声望值')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 $sql = "insert into $mysql003 (swid,swzz)  values('1','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (swid,swzz)  values('2','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (swid,swzz)  values('3','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

 $sql = "insert into $mysql003 (swid,swzz)  values('4','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (swid,swzz)  values('5','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (swid,swzz)  values('6','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

 $sql = "insert into $mysql003 (swid,swzz)  values('7','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (swid,swzz)  values('8','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (swid,swzz)  values('9','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (swid,swzz)  values('10','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 $sql = "insert into $mysql003 (swid,swzz)  values('11','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
  $sql = "insert into $mysql003 (swid,swzz)  values('12','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
   $sql = "insert into $mysql003 (swid,swzz)  values('13','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

 //头衔
$mysql003="tx".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `txid` int( 11  )  NOT  NULL default  '0' COMMENT  '头衔ID',
`txxs` int( 11  )  NOT  NULL default  '0' COMMENT  '头衔显示')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //物品
$mysql003="wp".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '物品ID',
`wpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '物品数量',
`wpfl` int( 11  )  NOT  NULL default  '0' COMMENT  '物品分类')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //每日物品使用次数
$mysql003="wpp".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '物品ID',
`n` int( 11  )  NOT  NULL default  '0' COMMENT  '年',
`y` int( 11  )  NOT  NULL default  '0' COMMENT  '月',
`r` int( 11  )  NOT  NULL default  '0' COMMENT  '日',
`s` int( 11  )  NOT  NULL default  '0' COMMENT  '时',
`f` int( 11  )  NOT  NULL default  '0' COMMENT  '分',
`m` int( 11  )  NOT  NULL default  '0' COMMENT  '秒',
`wpcs` int( 11  )  NOT  NULL default  '0' COMMENT  '物品使用次数')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);


 //背包装备
$mysql003="zb".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`zbid` int( 11  )  NOT  NULL default  '0' COMMENT  '装备ID',
`zbxj` int( 11  )  NOT  NULL default  '0' COMMENT  '装备星级',
`zbk1` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔1',
`zbxq1` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌1',
`zbk2` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔2',
`zbxq2` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌2',
`zbk3` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔3',
`zbxq3` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌3',
`zbk4` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔4',
`zbxq4` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌4',
`zbk5` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔5',
`zbxq5` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌5',
`zbpd` int( 11  )  NOT  NULL default  '0' COMMENT  '装备佩戴')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);




 //身上装备
$mysql003="zbb".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`zbid` int( 11  )  NOT  NULL default  '0' COMMENT  '装备ID',
`zbxj` int( 11  )  NOT  NULL default  '0' COMMENT  '装备星级',
`zbk1` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔1',
`zbxq1` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌1',
`zbk2` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔2',
`zbxq2` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌2',
`zbk3` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔3',
`zbxq3` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌3',
`zbk4` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔4',
`zbxq4` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌4',
`zbk5` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔5',
`zbxq5` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌5',
`zbfl` int( 11  )  NOT  NULL default  '0' COMMENT  '装备分类')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);






 //祝福状态
$mysql003="zf".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '祝福id',
`n` int( 11  )  NOT  NULL default  '0' COMMENT  '年',
`y` int( 11  )  NOT  NULL default  '0' COMMENT  '月',
`r` int( 11  )  NOT  NULL default  '0' COMMENT  '日',
`s` int( 11  )  NOT  NULL default  '0' COMMENT  '时',
`f` int( 11  )  NOT  NULL default  '0' COMMENT  '分',
`m` int( 11  )  NOT  NULL default  '0' COMMENT  '秒')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);






 //增值仓库
$mysql003="zzck".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`wpid` int( 11  )  NOT  NULL default  '0' COMMENT  '物品ID',
`wpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '物品数量',
`wpfl` int( 11  )  NOT  NULL default  '0' COMMENT  '物品分类')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);


 //副本
$mysql003="fb".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`fb` datetime  NOT  NULL  COMMENT  '副本时间',
`wc` int( 11  )  NOT  NULL default  '0' COMMENT  '副本完成',
`cs` int( 11  )  NOT  NULL default  '0' COMMENT  '副本次数')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);


 //家具
$mysql003="jj".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`jjid` int( 11  )  NOT  NULL default  '0' COMMENT  '家具ID',
`jjdj` int( 11  )  NOT  NULL default  '0' COMMENT  '家具等级',
`jjbf` int( 11  )  NOT  NULL default  '0' COMMENT  '家具摆放')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);


 //游戏任务
$mysql003="yxrw".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`rwid` int( 11  )  NOT  NULL default  '0' COMMENT  '任务ID',
`rwbl` int( 11  )  NOT  NULL default  '0' COMMENT  '任务变量',
 `rwmz` text NOT  NULL  COMMENT  '任务名字',
`yisg` int( 11  )  NOT  NULL default  '0' COMMENT  '已杀怪',
`ysg` int( 11  )  NOT  NULL default  '0' COMMENT  '要杀怪',
`rwfl` int( 11  )  NOT  NULL default  '0' COMMENT  '任务分类')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);

 //活动
$mysql003="hd".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `hdid` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`hdtime` datetime  NOT  NULL  COMMENT  '活动时间',
`hdcs` int( 11  )  NOT  NULL default  '0' COMMENT  '活动次数')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);



//宠物
$mysql003="cw".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`cwid` int( 11  )  NOT  NULL default  '0' COMMENT  '宠物id',
 `cwmz` text NOT  NULL  COMMENT  '宠物名字',
`cwdj` int( 11  )  NOT  NULL default  '0' COMMENT  '宠物等级',
`cwxj` int( 11  )  NOT  NULL default  '0' COMMENT  '宠物星级',
`cwby` int( 11  )  NOT  NULL default  '0' COMMENT  '宠物变异',
`cwxb` int( 11  )  NOT  NULL default  '0' COMMENT  '宠物品质',
`cwcz` int( 11  )  NOT  NULL default  '0' COMMENT  '宠物出战')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);







 //宠物身上装备
$mysql003="cwzbb".$mysql002;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`zbid` int( 11  )  NOT  NULL default  '0' COMMENT  '装备ID',
`zbxj` int( 11  )  NOT  NULL default  '0' COMMENT  '装备星级',
`zbk1` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔1',
`zbxq1` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌1',
`zbk2` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔2',
`zbxq2` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌2',
`zbk3` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔3',
`zbxq3` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌3',
`zbk4` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔4',
`zbxq4` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌4',
`zbk5` int( 11  )  NOT  NULL default  '0' COMMENT  '装备孔5',
`zbxq5` int( 11  )  NOT  NULL default  '0' COMMENT  '镶嵌5',
`zbfl` int( 11  )  NOT  NULL default  '0' COMMENT  '装备分类',
 `cwid` text NOT  NULL  COMMENT  '宠物ID')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);











?>




