<?php

// obj : retourner un produit en fonction de son id
function getBook($id){
    $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

    $query = "SELECT * FROM book where id = :idprotege";

    // pdo qui fait une requete
    $statement = $pdo->prepare($query);
    $statement->bindValue(':idprotege', $id, PDO::PARAM_INT);
    $statement->execute();
    
    // 3. statement qui formate les données sous forme de tableau
    $book = $statement->fetch(PDO::FETCH_ASSOC); 
    

    return $book;
}