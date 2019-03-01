<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));

//调用wp.ini是否存在
   
include("./ini/zzck_ini.php");

if($ymid==336||$ymid==337){//背包书卷
//ini文件名字
$inina="zzck.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('数量',$npcc));
} else{



}


if($ymid==336){
//调用物品信息
include("./wp/wpxx.php");
} else{

}

if($wpsl >=1){
if($wpfl ==1||$wpfl ==2||$wpfl ==4||$wpfl ==5||$wpfl ==6||$wpfl ==7||$wpfl ==8){






$wpsl=$wpsl-$sl;
include("./sql/mysql.php");//调用数据库连接 
$q2="zzck".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);

//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$npcc",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];
if($ckwpid==""){
//获取最大值
$q2="wp".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ckwpsl+$wpsl;
//调用物品信息
include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$npcc','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$wpsl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
} 






$wpkc=$ckwpsl;
//$npcc=$ckwpid;
include("./wp/wpxx.php");
$kcrl=$wpsl*$wpzl;

//背包容量变更
include("./pz/ini_pzz09.php");






//ini文件名字
$inina="zzck.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);


//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('数量', $npcc);
# 删除一个子项
$iniFile->delItem('名字', $npcc);




if($wpfl ==1){
$inina="wp.ini";
} elseif($wpfl ==2){
$inina="cl.ini";
} elseif($wpfl ==4){
$inina="sc.ini";
} elseif($wpfl ==5){
$inina="dy.ini";
} elseif($wpfl ==6){
$inina="rw.ini";
} elseif($wpfl ==7){
$inina="nc.ini";
} elseif($wpfl ==8){
$inina="bx.ini";
} else{

}


//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


echo "<font color=red>恭喜你！！获得了".$wpmz."x".$wpsl."</font>"."<br>";




} else{	



echo "<font color=red>对不起！！".$wpmz."不支持取出联系GM解决（物品类别不匹配）</font>"."<br>";


}

} else{	



echo "<font color=red>对不起！！增值仓库并没有".$wpmz."</font>"."<br>";


}


include("template/xy336.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");











} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>





