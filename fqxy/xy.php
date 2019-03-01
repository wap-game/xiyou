<?php
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>小轩西游</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link rel="shortcut icon" href="pic/ico/favicon.ico"/>

</head>



<body>

<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>


<style> 
#search{
width:235px;
height:32px;
border-radius:10px;
margin-top:5px;
margin-bottom:5px;
border:1px solid#ccc;
background-color:transparent;
transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
#search1{
width:82px;
height:38px;
background:#0086DB;
border:0;
border-radius:10px;
margin-top:5px;
color:white;
font-size:16px;
cursor:pointer;
}
input:focus{
border-color:#66AFE9!important;	
outline:0;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);
-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,0.6);
}
::-webkit-input-placeholder{
	text-indent:20px;
	font-size:16px;
}
::-moz-input-placeholder{
	text-indent:20px;
	font-size:16px;
}

</style>


<?php


ini_set("error_reporting","E_ALL & ~E_NOTICE");//防止报错代码
ini_set("date.timezone","PRC");//时间效准代码

//安全备份
include("aqbf.php");


$ip1 = $_SERVER['REMOTE_ADDR'];
$ip2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
$inina=$ip1.".ini";
$path='./ip';
$file = $path."/".$inina;	
if(file_exists($file)){
}else{	
//创建文件
file_put_contents($file,$ip1);		
}


//sleep(1);
//初始化变量以及接收传过来的数据
$a1="";
$a2="";
$cmd="";
$uid="";
$a1=$_GET['sid'];
$cmd=$_GET['cmd'];
$wjid=$_GET['uid'];

$inina="user.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	

if(file_exists($file)){





//获取上次连接游戏时间


//过快验证
$stime1=microtime(true);

//调用sjyz.ini是否存在
include("class/iniclass.php");//调用iniclass文件
include("./ini/sjyz_ini.php");
$inina="sjyz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	

# 获取一个分类下某个子项的值
$stime2=($iniFile->getItem('毫秒时间','时间'));
include("./wp/funk1.php");
$stime1=calc($stime1,'1000','mul');
$stime2=calc($stime2,'1000','mul');
$stime3=calc($stime1,$stime2,'sub');


if($stime3 > 100){














$stime=microtime(true);

//判断玩家的验证码是否合法
if($wjid > 10000000){
	
	
//调用user.ini是否存在
include("./ini/user_ini.php");
	
	
//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

//获取超连接
# 获取一个分类下某个子项的值
$cljid=($iniFile->getItem('验证信息','cmid值'));


$iniFile->updItem('最后页面id', ['页面id' => $cljid]);

# 获取一个分类下某个子项的值
//$cmdd=($iniFile->getItem('最后页面id','页面id'));


if($cljid == 0){
	$cljid=1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $cljid]);
} else{
	
# 获取一个分类下某个子项的值
$cljid=($iniFile->getItem('超链接值',$cmd));
if($cljid ==""){
# 获取一个分类下某个子项的值
$cljid=($iniFile->getItem('最后页面id','页面id'));

if($cljid ==3||$cljid ==4||$cljid ==5||$cljid ==6){
	
$cljid=2;
$iniFile->updItem('验证信息', ['cmid值' => $cljid]);
} else{
	
	}

# 获取一个分类下某个子项的值
$npcc=($iniFile->getItem('最后页面id','npcid'));

} else{
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $cljid]);
$npcc=($iniFile->getItem('超链接npc值',$cmd));	
	
$iniFile->updItem('最后页面id', ['npcid' => $npcc]);

}



	
	
} 
# 获取一个分类下所有数据
$user=($iniFile->getCategory('验证信息'));	
$xyid="";
$xyid=$user[uid];
$tzm=$user[玩家游戏码];
$b1=$user[年];
$b2=$user[月];
$b3=$user[日];
$b4=$user[时];
$b5=$user[分];
$b6=$user[秒];
$cid=$user[cmid值];
$xcid=$user[xcmid值];
$dcid=$user[dcmid值];

if($cid == 0){
	$cid = 1;
} else{

} 

//最小值
$a4=$dcid+1;
//cmd及超链接值
$cmid=$dcid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
$npc[]=0;
} else{
include("sx.php");

exit;
}


