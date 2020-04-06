<?php
$file = "";
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "zt.ini";
$path = 'ache/' . $wjid;

$file = $path . "/" . $inina;

if (file_exists($file)) {


} else {
    //连接数据库提取数据写入ini
    include("./sql/mysql.php");//调用数据库连接

    $q2 = "all_zt";
    mysql_query("set names utf8");
    $sql1 = mysql_query("select * from $q2 where wjid=$wjid", $conn);
    $info1 = @mysql_fetch_array($sql1);
    $uname = $info1[username];
    $sex = $info1[sex];
    $tx = $info1[tx];
    $peiou = $info1[peiou];
    $peiouid = $info1[peiouid];
    $zzmz = $info1[zzmz];
    $zzid = $info1[zzid];
    $zzfl = $info1[zzfl];
    $dj = $info1[dj];
    $mpp = $info1[mpp];
    $bpname = $info1[bpmz];
    $bpid = $info1[bpid];
    $vip = $info1[vip];
    $vipjy = $info1[vipjy];
    $gsrl = $info1[gsrl];
    $bbrl = $info1[bbrl];
    $ckrl = $info1[ckrl];
    $emz = $info1[emz];
    $lh = $info1[lh];
    //echo $uname;


    $jy = 0;
    $xljy = 0;
    $fbjy = 0;
    $hp = 1000;
    $mp = 500;
    $xljykg = 0;


    if ($bpid >= 1) {


        include("bp_ini.php");
        # 获取一个分类下所有数据$
        $bpcs = ($iniFile->getCategory('国家信息'));
        if ($bpcs[辅助大臣id] == $wjid) {
            $bpzw2 = "辅助大臣";
        } elseif ($bpcs[军机大臣id] == $wjid) {
            $bpzw2 = "军机大臣";
        } elseif ($bpcs[财政大臣id] == $wjid) {
            $bpzw2 = "财政大臣";
        } elseif ($bpcs[工部大臣id] == $wjid) {
            $bpzw2 = "工部大臣";
        } elseif ($bpcs[外交大臣id] == $wjid) {
            $bpzw2 = "外交大臣";
        } elseif ($bpcs[军团长id] == $wjid) {
            $bpzw2 = "军团长";
        } elseif ($bpcs[现任君主id] == $wjid) {
            $bpzw2 = "君主";
        } else {
            $bpzw2 = "成员";
        }


    } else {

    }


    $inina = "zt.ini";
    $path = 'ache/' . $wjid;
    $file = $path . "/" . $inina;
    //创建文件
    file_put_contents($file, "[玩家]");


    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    //数据库数据导入ini文件
    # 添加一个分类并直接添加子项
    $iniFile->addItem('玩家信息', ['初始' => 123]);
    $iniFile->addCategory('玩家信息', ['玩家名字' => $uname, '性别' => $sex, '头衔' => $tx, '配偶名字' => $peiou, '配偶id' => $peiouid, '住宅名字' => $zzmz, '住宅id' => $zzid, '住宅分类' => $zzfl, '等级' => $dj, '门派' => $mpp, '帮派名字' => $bpname, '帮派id' => $bpid, 'vip等级' => $vip, 'vip经验' => $vipjy, '挂售容量' => $gsrl, '背包容量' => $bbrl, '仓库容量' => $ckrl, '恶名值' => $emz, '靓号' => $lh]);
    //数据库数据导入ini文件


    //初始
    # 添加一个分类并直接添加子项
    $iniFile->addCategory('玩家信息', ['经验' => $jy, '修炼经验' => $xljy, '法宝经验' => $fbjy, '红' => $hp, '蓝' => $mp, '修炼经验开关' => $xljykg, '帮派职务' => $bpzw2]);
    //初始
}

$iniFile = new iniFile($file);


?>