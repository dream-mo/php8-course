<?php

// $str = "ab1ba1";

echo "请输入需要测试的字符串:".PHP_EOL;
$str = trim(fgets(STDIN));

// $revStr = "";
// $len = strlen($str);

// for($i = $len-1; $i >= 0; $i--) {
// 	$revStr .= "{$str[$i]}";
// }

// if ($revStr == $str) {
// 	echo "{$str} 是回文数字符串".PHP_EOL;
// }else{
// 	echo "{$str} 不是回文数字符串".PHP_EOL;
// }

// 正数第一个字符 == 倒数第一个字符
// 正数第二个字符 == 倒数第二个字符 .... 以此类推
// 如果符合这个规律，那么这个字符串就是 "回文数" 字符串

// ab1ba
$len = strlen($str);
$isHuiwen = true;

for($i=0; $i < $len; $i++) {
	if($str[$i] != $str[$len-1-$i]) {
		$isHuiwen = false;
		break;
	}
}

if ($isHuiwen) {
	echo "是回文数字符串".PHP_EOL;
}else{
	echo "不是回文数字符串".PHP_EOL;
}

