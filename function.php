<?php
//数组头部插入一个或多个单元
array_unshift($queue, "apple", "raspberry");

//返回数组中指定的一列或多列
array_column($records, 'last_name', 'id');

//— 以指定的微秒数延迟执行
usleep();

//crc32() 函数计算字符串的 32 位 CRC
crc32('caoyi');

//函数基于以微秒计的当前时间，生成一个唯一的 ID。
uniqid();

//把字符串 "Shanghai" 分割到数组中：
//length 默认为 1
str_split(string,length);

//比较两个数组的键值，并返回差集：
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$result=array_diff($a1,$a2);

//urlencode()函数原理就是首先把中文字符转换为十六进制，然后在每个字符前面加一个标识符%。

//urldecode()函数与urlencode()函数原理相反，用于解码已编码的 URL 字符串，其原理就是把十六进制字符串转换为中文字符！
//urlencode()编码：对字符串中除了 -_. 之外的所有非字母数字字符都将被替换成百分号（%）后跟两位十六进制数，空格则编码为加号（+）。
//urldecode()解码：还原 URL 编码字符串。


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
//Array ( [d] => yellow )