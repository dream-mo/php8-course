<?php

$name = "rocky";


// 1、双引号, HereDoc语法

$tip1 = "hello, {$name}\n";  // hello,rocky

echo $tip1;
// $tip1_text = "hello,rocky\n" . "你好啊\n"."一起学习PHP\n";
// echo $tip1_text;
$tip1_text_doc = <<<EOF
hello,{$name}
你好啊
一起学习PHP\n
EOF;

echo $tip1_text_doc;


echo "-----------\n";

// 2、单引号, NowDoc

$tip2 = 'hello, {$name}\n';  // hello, {$name}\n

$tip2_text_doc = <<<'EOF'
hello,{$name}
你好啊
一起学习PHP\n
EOF;

echo $tip2_text_doc;



