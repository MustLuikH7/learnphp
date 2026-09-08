<?php
$num = 10;
if($num > 10){
    var_dump('Bigger');
};

if($num > 10){
    var_dump('Bigger');
}else{
    var_dump('Smaller');
};

if($num > 10){
    var_dump('Bigger');
}elseif($num < 10){
    var_dump('snammer');
}else{
    var_dump('Equal');
};
$day = (int)date('w');
if ($day === 0){
    var_dump('sunday');
}elseif($day === 1){
    var_dump('monday');
}elseif($day === 2){
    var_dump('tuesday');
}elseif($day === 3){
    var_dump('wednesday');
}elseif($day === 4){
    var_dump('thursday');
}elseif($day === 5){
    var_dump('friday');
}elseif($day === 6){
    var_dump('saturday');
};

switch($day){
    case 0:
        var_dump('sunday');
        break;
    case 1:
        var_dump('monday');
        break;
    default:
        var_dump('noday')

}
?>
