<?php
// fonction vardump pour afficher tableau pour debugger
// afficher une cellule d'un table a partir de sa clé
// parcourir un tableau a partir d'une boucle for
// l'algo d'accumulation pour la somme

$notes=[10,
        20,
        12];

// afficher un table en mode debbugage
var_dump($notes);

// ca génére une erreur echo $notes;


// affiche la note présente à l'indice 2

echo $notes[2];

// stocker des couleurs
$couleur[0]="orange";
$couleur[1]="vert";
$couleur[2]="rouge";

echo $couleur[1];
echo "<hr>";
// afficher les notes
for ($i=0; $i<count($notes);$i++){
    echo $notes[$i]. " ";
}

// somme des notes 
$result=$notes[0]+$notes[1]+$notes[2];
// result=10 + 20 + 12

// accumulateur
$somme=0;
for ($i=0; $i<count($notes);$i++){
    $somme=$somme+$notes[$i];
    echo "info : ".$somme. " ";
}
echo "<hr>";
echo $somme;

function array_sum_clone($notes){
    $somme=0;
    for ($i=0; $i<count($notes);$i++){
        $somme=$somme+$notes[$i];
        echo "info : ".$somme. " ";
    }
    return $somme;
}

echo "<hr>". array_sum_clone([10,10]);
