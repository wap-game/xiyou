<?php

if ($npcc==1) {
echo "<font color=red>〖练星符〗（绿）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物21-40星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（白）x5+1w西游声望+100万银两</font>"."<br>"; 
} elseif ($npcc==2) {
echo "<font color=red>〖练星符〗（蓝）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物41-60星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（绿）x5+5w西游声望+1000万银两</font>"."<br>"; 
} elseif ($npcc==3) {
echo "<font color=red>〖练星符〗（紫）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物61-80星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（蓝）x5+10w西游声望+1亿银两</font>"."<br>"; 
} elseif ($npcc==4) {
echo "<font color=red>〖练星符〗（完美の紫）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物81-100星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（紫）x5+15w西游声望+5亿银两</font>"."<br>"; 
} elseif ($npcc==5) {
echo "<font color=red>〖练星符〗（橙）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物101-120星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（完美の紫）x5+20w西游声望+10亿银两</font>"."<br>"; 
} elseif ($npcc==6) {
echo "<font color=red>〖练星符〗（完美の橙）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物121-150星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（橙）x5+30w西游声望+20亿银两</font>"."<br>"; 

} elseif ($npcc==7) {
echo "<font color=red>〖练星符〗（白）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物1-20星练星符</font>"."<br>"; 
echo "<font color=black>需求：100万银两</font>"."<br>"; 

} elseif ($npcc==8) {
echo "<font color=red>〖练星符〗（白）x10</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物1-20星练星符</font>"."<br>"; 
echo "<font color=black>需求：1000万银两</font>"."<br>"; 

} elseif ($npcc==9) {
echo "<font color=red>〖练星符〗（白）x100</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物1-20星练星符</font>"."<br>"; 
echo "<font color=black>需求：1亿银两</font>"."<br>"; 

} elseif ($npcc==10) {
echo "<font color=red>〖练星符〗（白）x1000</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物1-20星练星符</font>"."<br>"; 
echo "<font color=black>需求：10亿银两</font>"."<br>"; 

} elseif ($npcc==11) {
echo "<font color=red>〖练星符〗（绿）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物21-40星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（白）x50+10w西游声望+1000万银两</font>"."<br>"; 
} elseif ($npcc==12) {
echo "<font color=red>〖练星符〗（蓝）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物41-60星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（绿）x50+50w西游声望+10000万银两</font>"."<br>"; 
} elseif ($npcc==13) {
echo "<font color=red>〖练星符〗（紫）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物61-80星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（蓝）x50+100w西游声望+10亿银两</font>"."<br>"; 
} elseif ($npcc==14) {
echo "<font color=red>〖练星符〗（完美の紫）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物81-100星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（紫）x50+150w西游声望+50亿银两</font>"."<br>"; 
} elseif ($npcc==15) {
echo "<font color=red>〖练星符〗（橙）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物101-120星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（完美の紫）x50+200w西游声望+100亿银两</font>"."<br>"; 
} elseif ($npcc==16) {
echo "<font color=red>〖练星符〗（完美の橙）</font>"."<br>"; 
echo "<font color=red>描述：百分之成功提升宠物121-150星练星符</font>"."<br>"; 
echo "<font color=black>需求：〖练星符〗（橙）x50+300w西游声望+200亿银两</font>"."<br>"; 







} else{

}






echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=486;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回练星</font></a>"."<br>";


?>