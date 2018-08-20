<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/8/20
 * Time: 16:37
 */
//选择排序主要是将假设数组中的第一个是最小的，循环与数组中的第一个进行比较 如果比其还小 则记录下标 进行数值交换 效率相对冒泡来说比较高
function selectSort($array)
{
    $count = count($array);
    for ($i=0;$i<$count-1;$i++) {
        $min = $i;  //指定第一个值索引为最小的（假定）
        for($j=$i+1;$j<$count;$j++) {
            if ($array[$min] > $array[$j]) {
                $min = $j;  //更换最小索引
            }
        }

        //交换值
        if ($min != $i) {
            $tmp = $array[$min];
            $array[$min] = $array[$i];
            $array[$i] = $tmp;
        }
    }
    return $array;
}