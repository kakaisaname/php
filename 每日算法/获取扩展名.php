<?php
//phpinfo();
$a="http://www.test.com.cn:88/abc/de/fg.php?id=1";

$b=parse_url($a);//解析 URL，以数组的方式返回其组成部分

var_dump($b);
//array (size=5)
//  'scheme' => string 'http' (length=4)
//  'host' => string 'www.test.com.cn' (length=15)
//  'port' => int 88
//  'path' => string '/abc/de/fg.php' (length=14)
//  'query' => string 'id=1' (length=4)

echo '<br>';

// 方法一
echo substr($b['path'],strpos($b['path'],'.'));

echo '<br>';

// 方法二
$path_array = explode('.',$b['path']);
echo $path_array[1];