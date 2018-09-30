<?php
//$a = mb_substr('成都市',0,-1,'UTF-8');
function array_group_by($arr, $key)
{
    $grouped = [];
    foreach ($arr as $value) {
        $grouped[$value[$key]][] = $value;
    }
    // Recursively build a nested grouping if more parameters are supplied
    // Each grouped array value is grouped according to the next sequential key
    if (func_num_args() > 2) {
        $args = func_get_args();
        foreach ($grouped as $key => $value) {
            $parms = array_merge([$value], array_slice($args, 2, func_num_args()));
            $grouped[$key] = call_user_func_array('array_group_by', $parms);
        }
    }
    return $grouped;
}


$arr = [
    [
        'aid' => 1,
        'bid' => 21,
        'cid' => 31,
    ],
    [
        'aid' => 2,
        'bid' => 51,
        'cid' => 31,
    ],
    [
        'aid' => 3,
        'bid' => 91,
        'cid' => 35,
    ]
];

$result = array_group_by($arr,'cid');
var_dump($result);