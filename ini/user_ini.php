<?php












$inina="user.ini";
$path='../ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
	$hf=2;
}else{
	
		//ini文件名字
$inina="user.ini";
//判断文件夹是否存在
//路径
$path='../ache/'.$wjid;
$dir = iconv("UTF-8", "GBK", "$path");
        if (!file_exists($dir)){
            mkdir ($dir,0777,true);
        } else {
        }


	//连接数据库
include("../sql/mysql.php");//调用数据库连接


//判断wjid的合法性
	
	


mysql_query("set names utf8");
$sql=mysql_query("select uid,password,name from o_user_list where password='$password'",$conn);
$info1=@mysql_fetch_array($sql);
$pass1=$info1[password];
$uid=$info1[uid];
$pass=md5($_POST['password'].'ALL_PS');
$name=$info1[name];
$wjini=$uid+10000000;

if($uid!=""){
	$hf=2;
file_put_contents($file,"[小轩家园玩家信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('验证信息',['初始' => 123]); 
$iniFile->addCategory('验证信息', ['玩家id' => $wjini, '玩家验证' => $pass1,'玩家昵称' => $name]);
}else{
$hf=1;



if(rmdir("$path"))	{    

 } else {    
 
 }  





}

}

if($hf==2){

$iniFile = new iniFile($file);
}else{
}

?>