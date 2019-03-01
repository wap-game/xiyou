<?php









include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
if($bpid==""||$bpid==0){


include("./ini/yl_ini.php");
# 获取一个分类下多个子项的值
$yl=($iniFile->getItem('背包仓库银两','背包银两'));
include("./ini/sc_ini.php");
$wpsl=($iniFile->getItem('商城数量','266'));


if($yl>=100000000&&$wpsl>=5){



//查询国家名字是否存在
include("./sql/mysql.php");//调用数据库连接 
$q2="all_bp";
mysql_query("set names utf8");
$sql1=mysql_query("select bpid from $q2 where bpmz='$wjtake'",$conn);
$info1=@mysql_fetch_array($sql1);
$pdbp2=$info1[bpid];
if($pdbp2==""){



$q2="all_bp";	
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(bpid) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$q2="all_bp";	
mysql_query("set names utf8");
$sql = "insert into $q2 (bpid,bpdj,bpmz,cbpmz,cwjid,xbpmz,xwjid,ccmz01,ccid01,ccmz02,ccid02,
ccmz03,ccid03,ccmz04,ccid04,ccmz05,ccid05,ccmz06,ccid06,bprsmax,bpjymax,bpyl,bpsw)  values('$maxidd','1','$wjtake',
'$wjmz','$wjid','$wjmz','$wjid','0','0','0','0','0','0','0','0','0','0','0','0','20','1000','0','0')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set bpid=$maxidd,bpmz='$wjtake' where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);

 include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['帮派id' => $maxidd]);
$iniFile->updItem('玩家信息', ['帮派名字' => $wjtake]);

$bpid=$maxidd;

$mysql003="bp".$bpid;
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $mysql003 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '国家ID编号',
 `usermz` text NOT  NULL  COMMENT  '国家人员名字',
`userid` int( 11  )  NOT  NULL default  '0' COMMENT  '国家人员id',
`gx` int( 11  )  NOT  NULL default  '0' COMMENT  '贡献',
`bpswcs` int( 11  )  NOT  NULL default  '0' COMMENT  '国战死亡次数',
`bpjf` int( 11  )  NOT  NULL default  '0' COMMENT  '国战积分',
`lsgx` int( 11  )  NOT  NULL default  '0' COMMENT  '历史贡献')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);



mysql_query("set names utf8");
$sql = "insert into $mysql003 (id,usermz,userid,gx,bpswcs,bpjf,lsgx)  values('1','$wjmz','$wjid',
'0','0','0','0')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }


//提供需要扣除的物品作为判读依据
$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=100000000;//	需要扣除的量
$wpdz5[]=0;//	重量

$wpdz1[]="〖玄铁令〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=266;//物品id
$wpdz4[]=5;//	需要扣除的量
$wpdz5[]=1;//	重量


$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
$m=count($wpdz1,0); 
$km=$m;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		


//	输出满足提示语言
echo $manzu1;


 

 
 

 

echo "<font color=red>恭喜你创建了国家".$wjtake."</font>"."<br>";




include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


exit;







} else{
echo "<font color=red>你想要创建的".$wjtake.",已经存在请换个国家名字吧</font>"."<br>";
}


} else{



echo "<font color=red>对不起！建立国家需要银两1亿和玄铁令x5</font>"."<br>";
}
} else{



echo "<font color=red>对不起！你已经有国家了无法创建</font>"."<br>";
}

?>


