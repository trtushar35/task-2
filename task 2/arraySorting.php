<?php
$nums = [1,3,5,6];
$target = 7;

$sortedNums = $nums;
sort($sortedNums);

$preferableIndex = count($sortedNums);

foreach ($sortedNums as $i) {
    if ($i >= $target) {
        $preferableIndex = array_search($i, $sortedNums);
        break;
    }
}

echo $preferableIndex . PHP_EOL;