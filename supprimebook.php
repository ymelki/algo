<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

$id=$_GET['id'];

// 2. requete select * from books
// $query = "DELETE  FROM book where id = $id";
$query = "DELETE FROM book where id = :id_protege";


// pdo qui fait une requete
// $pdo->exec($query);
$statement=$pdo->prepare($query);
$statement->bindValue(":id_protege", $id, PDO::PARAM_INT);
$statement->execute();

// revenir à la page exo11.php qui affiche l'ensemble des livres
header("location:exo11.php");


?>
