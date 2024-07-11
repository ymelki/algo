<?php

// afficher une liste de produits
$produits = [
    [   "id"  => 0,
        "nom" => "trotinette",
        "description" => "bla bla blabla bla blabla bla bla",
        "prix" => 400,
    ],
    [  "id"  => 1,
    "nom" => "tele",
    "description" => "bla bla blabla bla blabla bla bla",
    "prix" => 400,
    ],
    [  "id"  => 2,
    "nom" => "ordi",
    "description" => "bla bla blabla bla blabla bla bla",
    "prix" => 400,
    ],
    [  "id"  => 3,
    "nom" => "tel",
    "description" => "bla bla blabla bla blabla bla bla",
    "prix" => 400,
    ],
];

// afficher un tableau debug
var_dump($produits);
echo "<hr>";
var_dump($produits[0]);

// afficher tout mes produits
foreach ($produits as $produit){
    ?>
    <hr>
    ID : <?=$produit["id"]?>
    NOM : <?=$produit["nom"]?>
    DESC : <?=$produit["description"]?>
    PRIX : <?=$produit["prix"]?> 
    <?php

}