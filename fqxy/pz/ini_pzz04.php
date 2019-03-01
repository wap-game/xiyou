<?php
//判断物品是否满足
$wpsl=($iniFile->getItem($wpzzz,$wpid));
$wpsll=$wpsl-$wpkc;



if($wpsll>=1){
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wpsll where wpid=$wpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem($wpzzz, [$wpid => $wpsll]);
} elseif($wpsll ==0){
	$jnypsc=2;//在快捷键上使用完被清零
$q2="wp".$wjid;
$strsql = "delete from $q2 where wpid=$wpid";//物品id号必改值
$result = mysql_query($strsql);

# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem($pzinimz1,$wpid));
# 删除一个子项
$iniFile->delItem($pzinimz2, $xlh);
# 删除一个子项
$iniFile->delItem($pzinimz1, $wpid);
# 删除一个子项
$iniFile->delItem($wpzzz, $wpid);
# 删除一个子项
$iniFile->delItem($pzinimz3, $wpid);

} else{
$jnypsc=1;



} 




?>
