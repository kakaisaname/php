<?php
function mb_str_split($str){
    return preg_split('/(?<!^)(?!$)/u', $str );
}
$str = 'dsaddddddddddddd2222222222222222222222*d46!的撒顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶反倒是鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼烦烦烦烦烦烦烦烦烦烦烦烦';
$arr = mb_str_split($str);
$res = array_chunk($arr,10); //设置的长度
$str = '';
foreach ($res as $value) {
    $a = implode('',$value).'<br>';
    $str .= $a;
}
echo $str;