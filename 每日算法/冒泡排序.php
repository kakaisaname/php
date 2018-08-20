<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/8/20
 * Time: 16:24
 */
//冒泡排序是将数组中的前后两个相领的数值进行比较 条件成立 则进行交换 效率比较低 因为其交换的次数也比较多
//时间复杂度 O(n^2)   空间复杂度O(1)
function bubbleSort($numbers)
{
    $count = count($numbers);
    for($i = 0;$i<$count;$i++) {
        for ($j =0;$j<$count-$i-1;$j++) {
            if ($numbers[$j] > $numbers[$j+1]) {
                $tmp = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $tmp;
            }
        }
    }
    return $numbers;
}