<?
header("Content-type: text/html; charset=utf-8");

error_reporting(E_ALL & ~E_NOTICE); 
include("../class/iniclass.php");//调用iniclass文件
$wjid=$_GET['wjid'];
$password=$_GET['pass'];
if($wjid!=""||$password!=""){

	
	//调用user.ini是否存在
include("../ini/user_ini.php");		
	

$pass=($iniFile->getItem('验证信息','玩家验证'));

if($pass==$password&&$password!=""&&$pass!=""){
$name=($iniFile->getItem('验证信息','玩家昵称'));

$zcxx="<font color=red>欢迎【".$name."】来到小轩娱乐游戏社区！！</font>";
$xxjyurl="?wjid=".$wjid."&&pass=".$password;
}else{
$xxjyurl="";

}



}else{
$xxjyurl="";	

}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="UTF-8">
<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="/css/touchScreen/css.css"/>

<link id="colorStyle" rel="stylesheet" type="text/css" href="/css/touchScreen/1_colorStyle.css"/>


<script type="text/javascript" src='//cdn.bootcss.com/jquery/1.8.0/jquery.min.js'></script>
<script type="text/javascript" src='/js/touchScreen/copyban.js'></script>
<script type="text/javascript" src='/js/touchScreen/appLoginOut.js'></script>
<script>

</script>
<title>网游</title>
<link rel="shortcut icon" href="/images/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="/css/touchScreen/index.css"/>
<link rel="stylesheet" type="text/css" href="/css/touchScreen/yule.css"/>

<script type="text/javascript" src='/js/touchScreen/iscroll.js'></script>

<link rel="stylesheet" type="text/css" href="/touchNav/nav.css"/>
<script type="text/javascript" src='/touchNav/nav.js'></script>
  <style>
        .friend_right,.home_gd{
            width: 80%;
            right: 3%;
            text-align:left;
        }
        .index_friends{
            width: 94%;
        }
        .friend_name{
            width: 80%;
        }
        .but{
            right: 0;
        }
        .padding_box{
            padding:2% 3%;
        }
        .friend_name{
            width: 100%;
        }
        .title .visit{
            float: left;
        }
        .title .friend_visit{
            float: left;
        }
        .tribe_list ul li:last-of-type{
            border-bottom: 0 none;
        }
        .logo{
            position: relative;
            top: -75px;
            padding:5px 0;
        }
        .logo>div{
            z-index:99999;
            position: absolute;
            width: 96px;
            height: 50px;
            line-height: 50px;
            right: 0;
            top: 5px;
            text-align: center;
        }
        .logo>div>span{
        color: #9e9e9e;
        }
        .shuoshuo_delete{
            margin-top: -38px;
        }
        .ss_delete_tips{
            text-align: left;
        }
        #wrapper{
            position: relative;
            top: 60px;
        }
        .nav_open{
            position: relative;
            height: 38px;
            width: 100%;
            top: -38px;
        }
        .wrap_open_down{
            position: absolute;
            top: 60px;
            float: right;
        }
        .wrap_open{
            position: relative;
            top: 60px;
        }
        .hidden{
            position: relative;
            top: 0;
        }
        .wrap_open_up{
            position: relative;
            float: right;
        }
		.voice {
						float: left;
						margin: 0 5px 5px 0;
						width: 80px;
						height: 25px;
						border: 1px solid #adcef7;
						border-radius: 6px;
						text-align: center;
						background: #adcef7;
						color: #ebf1fb;
					}
					
					.voice>span {
						color: #ebf1fb;
					}
					
					.voice>img {
						float: left;
						width: 20px!important;
					}
					
					.ec-imggif {
						display: none;
					}
					
					.ec-span {
						float: right;
						color: white;
						margin-top: 2px;
						margin-right:10%;
					}          
    </style>


</head>
<script>
$(function(){
    var s = '0';
	    	var home = '/xxjy/index.php<?echo $xxjyurl;?>';
	    	var friend = '/xxjy/friendIndex.php<?echo $xxjyurl;?>';
	    	var family = '/xxjy/familyIndex.php<?echo $xxjyurl;?>';
	    	var bbs = '/xxjy/newIndex.php<?echo $xxjyurl;?>';
	    	var msgbox = '/xxjy/msgboxIndex.php<?echo $xxjyurl;?>';
	    	var game = '/xxjy/gameIndex.php<?echo $xxjyurl;?>';
	    	var spShare = '/xxjy/shareIndex.php<?echo $xxjyurl;?>';
	    	var customer = '/xxjy/customerIndex.php<?echo $xxjyurl;?>';
			var about = '/xxjy/aboutIndex.php<?echo $xxjyurl;?>';
	if(s == 0)
	head(1,home,friend,family,bbs,msgbox,game,spShare,customer,about);
/*     if(s == 0){
	   head(3,home,friend,family,bbs,msgbox,game,spShare,customer);
	   $('.h').show();
	}
	if(s == 1){
	   nav_bottom(2, home, friend, bbs, game, customer);
	   $('.h').hide();
	   $('.title_top').css({
		   'margin-top':'0'
	   })
	}  */
})
</script>

<body>



<div class="logo font_l">
    <img src="../images/logo.gif" alt="">
    </div>

<!--热门游戏-->
<div class="bg_top ">
    <div class="title">
        <span class="font_lx">wap网游</span>
    </div>
	

	
	
	
	<div class="play ">
        <div class="friend_list">
            <ul style="border:none" class="boder_radius del_radius">
			
			
                <li>
                    <div class="tx_icon left"><img src='../images/xxxy.gif'></div>
                    <div class="right friend_right">
                        <div class="left friend_name font_l">
                            <p class="overflow_p"><a href='/wapyx/xywap.php<?echo $xxjyurl;?>' class="blue_a">小轩西游</a>&nbsp;&nbsp;2057409人在玩</p>
                            <p class=" i_jia_list">古典神话网游，持神兵利器，降五爪金龙，携爱行走西游路……</p>
                        </div>
                    </div>
                </li>
	
	
	 
            </ul>
	
	
	
	 <div class="in_chat" style="width: 94%; margin: 0 auto;">
       
			 <p class="font_l">更多热门wap游戏正在制作</p>
        </div>
	
	
    </div>
            
            
</div>
 
 	</div>














</body>
</html>