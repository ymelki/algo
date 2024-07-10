<?php

// desc
function afficherHello(string   $information,  int $age){
    echo "hello ". $information . " vous avez ". $age . " ans. ";
}

// appel
afficherHello( "Yoel", 12  );
afficherHello( "Melki" , 36 );
afficherHello( "Toto" , 12 );

$numero=round(12.2);
echo $numero;
// fonction c'est un sous programme
// qui porte un nom
//           une description
//           on peut l'appeller pour l'executer
//           on peut lui mettre des parametre pour la rendre personnalisable
//           une fonction peut faire quelque chose ou retourner une quelque chose
//           les fonctions de la doc retournent quelque chose