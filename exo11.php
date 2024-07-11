<?php

// B.D. déjà créé avec la table book déjà créé.

// 1. Se connecter à la b.d
$toto="info";
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');
// 2. requete select * from books


$query = "SELECT * FROM book";

// pdo qui fait une requete
$statement = $pdo->query($query);


// 3. statement qui formate les données sous forme de tableau
$books = $statement->fetchAll(PDO::FETCH_ASSOC); 
// PDO::FETCH_ASSOC correspond au formatage de donnée approprié

echo "<pre>";
print_r($books);
echo "</pre>";

foreach ($books as $book){
    ?>
    <hr>
    ID : <?=$book["id"]?>
    NOM : <a href="exo13.php?id=<?=$book["id"]?>"> <?=$book["name"]?> </a>
    CAT : <?=$book["category_id"]?>
    PRIX : <?=$book["price"]?> 
    <?php
}
// afficher une liste de produits
/*$produits = [
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
*/


