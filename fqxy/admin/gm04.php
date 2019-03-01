<?php





  





echo "<font color=red>【查询玩家】</font>"."<br>";
if($_POST['submit']){
$id= $_POST['sl'];

if($id >=1&&$id<=9999999){//判断是否属于靓号
include("./sql/mysql.php");//调用数据库连接 	
$q2="all_zt";
$sql1=mysql_query("select wjid from $q2 where lh=$id",$conn);
$info1=@mysql_fetch_array($sql1);	
$lhid=$info1[wjid];

if($lhid>=10000000){
	$id=$lhid;
	
} else{
	
} 
	
	} else{
	
	} 









$inina="user.ini";
$path='ache/'.$id;
$file = $path."/".$inina;	
if(file_exists($file)){
	$wjid=$id;	
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
echo "<font color=red>查询成功玩家信息如下：</font>"."<br>";
//调用zt.ini是否存在
include("./ini/zt_ini.php");
# 获取一个分类下所有数据$
$wjxx=($iniFile->getCategory('玩家信息'));
$img='pic/vip/'."vip".$wjxx[vip等级].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
echo "<br>";	
	
	
	
	

if($wjxx[靓号] >=100000&&$wjxx[靓号]<=9999999){


echo "<font color=black>ID：</font>";
$img='pic/txpic/lh.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
echo "<font color=red>【".$wjxx[靓号]."】</font><br>";	
} else{



echo "<font color=black>ID：</font>".$wjid."<br>";
echo "<br>";
}











echo "<font color=black>昵称:".$wjxx[玩家名字]."</font>"."<br>";
if($wjxx[性别]==1){
echo "<font color=black>性别：男</font><br>";
} elseif ($wjxx[性别]==2){
echo "<font color=black>性别：女</font><br>";
} else{
echo "<font color=black>性别：人妖</font><br>";
}
if($wjxx[配偶id]>=10000000){
echo "<font color=black>配偶：</font>".$wjxx[配偶名字]."<br>";
} else{
echo "<font color=black>配偶：暂无</font><br>";	
} 
if($wjxx[住宅id]>=1){
if($wjxx[住宅分类]==1){
$zz="住宅";
} elseif ($wjxx[住宅分类]==2){
$zz="豪宅";	
} elseif ($wjxx[住宅分类]==3){
$zz="官宅";
} else{
$zz="住宅";
}
echo "<font color=black>".$zz."：</font>".$wjxx[住宅名字]."<br>";
} else{
echo "<font color=black>住宅：暂无</font><br>";	
} 	
if($wjxx[帮派id]>=1){
echo "<font color=black>国家：</font>".$wjxx[帮派名字]."<br>";
} else{
echo "<font color=black>国家：无</font><br>";
}

if($wjxx[门派]>=1){
if($wjxx[门派]==1){
$menp="将军府";
} elseif($wjxx[门派]==2){
$menp="龙宫";
} elseif($wjxx[门派]==3){
$menp="月宫";
} elseif($wjxx[门派]==4){
$menp="方寸山";
} elseif($wjxx[门派]==5){
$menp="普陀山";
} else{
$menp="无门派";
}
echo "<font color=black>门派：</font>".$menp."<br>";
} else{
echo "<font color=black>门派：无门派</font><br>";
}
include("./ini/alluser_ini.php");
$jy01=($iniFile->getItem('禁言信息','永久'));
$jy02=($iniFile->getItem('禁言信息','禁言时间'));
$jy03=($iniFile->getItem('禁言信息','解除变量'));

if($jy01!=2){

if($jy03 >= 1){	
$startdate=$jy02;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));	

if($minute <= $jy03){
$jybl=2;
$minute1=$jy03-$minute;


$minute=floor($minute1/60);
$second=$minute1%60;



if($minute > 0){	

$minute10=floor($minute/60);
if($minute10 > 0){	
$minute9=floor($minute10/24);
if($minute9 > 0){
$second=$minute10%24;
$jyts1="[是]";
$jyts="[剩余：".$minute9."天".$second."小时]";
} else{
$second=$minute%60;
$jyts1="[是]";
$jyts="[剩余：".$minute10."时".$second."分]";
}
} else{
$jyts1="[是]";
$jyts="[剩余：".$minute."分".$second."秒]";
} 


} else{
$jyts1="[是]";	
$jyts="[剩余：".$second."秒]";
} 


} else{
$jyts1="[否]";
}
} else{	
$jyts1="[否]";

} 
} else{	
$jyts1="[是]";
$jyts="[永久禁言]";

}



