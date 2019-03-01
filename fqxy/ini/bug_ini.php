<?php
$iniFilexx=$iniFile;

$bugnowtime=date('Y-m-d H:i:s');

$bugfile="";
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
//$inina="all_ip_ini.ini";
$buginina="bug___ID".$wjid."______YM".$bugym."_______ZBx".$bugx."_ZBy".$bugy."______".$bugstime1."ini.ini";

$bugpath='acher/bug';

$bugfile = $bugpath."/".$buginina;	

if(file_exists($bugfile)){


}else{
//创建文件
file_put_contents($bugfile,"[玩家]");
$iniFile = new iniFile($bugfile);
$iniFile->addItem('bug检测所停留页面',['初始' => $bugym]); 
$iniFile->addItem('bug检测所停留坐标x',['初始' => $bugx]); 
$iniFile->addItem('bug检测所停留坐标y',['初始' => $bugy]); 
  $iniFile->addItem('bug检测所停留time',['初始' => $bugnowtime]);  	

}
 	
	
/*
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="bug_".$wjid."_".$bugnowtime.".ini";
$path="acher/bug";
$bugfile = $path."/".$inina;	
if(file_exists($bugfile)){

}else{
$inina="bug_".$wjid."_".$bugnowtime.".ini";
$path="acher/bug";
$bugfile = $path."/".$inina;	
//创建文件
file_put_contents($bugfile,"[玩家]");
$iniFile = new iniFile($bugfile);
$iniFile->addItem('bug检测所停留页面',['初始' => $bugym]); 
$iniFile->addItem('bug检测所停留坐标x',['初始' => $bugx]); 
$iniFile->addItem('bug检测所停留坐标y',['初始' => $bugy]); 

//初始
}
$iniFile = new iniFile($bugfile);

$iniFilexx=$iniFile;






*/
$iniFile=$iniFilexx;
?>