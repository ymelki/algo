<?php


// me dire si l'age informieux vieux ou pas.
function older($age){
    echo "<hr>";
    if ($age > 30){
        echo "je suis vieux ! laisse tomber";
    }
    else {
        echo "ca va détente ! ";
    }
}

older(45);
older(23);