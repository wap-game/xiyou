<?php


//判断攻城报名表是否合法	
include("./ini/xtbl_ini.php");


$m= date('m')*1;
$d= date('d')*1;

if($xtbl1==$m&&$xtbl2==$d){
$gztime1=1;
} else{	
$gztime1=2;
}

//判断攻城报名表是否合法
if($gztime1==2){
	
include("./sql/mysql.php");//调用数据库连接 	
//清空报名表
$q2="gz02";
$strsql = "truncate table $q2";
$result = mysql_query($strsql);
//更新缓存数据
$inina="gz02.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据


include("./ini/xtbl_ini.php");
$m= date('m')*1;
$d= date('d')*1;
	
if($xtbl1==$m&&$xtbl2==$d){
} else{	
include("./sql/mysql.php");//调用数据库连接 		
//清空报名表
$q2="gz02";
$strsql = "truncate table $q2";
$result = mysql_query($strsql);
//更新缓存数据
$inina="gz02.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据




if($xtbl1==""){
//新增数据
$q2="xtbl";
$sql = "insert into $q2 (id,bl1,bl2)  values('1','$m','$d')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//更新缓存数据
$inina="xtbl.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

} else{
include("./sql/mysql.php");//调用数据库连接 

//修改数据
$q2="xtbl";
$strsql = "update $q2 set bl1=$m,bl2=$d where id=1";//物品id号必改值
$result = mysql_query($strsql);

include("./ini/xtbl_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('国战判断时间', ['月' => $m]);
$iniFile->updItem('国战判断时间', ['日' => $d]);


}
	
}	
	


} else{
	

include("./ini/xtbl_ini.php");
$m= date('m')*1;
$d= date('d')*1;
	
if($xtbl1==$m&&$xtbl2==$d){
} else{	
include("./sql/mysql.php");//调用数据库连接 		
//清空报名表
$q2="gz02";
$strsql = "truncate table $q2";
$result = mysql_query($strsql);
//更新缓存数据
$inina="gz02.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据




if($xtbl1==""){
//新增数据
$q2="xtbl";
$sql = "insert into $q2 (id,bl1,bl2)  values('1','$m','$d')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//更新缓存数据
$inina="xtbl.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

} else{
include("./sql/mysql.php");//调用数据库连接 

//修改数据
$q2="xtbl";
$strsql = "update $q2 set bl1=$m,bl2=$d where id=1";//物品id号必改值
$result = mysql_query($strsql);

include("./ini/xtbl_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('国战判断时间', ['月' => $m]);
$iniFile->updItem('国战判断时间', ['日' => $d]);


}
	
}	
	
}	
echo "<font color=black>[攻城-已报名的国家]</font>"."<br>";

//判断攻城报名表是否合法

include("./ini/yl_ini.php");
$iniFile->updItem('背包页面', ['页面id' => '192']);
include("./ini/gz02_ini.php");
$gjmz=($iniFile->getCategory('国家名字'));
$jzmz=($iniFile->getCategory('君主名字'));
$m=count($gjmz,0)-1; 

if($m>=1){
foreach(array_keys($gjmz) as $key){
$keygjmz[]=$gjmz[$key];
}
foreach(array_keys($jzmz) as $key){
$keyjzmz[]=$jzmz[$key];
}
$i=0;


for($x=0;$x<=$m;$x++){	
$i=$i+1;
$ik=$i;
$gj01= $keygjmz[$i];
$gj02=$keyjzmz[$i];
if($gj01!=""){

echo "<font color=black>".$ik.".</font>";
echo "<font color=black>".$gj01."（".$gj02."）</font>"."<br>";



}



}



} else{	

echo "<font color=black>暂无任何国家报名参战</font>"."<br>";
}



echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=187;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";









//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");




















?>