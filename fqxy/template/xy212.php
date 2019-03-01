<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


if($_POST['submit']){
$wjjdqg= $_POST['sl'];
$wjtake10= $_POST['jdqg'];
$wjtakes2=iconv_strlen($wjtake10,"UTF-8");
$wjtake = iconv("utf-8","gbk",$wjtake10);  

if($wjtake!=""){
if(preg_match("/[ ';~`@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$wjtake)){ 



$tszf=2;
} else{
$tszf=1;

}

if($tszf==1){

if($wjjdqg >=1&&$wjjdqg<=9999999){//判断是否属于靓号
include("./sql/mysql.php");//调用数据库连接 	
$q2="all_zt";
$sql1=mysql_query("select wjid from $q2 where lh=$wjjdqg",$conn);
$info1=@mysql_fetch_array($sql1);	
$lhid=$info1[wjid];

if($lhid>=10000000){
	$wjjdqg=$lhid;
	
} else{
	
} 
	
	} else{
	
	} 
	if($wjjdqg>10000000&&$wjjdqg<=99999999){
	
	$sll=preg_match('/^\d+$/i', $wjjdqg);
	
	
if($sll!=0){




if($wjjdqg!=$wjid){
	

include("./sql/mysql.php");//调用数据库连接 
$wjjdqgp=$wjjdqg-10000000;
$q2="o_user_list";
$sql1=mysql_query("select uid from $q2 where uid=$wjjdqgp",$conn);
$info1=@mysql_fetch_array($sql1);	
$uid=$info1[uid];
if($uid!=""){
include("./ini/zt_ini.php");
$jh01=($iniFile->getItem('玩家信息','性别'));
$jh02=($iniFile->getItem('玩家信息','配偶id'));
$wjid1=$wjid;
$ckid=$wjjdqg;
$wjid=$ckid;

include("./ini/zt_ini.php");
$jhh01=($iniFile->getItem('玩家信息','性别'));
$jhh02=($iniFile->getItem('玩家信息','配偶id'));
$wjid=$wjid1;
if($jh02==0){
if($jhh02==0){
if($jh01==1&&$jhh01==2||$jh01==2&&$jhh01==1){

$wjid=$wjid1;
//调用hy.ini是否存在
include("./ini/hy_ini.php");
$ivdd=($iniFile->getItem('序列',$wjid1));
# 获取一个分类下某个子项的值
$ivdd1=($iniFile->getItem('好友分类',$ivdd));
if($ivdd1==1||$ivdd1==""){
	
	
$wjid=$ckid;	
include("./ini/bl3_ini.php");	
# 获取一个分类下所有数据
$ltpx1=($iniFile->getCategory('玩家排序'));
foreach(array_keys($ltpx1) as $key){
$keyltpx1[]=$ltpx1[$key];
}	
$tmp1="排序";
$arr1=$keyltpx1;
foreach( $arr1 as $k=>$v) {
if($tmp1 == $v) unset($arr1[$k]);
}
$ltmax1=max($arr1);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
$ltmax1=$ltmax1+1;
$wjzd1=($iniFile->getItem('玩家排序1',$wjid1));
$wjzd=($iniFile->getItem('玩家结婚',$wjzd1));
		
			if($wjzd!=2){
//调用zt.ini是否存在
$wjid=$wjid1;

include("./ini/sc_ini.php");
$wpsl=($iniFile->getItem('商城数量','397'));
	if($wpsl>=1){
$wpsl=$wpsl-1;
$iniFile->updItem('商城数量', ['397' => $wpsl]);
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=397";//物品id号必改值
$result = mysql_query($strsql);	
		
		
		
		
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));	
$wjid=$ckid;
include("./ini/bl3_ini.php");		
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家排序1',[$wjid1 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家结婚',[$ltmax1 => '2']); 


echo "<font color=red>失去〖求婚玫瑰〗x1</font>"."<br>";
echo "<font color=red>你发起了求婚，请等待对方同意</font>"."<br>";
		
		
		
		
	$wjid=$wjid1;	
include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
break;

} else{
echo "<font color=red>对不起！求婚需要〖求婚玫瑰〗x1</font>"."<br>";
}
} else{
echo "<font color=red>对不起！你已经向对方求过婚了！请等待对方同意</font>"."<br>";
}
} else{
echo "<font color=red>对不起！对方已经把你拉黑，无法邀请对方</font>"."<br>";
}
} else {
echo "<font color=red>对不起！你不能和对方当好基友！！</font>"."<br>";
}
} else {
echo "<font color=red>对方已经有配偶了</font>"."<br>";
}
} else {
echo "<font color=red>你已经有配偶了</font>"."<br>";
}
} else {
echo "<font color=red>没有这个玩家！ID有误请重新输入</font>"."<br>";
}
} else {
echo "<font color=red>你喝醉了吧？怎么可以和自己求婚呢？</font>"."<br>";
}
} else {
echo "<font color=red>你输入的求婚对象ID误请重新输入</font>"."<br>";
}
} else{
echo "<font color=red>你输入的求婚对象ID误请重新输入</font>"."<br>";
} 
} else{
echo "<font color=red>你输入的官求婚宣言包含敏感字符请重新输入</font>"."<br>";
}
} else{
echo "<font color=red>求婚宣言不能为空</font>"."<br>";
}

















}


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>
<form  action="<?echo "xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1";?>" method="POST">
<font color=black>请输入你要求婚宣言已经对方ID:</font><br>
求婚宣言：<input  type="text" name="jdqg" placeholder="请输入你的求婚宣言"id='search'><br>
玩&nbsp&nbsp&nbsp家ID：<input type="tel" name="sl" placeholder="请输入对方ID"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>

<input  type="submit" name="submit" value="求婚"id="search1" ><br>
</form>
<?
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");

?>














