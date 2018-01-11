<?php

$words = file_get_contents('alice.txt');
$pattern = ["'", '`',',', '"', '-', ':', ';', '.', '!', '?', ')', '(', '*'];
$string = str_replace($pattern, ' ', $alice);
$rows = explode("\n", $words);

var_dump($rows);

foreach ($rows as $rows) {

	$words = explode(" ", $rows);

	foreach ($words as $word) {		
		//  if (isset($words[$val])) {
		// 	$words[$val]++;
		// }
		// else{
		// 	$words[$val] = 1;
		// }
		echo "$word\n";
	}
}
