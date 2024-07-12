<?php
var_dump($_POST);

// 1 recuperation des données
$name=$_POST['name_book'];
$category=$_POST['category_book'];
$price=$_POST['price_book'];

// 2. insérer les données dans la B.D.

// 2.1 connexion
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');


// 2. requete select * from books
$query = "INSERT INTO book (name, category_id, price) 
          VALUES ('$name', '$category', '$price');";

// pdo qui fait une requete
$pdo->exec($query);

// redirection
header("location:exo11.php");