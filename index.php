<?php
function hello(): void {
    var_dump('hello');
}
var_dump( hello());

function helloName($name = 'nameless', $age = 10){
    var_dump($name, $age);
}
helloName('kaspar, 50');


function squaree(int $a): int{
    if($a<0){
        return 0;
    }
    return $a * $a;

}
$asnwer = squaree(3);
var_dump($asnwer);

function recursion($i){
    if($i<10){
        var_dump($i);
        recursion(++$i);
    }
}
recursion(3)
?>
