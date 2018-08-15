<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/8/15
 * Time: 10:42
 */
$s = [[1, 2, 8], [2, 4, 9, 12], [4, 7, 10, 13], [6, 8, 11, 19]];

function getTarget($target,$array) {
    //获取二维数组最小值
    $min = $array[0][0];
    $count = count($array);
    $lastArray = $array[$count-1];
    //获取二维数组最大值
    $max = $lastArray[count($lastArray)-1];

    //如果传入值小于最小值 大于最大值 返回false
    if ($target > $max || $target < $min) {
        return false;
    }
    for ($i = 0; $i<$count;$i++) {
        for ($j = 0;$j < count($array[$i]);$j++) {
            if ($array[$i][$j] == $target) {
                return true;
            }
        }
    }
    return false;
}
$res = getTarget(8,$s);
var_dump($res);