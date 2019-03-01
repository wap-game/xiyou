<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){



if($bpid>=1){
	
	
	//是否为国家官员
include("./ini/bp_ini.php");
$gjmz=($iniFile->getItem('国家信息','国家名字'));
$cc02=($iniFile->getItem('国家信息','辅助大臣id'));
$cc03=($iniFile->getItem('国家信息','军机大臣id'));
$cc04=($iniFile->getItem('国家信息','财政大臣id'));
$cc05=($iniFile->getItem('国家信息','工部大臣id'));
$cc06=($iniFile->getItem('国家信息','外交大臣id'));
$cc07=($iniFile->getItem('国家信息','军团长id'));

$bprs=($iniFile->getItem('国家信息','国家人数'));
$bprspd=$bprs-1;


$iniFile->updItem('国家信息', ['国家人数'=> $bprspd]);


include("./sql/mysql.php");//调用数据库连接 

if($cc02==$wjid){  

$q2="all_bp";
$strsql = "update $q2 set ccmz01=0,ccid01=0 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('国家信息', ['辅助大臣'=> 0]);
$iniFile->updItem('国家信息', ['辅助大臣id'=> 0]);


} elseif($cc03==$wjid){  
$q2="all_bp";
$strsql = "update $q2 set ccmz02=0,ccid02=0 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('国家信息', ['军机大臣'=> 0]);
$iniFile->updItem('国家信息', ['军机大臣id'=> 0]);

} elseif($cc04==$wjid){  

$q2="all_bp";
$strsql = "update $q2 set ccmz03=0,ccid03=0 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('国家信息', ['财政大臣'=> 0]);
$iniFile->updItem('国家信息', ['财政大臣id'=> 0]);
} elseif($cc05==$wjid){  
$q2="all_bp";
$strsql = "update $q2 set ccmz04=0,ccid04=0 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('国家信息', ['工部大臣'=> 0]);
$iniFile->updItem('国家信息', ['工部大臣id'=> 0]);

} elseif($cc06==$wjid){  
$q2="all_bp";
$strsql = "update $q2 set ccmz05=0,ccid05=0 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('国家信息', ['外交大臣'=> 0]);
$iniFile->updItem('国家信息', ['外交大臣id'=> 0]);

} elseif($cc07==$wjid){  
$q2="all_bp";
$strsql = "update $q2 set ccmz06=0,ccid06=0 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('国家信息', ['军团长'=> 0]);
$iniFile->updItem('国家信息', ['军团长id'=> 0]);
} else{

}


$q2="all_zt";
$strsql = "update $q2 set bpid=0,bpmz=0 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$q2="bp".$bpid;
$strsql = "delete from $q2 where userid=$wjid ";//物品id号必改值
$result = mysql_query($strsql);

include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['帮派id'=> 0]);
$iniFile->updItem('玩家信息', ['帮派名字'=> 0]);
$iniFile->updItem('玩家信息', ['帮派职务'=> 0]);



//更新缓存数据
$inina="bpp".$bpid.".ini";
$path='acher/bp';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据



echo "<font color=red>你退出了".$gjmz."</font><br>";













} else{
	

echo "<font color=black>你还未加入任何国家！！</font><br>";
}












echo "<br>";











//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");









} else{	
}
//解锁当前使用的ini
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini





?>








