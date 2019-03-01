<?php
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;


$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){

//记录看对方的id

$inina="user.ini";
//路径
$path='ache/'.$wjid1;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('最后页面id', ['ckid' => $npcc]);

//调用zt.ini是否存在
include("./ini/zt_ini.php");

$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$wjvip=($iniFile->getItem('玩家信息','vip等级'));


$img='pic/vip/'."vip".$wjvip.'.png';
echo '<img src="'.$img.' "alt="图片">';
echo "<font color=black>".$wjmz."的挂售：</font>"."<br>";
//调用gsrl.ini是否存在
include("./ini/gsrl_ini.php");
//调用zt.ini是否存在
include("./ini/zt_ini.php");
# 获取一个分类下多个子项的值
$gsrlb=($iniFile->getItem('玩家信息','挂售容量'));
include("wp/gsrl.php");
echo "<font color=black>挂售容量：".$gsbbrla."/".$gsrlb."</font></a>"."<br>";



//保存页面id方便分页使用
if($cmdd==239){
		$wjid=$wjid1;
//调用yl.ini是否存在
include("./ini/yl_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包页面', ['页面id' => $cmdd]);
$wjid=$ckid;



} else{

}


//调用wp.ini是否存在
   
include("./ini/gsqt_ini.php");


$wjid=$wjid1;



# 获取一个分类下所有数据
$wpid=($iniFile->getCategory('其他id'));
# 获取一个分类下所有数据
$wpmz=($iniFile->getCategory('其他名字'));

# 获取一个分类下所有数据
$wpsl=($iniFile->getCategory('其他数量'));
# 获取一个分类下所有数据
$wpjg=($iniFile->getCategory('其他价格'));


$m=count($wpid,0)-1; 
if($m>0){

if($cmdd!=239){

//调用gswp.ini是否存在
include("./ini/gsqt_ini.php");
$uwpid=($iniFile->getCategory('其他id'));
$ym=$uwpid[初始];

}elseif($cmdd==239){

	//调用gswp.ini是否存在
include("./ini/gsqt_ini.php");
$ym=1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他id', ['初始' => $ym]);
} else{
$ym=$wpid[初始];
}




$i=0;


$km=0;





//将ini值取出数组方便使用
foreach(array_keys($wpmz) as $key){
$keywpmz[]=$wpmz[$key];
}
foreach(array_keys($wpsl) as $key){
$keywpsl[]=$wpsl[$key];
}
foreach(array_keys($wpid) as $key){
$keywpid[]=$wpid[$key];
}
foreach(array_keys($wpjg) as $key){
$keywpjg[]=$wpjg[$key];
}
//将ini值取出数组方便使用












for($d=0;$d<$m;$d++){
$i=$i+1;

$ivd=$keywpid[$i];
$mvz=$keywpmz[$i];
$svl=$keywpsl[$i];
$svljg=$keywpjg[$i];


$mmz[]=$mvz;
$ssl[]=$svl;
$iid[]=$ivd;
$km=$km+1;
$mz[]=$mvz;
$jjg[]=$svljg;





}





$i=-2;
$mcc=$km/10;


if($mcc>=$ym){


for($x=0;$x<=9;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];
$wpjg=$jjg[$ym*10-9+$i];

//数字转汉字
$yl=$wpjg;
include("./pz/ylts.php");
if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=240;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."</font></a>"."<font color=blue>x".$cl."（".$ylxx."两/个）|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=241;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";

}



}


} else{
if($ym>1){
$mcc=$km%10-1;

for($x=0;$x<=$mcc;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];
$wpjg=$jjg[$ym*10-9+$i];

//数字转汉字
$yl=$wpjg;
include("./pz/ylts.php");
if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=240;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."</font></a>"."<font color=blue>x".$cl."（".$ylxx."两/个）|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=241;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
}


}
} else{
$i=-2;
for($x=0;$x<=$km-1;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];
$wpjg=$jjg[$ym*10-9+$i];

//数字转汉字
$yl=$wpjg;
include("./pz/ylts.php");
if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=240;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."</font></a>"."<font color=blue>x".$cl."（".$ylxx."两/个）|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=241;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
}



}


}





}





$f=0;

if($ym!=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=40;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>首页</font></a>";
echo  "<font color=blue>|</font></a>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=39;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>上页</font></a>";

$f=1;

}
$mcc=$km/10;
if($f>0&&$mcc>$ym){
echo  "<font color=blue>|</font></a>";
}



$mcc=$km/10;
if($mcc>$ym){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=38;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下页</font></a>";
echo  "<font color=blue>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=41;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>末页</font></a>";
$f=1;
}

if($f>0){
echo "<br>";
}



} else{


echo "<font color=black>暂时无任何挂售的宝石</font></a>"."<br>";


}




echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=226;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
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
include("./ini/ojsini.php");
//解锁当前使用的ini

?>