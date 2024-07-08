<?php
$francais=14;
$math=2;
$histoire=18;

$moyenne=($francais+$math+$histoire)/3;

?>
Moyenne : <?=$moyenne?>
<?php

// la meme chose mais pour un nombre de note indéfinie 
// avant 3 notes maintenant X notes.
// 12 , 10 
// 10 
// 5 , 7 , 10 , 15
$notes=[5 ,
        7, 
        10, 
        15];
        
$moyenne=array_sum($notes)/count($notes);