echo "<font color=red>禁言状态：".$jyts1.$jyts."</font>";

if($jyts1=="[是]"){
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=14&&user=$wjid'><font color=blue>解除</font></a>";
} else{	
} 

echo "<br>";

include("./ini/alluser_ini.php");
$jy01=($iniFile->getItem('封号信息','永久'));
$jy02=($iniFile->getItem('封号信息','封号时间'));
$jy03=($iniFile->getItem('封号信息','解除变量'));
$jyts1="";
$jyts="";
if($jy01!=2){

if($jy03 >= 1){	
$startdate=$jy02;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));	

if($minute <= $jy03){
$jybl=2;
$minute1=$jy03-$minute;


$minute=floor($minute1/60);
$second=$minute1%60;



if($minute > 0){	

$minute10=floor($minute/60);
if($minute10 > 0){	
$minute9=floor($minute10/24);
if($minute9 > 0){
$second=$minute10%24;
$jyts1="[是]";
$jyts="[剩余：".$minute9."天".$second."小时]";
} else{
$second=$minute%60;
$jyts1="[是]";
$jyts="[剩余：".$minute10."时".$second."分]";
}
} else{
$jyts1="[是]";
$jyts="[剩余：".$minute."分".$second."秒]";
} 


} else{
$jyts1="[是]";	
$jyts="[剩余：".$second."秒]";
} 


} else{
$jyts1="[否]";
}
} else{	
$jyts1="[否]";

} 
} else{	
$jyts1="[是]";
$jyts="[永久封号]";

}

echo "<font color=red>封号状态：".$jyts1.$jyts."</font>";

if($jyts1=="[是]"){
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=20&&user=$wjid'><font color=blue>解除</font></a>";
} else{	
} 

echo "<br>";
echo "<font color=black>【请选择对".$wjxx[玩家名字]."(".$wjid.")的操作】</font>"."<br>";

echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=5&&user=$wjid'><font color=blue>发放物品</font></a>"."<br>";

echo "<font color=black>【充值红包管理】</font>"."<br>";


echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=47&&user=$wjid'><font color=blue>【充值1元红包】</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=48&&user=$wjid'><font color=blue>【充值10元红包】</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=49&&user=$wjid'><font color=blue>【充值20元红包】</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=50&&user=$wjid'><font color=blue>【充值50元红包】</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=51&&user=$wjid'><font color=blue>【充值100元红包】</font></a>"."<br>";

echo "<font color=black>【充值管理】</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=29&&user=$wjid'><font color=blue>充值〖10元〗</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=30&&user=$wjid'><font color=blue>充值〖20元〗</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=31&&user=$wjid'><font color=blue>充值〖50元〗</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=32&&user=$wjid'><font color=blue>充值〖100元〗</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=33&&user=$wjid'><font color=blue>充值〖200元〗</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=34&&user=$wjid'><font color=blue>充值〖500元〗</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=35&&user=$wjid'><font color=blue>充值〖1000元〗</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=36&&user=$wjid'><font color=blue>充值〖2000元〗</font></a>"."<br>";


echo "<font color=black>【数据管理】</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=21&&user=$wjid'><font color=blue>刷新数据</font></a>"."<br>";
echo "<font color=black>【禁言处罚】</font>"."<br>";

echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=9&&user=$wjid'><font color=blue>禁言30分钟</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=10&&user=$wjid'><font color=blue>禁言2小时</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=11&&user=$wjid'><font color=blue>禁言1天</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=12&&user=$wjid'><font color=blue>禁言1周</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=13&&user=$wjid'><font color=blue>永久禁言</font></a>"."<br>";


echo "<font color=black>【封号处罚】</font>"."<br>";

echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=15&&user=$wjid'><font color=blue>封号1天</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=16&&user=$wjid'><font color=blue>封号1周</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=17&&user=$wjid'><font color=blue>封号1月</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=18&&user=$wjid'><font color=blue>封号半年</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=19&&user=$wjid'><font color=blue>永久封号</font></a>"."<br>";




echo "<br>";

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//


}else{
echo "<font color=red>很抱歉！没有查询到ID为[".$id."]的这位玩家</font>"."<br>";	
echo "<br>";
}




}else{

}
?>
<form  action="" method="post">
玩家ID：<input type="tel" name="sl" placeholder="请输入玩家ID"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="查询" id="search1"><br>
</form>
<?

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";
?>





