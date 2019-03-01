<?php
echo "<font color=red>【发放物品】</font>"."<br>";
echo "<font color=black>〖金豆〗ID：127</font>"."<br>";
echo "<font color=black>【ID号码卡】ID：457-476</font>"."<br>";
echo "<font color=black>【西游宣传礼包】ID：489</font>"."<br>";
echo "<font color=black>【西游邀请礼包】ID：490</font>"."<br>";
echo "<font color=black>【西游新人礼包】ID：491</font>"."<br>";
echo "<font color=black>【公测礼包】ID：492</font>"."<br>";
echo "<font color=black>【内测福利】ID：402</font>"."<br>";
echo "<font color=black>【幻想武器包】【幻想防具包】【幻想首饰包】ID：320，321，322</font>"."<br>";
echo "<font color=black>〖黄金贵族卡〗〖铂金贵族卡〗〖钻石皇族卡〗〖至尊皇族卡〗ID：518，519，520，521</font>"."<br>";
echo "<font color=black>【副本重置令】ID：409</font>"."<br>";
echo "<font color=black>〖荣誉宝石包〗（2个,5个,15个,40个,100个）ID：494,495,496,497,498</font>"."<br>";
echo "<font color=black>〖瞌睡虫〗（典藏版）ID：493</font>"."<br>";
echo "<font color=black>〖万能字〗ID：563</font>"."<br>";
echo "<font color=black>〖冠军宝石包〗（1个,3个,8个,30个）ID：566,567,568,569</font>"."<br>";
echo "<font color=black>【喜鹊蛋】ID：591</font>"."<br>";
echo "<font color=black>〖舞星仙姬〗ID：586</font>"."<br>";
echo "<font color=black>〖金星升星符〗ID：317</font>"."<br>";
echo "<font color=black>〖钻星升星符〗ID：318</font>"."<br>";
echo "<font color=black>〖王者宝石包〗（1个,3个,8个,30个）ID：587,588,589,590</font>"."<br>";

echo "<font color=black>〖王者宝石包〗（1个,3个,8个,30个）ID：587,588,589,590</font>"."<br>";





echo "<font color=black>〖1万法宝经验卷轴〗423〖1万西游声望卷轴〗427〖齐天大圣〗（宠物蛋-万里挑一）616〖麒麟圣祖〗（宠物蛋-万里挑一）615</font>"."<br>";


echo "<font color=black>〖练星符〗（蓝）ID：619</font>"."<br>";
echo "<font color=black>【鹊翎】〖七夕万能字〗ID：656,657</font>"."<br>";

?>
<form  action="<?echo "gm.php?wjid=$wjiddd&&pass=$password&&gid=6&&user=$wjid";?>" method="post">
物品&nbspI&nbsp&nbspD：<input type="tel" name="wp" placeholder="请输入物品ID"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
物品数量：<input type="tel" name="sl" placeholder="请输入物品数量"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="确认" id="search1"><br>
</form>
<?

echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=4'><font color=blue>返回查询玩家</font></a>"."<br>";

echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";
?>





