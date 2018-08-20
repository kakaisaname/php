<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/8/20
 * Time: 9:14
 */
function ARRAY_sort_by_field($arr_data, $field, $descending = false)
{
    $arrSort = array();
    foreach ( $arr_data as $key => $value ) {
        $arrSort[$key] = $value[$field];
    }

    if( $descending ) {
        arsort($arrSort);
    } else {
        asort($arrSort);
    }

    $resultArr = array();
    foreach ($arrSort as $key => $value ) {
        $resultArr[$key] = $arr_data[$key];
    }

    return $resultArr;
}

//测试：
$arr = array (
    array ('s' => 'aaa', 'i' => 3),
    array ('s' => 'bbb', 'i' => 2),
    array ('s' => 'ccc', 'i' => 4),
    array ('s' => 'ddd', 'i' => 1),
);

print_r(ARRAY_sort_by_field($arr, 'i'));
print_r(ARRAY_sort_by_field($arr, 'i', true));