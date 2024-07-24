<?php

// 1 recuperer les données de mon formulaire

var_dump($_POST);

// recuperer les données dans des variables
$recherche=$_POST['recherche'];

// 2 se connecter et requeter en B.D.

// 1 connexion à la BD.
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');


// 2 Recuperation des données de users pour le user saisie (READ) 


// 2. requete select * from books
// $query = "SELECT * FROM book where id = $id";
// $statement = $pdo->query($query);
$query = "SELECT * FROM book where name like ( :rechercheprotege ) ";

// pdo qui fait une requete
$statement = $pdo->prepare($query);
$statement->bindValue(':rechercheprotege', '%'.$recherche. '%', PDO::PARAM_STR);
$statement->execute();
$books = $statement->fetchAll(PDO::FETCH_ASSOC); 
echo "<pre>";
print_r($books);
echo "</pre>";
//  cas 1 pas de donnée 
if ($books === false) {
    // redirige vers la page de connexion
    echo "pas de résultat";
}

//  cas 2 des données 
else 
{
    foreach ($books as $book) {
?>
   <br>
        Voici les résultats :
        ID :  <?=$book['id']?> <br>
        NOM : <?=$book['name']?> <br>
        Catégorie : <?=$book['category_id']?> <br>
        Prix : <?=$book['price']?><hr>
<?php
    }
}