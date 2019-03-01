<?php
//调用dyxx.ini是否存在
include("./ini/dyxx_ini.php");
$inina="dyxx.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsycs=($iniFile->getItem('物品使用次数',$npcc));


if($wpsycs >=1&&$wpsycs <$xzcs){
$wpsycs=$wpsycs+$sl;	
$max1=$max*$sl;
$xzcs1=$xzcs-$wpsycs;
$wpsy=2;//使用成功
//修改数据
$q2="dyxx".$wjid;
include("./sql/mysql.php");//调用数据库连接 
$strsql = "update $q2 set sycs=$wpsycs where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
if($xzcs1<1){
echo "<font color=black>恭喜你！".$wwpmz1."属性永久提升".$max1."！（已达到上限）</font><br>";
} elseif($xzcs1 >=1){
echo "<font color=black>恭喜你！".$wwpmz1."属性永久提升".$max1."！（还可服用".$xzcs1."次）</font><br>";	
} else{
}
//缓存修改
$iniFile->updItem('物品使用次数', [$npcc => $wpsycs]);


if($wpzz2=="血"){
include("./wj/ztt.php");
$maxq=$wjxx1[$wpzz2];
$maxq=$maxq+$max1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem($wpzz1, [$wpzz2 => $maxq]);
} elseif($wpzz2 =="max攻击"||$wpzz2 =="max魔攻"||$wpzz2 =="max防御"){
include("./wj/ztt.php");
$maxq=$wjxx1[$wpzz2];
$maxq=$maxq+$max1;
$maxk = ceil(($maxq)/ 1.3);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem($wpzz1, [$wpzz3 => $maxk,$wpzz2 => $maxq]);


} else{

}





//缓存修改	



	
} elseif($wpsycs ==""){
$wpsycs=$sl;
$max1=$max*$sl;
$xzcs1=$xzcs-$wpsycs;
$wpsy=2;//使用成功
$q2="dyxx".$wjid;
//新增数据
include("./sql/mysql.php");//调用数据库连接 
$sql1 = "insert into $q2 (wpid,sycs)  values('$npcc','$wpsycs')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }

if($xzcs1<1){
echo "<font color=black>恭喜你！".$wwpmz1."属性永久提升".$max1."！（已达到上限）</font><br>";
} elseif($xzcs1 >=1){
echo "<font color=black>恭喜你！".$wwpmz1."属性永久提升".$max1."！（还可服用".$xzcs1."次）</font><br>";	
} else{


}
//更新缓存数据
unlink($ininame); //删除文件  
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 

//更新缓存数据







} else{
$wpsy=1;//使用失败




}



?>
