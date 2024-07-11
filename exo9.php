<?php

// Creer un tableau de produit correspondant à la trotinnete
// plus tard (demain) issue de la B.D.

// 2 méthode pour déclarer le tableua

// méthode 1
$produit["id"]=2;
$produit["nom"]="trotinette";
$produit["description"]="bla bla blabla bla blabla bla bla";
$produit["prix"]=400;

// méthode 2
$produit=[  "id"  => 2,
            "nom" => "trotinette",
            "description" => "bla bla blabla bla blabla bla bla",
            "prix" => 400,
        ];
$produit[ " commentaire" ]="sdfds";

// pour debugger
var_dump($produit);

// afficher le tableau de libre
foreach ($produit as $key=>$value){
    echo "<h1>".$key. " ".$value."</h1>";
}