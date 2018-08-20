<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/8/20
 * Time: 16:52
 */
function insertSort($arr)
{
    for($i=0;$i<count($arr);$i++){
        //当前要插入的值与下标
        $insertVal=$arr[$i];
        $insertIndex=$i-1;
        //判断当前的值是否大于0并且大于它要插入的数
        while($insertIndex>=0&&$insertVal<$arr[$insertIndex])
        {
            $arr[$insertIndex+1]=$arr[$insertIndex];
            $insertIndex--;
        }
        $arr[$insertIndex+1]=$insertVal;
    }
}