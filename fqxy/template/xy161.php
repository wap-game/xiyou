<?php




		//调用zt.ini是否存在  
include("./ini/fz_ini.php");
$fzpd=($iniFile->getItem('所处房间人id','初始'));

if($fzpd==123){


} else{	
$wjid1=$wjid;
$wjid=$fzpd;

} 

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
if($fzpd==123){


} else{	
$wjid=$wjid1;

} 


include("./ini/user_ini.php");
$ymid=($iniFile->getItem('最后页面id','页面id'));


	if($fzpd==123){


} else{	
$wjid=$fzpd;

} 
//调用家具缓存
include("./ini/jj_ini.php");

	if($fzpd==123){


} else{	

$wjid=$wjid1;

} 

$jjmz=($iniFile->getItem('家具名字',$npcc));
$jjdj=($iniFile->getItem('家具等级',$npcc));
$jjid=$npcc;
echo "<font color=red>".$jjmz."(".$jjdj."级)</font>"."<br>";

if($jjid ==1){


include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰攻+".$jjbg."火攻+".$jjhg."雷攻+".$jjlg."</font>"."<br>";


} elseif($jjid ==2){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰防+".$jjbf."火防+".$jjhf."雷防+".$jjlf."</font>"."<br>";


} elseif($jjid ==3){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>攻击增加".$jjgj."点</font>"."<br>";


} elseif($jjid ==4){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>魔攻增加".$jjmg."点</font>"."<br>";

} elseif($jjid ==5){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>防御增加".$jjfy."点</font>"."<br>";


} elseif($jjid ==6){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>攻击增加".$jjgj."点</font>"."<br>";

} elseif($jjid ==7){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>魔攻增加".$jjmg."点</font>"."<br>";



} elseif($jjid ==22){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>可用于打磨一些一般的宝石</font>"."<br>";



if($ymid!=160){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖生命强化石〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖攻击强化石〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖魔攻强化石〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖防御强化石〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";
} else{
} 

echo "<br>";
} elseif($jjid ==25){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰防+".$jjbf."火防+".$jjhf."雷防+".$jjlf."</font>"."<br>";


} elseif($jjid ==36){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>民宅杂物室可用，10单位物品仓库容量</font>"."<br>";

} elseif($jjid ==37){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>民宅杂物室可用，布置后可使用银两存取功能</font>"."<br>";



///////////



} elseif($jjid ==8){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰攻+".$jjbg."火攻+".$jjhg."雷攻+".$jjlg."</font>"."<br>";


} elseif($jjid ==9){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰防+".$jjbf."火防+".$jjhf."雷防+".$jjlf."</font>"."<br>";


} elseif($jjid ==10){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>攻击增加".$jjgj."点</font>"."<br>";


} elseif($jjid ==11){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>魔攻增加".$jjmg."点</font>"."<br>";

} elseif($jjid ==12){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>防御增加".$jjfy."点</font>"."<br>";


} elseif($jjid ==13){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>攻击增加".$jjgj."点</font>"."<br>";

} elseif($jjid ==14){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>魔攻增加".$jjmg."点</font>"."<br>";



} elseif($jjid ==23){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>可用于打磨一些一般的宝石</font>"."<br>";




if($ymid!=160){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖生命强化玉〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖攻击强化玉〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖魔攻强化玉〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖防御强化玉〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";






} else{
} 

















} elseif($jjid ==26){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰防+".$jjbf."火防+".$jjhf."雷防+".$jjlf."</font>"."<br>";

} elseif($jjid ==27){
include("wp/jjsx.php");//调用家具属性
echo "<font color=black>防御增加".$jjfy."点</font>"."<br>";






} elseif($jjid ==38){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>豪宅储藏室可用，20单位物品仓库容量</font>"."<br>";

} elseif($jjid ==39){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>豪宅储藏室可用，布置后可使用银两存取功能</font>"."<br>";







//////////////






} elseif($jjid ==15){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰攻+".$jjbg."火攻+".$jjhg."雷攻+".$jjlg."</font>"."<br>";


} elseif($jjid ==16){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰防+".$jjbf."火防+".$jjhf."雷防+".$jjlf."</font>"."<br>";


} elseif($jjid ==17){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>攻击增加".$jjgj."点</font>"."<br>";


} elseif($jjid ==18){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>魔攻增加".$jjmg."点</font>"."<br>";

} elseif($jjid ==19){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>防御增加".$jjfy."点</font>"."<br>";


} elseif($jjid ==20){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>攻击增加".$jjgj."点</font>"."<br>";

} elseif($jjid ==21){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>魔攻增加".$jjmg."点</font>"."<br>";



} elseif($jjid ==24){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>可用于打磨一些高级的宝石</font>"."<br>";

if($ymid!=160){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖生命之源〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖攻击之源〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖魔攻之源〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=80;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖防御之源〗</font></a>";

echo "<font color=black>|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=310;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打磨</font></a>"."<br>";





} else{
} 









} elseif($jjid ==28){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰防+".$jjbf."火防+".$jjhf."雷防+".$jjlf."</font>"."<br>";

} elseif($jjid ==29){
include("wp/jjsx.php");//调用家具属性
echo "<font color=black>防御增加".$jjfy."点</font>"."<br>";

} elseif($jjid ==30){
include("wp/jjsx.php");//调用家具属性
echo "<font color=black>攻击增加".$jjgj."点,魔攻增加".$jjmg."</font>"."<br>";


} elseif($jjid ==31){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>攻击增加".$jjgj."点</font>"."<br>";

} elseif($jjid ==32){
include("wp/jjsx.php");//调用家具属性
echo "<font color=black>防御增加".$jjfy."点</font>"."<br>";

} elseif($jjid ==33){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>魔攻增加".$jjmg."点</font>"."<br>";

} elseif($jjid ==34){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰防+".$jjbf."火防+".$jjhf."雷防+".$jjlf."</font>"."<br>";


} elseif($jjid ==35){

include("wp/jjsx.php");//调用家具属性
echo "<font color=black>增加冰攻+".$jjbg."火攻+".$jjhg."雷攻+".$jjlg."</font>"."<br>";


} elseif($jjid ==40){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>官宅保管库可用，30单位物品仓库容量</font>"."<br>";

} elseif($jjid ==41){

//include("wp/jjsx.php");//调用家具属性
echo "<font color=black>官宅保管库可用，布置后可使用银两存取功能</font>"."<br>";

} else{
echo "<font color=black>未获取到家具信息请联系gm进行解决</font>"."<br>";

}


if($ymid==160){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=160;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

} else{


}















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
include("./ini/jsini.php");
//解锁当前使用的ini
?>