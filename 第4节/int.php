<?php

// 1、十进制定义

$int10 = 5;

// 2、二进制
//    0b开头,   101
//                1x2^2+0x2^1+1x2^0 = 4+0+1 => 5
$int2 = 0b101;

// 3、八进制
//    0开头,   5
//           5x8^0 = 5
$int8 = 05;

// 4、十六进制
//    0x开头,  5
//           5x16^0 = 5
$int16 = 0x5;


var_dump($int10);
var_dump($int2);
var_dump($int8);
var_dump($int16);


echo "------------四则运算--------\n";

// 四则运算

$a = 10;
$b = 20;


// 加、减、乘、除
var_dump($a+$b); // 30
var_dump($a-$b); // -10
var_dump($a * $b); // 200
var_dump($a / $b); // 0.5  

// 取余数
var_dump($a % $b); // 10



