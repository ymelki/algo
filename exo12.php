<?php

// générer l'affiche du livre n3

// B.D. déjà créé avec la table book déjà créé.

// 1. Se connecter à la b.d
$toto="info";
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

// 2. requete select * from books
$query = "SELECT * FROM book where id = 3";

// pdo qui fait une requete
$statement = $pdo->query($query);


// 3. statement qui formate les données sous forme de tableau
$book = $statement->fetch(PDO::FETCH_ASSOC); 

echo "<pre>";
print_r($book);
echo "</pre>";

?>
ID : <?=$book["id"];?>