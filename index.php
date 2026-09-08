<?php
$test = array(1, 2, 3);
$test = [1, 2, 3];
//var_dump($test[3][1]);
$test = [1, '123a', [1, 2]];
$test = [
    1,
    'name' => 'kaspar',
    'age' => 33,
    100 => 'lol',
    'troll'
];
array_push($test, 'added', 123);
$test[] = 'new';
$test['name'] = 'martin';
unset($test[3]);
var_dump($test);
?>
