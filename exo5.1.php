<?php
function moyenne($n1,$n2,$n3){
    $moyenne=$n1+$n2+$n3;
    return $moyenne;
}
function moyenne2($notes){
    $moyenne=array_sum($notes)/count($notes);
    echo $moyenne;
}

echo  moyenne(10,11,13);
 //moyenne([10,11,13]);