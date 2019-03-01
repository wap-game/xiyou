
<html>
<head>
<meta charset="UTF-8">
<title>小轩个人收款支付系统（支付宝）</title>
<meta name="viewport" content="width=720,width=device-width,initial-scale=1,initial-scale=1.0,maximum-scale=1.0" />
<link rel="icon" href="http://static.zd-zd.com/img/favicon.png" type="image/x-icon"/> 
<link rel="stylesheet" href="alipay.css">

<link rel="stylesheet" href="mobile.css" />
<link rel="stylesheet" href="ch5game.css" />
<link rel="stylesheet" href="ccolorbutton.css" />
<style type="text/css">
#inputprice{
width: 100%;
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



html,body,h1,h2,h3,h4,h5,h6,div,dl,dt,dd,ul,ol,li,p,blockquote,pre,hr,figure,table,caption,th,td,form,fieldset,legend,input,button,textarea,menu{margin:0;padding:0;}
header,footer,section,article,aside,nav,hgroup,address,figure,figcaption,menu,details{display:block;}
table{border-collapse:collapse;border-spacing:0;}
caption,th{text-align:left;font-weight:normal;}
html,body,fieldset,img,iframe,abbr{border:0;}
i,cite,em,var,address,dfn{font-style:normal;}
[hidefocus],summary{outline:0;}
li{list-style:none;}
h1,h2,h3,h4,h5,h6,small{font-size:100%;}
sup,sub{font-size:83%;}
pre,code,kbd,samp{font-family:inherit;}
q:before,q:after{content:none;}
textarea{overflow:auto;resize:none;}
label,summary{cursor:default;}
a,button{cursor:pointer;}
h1,h2,h3,h4,h5,h6,em,strong,b{font-weight:bold;}
del,ins,u,s,a,a:hover{text-decoration:none;}
body,textarea,input,button,select,keygen,legend{font:12px/1.14 arial,\5b8b\4f53;color:#333;outline:0;}
body{background:#fff;}
a,a:hover{color:#333;}

a,button,input{-webkit-tap-highlight-color:rgba(255,0,0,0);}
html,body{background: #eeeeee; color:#333333;}
body,button,input,textarea{ font: normal 100% Helvetica, Arial, sans-serif;}
a,a.active{color:inherit;}
.bd{
background-color:#F3F5F4;
overflow: hidden;
color: #000;
}
.line{
border-bottom: 1px solid #EDEBEE;height: 1px;margin-top: .1em;margin-bottom: .3em;
}
.cz{
}
.cz_title{
text-align: center;font-size: 1.2em;font-weight: bolder;border-bottom: 2px solid #0086DB;
height: 2.6em;line-height:2.6em; color: #fff;background-color:#0086DB;
}
.cz_title p{}
.cz_desc{
margin-top: 1em;width: 90%;margin-left: 5%;
}
.cz_amt{
width: 90%;margin-left: 5%;
}
.amtd{
border: 1px solid #0086DB; background-color: #F4F6F5;width: 23%;text-align: center;color: #000;display: inline-block;
margin-top: .3em;margin-bottom: .3em;height: 1.8em;line-height: 1.8em;
-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;
}
.amtd i{font-size: 1.1em;}
.amtd span{font-size: .7em;}

.amtds{
border: 1px solid #FC6205;color: #FC6205;
}



.cz_mode{
width: 90%;margin-left: 5%;
}
.moded{
border: 1px solid #B7B7B7; background-color: #F4F6F5;width: 48%;text-align: center;color: #000;display: inline-block;
margin-top: .3em;margin-bottom: .3em;height: 1.8em;line-height: 1.8em;
-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;
}
.modeds{
border: 1px solid #FC6205;color: #FC6205;
}
.modes{
background-color: #F4F6F5;width: 100%;text-align: center;display: inline-block;font-size: 1.1em;
height: 1.7em;line-height: 1.7em;-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;
}
.subbtn{
margin-top: 0em;height: 2em;font-size: 1.2em;width: 100%;margin-left: 0%;border:none;color:#fff;background-color:#FC6205;
-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;
}
.btmurl{
text-align: center;margin-top: 1em;
}
.btmalert{
width: 90%;margin-left: 5%;color: #FF6303;
}
.oldlink{
float: right;margin-right: 1em;height: 2em;font-size: 1.3em;color:#438A22 ;
}
.mothersel{
border: 1px solid #ED6603;
}
</style>


<body>
<div class="cz">
<div class="cz_title"><p>小轩支付中心（支付宝）</p></div>
</div>

    <div class="gray-box">
                        <div class="title">
                            <h2>Pay收银台 收款方：Summer</h2>
                        </div>
                        <!--内容-->
                        </div>

<?
ini_set("error_reporting","E_ALL & ~E_NOTICE");//防止报错代码
ini_set("date.timezone","PRC");//时间效准代码

$zcxx="<font color=red>客服QQ：137154720（支付不到账时联系）</font>"."<br>";
$zcxx1="<font color=red>提示：如需直接一键启动支付宝付款，请不要使用自动，五滴等外挂浏览器建议用正规手机浏览器</font>"."<br>";

?>


<div class="m-box-hd" style="margin-left: 3%;">
<div class="tt">

<?echo $zcxx1;?>
<?echo $zcxx;?>
</div>
</div>	




			
				
						
<?
$a1=$_GET['cny'];
?>		

			
					
<div class="box-inner order-info">
<p class="payment-detail">扫一扫付款（<?echo $a1;?>元）</p>
<p class="payment-detail">*亮结尾请勿扫错</p>

<div class="img-box" style="flex-direction: column">
<img class="pic" id="qr-pic"
src="pic/zfb/<?
if($a1 ==10){
echo "10";	
} elseif($a1 ==20){
echo "20";	
} elseif($a1 ==50){
echo "50";	
} elseif($a1 ==100){
echo "100";
} elseif($a1 ==200){
echo "200";
} elseif($a1 ==500){
echo "500";
} elseif($a1 ==1000){
echo "1000";
} elseif($a1 ==2000){	
echo "2000";
} else{
echo "xxx";
}
?>.png"width="168px" height="168px"/>

<?
ini_set("error_reporting","E_ALL & ~E_NOTICE");//防止报错代码
ini_set("date.timezone","PRC");//时间效准代码


$wjid=$_GET['uid'];
if($a1 ==10){
$a2=10;	

/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////


} elseif($a1 ==20){
$a2=20;	

/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////


} elseif($a1 ==50){
$a2=50;	

/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////

} elseif($a1 ==100){
$a2=100;	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////

} elseif($a1 ==200){
$a2=200;
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////
	
} elseif($a1 ==500){
$a2=500;	

/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////
} elseif($a1 ==1000){
$a2=1000;	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////

} elseif($a1 ==2000){	
$a2=2000;	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////
} else{
$a2="xxx";	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=$a1;//充值方式1支付宝2微信
include("dd.php");//调用数据库连接 
/////////////////

}	





?>



<div class="explain">
<div class="box-inner">
<div>

<form name="form1" method="post" action="payy.php?cny=???">
<input name="Button9" type="submit"class="main-btn" value="一键启动支付宝" onclick="document.form1.action='payy.php?cny=<?echo $a2;?>'">
</form>


</div>
</div>			
</div>	


<div class="box-inner">
<div>
<div>

 
 <?
include("../url/url.php");
$wjid=$_GET['uid'];
$sid=$_GET['sid'];
?>
 <?
include("../url/url.php");
echo "<a href=http://".$url."/fqxy/xy.php?uid=$wjid&&cmd=2&&sid=$sid><font color=blue>返回游戏</font></a>"."<br>";
?>

















</div>
</div>
</div>
							
						

</body>
</html>
















