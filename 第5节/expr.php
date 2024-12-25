<?php


$var = "123" + 1; // 隐式转换，"123" 被转换为 integer 123 然后加上 1
echo $var . "\n"; // 输出: 124

$var = "apple" + 1; // 字符串 "apple" 不是有效的数字，所以被转换为 0
echo $var . "\n"; // 输出: 1

$var = "hello,rocky"; // "" "0"

if ($var) {
  echo "真\n";
}else{
  echo "假\n";
}