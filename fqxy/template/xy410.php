<?php
echo "<font color=red>小轩西游福利中心</font>"."<br>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=307;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>每日福利</font></a>";
echo "<font color=black>|</font>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=408;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>每日活跃</font></a>";
echo "<font color=blue>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=409;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>每日签到</font></a>";

echo "<font color=black>|</font>";	

echo "<font color=black>每日宣传</font><br>";



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=417;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黄金贵族</font></a>";

echo "<font color=black>|</font>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=418;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>铂金贵族</font></a>";

echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=419;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>钻石皇族</font></a>";

echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=420;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>至尊皇族</font></a>"."<br>";

		
	echo "<br>";







echo "<font color=black>小轩西游推广计划</font>";	
echo "<font color=red>此活动长期有效</font><br>";
echo "<font color=black>1.每日在其他WAP游戏群发布宣传语截图并且到管理员，得【西游宣传礼包】x1</font><br>";
echo "<font color=black>2.邀请新人进群并且注册游戏，邀请人得【西游邀请礼包】x1，被邀请人得【西游新人礼包】x1</font><br>";
echo "<font color=black>3.拉人送自充卡。使用自充卡不参与积分排名，与充值赠送</font><br>";
echo "<font color=black>4.拉1人送10自充，拉2人送20元自充，必须为真实有效玩家，以此类推，多拉多送禁小号禁作弊，一经发现严惩不贷，不排除封号</font><br>";







?>


<?
echo "<br>";
echo "<br>";
echo "<font color=pink>======宣传语======</font><br>";

?>


<button id="copy" >点击复制宣传语</button>

<?
echo "<br>";


?>

<article id="article">



<?
echo "<font color=red>进群填写我的邀请游戏ID：".$wjid."</font><br>";
echo "<font color=red>填写邀请ID即可领取超值【三区水帘洞助力包】包含【幻想套装】【vip练级卷】x20，【10亿修炼经验丹】x10，【万能果】x100，【1万西游声望卷轴】x100，【1万法宝经验卷轴】x100，〖瞌睡虫〗（典藏版）x5</font><br>";
echo "<font color=red>我不断的寻找，有你的世界在哪儿</font><br>";
echo "<font color=red>新区【水帘洞】开放，各项福利免费拿</font><br>";
echo "<font color=red>独立的服务器全新的西游，在这儿等你归来</font><br>";
echo "<font color=red>原汁原味的幻想西游，全新的任务，pk，国战，宠物，住宅等等</font><br>";
echo "<font color=red>注册就有【三区水帘洞助力包】送，携爱共走西游路</font><br>";

echo "<font color=red>QQ交流群：54665469</font><br>";
echo "<font color=red>游戏网址：www.hfqyx.cn</font><br>";





?>


</article>
<?
echo "<br>";

echo "<font color=pink>======宣传语======</font><br>";

?>


<script>
function copyArticle(event){
const range = document.createRange();
range.selectNode(document.getElementById('article'));
const selection = window.getSelection();
if(selection.rangeCount > 0) selection.removeAllRanges();
selection.addRange(range);
document.execCommand('copy');
}
document.getElementById('copy').addEventListener('click', copyArticle, false);
</script>


<?

echo "<br>";


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













