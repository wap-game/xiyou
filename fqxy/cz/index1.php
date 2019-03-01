<html>
<head>
<meta charset="UTF-8">
<title>充值中心</title>
<meta name="viewport" content="width=720,width=device-width,initial-scale=1,initial-scale=1.0,maximum-scale=1.0" />
<link rel="icon" href="http://static.zd-zd.com/img/favicon.png" type="image/x-icon"/> 
<link rel="stylesheet" href="alipay.css">
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
		<div class="cz_title"><p>小轩游戏充值中心</p></div>
			</div>

			
		    <div class="cz_desc">
			<p>充值游戏：小轩西游</p>
			<div class="line"></div>
			<p>充值账户：<? $wjid=$_GET['uid'];
			echo $wjid;


 ?>
			
			</p>
			<div class="line"></div>
			
			<p>充值比例：1：10</p>
			<div class="line"></div>
			<p style="color: #FC6205;">充值介绍：小轩自助充值系统是自主开发的充值系统如遇到充值已付款未到帐请联系客服QQ:137154720进行处理</p>

			<p style="color: #FC6205;">充值提醒：目前小轩充值系统已完善充值时间请在08:00-00:00进行00:00充值的第二天早上08:00到账</p>

			<div class="line"></div>
			
		</div>	
			
			
			
			
			
			
			
			
			




	       <div class="cz_amt">

		


          

		  
	
	

	
			
<?

echo "<font color=black>请选择：</font>";
$sid=$_GET['sid'];

echo "<a href=index.php?uid=$wjid&&sid=$sid><font color=blue>【支付宝】</font></a>";
echo "<font color=black>【微信】</font>"."</br>";


echo "<font color=black>==========</font>"."<br>";
echo "<font color=red>【支付方式】：已选择【微信】</font>"."<br>";




?>		
			

<?
$sid=$_GET['sid'];
?>		
<p>快捷充值金额：<span id="amterror" style="color: #FC6205;"></span></p>	
<form name="form1" method="post" action="pay.php?cny=???">
<div class="cz_amt">	
<input name="Button1" type="submit"class="amtd" value="100元" onclick="document.form1.action='wpay.php?cny=100&&uid=<?echo $wjid;?>&&sid=<?echo $sid;?>'">
<input name="Button2" type="submit"class="amtd" value="200元" onclick="document.form1.action='wpay.php?cny=200&&uid=<?echo $wjid;?>&&sid=<?echo $sid;?>'">
<input name="Button3" type="submit"class="amtd" value="50元" onclick="document.form1.action='wpay.php?cny=50&&uid=<?echo $wjid;?>&&sid=<?echo $sid;?>'">
<input name="Button4" type="submit"class="amtd" value="10元" onclick="document.form1.action='wpay.php?cny=10&&uid=<?echo $wjid;?>&&sid=<?echo $sid;?>'">
<input name="Button5" type="submit"class="amtd" value="500元" onclick="document.form1.action='wpay.php?cny=500&&uid=<?echo $wjid;?>&&sid=<?echo $sid;?>'">
<input name="Button6" type="submit"class="amtd" value="1000元" onclick="document.form1.action='wpay.php?cny=1000&&uid=<?echo $wjid;?>&&sid=<?echo $sid;?>'">
<input name="Button7" type="submit"class="amtd" value="2000元" onclick="document.form1.action='wpay.php?cny=2000&&uid=<?echo $wjid;?>&&sid=<?echo $sid;?>'">
<input name="Button8" type="submit"class="amtd" value="20元" onclick="document.form1.action='wpay.php?cny=20&&uid=<?echo $wjid;?>&&sid=<?echo $sid;?>'">



</div>
</form>
	
	

	
	
	<div class="btmalert">
	
			<p>
特别提醒：<br/>
1、充值最好在手机浏览器器上完成以免造成不到账的问题。<br/>
2、也可以扫码进行支付哦。<br/>
			</p>
    </div>
	

	


	

<div class="box-inner">
<div>
<div>

 
 <?
include("../url/url.php");

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