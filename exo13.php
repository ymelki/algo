<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

$id=$_GET['id'];

// 2. requete select * from books
// $query = "SELECT * FROM book where id = $id";
// $statement = $pdo->query($query);
$query = "SELECT * FROM book where id = :id_protege";

// pdo qui fait une requete
$statement = $pdo->prepare($query);
$statement->bindValue(':id_protege', $id, PDO::PARAM_INT);
$statement->execute();

// 3. statement qui formate les données sous forme de tableau
$book = $statement->fetch(PDO::FETCH_ASSOC); 

echo "<pre>";
print_r($book);
echo "</pre>";

?>
ID : <?=$book["id"];?>