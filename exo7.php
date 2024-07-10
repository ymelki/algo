<?php
// On a la somme sous forme de fonction
// les notes sont mis en parametre
// on prefere un return à echo dans la fonction


function somme($note1,$note2,$note3){

    $resultat=$note1+$note2+$note3;

    return $resultat;
}

echo somme(10,12,20);