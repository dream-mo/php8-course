<?php

// echo "请输入测试的数字:".PHP_EOL;
// $number = intval(trim(fgets(STDIN)));
// if ($number <100 || $number > 999) {
// 	echo "你输入的测试数字有误,请重新输入(100-999)!".PHP_EOL;
// 	die(); // die()函数, 终止整个脚本的运行
// }

for($i = 100; $i <= 999; $i++) {
	$number = $i;
	$baiwei = intval($number/100); // 百位: 1
	$shiwei_num = $number%100; // 余数=53
	$shiwei = intval($shiwei_num/10); // 十位: 5
	$gewei = $shiwei_num%10;  // 个位: 3

	$sum = $baiwei ** 3 + $shiwei ** 3 + $gewei ** 3; // 1^3 + 0^3 + 0^3  != 1000
	if($sum == $number) {
		echo "{$number} 是水仙花数".PHP_EOL;
	}
}
