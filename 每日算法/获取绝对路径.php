<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/10/8
 * Time: 10:11
 */


//var_dump(get_absolute_path('this/is/../a/./test/.///is'));    Returns: string(14) "this/a/test/is"
function get_absolute_path($path) {
    $path = str_replace(array('/','\\'),DIRECTORY_SEPARATOR,$path);
    //array_filter  用回调函数过滤数组中的元素：
    $parts = array_filter(explode(DIRECTORY_SEPARATOR,$path),'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) continue;
        if ('..' == $part) {
            //array_pop 删除数组中的最后一个元素：
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR,$absolutes);
}