//判断特征码是否合法
if($tzm ==$a1){
} else{

include("sx.php");

exit;
}



//判断验证时间是否超过600秒
$y= date('Y')*1;
$m= date('m')*1;
$d= date('d')*1;
$h= date('H')*1;
$i= date('i')*1;
$s= date('s')*1;
$xx=$y*60*60*24*365+$m*60*60*24*30+$d*60*60*24+$h*60*60+$i*60+$s;
$yy=$b1*60*60*24*365+$b2*60*60*24*30+$b3*60*60*24+$b4*60*60+$b5*60+$b6;
$xxx=$xx-$yy;

if($xxx <=1200){
} else{
include("sx.php");


exit;
}

//修改时间信息方便下次验证时间

if($cmd >=$xcid&&$cmd <=$dcid||$cmd==1){
$cmdd=$cid;
$y= date('Y')*1;
$m= date('m')*1;
$d= date('d')*1;
$h= date('H')*1;
$i= date('i')*1;
$s= date('s')*1;

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['年' => $y,'月' => $m,'日' => $d,'时' => $h,'分' => $i,'秒' => $s]);


} else{

# 获取一个分类下某个子项的值
$yymid=($iniFile->getItem('最后页面id','页面id'));

if($yymid ==458||$yymid ==27||$yymid ==28||$yymid ==30||$yymid ==31||$yymid ==32||$yymid ==33||$yymid ==34||$yymid ==37||$yymid ==21||$yymid ==38||$yymid ==39||$yymid ==40||$yymid ==41||$yymid ==55||$yymid ==97||$yymid ==108||$yymid ==122||$yymid ==124||$yymid ==171||$yymid ==185||$yymid ==218||$yymid ==212||$yymid ==221||$yymid ==224
||$yymid ==228||$yymid ==235||$yymid ==238||$yymid ==241||$yymid ==258||$yymid ==259||$yymid ==271||$yymid ==276||$yymid ==290||$yymid ==292||$yymid ==319||$yymid ==369||$yymid ==334
||$yymid ==423||$yymid ==462||$yymid ==463||$yymid ==465||$yymid ==468||$yymid ==469||$yymid ==474||$yymid ==498||$yymid ==501||$yymid ==489||$yymid ==490||$yymid ==492||$yymid ==506
||$yymid ==493||$yymid ==494||$yymid ==495||$yymid ==496||$yymid ==508||$yymid ==510||$yymid ==512||$yymid ==514||$yymid ==516||$yymid ==537||$yymid ==538||$yymid ==539||$yymid ==541
||$yymid ==542||$yymid ==543||$yymid ==544||$yymid ==545||$yymid ==548||$yymid ==301||$yymid ==580||$yymid ==581||$yymid ==680||$yymid ==682){

# 获取一个分类下某个子项的值
$cmdd=($iniFile->getItem('最后页面id','页面id'));







# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $cmdd]);	


} else{


include("./ini/zt_ini.php");
$jcmz=($iniFile->getItem('玩家信息','玩家名字'));
	if($jcmz ==""){
		
		$cmdd=298;
	} else{
		
$cmdd=334;


} 





# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $cmdd]);	


}


}
//$wordpost =1;


//////////////////////////////////////////////////数据结构///////////////////////////////////////
//调用user.ini是否存在
include("./ini/user_ini.php");
$bugstime1=calc($stime1,'10','mul');
$bugx=($iniFile->getItem('地图坐标','x'));
$bugy=($iniFile->getItem('地图坐标','y'));
$bugym=($iniFile->getItem('最后页面id','页面id'));

$clj[]="";
$cdid[]="";

//npc

if($cmdd >=1&&$cmdd >=100){
include("xy01.php");	
} elseif($cmdd >=101&&$cmdd >=200){
include("xy02.php");	
} elseif($cmdd >=201&&$cmdd >=300){
include("xy03.php");
} elseif($cmdd >=301&&$cmdd >=400){
include("xy04.php");	
} elseif($cmdd >=401&&$cmdd >=500){
include("xy05.php");	
} elseif($cmdd >=501&&$cmdd >=600){
include("xy06.php");	
} elseif($cmdd >=601&&$cmdd >=700){
include("xy07.php");	










} else{
	//路径
$path='ache/'.$wjid;


	//ini文件名字
$inina="user.ini";
$ininame = $path."/".$inina;


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$y= 0;
$m= 0;
$d= 0;
$h= 0;
$i= 0;
$s= 0;

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['年' => $y,'月' => $m,'日' => $d,'时' => $h,'分' => $i,'秒' => $s]);
	
	
include("sx.php");
echo "特征4";

}



