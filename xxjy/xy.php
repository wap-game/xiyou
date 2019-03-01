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


echo "<font color=red>----------调试信息-----------</font>"."<br>";
echo "<font color=black>上次页面ID：".$yymid."</font>"."<br>";
echo "<font color=black>本次页面ID：".$symid."</font>"."<br>";
echo "<font color=red>----------调试信息-----------</font>"."<br>";





?>

</div>
<form  action="" method="POST">
<font color=black>请输入你要说的话:</font><br>
<input  type="text" name="wjtoke" placeholder="请输入你要说的话"id='search'><br>
<input  type="submit" name="submit" value="发送"id="search1" ><br>
</form>
</body>
</html>

<form  action="" method="POST">
<font color=black>请输入你要说的话:</font><br>
<input  type="text" name="wjtoke" placeholder="请输入你要说的话"id='search'><br>
<input  type="submit" name="submit" value="发送"id="search1" ><br>
</form>


