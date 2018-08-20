<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/8/20
 * Time: 16:53
 */
//通过一趟排序将要排序的数据分割成独立的两部分，其中一部分的所有数据都比另外一部分的所有数据都要小，
//然后再按此方法对这两部分数据分别进行快速排序，整个排序过程可以递归进行，以此达到整个数据变成有序序列。效率很高
function quick_sort($array)
{
    if (!is_array($array)) {
        return false;
    }
    $count = count($array);
    if($count <=1) return $array;
    $left = $right = $middle = array();
    for ($i=1;$i<$count;$i++) {
        if ($array[$i] < $array[0]) {
            $left[] = $array[$i];
        } elseif ($array[$i] = $array[0]) {
            $middle[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }
    //递归调用
    $left = quick_sort($left);
    $middle = quick_sort($middle);
    $right = quick_sort($right);
    //将所有的结果合并
    return array_merge($left,$middle,$right);
}