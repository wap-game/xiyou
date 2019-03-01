<?
header("Content-type: text/html; charset=utf-8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">  
<title>小轩游戏-注册</title>

<link rel="stylesheet" href="../css/touchScreen/mobile.css" />
<link rel="stylesheet" href="../css/touchScreen/ch5game.css" />
<link rel="stylesheet" href="../css/touchScreen/ccolorbutton.css" />
<link rel="icon" href="../img/favicon.png" type="image/x-icon" />
<style type="text/css">
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

	a{color: #0077E0;}	table{max-width: 600px;min-width: 280px;}	td{height:30px;}	.lbg{height:20px;border-bottom: 1px solid #DCDCDC;}	.btable{border-top: 1px solid #9DB3C5;}
	.circle {width: 16px;height: 16px;line-height:16px;-moz-border-radius: 8px;-webkit-border-radius: 8px;border-radius: 8px;color: #fff;text-align:center;font-size: 10px;}
	.red.circle{background: #e62727;}	.orange.circle{background: #ff5c00;}	.pink.circle{background: #e22092;}	.green.circle{background: #56A418;}	.blue.circle{background: #2981e4;}	.err{color: red;font-size: 13px;}
</style>
</head>
<body>


<?php



ini_set("date.timezone","PRC");//时间效准代码
error_reporting(E_ALL & ~E_NOTICE); 
if($_POST['submit']){

	
	
//内测完后删除	
$zczh5= $_POST['zc5'];	
	
	
	

	
if($zczh5!=""){	
//内测完后删除		
	
	
	
	
	
	
	
	
	
	
	
$zczh1= $_POST['zc1'];	
	
if($zczh1!=""){
$zczh2= $_POST['zc2'];	
if($zczh2!=""){
$zczh3= $_POST['zc3'];	
if($zczh3!=""){

$zczh4= $_POST['zc4'];	
if($zczh4!=""){
$zczh6= $_POST['zc6'];	
if($zczh6!=""){
if(preg_match('/^[\w-\.]{6,12}$/', $zczh1)){	
if(preg_match('/^[\w-\.]{6,12}$/', $zczh2)){		
if(preg_match('/^[\w-\.]{6,12}$/', $zczh3)){	

if(preg_match('/^[\w-\.]{6,12}$/', $zczh4)){	
if(strlen($zczh6) <= 16){  

//连接数据库
include("../sql/mysql.php");//调用数据库连接



$q2="zem";
mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where zem='$zczh5'",$conn);
$info1=@mysql_fetch_array($sql1);
$zcm=$info1[zem];
$sy=$info1[sy];




if($zczh5==$zcm){
if($sy==1){

//查询账号是否已占有
$q2="o_user_list";
$sql1=mysql_query("select uid from $q2 where username='$zczh1'",$conn);
$info1=@mysql_fetch_array($sql1);
$zczhpd=$info1[uid];


if($zczhpd==""){
$q2="o_user_list";
$sql1=mysql_query("select name from $q2 where name='$zczh6'",$conn);
$info1=@mysql_fetch_array($sql1);
$zczhpd1=$info1[name];
if($zczhpd1!=$zczh6){
ini_set("error_reporting","E_ALL & ~E_NOTICE");//防止报错代码	
//获取最大值
$q2="o_user_list";
$sql1=mysql_query("select MAX(uid) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];


if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}


$ma=md5($zczh2.ALL_PS);;
$aqm=md5($zczh4.ALL_PS);
$zczh2=md5($zczh2.ALL_PS);
$y= date('Y')*1;
$m= date('m')*1;
$d= date('d')*1;
$h= date('H')*1;
$i= date('i')*1;
$s= date('s')*1;

$q2="o_user_list";
mysql_query("set names utf8");
$sql = "insert into $q2 (uid,m_id,name,username,password,n,y,r,s,f,m,ma,aqm)  values('$maxidd','0','$zczh6','$zczh1','$zczh2','$y','$m','$d','$h','$i','$s','$ma','$aqm')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }


 
 
 
 
 $mysql002=$maxidd+10000000;


//加入ini


	//路径
$path='../ache/'.$mysql002;
$dir = iconv("UTF-8", "GBK", "$path");
        if (!file_exists($dir)){
            mkdir ($dir,0777,true);
        } else {
        }

$q2="zem";
mysql_query("set names utf8");
$strsql = "update $q2 set sy=2 where zem='$zczh5'";//物品id号必改值
$result = mysql_query($strsql);

 




include("../url/url.php");

$xyurl="http://".$xxjyurl."/xxjy/xxjyzc.php?zh=$zczh1&&mm=$zczh3&&aqm=$zczh4";



echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$xyurl'>";


}else{

$zcxx="<font color=red>对不起！这个昵称太火了换一个吧</font>";
}
}else{

$zcxx="<font color=red>对不起该账号已存在了</font>";
}

}else{
echo "<font color=red>对不起!该注册码已被使用过了</font>"."<br>";

}
}else{
echo "<font color=red>对不起!你的注册码不正确</font>"."<br>";

}

}else{

$zcxx="<font color=red>昵称超过了最大限制</font>";
}
}else{

$zcxx="<font color=red>安全码只能为6-12位字母或数字</font>";
}

}else{

$zcxx="<font color=red>密码只能为6-12位字母或数字</font>";
}

}else{

$zcxx="<font color=red>密码只能为6-12位字母或数字</font>";
}


}else{

$zcxx="<font color=red>账号只能为6-12位字母或数字</font>";
}


}else{

$zcxx="<font color=red>昵称不能为空</font>";
}

}else{

$zcxx="<font color=red>安全码不能为空</font>";
}


}else{
$zcxx="<font color=red>密码不能为空</font>";
}

}else{

$zcxx="<font color=red>密码不能为空</font>";
}
}else{

$zcxx="<font color=red>账号不能为空</font>";
}




//内测完后删除	
}else{

$zcxx="<font color=red>对不起!注册码不能为空</font>";
}


}else{


}

?>




<div class="g-hd f-cb">

    <img src="../images/logo1.jpg" alt="">

<div align="right">
<div style="margin-right: 10px;" class="m-icon-list">
<br />

</div>
</div>
</div>
<div class="g-mn">
<div class="m-box">
<div class="m-box-hd" style="margin-left: 3%;">



<div class="tt">
<?echo $zcxx;?><br>
小轩一站式通行证注册
</div>
</div>
<div class="m-box-mn" style="padding: 5px 10px 0px 10px;">



<form  action="<?echo "regist.php";?>" method="post">
昵----称：&nbsp&nbsp&nbsp&nbsp<input  type="text" name="zc6" placeholder="昵称"id='search'><font color=red>（4个字符以下）</font><br>
账----号：&nbsp&nbsp&nbsp&nbsp<input  type="text" name="zc1" placeholder="账号"id='search'><font color=red>（6-12位的字母或数字）</font><br>
密----码：&nbsp&nbsp&nbsp&nbsp<input  type="text" name="zc2" placeholder="密码"id='search'><font color=red>（6-12位的字母或数字）</font><br>
确认密码：&nbsp&nbsp<input  type="text" name="zc3"  placeholder="确认密码"id='search'><font color=red>（6-12位的字母或数字）</font><br>
[安全码]：&nbsp&nbsp&nbsp<input  type="text" name="zc4" placeholder="安全码"id='search'><font color=red>（6-12位的字母或数字）</font><br>
[注册码]：&nbsp&nbsp&nbsp<input  type="text" name="zc5" placeholder="注册码"id='search'><font color=red>（请向加QQ群54665469索要）</font><br>
<input  type="submit" name="submit"  value="注册" id="search1" /><br>
</form>


<br>
<a href='/xxjy/login.php'><font color=blue>返回登录</font></a>
<br>
<br>
<br>






<div class="article-content" style="font-size: 15px;margin-top: 10px;">

</div>
</div>
</div>
</div>
<div class="g-ft f-cb">

<div class="f-fr"><a href="../index.php" class="to-top">返回官网</a><br /></div>
</div>
</body>
</html>




