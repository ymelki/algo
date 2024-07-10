<?php


function afficher(string $prenom,
                  string $nom,
                  int $age){
    $futurAge=$age+10;
   

    echo "Prénom : ".$prenom.
    "Nom :   ".$nom.
    "Age : ".$age.
    "Dans 10 ans j'aurais  age.". $futurAge ;
}
afficher("Yoel","Melki",36);