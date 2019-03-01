<?php

	//调用bl.ini是否存在
 $blzd1=1;  
include("./ini/bl_ini.php");


# 获取一个分类下所有数据
$zd1=($iniFile->getCategory('玩家排序'));
$m=0;
$m=count($zd1,0)-1; 	

if($m>=1){
$keyzd1[]="";
	foreach(array_keys($zd1) as $key){
$keyzd1[]=$zd1[$key];
}



	
$tmp2="排序";
$arr2=$keyzd1;
foreach( $arr2 as $k=>$v) {
    if($tmp2 == $v) unset($arr2[$k]);
}

$ltmax1=max($arr2);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
//$ltmax1=$ltmax1+1;

# 获取一个分类下某个子项的值
//$wjfy=($iniFile->getItem('玩家发言',$ltmax1));



# 获取一个分类下某个子项的值
$wjfymz=($iniFile->getItem('玩家名字',$ltmax1));
# 获取一个分类下某个子项的值
$wjfyid=($iniFile->getItem('玩家id',$ltmax1));
$wjfyvip=($iniFile->getItem('玩家vip',$ltmax1));
$blzd1=2;
echo "<font color=black>队伍邀请信息：</font><br>";
echo "<font color=black>------------------------------</font><br>";


$img='pic/vip/'."vip".$wjfyvip.'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
echo "<font color=black>".$wjfymz."向你发起了组队请求"."</font><br>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=109;
$npc[]=$wjfyid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>接受</font></a>"."<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=110;
$npc[]=$wjfyid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>拒绝</font></a><br>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=104;
$npc[]=$wjfyid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>加入黑名单</font></a>"."<br>";


echo "<font color=black>------------------------------</font><br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=1;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏首页</font></a>"."<br>";







	} else{

	} 

	

?>