if($wjid ==10000001){
	
	
echo "当前页面id：".$cmdd."<br>";
	
	
	
	
	
} else{

}







//路径
$path='ache/'.$wjid;


	//ini文件名字
$inina="user.ini";
$ininame = $path."/".$inina;


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);






//最大值
$a5=$cmid;
//将cmd最小最大值写入


# 添加一个分类并直接添加子项
$iniFile->addCategory('验证信息', ['xcmid值' => $a4, 'dcmid值' => a5]);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['xcmid值' => $a4,'dcmid值' => $a5]);

//写入超链接及其所对应的值


if($a4>=1){

$i=-1;
$q3=$cdid[$i+1];
$q4=$clj[$i+1];
$q6=$npc[$i+1];

$cljz1="";
$cljz2="";
$iniFile->delCategory('超链接值');
$iniFile->delCategory('超链接npc值');

# 删除一个子项
# 添加一个分类并直接添加子项
$iniFile->addCategory('超链接值', [$q3 => $q4]);

# 添加一个分类并直接添加子项
$iniFile->addCategory('超链接npc值', [$q3 => $q6]);

$aa=$a5-$a4+1;
$i=1;
for($x=0;$x<$aa-1;$x++){
$q3=$cdid[$i+1];
$q4=$clj[$i+1];
$q6=$npc[$i+1];
# 添加一个子项(如果子项存在，则覆盖;)
$iniFile->addItem('超链接值', [$q3 => $q4]);
$iniFile->addItem('超链接npc值', [$q3 => $q6]);
$i=$i+1;

}

} else{

$iniFile->delCategory('超链接值');
$iniFile->delCategory('超链接npc值');



$aa=$a5-$a4+1;
$i=-1;

for($x=0;$x<$aa;$x++){
$q3=$cdid[$i+1];
$q4=$clj[$i+1];
$q6=$npc[$i+1];
# 添加一个子项(如果子项存在，则覆盖;)
$iniFile->addItem('超链接值', [$q3 => $q4]);
$iniFile->addItem('超链接npc值', [$q3 => $q6]);
$i=$i+1;

}


}













//if($npcc==""){
//$npcc=0;
//}

//$strsql = "update $q2 set ymid=$q5,npccid=$npcc where id=0";//物品id号必改值
//$result = mysql_query($strsql);


//if($ym==""){
//$ym=0;
//}


$etime=microtime(true);
 $total=$etime-$stime;
 
 $total=substr($total,0,5)*1000;
 




 
 echo "<font color=red>【小轩专属】执行耗时:".$total."毫秒</font>"."<br>";	

//显示时间
$h= date('H')*1;
$i= date('i')*1;
echo "小轩西游报时(".$h.":".$i.")"."<br>";



} else{
include("./ini/user_ini.php");
$iniFile->updItem('验证信息', ['cmid值' => 2]);






	//调用过快页面

include("shuax.php");

	
	
	
	
	}



//过快验证
$time=microtime(true);


//调用sjyz.ini是否存在
include("./ini/sjyz_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('毫秒时间', ['时间' => $time]);


//开启缓存

/*
ob_start(); 


	
   ob_flush();
  
 
     
    echo ob_get_contents();
*/







if ($wjid==10000001) {//gm号可看


//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

//获取超连接
# 获取一个分类下某个子项的值
$yymid=($iniFile->getItem('最后页面id','页面id'));
//获取超连接
# 获取一个分类下某个子项的值
$symid=($iniFile->getItem('验证信息','cmid值'));
echo "<font color=red>----------调试信息-----------</font>"."<br>";
echo "<font color=black>上次页面ID：".$yymid."</font>"."<br>";
echo "<font color=black>本次页面ID：".$symid."</font>"."<br>";
echo "<font color=red>----------调试信息-----------</font>"."<br>";

} else{


	
} 



}else{

	include("sx.php");	

	

	
  }



?>

</div>

</body>
</html>




