<?php
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- TemplateBeginEditable name="doctitle" -->
<title>小轩GM管理平台</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>

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
<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
<?php

ini_set("error_reporting","E_ALL & ~E_NOTICE");//防止报错代码
ini_set("date.timezone","PRC");//时间效准代码









$wjiddd=$_GET['wjid'];
$password=$_GET['pass'];
$gid=$_GET['gid'];

$wjid=$_GET['user'];
$wpid=$_GET['wpid'];
$wpsl=$_GET['wpsl'];
$wpmz=$_GET['wpmz'];
$wpfl=$_GET['wpfl'];
$wjname=$_GET['wjname'];
$hbid=$_GET['hbid'];
//ini文件名字
$inina="user2.ini";
//路径
$path='./ache/gm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
$filename = $ininame;

if(file_exists($filename)){

include("./class/iniclass.php");//调用iniclass文件
//调用user.ini是否存在
$inina="user2.ini";
$path='ache/gm';
$file = $path."/".$inina;	
$iniFile = new iniFile($file);	
# 获取一个分类下某个子项的值
$pass=($iniFile->getItem('验证信息','玩家验证'));
if($pass!=""||$password!=""){

}else{

$pass=1;
}
if($pass==$password){
	include("./url/url.php");
	
echo "当前GM页面：".$gid."<br>";
if($gid==1){
include("admin/gm01.php");//【玩家管理】和【系统管理】
} elseif($gid==2){   
include("admin/gm02.php");//【玩家管理】
} elseif($gid==3){   
include("admin/gm03.php");//【系统管理】
} elseif($gid==4){   
include("admin/gm04.php");//【查询玩家】
} elseif($gid==5){   
include("admin/gm05.php");//【发放物品】
} elseif($gid==6){   
include("admin/gm06.php");//【发放物品】
} elseif($gid==7){   
include("admin/gm07.php");//【发放物品】

} elseif($gid==8){   
include("admin/gm08.php");//【发布系统消息】

} elseif($gid==9){   
include("admin/gm09.php");//【禁止发言】30
} elseif($gid==10){   
include("admin/gm10.php");//【禁止发言】2小时
} elseif($gid==11){   
include("admin/gm11.php");//【禁止发言】1天
} elseif($gid==12){   
include("admin/gm12.php");//【禁止发言】1周
} elseif($gid==13){   
include("admin/gm13.php");//【禁止发言】永久
} elseif($gid==14){   
include("admin/gm14.php");//【解除禁止发言】

} elseif($gid==15){   
include("admin/gm15.php");//【封号】1天
} elseif($gid==16){   
include("admin/gm16.php");//【封号】1周
} elseif($gid==17){   
include("admin/gm17.php");//【封号】1月
} elseif($gid==18){   
include("admin/gm18.php");//【封号】半年
} elseif($gid==19){   
include("admin/gm19.php");//【封号】半年
} elseif($gid==20){   
include("admin/gm20.php");//【解除封号】

} elseif($gid==21){   
include("admin/gm21.php");//【刷新数据】
} elseif($gid==22){   
include("admin/gm22.php");//【刷新公共数据】
} elseif($gid==23){   
include("admin/gm23.php");//【刷新公共数据】执行
} elseif($gid==24){   
include("admin/gm24.php");//【小轩GM代码】
} elseif($gid==26){   
include("admin/gm26.php");//【得到代码】
} elseif($gid==27){   
include("admin/gm27.php");//【判物代码】
} elseif($gid==28){   
include("admin/gm28.php");//【银两经验物品】

} elseif($gid==29){   
include("admin/gm29.php");//10元
} elseif($gid==30){   
include("admin/gm30.php");//20元
} elseif($gid==31){   
include("admin/gm31.php");//50元
} elseif($gid==32){   
include("admin/gm32.php");//100元
} elseif($gid==33){   
include("admin/gm33.php");//200元
} elseif($gid==34){   
include("admin/gm34.php");//500元
} elseif($gid==35){   
include("admin/gm35.php");//1000元
} elseif($gid==36){   
include("admin/gm36.php");//2000元


} elseif($gid==37){   
include("admin/gm37.php");//【刷新排行榜数据】
} elseif($gid==38){   
include("admin/gm38.php");//【刷新排行榜数据】
} elseif($gid==39){   
include("admin/gm39.php");//【初始化奖池】
} elseif($gid==40){   
include("admin/gm40.php");//【全服发奖励】
} elseif($gid==41){   
include("admin/gm41.php");//【全服发奖励】二次确认
} elseif($gid==42){   
include("admin/gm42.php");//【全服发奖励】

} elseif($gid==43){   
include("admin/gm43.php");//【小轩西游充值管理】
} elseif($gid==44){   
include("admin/gm44.php");//【订单清空】

} elseif($gid==45){   
include("admin/gm45.php");//【小轩西游红包管理】

} elseif($gid==46){   
include("admin/gm46.php");//【清理红包】

} elseif($gid==47){   
include("admin/gm47.php");//【充值1元红包】

} elseif($gid==48){   
include("admin/gm48.php");//【充值10元红包】

} elseif($gid==49){   
include("admin/gm49.php");//【充值20元红包】
} elseif($gid==50){   
include("admin/gm50.php");//【充值50元红包】
} elseif($gid==51){   
include("admin/gm51.php");//【充值100元红包】

} elseif($gid==52){   
include("admin/gm52.php");//【小轩西游娱乐统计】

} elseif($gid==53){   
include("admin/gm53.php");//【天降财神统计】

} elseif($gid==54){   
include("admin/gm54.php");//【天降红包统计】

} elseif($gid==55){   
include("admin/gm55.php");//【天降红包统计清零】
} elseif($gid==56){   
include("admin/gm56.php");//【天降红包统计清零】

} elseif($gid==57){   
include("admin/gm57.php");//【兑换码提取】

} elseif($gid==58){   
include("admin/gm58.php");//【兑换码提取】宣传SDK码


} elseif($gid==59){   
include("admin/gm59.php");//【兑换码提取】拉人SDK码
} elseif($gid==60){   
include("admin/gm60.php");//【兑换码提取】福利SDK码
} elseif($gid==61){   
include("admin/gm61.php");//【兑换码提取】新区SDK码
} elseif($gid==62){   
include("admin/gm62.php");//【全服某个物品数量】

} elseif($gid==63){   
include("admin/gm63.php");//【全服某个物品数量】


} else {

} 


} else {

include("./url/url.php");
echo "<font color=red>当前验证信息失效,请重新登录</font>"."<br>";
echo "<a href=http://".$xxjyurl."/admin/login.php><font color=blue>返回GM登录</font></a>"."<br>";


}
} else {
	
	
	
	
include("./url/url.php");
echo "<font color=red>当前验证信息失效,请重新登录</font>"."<br>";
echo "<a href=http://".$xxjyurl."/admin/login.php><font color=blue>返回GM登录</font></a>"."<br>";

}









?>







</div>

</body>
</html>




