<?php

// "先死后活"

// 先把变量,写死, 将逻辑跑通、测试没问题了
// 那最后，我们要解决的就只是这个原变量的一个获取方式而已

//$str = "abcdefgggg"; 
echo "请输入需要翻转的字符串:".PHP_EOL;
$str = trim(fgets(STDIN)); // 光标会停留,然后等待我们键盘的一个输入

$len = strlen($str);  // 4
$revStr = "";
for($i = $len-1; $i >=0; $i--) {
	$revStr .= "{$str[$i]}";
}
echo $revStr.PHP_EOL;
