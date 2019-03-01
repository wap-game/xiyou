<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//调用zt.ini是否存在
   
include("./ini/tx_ini.php");

//ini文件名字
$inina="tx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);



# 获取一个分类下某个子项的值
$txxs1=($iniFile->getItem('头衔显示',$npcc));

if($txxs1==1){

# 获取一个分类下所有数据
$txxsp=($iniFile->getCategory('头衔显示'));
# 获取一个分类下所有数据
$wpidp=($iniFile->getCategory('头衔id'));
$m=count($wpidp,0)-1; 

foreach(array_keys($txxsp) as $key){
$keytxxsp[]=$txxsp[$key];
}
$i=0;
$txsl=0;
for($d=0;$d<$m;$d++){
$i=$i+1;
$svl=$keytxxsp[$i];
	

if($svl ==2){
$txsl=$txsl+1;
	

}

}


$txxs4=3;//可显示称号的最大数

if($txsl >=0&&$txsl <$txxs4){




include("./sql/mysql.php");//调用数据库连接 
$q2="tx".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set txxs=2 where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);


/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('头衔显示', [$npcc => 2]);
/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////

	
	
	
} else{
	
echo "<font color=black>对不起！！称号最多只能展示".$txxs4."个</font>"."<br>";
	
	

}


} elseif($txxs1==2){   

include("./sql/mysql.php");//调用数据库连接 
$q2="tx".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set txxs=1 where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);

/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('头衔显示', [$npcc => 1]);
/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////





	
} else{

	
}







include("template/xy251.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");




} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>