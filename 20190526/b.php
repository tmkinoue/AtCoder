<?php

fscanf(STDIN, "%d", $n);
$list = [];
for ($i = 1; $i <= $n; $i++) {
    fscanf(STDIN, "%s %d", $s, $p);
    $list[] = [
        'city' => $s,
        'point' => $p,
        'num' => $i,
    ];
}
foreach ($list as $index => $val) {
    $sortKey1[$index] = $val['city'];
    $sortKey2[$index] = $val['point'];
}
array_multisort($sortKey1, SORT_ASC, $sortKey2, SORT_DESC, $list);
var_dump($list);
foreach($list as $val){
    echo $val['num']."\n";
}