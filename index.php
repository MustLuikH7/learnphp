<?php
for($i = 0; $i<10; $i++){
    var_dump($i);
}
for($i = 2; $i < 1000000; $i*=2){
    var_dump($i);
}

$time = time();
$i = 0;
while(time() < $time+1){
    var_dump($i++);
}

while(false){
    var_dump('wail');
}
do{
    var_dump('do');
}while(false);

// for(;;){

// }

$fruits = ['apple', 'banana', 'cherry'];
foreach($fruits as $key=>$fruit){
    var_dump($key, $fruit);
}
?>
