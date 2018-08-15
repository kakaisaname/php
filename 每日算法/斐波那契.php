<?php

//递归
$starttime = microtime(true);
function fblq($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }
    return fblq($n-1) + fblq($n-2);
}

$res = fblq(10);
echo $res;
$endtime = microtime(true);
echo '耗时'.round($endtime-$starttime,6).'秒';

//迭代 ---- 耗时比迭代要少
$starttime = microtime(true);
function fblqd($n) {
    $res = [];
    for ($i = 0;$i <= $n;$i++) {
        if ($i == 0) {
            $res[$i] = 0;
            continue;
        } elseif ($i == 1) {
            $res[$i] = 1;
            continue;
        }
        $res[$i] = $res[$i-1] + $res[$i-2];
    }
    return $res[$n];
}

$res = fblqd(10);
echo $res;
$endtime = microtime(true);
echo '耗时'.round($endtime-$starttime,6).'秒';

