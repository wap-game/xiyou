<?php

if ($qy == 1) {
    $yxname = "补充值【傲来国】（11.26启动）";
} elseif ($qy == 2) {
    $yxname = "纯净新【宝象国】（11.26启动）";
} elseif ($qy == 3) {
    $yxname = "纯净新【宝象国】（11.26启动）";
} elseif ($qy == 4) {
    $yxname = "纯净新【宝象国】（11.26启动）";
} else {

}

if ($yxname != "") {
    //调用wjdt.ini是否存在
    //玩家动态
    include("../ini/wjdt_ini.php");

    # 获取一个分类下所有数据
    $ltpx1 = ($iniFile->getCategory('玩家排序'));
    $m = count($ltpx1, 0) - 1;

    foreach (array_keys($ltpx1) as $key) {
        $keyltpx1[] = $ltpx1[$key];
    }

    if ($m >= 1) {
        $tmp1 = "排序";
        $arr1 = $keyltpx1;
        foreach ($arr1 as $k => $v) {
            if ($tmp1 == $v) unset($arr1[$k]);
        }

        $ltmax1 = max($arr1);
        if ($ltmax1 == "排序") {
            $ltmax1 = 0;
        } else {

        }
    } else {
        $ltmax1 = 0;
    }

    //现在的时间
    $y = date('Y') * 1;
    $m = date('m') * 1;
    $d = date('d') * 1;
    $h = date('H') * 1;
    $i = date('i') * 1;
    $s = date('s') * 1;

    $wjtake = $name . "进入了小轩西游-" . $yxname;
    $ltmax1 = $ltmax1 + 1;
    $zbidd2 = $wjid . "_" . $ltmax1;
    $iniFile->addItem('玩家排序', [$zbidd2 => $ltmax1]);
    $iniFile->addItem('玩家idd', [$ltmax1 => $zbidd2]);
    $iniFile->addItem('玩家发言', [$ltmax1 => $wjtake]);
    $iniFile->addItem('年', [$ltmax1 => $y]);
    $iniFile->addItem('月', [$ltmax1 => $m]);
    $iniFile->addItem('日', [$ltmax1 => $d]);
    $iniFile->addItem('时', [$ltmax1 => $h]);
    $iniFile->addItem('分', [$ltmax1 => $i]);
    $iniFile->addItem('秒', [$ltmax1 => $s]);

} else {

}

?>