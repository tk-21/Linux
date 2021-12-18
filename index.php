<?php

$num = 1;
echo $num;

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


for($i = 0; $i < 10; $i++) {
	echo $numbers[$i] . PHP_EOL; }

$members = [
	1 => "ichiro",
	2 => "jiro",
	3 => "saburo"
];

foreach($members as $key => $value) {
	echo sprintf("%d is %s", $key, $value) . PHP_EOL;
}
